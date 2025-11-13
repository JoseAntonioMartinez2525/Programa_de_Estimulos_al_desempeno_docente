@props([
    'buttonClass' => 'btn-primary', // Clase por defecto
    'buttonText' => 'Selecciona una fecha', // Texto por defecto
    'inputId' => 'fecha', // ID único para el input
    'collapseId' => 'collapseExample', // ID único para el collapse
    'minDate' => 'today',
    'maxDate' => '2026-01-28'
])
<div class="d-flex align-items-start gap-3 mb-3" style="min-height: 100px;">
    <div class="d-flex">
        <button
            class="btn {{ $buttonClass }}"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#{{ $collapseId }}"
            aria-expanded="false"
            aria-controls="{{ $collapseId }}"
        >
            {{ $buttonText }}
        </button>
    </div>

    <div class="collapse collapse-horizontal" id="{{ $collapseId }}">
        <div class="card card-body shadow-sm" style="width: 350px;">
            <label for="{{ $inputId }}" class="form-label mb-2">Selecciona una fecha</label>
            <input type="text" id="{{ $inputId }}" class="form-control" placeholder="Selecciona una fecha">
        </div>
    </div>
</div>
{{-- Script inline para inicializar Flatpickr de forma independiente --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#{{ $inputId }}", {
        dateFormat: "Y-m-d",
        locale: "es",
        minDate: "{{ $minDate }}",
        maxDate: "{{ $maxDate }}"
    });
});
</script>
