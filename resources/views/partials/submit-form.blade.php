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
        let obsform3_13 = ['obsInicioFinanciamientoExt','obsInicioInvInterno','obsReporteFinanciamExt','obsReporteInvInt'];
        
        // Sincronizar valores de campos de comisión (inputs que empiezan con 'com' o 'comision')
        form.querySelectorAll('input[name^="com"]').forEach(input => {
            formData.append(input.name, input.value.trim() || '0');
        });

        // Sincronizar valores de campos tipo <td> específicos (se mantiene por solicitud)
        ['cantInternacional2', 'cantNacional2', 'cantidadRegional2', 'cantPreparacion2'].forEach(field => {
            const element = form.querySelector(`[id="${field}"]`);
            if (element) {
                const value = element.textContent.trim(); // Obtener el texto dentro del <td>
                formData.append(field, value || '0'); // Si está vacío, asignar '0'
            }
        });
        
        // Sincronizar valores de campos con sufijo numérico (ej. score3_12_0, comision3_12_1)
        // Busca elementos cuyo ID coincida con el patrón score..._ o comision..._
        form.querySelectorAll('[id*="_"][id^="score"], [id*="_"][id^="comision"]').forEach(el => {
            const baseField = el.id.substring(0, el.id.lastIndexOf('_'));
            const value = el.textContent.trim() || '0';
            formData.append(el.id, value);
            
            let firstValue = null;
            firstValue = value;
            // Asegurar que el campo base (sin sufijo) se envíe para validación en backend
            if (firstValue !== null && !formData.has(baseField)) {
                formData.append(baseField, firstValue);
            }
        });
        // ---------- CAMPOS EXTRA DINÁMICOS ----------
        if (Array.isArray(config.extraFields)) {
            // ⚙️ **NUEVO**: Recolectar todos los inputs, selects y textareas visibles
            form.querySelectorAll('input[name]:not([type="hidden"]), select[name], textarea[name]').forEach(el => {
                const key = el.name || el.id;
                let value = el.value.trim();
                // Si es dictaminador y el campo es comIncisoX y está vacío, poner 0
                if (['comIncisoA','comIncisoB','comIncisoC','comIncisoD'].includes(key) && value === '') {
                    value = '0';
                }
                if (key && !formData.has(key)) {
                     formData.append(key, value);
                }
            });


            // Añadir los inputs ocultos que ya existen en el formulario
            form.querySelectorAll('input[type="hidden"]').forEach(hiddenInput => {
                if (hiddenInput.name && !formData.has(hiddenInput.name)) {
                    formData.append(hiddenInput.name, hiddenInput.value);
                }
            });

            // Lógica para sincronizar <td>/<span> a FormData
            config.extraFields.forEach(field => {
                // Buscar solo elementos que NO sean inputs, para no procesarlos dos veces.
                const elements = document.querySelectorAll(
                    `[id="${field}"]:not(input):not(textarea):not(select), [name="${field}"]:not(input):not(textarea):not(select)`
                );

                let found = false;
                elements.forEach(el => {
                    // Para spans/tds, solo nos interesa textContent.
                    const val = el.textContent ?? '';
                    const key = el.name || el.id || field;
                    
                    formData.append(key, val.trim() || '0');
                    found = true;
                });

                // Si el campo está en extraFields pero no se encontró en el DOM y no está en formData,
                // se añade con un valor por defecto para evitar errores de "undefined array key" en el backend.
                if (!found && !formData.has(field)) {
                    // Para campos de comisión, el valor por defecto es '0'. Para observaciones, es una cadena vacía.
                    const defaultValue = field.startsWith('comision') ? '0' : '';
                    formData.append(field, defaultValue);
                }

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
            
                // --- manejar errores de validación de Laravel ---
                if (json.errors) {
                    const firstError = Object.values(json.errors)[0][0];
                    showMessage(firstError, "red");
                    return;
                }

                // --- detectar formulario duplicado TRADICIONAL (por si usas existing:true) ---
                if (json.existing === true || json.message?.includes('existente')) {
                    showMessage(json.message || 'El formulario ya existe', 'red');
                    return;
                }

                // --- manejar errores generales ---
                if (!response.ok || json.success === false) {
                    showMessage(json.message || 'Error al enviar', 'red');
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