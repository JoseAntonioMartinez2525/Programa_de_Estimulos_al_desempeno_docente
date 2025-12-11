@props(['formId', 'hasData' => false, 'userType' => null])

<button id="edit-btn-{{ $formId }}"
        class="edit-button printButtonClass"
        style="{{ $hasData ? 'display:block;' : 'display:none;' }}">
    Editar
</button>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const formId = @json($formId);
    const initialHasData = @json($hasData);
    const userType = @json($userType);
    // Elementos
    const editBtn = document.getElementById(`edit-btn-${formId}`);
    let submitBtn = document.querySelector(`#${formId} button[type="submit"], #${formId} input[type="submit"]`);
    if (!submitBtn) submitBtn = document.getElementById(`${formId}_1Button`);

    console.log('[edit-button] init', { formId, initialHasData, userType, foundEditBtn: !!editBtn, foundSubmitBtn: !!submitBtn, windowExisting: !!window.existingDictData });

    if (!editBtn) {
        console.warn('[edit-button] No se encontró editBtn en el DOM:', `edit-btn-${formId}`);
        return;
    }

    // helpers
    function showEdit() {
        editBtn.style.display = '';
        if (submitBtn) submitBtn.style.display = 'none';
    }
    function showSubmit() {
        editBtn.style.display = 'none';
        if (submitBtn) {
            submitBtn.textContent = 'Enviar';
            submitBtn.style.display = '';
        }
    }

    // --------------------------------------------------
    // Función que trae datos existentes del servidor
    // --------------------------------------------------
    async function getExistingData() {
        const form = document.getElementById(formId);
        if (!form) return null;
        const dictaminadorId = form.querySelector('input[name="dictaminador_id"]')?.value;
        const userId = form.querySelector('input[name="user_id"]')?.value;

        if (!dictaminadorId || !userId) {
            // si no hay userId, intentar fallback por email oculto
            const email = form.querySelector('input[name="email"]')?.value || '';
            if (!dictaminadorId || !email) return null;
            // intentar resolver user_id sin bloquear: (opcional, se puede implementar)
            // return null; // fallback: no resolver aquí para no duplicar lógica
            return null;
        }

        const numericPart = formId.replace(/[^\d]/g, '');
        let url = `/formato-evaluacion/get-form${numericPart}?dictaminador_id=${dictaminadorId}&user_id=${userId}`;
        if (form.dataset.customUrl === "true") {
            url = `/formato-evaluacion/get-form-data${numericPart}?dictaminador_id=${dictaminadorId}&user_id=${userId}`;
        }

        try {
            const r = await fetch(url);
            const j = await r.json();
            return j.success ? j.data : null;
        } catch (err) {
            console.error('[edit-button] fetch error', err);
            return null;
        }
    }

    // --------------------------------------------------
    // Check inicial: prioridad
    // 1) si blade dice hasData true -> mostrar Edit
    // 2) si userType === 'secretaria' -> mostrar Edit (role rule)
    // 3) si window.existingDictData (llenado por docente-autocomplete) -> mostrar Edit
    // 4) si none -> llamar getExistingData() -> si existe -> mostrar Edit
    // --------------------------------------------------
    (async function initialCheck() {
        if (initialHasData) {
            console.log('[edit-button] initialHasData true -> showEdit');
            showEdit();
            return;
        }

        if (userType === 'secretaria') {
            console.log('[edit-button] userType secretaria -> showEdit');
            showEdit();
            return;
        }

        // Si docente-autocomplete ya cargó dictaminador y lo puso en window.existingDictData
        if (window.existingDictData) {
            console.log('[edit-button] window.existingDictData detected -> showEdit');
            showEdit();
            console.log("DICTAM ID:", dictaminadorId);
            console.log("USER ID:", userId);
            console.log("URL Construida:", url);
            return;
        }

        // Finalmente, intentar fetch (solo si tenemos dictaminador_id y user_id en DOM)
        const data = await getExistingData();
        console.log('[edit-button] getExistingData result', data);
        if (data) {
            showEdit();
        } else {
            showSubmit();
        }
    })();

    // --------------------------------------------------
    // Click editar (igual que antes)
    // --------------------------------------------------
    editBtn.addEventListener('click', async () => {
        console.log('[edit-button] click editar');
        const data = await getExistingData();
        console.log('[edit-button] getExistingData result', data);
        if (!data) {
            // si no hay data, hacemos nada
            return;
        }
        // rellenar formulario si existen funciones globales que lo hagan (o reuse fill logic)
        // Aquí asumimos que docente-autocomplete ya puso los valores en DOM; si no, fillForm logic puede invocarse
        try {
            // Si existe una función genérica de llenado (no incluida por defecto), se puede llamar
            if (typeof window.__fillFormWithData === 'function') {
                window.__fillFormWithData(data, formId);
            } else {
                // fallback básico: rellenar inputs y spans
                const form = document.getElementById(formId);
                if (form) {
                    Object.keys(data).forEach(key => {
                        const el = form.querySelector(`[name="${key}"]`) || document.getElementById(key);
                        if (el) {
                            if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA' || el.tagName === 'SELECT') {
                                el.value = data[key] ?? '';
                            } else {
                                el.textContent = data[key] ?? '';
                            }
                        }
                    });
                }
            }
        } catch (e) {
            console.warn('[edit-button] fill fallback error', e);
        }

        editBtn.style.display = 'none';
        if (submitBtn) {
            submitBtn.textContent = 'Actualizar';
            submitBtn.style.display = '';
        }
    });

    // reaccionar a docenteSelected (cuando el usuario selecciona otro docente)
    document.addEventListener('docenteSelected', async (e) => {
        console.log('[edit-button] docenteSelected event received', e && e.detail);
        // docente-autocomplete hará el fetch dictaminador y pondrá window.existingDictData y escribirá campos en DOM
        // esperamos microtick para que docente-autocomplete escriba datos
        setTimeout(async () => {
            if (window.existingDictData) {
                console.log('[edit-button] docenteSelected -> window.existingDictData present -> showEdit');
                showEdit();
                return;
            }
            const data = await getExistingData();
            console.log('[edit-button] docenteSelected -> getExistingData result', data);
            if (data) showEdit();
            else showSubmit();
        }, 50);
    });

});
</script>
