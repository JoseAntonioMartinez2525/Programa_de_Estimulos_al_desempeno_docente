<div>
  <label for="docente-search">Buscar Docente:</label>
  <input
    id="docente-search"
    type="text"
    class="form-control"
    placeholder="Nombre o correo del docente"
    autocomplete="off"
  />
  <ul id="docente-results" class="list-group mt-2" style="display: none; max-height: 200px; overflow-y: auto;"></ul>
</div>

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('docente-search');
    const resultsList = document.getElementById('docente-results');
    let timeout = null;

    searchInput.addEventListener('input', function () {
      const query = this.value.trim();

      clearTimeout(timeout);
      if (query.length < 2) {
        resultsList.style.display = 'none';
        resultsList.innerHTML = '';
        return;
      }

      // Debounce de 300ms
      timeout = setTimeout(() => {
        axios.get('/api/docentes/search', { params: { query } })
          .then(response => {
            const docentes = response.data;
            resultsList.innerHTML = '';

            if (docentes.length > 0) {
              docentes.forEach(docente => {
                const li = document.createElement('li');
                li.className = 'list-group-item list-group-item-action';
                li.textContent = docente.nombre;
                li.style.cursor = 'pointer';
                li.addEventListener('click', function () {
                  searchInput.value = docente.nombre;
                  resultsList.style.display = 'none';
                  resultsList.innerHTML = '';

                  // Aquí llamas tu función global
                  if (typeof handleDocenteSelected === 'function') {
                    handleDocenteSelected(docente);
                  }
                });
                resultsList.appendChild(li);
              });
              resultsList.style.display = 'block';
            } else {
              resultsList.style.display = 'none';
            }
          })
          .catch(error => {
            console.error('Error buscando docentes:', error);
          });
      }, 300);
    });

    document.addEventListener('click', function (e) {
      if (!resultsList.contains(e.target) && e.target !== searchInput) {
        resultsList.style.display = 'none';
      }
    });
  });
</script>
@endpush
