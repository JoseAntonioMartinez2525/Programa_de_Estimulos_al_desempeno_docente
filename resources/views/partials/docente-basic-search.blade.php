<script>
(function () {
    document.addEventListener('DOMContentLoaded', () => {
        const searchInput = document.getElementById('docenteSearch');
        const suggestionsBox = document.getElementById('docenteSuggestions');
        const hiddenEmail = document.getElementById('selectedDocenteEmail');

        if (!searchInput || !suggestionsBox) {
            console.warn('docenteSearch o docenteSuggestions no encontrados en el DOM.');
            return;
        }

        let debounceTimer;

        // 🔹 Autocomplete (búsqueda)
        searchInput.addEventListener('input', function () {
            const query = this.value.trim();
            clearTimeout(debounceTimer);

            if (query.length < 2) {
                suggestionsBox.style.display = 'none';
                return;
            }

            debounceTimer = setTimeout(async () => {
                try {
                    const resp = await fetch(`/formato-evaluacion/get-docentes?search=${encodeURIComponent(query)}`);
                    const docentes = await resp.json();

                    suggestionsBox.innerHTML = '';

                    if (Array.isArray(docentes) && docentes.length > 0) {
                        docentes.forEach(d => {
                            const li = document.createElement('li');
                            li.className = 'list-group-item list-group-item-action';
                            li.innerHTML = `<strong>${d.nombre}</strong><br><small>${d.email}</small>`;
                            
                            li.addEventListener('click', () => {
                                searchInput.value = `${d.nombre} (${d.email})`;
                                if (hiddenEmail) hiddenEmail.value = d.email;
                                suggestionsBox.style.display = 'none';
                            });

                            suggestionsBox.appendChild(li);
                        });

                        suggestionsBox.style.display = 'block';
                    } else {
                        suggestionsBox.style.display = 'none';
                    }
                } catch (error) {
                    console.error('Error buscando docentes:', error);
                    suggestionsBox.style.display = 'none';
                }
            }, 300);
        });

        // 🔹 Ocultar sugerencias si se hace clic fuera
        document.addEventListener('click', (e) => {
            if (!e.target.closest('#docenteSearch') && !e.target.closest('#docenteSuggestions')) {
                suggestionsBox.style.display = 'none';
            }
        });
    });
})();
</script>
