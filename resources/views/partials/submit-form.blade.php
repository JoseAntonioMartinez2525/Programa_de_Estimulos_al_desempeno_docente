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
            hiddenEmailInput?.value?.trim() ||
            selectedDocenteEmailInput?.value?.trim() ||
            (docenteSearch?.value?.match(/\(([^)]+)\)$/) || [])[1] ||
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
            config.extraFields.forEach(field => {
                // Buscar todos los elementos que coincidan con el campo (exacto o con sufijo numérico)
                const elements = document.querySelectorAll(
                    `[id="${field}"], [name="${field}"], [id*="${field}"], [name*="${field}"]
`
                );

                elements.forEach(el => {
                    const val = el.value !== undefined ? el.value : el.textContent || '';
                    const key = el.name || el.id || field;
                    formData.append(key, val.trim());
                });

                // ⚙️ Si no hay campo base (sin sufijo), crear uno con el primer valor encontrado con sufijo
                const hasBase = Array.from(formData.keys()).includes(field);
                if (!hasBase) {
                    const first = Array.from(formData.entries()).find(([k]) => k.startsWith(field + '_'));
                    if (first) {
                        const [, val] = first;
                        formData.append(field, val);
                    }
                }
            });
        }

        // ---------- DEBUG OPCIONAL ----------
        console.group("📤 Campos que se enviarán al servidor:");
        for (const [k, v] of formData.entries()) console.log(k, ':', v);
        console.groupEnd();

        // ---------- ENVIAR ----------
        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                },
                body: formData,
            });

            const json = await response.json();

            if (!response.ok || json.success === false) {
                console.error('Error del servidor:', json);
                showMessage(json.message || 'Error al enviar', 'red');
                return;
            }

            showMessage(json.message || 'Formulario enviado correctamente', 'green');
        } catch (error) {
            console.error('Error de red:', error);
            showMessage('Problema de red al enviar', 'red');
        }
    }

    // Registrar globalmente si se desea
    if (config.exposeAs) {
        window[config.exposeAs] = submitForm;
    }
})();
</script>
