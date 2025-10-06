<div class="mb-3 position-relative">
    <label for="docenteSearch" class="form-label fw-bold">Buscar docente</label>
    <input type="text" id="docenteSearch" class="form-control" placeholder="Escribe nombre o correo del docente...">
    <ul id="docenteSuggestions" class="list-group position-absolute w-100 mt-1 shadow-sm" style="z-index: 1000; display: none;"></ul>
</div>

<!-- Campo oculto para almacenar el ID o email seleccionado -->
<input type="hidden" id="selectedDocenteEmail" name="email">

