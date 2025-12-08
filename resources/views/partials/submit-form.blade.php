<script>
(function () {

    // -----------------------------------------
    // CONFIG GLOBAL DESDE PHP
    // -----------------------------------------
    const config = @json($config ?? []);


    // =========================================
    // =========== FUNCIÓN PRINCIPAL ===========
    // =========================================
    async function submitForm(url, formId) {

        const form = document.getElementById(formId);
        if (!form) {
            console.error(`Form ${formId} not found`);
            return;
        }


        // =========================================
        // ========== PROCESAMIENTO DE EMAIL ==========
        // =========================================
        const hiddenEmailInput = form.querySelector('input[name="email"]');
        const formEmailData = form.dataset.teacherEmail;
        const hiddenUserIdInput = form.querySelector('input[name="user_id"]');
        const selectedDocenteEmailInput = document.getElementById(config.selectedEmailInputId || 'selectedDocenteEmail');
        const docenteSearch = document.getElementById(config.searchInputId || 'docenteSearch');

        let email =
            (formEmailData?.trim()) ||
            (hiddenEmailInput?.value?.trim()) ||
            (selectedDocenteEmailInput?.value?.trim()) ||
            ((docenteSearch?.value?.match(/\(([^)]+)\)$/) || [])[1]) ||
            '';

        if (!email) {
            alert('Seleccione un docente antes de enviar (email ausente).');
            return;
        }

        hiddenEmailInput.value = email;


        // =========================================
        // ======= RESOLVER USER ID (BACKEND) =======
        // =========================================
        let userId = hiddenUserIdInput?.value?.trim();

        if (!userId) {
            try {
                const resp = await fetch(`/formato-evaluacion/get-user-id?email=${encodeURIComponent(email)}`);
                if (resp.ok) {
                    const json = await resp.json();
                    userId = json.user_id || '';
                    hiddenUserIdInput.value = userId;
                }
            } catch (err) {
                console.warn('No se pudo obtener user_id desde el servidor:', err);
            }
        }

        if (!userId) {
            const ok = confirm('No se pudo resolver user_id. ¿Desea enviar de todos modos?');
            if (!ok) return;
        }


        // =========================================
        // ============= CREAR FORM DATA ============
        // =========================================
        const formData = new FormData();

        // Datos base siempre requeridos
        formData.append('dictaminador_id', form.querySelector('input[name="dictaminador_id"]')?.value || '');
        formData.append('user_id', userId);
        formData.append('email', email);
        formData.append('user_type', form.querySelector('input[name="user_type"]')?.value || '');


        // =========================================
        // ====== CAMPOS "com" (comisiones) ========
        // =========================================
        form.querySelectorAll('input[name^="com"]').forEach(input => {
            formData.append(input.name, input.value.trim() || '0');
        });


        // =========================================
        // ====== CAMPOS <td> DE CANTIDADES =========
        // =========================================
        ['cantInternacional2', 'cantNacional2', 'cantidadRegional2', 'cantPreparacion2']
            .forEach(field => {
                const el = form.querySelector('#' + field);
                const value = el ? el.textContent.trim() : '0';
                formData.append(field, value || '0');
            });


        // =========================================
        // ====== CAMPOS scoreX_Y / comisionX_Y =====
        // =========================================
        form.querySelectorAll('[id*="_"][id^="score"], [id*="_"][id^="comision"]').forEach(el => {
            const base = el.id.split('_').slice(0, -1).join('_');
            const value = el.textContent.trim() || '0';

            formData.append(el.id, value);

            if (!formData.has(base)) {
                formData.append(base, value);
            }
        });


        // =====================================================================
        // =================== PROCESAMIENTO DE EXTRA FIELDS ===================
        // =====================================================================
        if (Array.isArray(config.extraFields)) {

            // 1. PRIORIDAD ALTA – Inputs editables
            form.querySelectorAll('input[name]:not([type="hidden"]), select[name], textarea[name]')
                .forEach(el => {
                    const key = el.name || el.id;
                    let value = el.value.trim();

                    // Normalizar campos de comisión vacíos
                    if (
                        ['comIncisoA','comIncisoB','comIncisoC','comIncisoD','comisionDict3_7', 'actv3Comision_hidden']
                        .includes(key) && value === ''
                    ) {
                        value = '0';
                    }

                    formData.append(key, value);
                });

            // 2. Inputs hidden (solo si no existen aún)
            form.querySelectorAll('input[type="hidden"]').forEach(h => {
                if (h.name && !formData.has(h.name)) {
                    formData.append(h.name, h.value);
                }
            });

            // 3. Campos no editables (spans/tds) definidos en extraFields
            config.extraFields.forEach(field => {

                if (formData.has(field)) return; // ya viene desde un input

                const elements = form.querySelectorAll(
                    `[id="${field}"]:not(input):not(textarea):not(select),
                     [name="${field}"]:not(input):not(textarea):not(select)`
                );

                let found = false;

                elements.forEach(el => {
                    const val = el.textContent ?? '';
                    formData.append(field, val.trim() || '0');
                    found = true;
                });

                if (!found && !formData.has(field)) {
                    // valor por defecto
                    const def = field.startsWith('com') ? '0' : '';
                    formData.append(field, def);
                }

                // generar campo base si solo hay sufijos
                if (!formData.has(field)) {
                    const firstWithSuffix = Array.from(formData.entries())
                        .find(([k]) => k.startsWith(field + '_'));

                    if (firstWithSuffix) {
                        formData.append(field, firstWithSuffix[1]);
                    }
                }
            });
        }


        // ==========================================================
        // ================== DEBUG (CONSOLA) =======================
        // ==========================================================
        console.group(`📤 Enviando FormData (${formId})`);
        for (const [k, v] of formData.entries()) {
            console.log(k, ':', v);
        }
        console.groupEnd();


        // ==========================================================
        // === CORREGIR AUTOMÁTICAMENTE LA URL SEGÚN formX_Y_Z ======
        // ==========================================================
        let fixedUrl = url;

        if (url.includes('/formato-evaluacion/form')) {
            const match = formId.match(/^form(\d+(?:_\d+)*)$/);
            if (match) {
                const numericPart = match[1].replace(/_/g, '');
                fixedUrl = `/formato-evaluacion/store-form${numericPart}`;
                console.info(`🔀 URL corregida automáticamente: ${url} → ${fixedUrl}`);
            }
        }


        // ==========================================================
        // ===================== ENVÍO POST ==========================
        // ==========================================================
        try {
            const response = await fetch(fixedUrl, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: formData,
            });

            const json = await response.json();

            // Errores de validación Laravel
            if (json.errors) {
                const firstError = Object.values(json.errors)[0][0];
                showMessage(firstError, "red");
                return;
            }

            // Form duplicado tradicional
            if (json.existing === true || json.message?.includes('existente')) {
                showMessage(json.message || 'El formulario ya existe', 'red');
                return;
            }

            // Errores generales
            if (!response.ok || json.success === false) {
                showMessage(json.message || 'Error al enviar', 'red');
                return;
            }

            // OK
            showMessage('Formulario enviado correctamente', 'green');

        } catch (error) {
            console.error('Error de red:', error);
            showMessage('Problema de red al enviar', 'red');
        }
    }



    // ============================================
    // ========== EXPOSICIÓN GLOBAL OPTIONAL ======
    // ============================================
    if (config.exposeAs) {
        window[config.exposeAs] = submitForm;
    }


    // ===================================================
    // ========== AUTO CAPTURA DE TODOS LOS FORM ========== 
    // ===================================================
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
