<script>
(function () {
    const config = @json($config ?? []);

    async function submitForm(url, formId) {
        const form = document.getElementById(formId);
        if (!form) {
            console.error(`Form ${formId} not found`);
            return;
        }

        // ---------- EMAIL Y USER_ID ----------
        const hiddenEmailInput = form.querySelector('input[name="email"]');
        const hiddenUserIdInput = form.querySelector('input[name="user_id"]');
        const selectedDocenteEmailInput = document.getElementById(config.selectedEmailInputId || 'selectedDocenteEmail');
        const docenteSearch = document.getElementById(config.searchInputId || 'docenteSearch');

        let email =
            (hiddenEmailInput?.value?.trim()) ||
            (selectedDocenteEmailInput?.value?.trim()) ||
            ((docenteSearch?.value?.match(/\(([^)]+)\)$/) || [])[1]) ||
            '';

        if (!email) {
            alert('Seleccione un docente antes de enviar (email ausente).');
            return;
        }
        if (hiddenEmailInput) hiddenEmailInput.value = email;

        let userId = hiddenUserIdInput?.value?.trim();
        if (!userId) {
            try {
                const resp = await fetch(`/formato-evaluacion/get-user-id?email=${encodeURIComponent(email)}`);
                if (resp.ok) {
                    const json = await resp.json();
                    userId = json.user_id || '';
                    if (hiddenUserIdInput) hiddenUserIdInput.value = userId;
                }
            } catch (err) {
                console.warn('No se pudo obtener user_id desde el servidor:', err);
            }
        }

        if (!userId) {
            const ok = confirm('No se pudo resolver user_id. ¿Desea enviar de todos modos?');
            if (!ok) return;
        }


        // ---------- CREAR FORM DATA ----------
        const formData = new FormData();
        formData.append('dictaminador_id', form.querySelector('input[name="dictaminador_id"]')?.value || '');
        formData.append('user_id', userId);
        formData.append('email', email);
        formData.append('user_type', form.querySelector('input[name="user_type"]')?.value || '');

        // ---------- CAMPOS EXTRA DINÁMICOS ----------
        if (Array.isArray(config.extraFields)) {
            // primero sincroniza los campos <td>/<span> a hidden inputs
            ['score3_1','actv3Comision', 'score3_2', 'comision3_2', 'r1', 'r2', 'r3', 'cant1', 'cant2', 'cant3',
             'score3_3', 'comision3_3', 'rc1', 'rc2', 'rc3', 'rc4', 'stotal1', 'stotal2', 'stotal3', 'stotal4',
             'score3_4', 'comision3_4', 'cantInternacional', 'cantNacional', 'cantidadRegional', 'cantPreparacion',
             'score3_5', 'comision3_5', 'cantDA', 'cantCAAC', 'cantDA2', 'cantCAAC2'
            ].forEach(field => {
                const el = document.querySelector(`.${field}`);
                if(el){
                    let hidden = form.querySelector(`input[name="${field}"]`);
                    if(!hidden){
                        hidden = document.createElement('input');
                        hidden.type = 'hidden';
                        hidden.name = field;
                        form.appendChild(hidden);
                    }
                    hidden.value = el.textContent.trim() || '0';
                }
            });

            config.extraFields.forEach(field => {
                const elements = document.querySelectorAll(
                    `[id="${field}"], [name="${field}"], [id*="${field}"], [name*="${field}"]`
                );

                elements.forEach(el => {
                    const val = el.value ?? el.textContent ?? '';
                    const key = el.name || el.id || field;
                    formData.append(key, val.trim());
                });

                // ⚙️ Si no hay campo base, crear uno con el primer valor encontrado con sufijo
                const hasBase = Array.from(formData.keys()).includes(field);
                if (!hasBase) {
                    const firstWithSuffix = Array.from(formData.entries()).find(([k]) => k.startsWith(field + '_'));
                    if (firstWithSuffix) {
                        const [, val] = firstWithSuffix;
                        formData.append(field, val);
                    }
                }
            });
        }

        // ---------- DEBUG OPCIONAL ----------
        console.group(`📤 Campos que se enviarán al servidor (${formId}):`);
        for (const [k, v] of formData.entries()) console.log(k, ':', v);
        console.groupEnd();

        // ---------- CORRECCIÓN AUTOMÁTICA DE RUTA ----------
        let fixedUrl = url;
        if (url.includes('/formato-evaluacion/form')) {
            const match = formId.match(/^form(\d+(?:_\d+)*)$/); // captura cualquier cantidad de guiones bajos
            if (match) {
                // Quita los guiones bajos para seguir tu naming convention
                const numericPart = match[1].replace(/_/g, '');
                fixedUrl = `/formato-evaluacion/store-form${numericPart}`;
                console.info(`🔀 URL corregida automáticamente: ${url} → ${fixedUrl}`);
            }
        }


        // ---------- ENVIAR ----------
        try {
            const response = await fetch(fixedUrl, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: formData,
            });

            const json = await response.json();

            if (!response.ok || json.success === false) {
                console.error('Error del servidor:', json);
                showMessage(json.message || 'Error al enviar', 'red'); // Usar el mensaje del servidor o uno genérico
                return;
            }

            showMessage('Formulario enviado correctamente', 'green');
        } catch (error) {
            console.error('Error de red:', error);
            showMessage('Problema de red al enviar', 'red');
        }
    }

    // ---------- EXPOSICIÓN GLOBAL (opcional) ----------
    if (config.exposeAs) {
        window[config.exposeAs] = submitForm;
    }

    // ---------- CAPTURAR TODOS LOS FORMULARIOS "formX_Y_Z" ----------
    document.addEventListener('DOMContentLoaded', () => {
        const allForms = document.querySelectorAll('form[id^="form"]');
        allForms.forEach(f => {
            if (!f.dataset.submitListenerAdded) {
                f.addEventListener('submit', e => {
                    e.preventDefault();
                    submitForm(f.action, f.id);
                });
                f.dataset.submitListenerAdded = 'true';
            }
        });
    });
})();
</script>
