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

        // CSRF token
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

        // Determinar si es una actualización (si el botón de submit es "Actualizar")
        const submitButton = form.querySelector('input[type="submit"], button[type="submit"]');
        const isUpdate = submitButton && (submitButton.value === 'Actualizar' || submitButton.textContent === 'Actualizar');
        if (isUpdate) {
            formData.append('_method', 'PUT'); // Simulación de método PUT para Laravel
        }

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
        console.log('Original url from form:', url);
        const match = formId.match(/^form(\d+(?:_\d+)*)$/);
        let fixedUrl = url;
        if (match) {
            const numericPart = match[1].replace(/_/g, '');
            if (isUpdate) {
                fixedUrl = `/formato-evaluacion/update-form${numericPart}`; // URL para actualizar
            } else {
                fixedUrl = `/formato-evaluacion/store-form${numericPart}`; // URL para crear
            }
            console.info(`🔀 URL corregida automáticamente: ${url} → ${fixedUrl}`);
        }


        // ==========================================================
        // ===================== ENVÍO POST ==========================
        // ==========================================================
        try {
            const response = await fetch(fixedUrl, {
                method: 'POST',
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
            if (!isUpdate && (json.existing === true || json.message?.includes('existente'))) {
                showMessage(json.message || 'El formulario ya existe', 'red');
                return;
            }

            // Errores generales
            if (!response.ok || json.success === false) {
                showMessage(json.message || 'Error al enviar', 'red');
                return;
            }

            // OK
            showMessage(isUpdate ? 'Formulario actualizado correctamente' : 'Formulario enviado correctamente', 'green');

            // Replace submit with edit button after sending
            const submitBtn = document.querySelector('input[type="submit"], button[type="submit"]');
            if (submitBtn) {
                console.log('Replacing after submit');
                replaceSubmitWithEdit(submitBtn);
            }

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
    // ========== FUNCIONES PARA EDIT BUTTON ============
    // ===================================================
    async function hasExistingData(formId) {
        const form = document.getElementById(formId);
        if (!form) return false;

        const dictaminadorId = form.querySelector('input[name="dictaminador_id"]')?.value;
        const userId = form.querySelector('input[name="user_id"]')?.value;

        console.log('Checking existing data for formId:', formId, 'dictaminadorId:', dictaminadorId, 'userId:', userId);

        if (!dictaminadorId || !userId) return false;

        try {
            const match = formId.match(/^form(\d+(?:_\d+)*)$/);
            if (!match) return false;
            const numericPart = match[1].replace(/_/g, '');
            const url = `/formato-evaluacion/get-form${numericPart}?dictaminador_id=${dictaminadorId}&user_id=${userId}`;

            console.log('Fetching existing data from:', url);

            const response = await fetch(url);
            const json = await response.json();
            console.log('Response:', json);
            return json.success && json.data;
        } catch (err) {
            console.warn('Error checking existing data:', err);
            return false;
        }
    }

    async function fetchExistingData(formId) {
        const form = document.getElementById(formId);
        if (!form) return null;

        const dictaminadorId = form.querySelector('input[name="dictaminador_id"]')?.value;
        const userId = form.querySelector('input[name="user_id"]')?.value;

        if (!dictaminadorId || !userId) return null;

        try {
            const match = formId.match(/^form(\d+(?:_\d+)*)$/);
            if (!match) return null;
            const numericPart = match[1].replace(/_/g, '');
            const url = `/formato-evaluacion/get-form${numericPart}?dictaminador_id=${dictaminadorId}&user_id=${userId}`;

            const response = await fetch(url);
            const json = await response.json();
            return json.success ? json.data : null;
        } catch (err) {
            console.warn('Error fetching existing data:', err);
            return null;
        }
    }

    function populateFormWithData(data, formElement) {
        if (!data || !formElement) return;

        console.log('Populating form with data:', data);

        // Populate commission fields
        formElement.querySelectorAll('input[name^="com"]').forEach(input => {
            if (data[input.name] !== undefined) {
                input.value = data[input.name] || '0';
            }
        });

        // Populate other inputs like obs3_8_1
        formElement.querySelectorAll('input[name], textarea[name], select[name]').forEach(el => {
            const name = el.name || el.id;
            if (data[name] !== undefined) {
                el.value = data[name] || '';
            }
        });

        // Populate spans/tds if any
        // Assuming ids like comision3_8, score3_8, etc.
        Object.keys(data).forEach(key => {
            const el = document.getElementById(key);
            if (el && (el.tagName === 'SPAN' || el.tagName === 'TD')) {
                el.textContent = data[key] || '0';
            }
        });
    }

    function replaceSubmitWithEdit(submitBtn) {
        console.log('Replacing submit with edit');
        const isButton = submitBtn.tagName.toLowerCase() === 'button';
        const editBtn = document.createElement(isButton ? 'button' : 'input');
        if (!isButton) {
            editBtn.type = 'button';
            editBtn.value = 'Editar';
        } else {
            editBtn.textContent = 'Editar';
        }
        editBtn.className = submitBtn.className;
        editBtn.style.cssText = submitBtn.style.cssText;
        // Change color to green for edit
        editBtn.style.backgroundColor = '#28a745';
        editBtn.style.borderColor = '#28a745';
        editBtn.addEventListener('click', async () => {
            console.log('Edit button clicked');
            // Fetch existing data and populate form
            const form = submitBtn.closest('form');
            if (form) {
                const data = await fetchExistingData(form.id);
                if (data) {
                    populateFormWithData(data, form);
                    console.log('Form populated with data');
                } else {
                    console.log('No data to populate');
                }
            }
            // When clicked, replace with submit button for updating
            // Cuando se hace clic, reemplazar con el botón de envío para actualizar
            const newSubmitBtn = document.createElement(isButton ? 'button' : 'input');
            if (!isButton) {
                newSubmitBtn.type = 'submit'; // Debe ser 'submit' para activar el formulario
                newSubmitBtn.value = 'Actualizar';
            } else {
                newSubmitBtn.textContent = 'Actualizar';
                newSubmitBtn.type = 'submit'; // Debe ser 'submit'
            }
            newSubmitBtn.className = editBtn.className;
            newSubmitBtn.style.cssText = editBtn.style.cssText;
            // Reset color
            newSubmitBtn.style.backgroundColor = '';
            newSubmitBtn.style.borderColor = '';
 
            // No es necesario un listener de 'click'. El 'submit' listener del formulario se encargará.
            // El botón de tipo 'submit' activará el evento 'submit' del formulario automáticamente.
 
            editBtn.parentNode.replaceChild(newSubmitBtn, editBtn);
        });
        submitBtn.parentNode.replaceChild(editBtn, submitBtn);
    }

    // ===================================================
    // ========== AUTO CAPTURA DE TODOS LOS FORM ==========
    // ===================================================
    document.addEventListener('DOMContentLoaded', () => {
        const allForms = document.querySelectorAll('form[id^="form"]');
        allForms.forEach(f => {
            if (!f.dataset.submitListenerAdded) {
                f.addEventListener('submit', e => {
                    console.log('Form submit event triggered for form', f.id);
                    e.preventDefault();
                    submitForm(f.action, f.id);
                });
                f.dataset.submitListenerAdded = 'true';
            }
        });

        // Check for existing data and replace submit with edit if needed
        setTimeout(async () => {
            console.log('Checking for existing data on load');
            const submitBtn = document.querySelector('input[type="submit"], button[type="submit"]');
            if (submitBtn) {
                const form = submitBtn.closest('form');
                console.log('Form id:', form?.id);
                if (form && await hasExistingData(form.id)) {
                    console.log('Existing data found, replacing with edit');
                    replaceSubmitWithEdit(submitBtn);
                } else {
                    console.log('No existing data or form not found');
                }
            } else {
                console.log('Submit button not found');
            }
        }, 500); // increased delay to ensure docente is loaded
    });

})();
</script>
