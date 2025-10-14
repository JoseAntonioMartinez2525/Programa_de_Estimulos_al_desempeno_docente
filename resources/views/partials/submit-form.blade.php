<script>
(function () {
    const config = @json($config ?? []);
    async function submitForm(url, formId) {
        const form = document.getElementById(formId);
        if (!form) {
            console.error(`Form ${formId} not found`);
            return;
        }

        const hiddenEmailInput = form.querySelector('input[name="email"]');
        const hiddenUserIdInput = form.querySelector('input[name="user_id"]');
        const selectedDocenteEmailInput = document.getElementById(config.selectedEmailInputId || 'selectedDocenteEmail');
        const docenteSearch = document.getElementById(config.searchInputId || 'docenteSearch');

        let email = (
            hiddenEmailInput?.value?.trim() ||
            selectedDocenteEmailInput?.value?.trim() ||
            (docenteSearch?.value?.match(/\(([^)]+)\)$/) || [])[1] ||
            ''
        );

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

        // Campos comunes
        const formData = {
            dictaminador_id: form.querySelector('input[name="dictaminador_id"]')?.value || '',
            user_id: hiddenUserIdInput?.value || userId,
            email: email,
            user_type: form.querySelector('input[name="user_type"]')?.value || '',
        };

        // Campos extra configurables (por ejemplo: score3_6, puntaje3_6, etc.)
        if (Array.isArray(config.extraFields)) {
            config.extraFields.forEach(field => {
                const el = document.getElementById(field) ||
                           document.querySelector(`input[name="${field}"]`) ||
                           document.querySelector(`span[name="${field}"]`);
                formData[field] = el?.value || el?.textContent || '';
            });
        }

        console.log('Submitting form data:', formData);

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(formData),
            });

            const json = await response.json();

            if (!response.ok || json.success === false) {
                console.error('Error del servidor:', json);
                showMessage(json.message || 'Error al enviar', 'red');
                return;
            }

            showMessage(json.message || 'Formulario enviado', 'green');
        } catch (error) {
            console.error('Error de red:', error);
            showMessage('Problema de red al enviar', 'red');
        }
    }

    // Registrar en global si se desea
    if (config.exposeAs) {
        window[config.exposeAs] = submitForm;
    }
})();
</script>
