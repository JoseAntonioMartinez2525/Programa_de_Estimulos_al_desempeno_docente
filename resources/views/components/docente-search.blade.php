<div class="search-wrapper">
    <div class="search-box" id="docente-search-box">
        <i class="fas fa-search search-icon"></i>
        <input type="text" id="docenteSearchInput" class="form-control search-input" placeholder="Escriba el nombre ó correo del docente a buscar">
        <ul id="docenteSearchResults" class="list-group position-absolute w-100 mt-1" style="z-index: 999;"></ul>
    </div>
</div>
@push('script')
<script>
            // Cerrar la lista si se hace clic fuera
    document.addEventListener('click', function(event) {
        if (!document.getElementById('docente-search-box').contains(event.target)) {
            resultsList.innerHTML = '';
        }
    });
</script>
    
@endpush

