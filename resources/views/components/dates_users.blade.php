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
            <label for="{{ $inputIdStart }}" class="form-label mb-2">Selecciona un rango de fechas</label>
            <input type="text" id="{{ $inputIdStart }}" class="form-control" placeholder="YYYY-MM-DD a YYYY-MM-DD">
            <button 
                class="btn btn-success mt-3" 
                onclick="saveDates('{{ $inputIdStart }}', '{{ $endpointSave }}')"
            >
                Guardar
            </button>
        </div>
    </div>
</div>
{{-- Script inline para inicializar Flatpickr de forma independiente --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#{{ $inputIdStart }}", {
        mode: "range",
        dateFormat: "Y-m-d",
        locale: "es",
        minDate: "{{ $minDate }}",
        maxDate: "{{ $maxDate }}",
        onChange: function(selectedDates, dateStr, instance) {
            // Esto es opcional, pero útil si necesitas los valores por separado
            if (selectedDates.length === 2) {
                // Puedes almacenar las fechas de inicio y fin si es necesario
            }
        }
    });
});

if (typeof saveDates !== 'function') {
    function saveDates(inputId, endpoint) {
        const dateRange = document.getElementById(inputId).value;
        
        if (!dateRange || !dateRange.includes(' to ')) {
            alert('Por favor selecciona un rango de fechas válido.');
            return;
        }

        const [startDate, endDate] = dateRange.split(' to ');

        fetch(endpoint, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
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
