@props([
    'buttonClass' => 'btn-primary', // Clase por defecto
    'buttonText' => 'Selecciona una fecha', // Texto por defecto
    'inputIdStart' => 'fecha_inicio', // ID único para el input, ahora usado para el rango
    'inputIdEnd' => 'fecha_fin',
    'collapseId' => 'collapseExample', // ID único para el collapse
    'endpointSave' => '/evaluation-dates/docentes-llenado',
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
            <div class="mb-2">
                <label for="{{ $inputIdStart }}" class="form-label">Fecha de inicio</label>
                <input type="text" id="{{ $inputIdStart }}" class="form-control flatpickr-input" placeholder="Selecciona fecha de inicio" data-min-date="{{ $minDate }}" data-max-date="{{ $maxDate }}">
            </div>
            <div class="mb-2">
                <label for="{{ $inputIdEnd }}" class="form-label">Fecha de fin</label>
                <input type="text" id="{{ $inputIdEnd }}" class="form-control flatpickr-input" placeholder="Selecciona fecha de fin" data-min-date="{{ $minDate }}" data-max-date="{{ $maxDate }}">
            </div>
            <button 
                class="btn btn-success mt-3" 
                onclick="saveDates('{{ $inputIdStart }}', '{{ $inputIdEnd }}', '{{ $endpointSave }}')"
            >
                Guardar
            </button>
        </div>
    </div>
</div>
{{-- Script inline para inicializar Flatpickr de forma independiente --}}
<script>
if (typeof saveDates !== 'function') {
    function saveDates(startId, endId, endpoint) {
        const startDate = document.getElementById(startId).value;
        const endDate = document.getElementById(endId).value;

        if (!startDate || !endDate) {
            alert('Por favor, selecciona una fecha de inicio y una de fin.');
            return;
        }

        fetch(endpoint, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                start_date: startDate,
                end_date: endDate
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Fechas guardadas correctamente');
                location.reload();
            } else {
                // Manejar errores de validación u otros
                const errors = data.errors ? Object.values(data.errors).join('\n') : (data.message || 'Ocurrió un error.');
                alert('Error al guardar:\n' + errors);
            }
        })
        .catch(error => console.error('Error:', error));
    }
}
</script>
