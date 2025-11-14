@php
$locale = app()->getLocale() ?: 'en';
$newLocale = str_replace('_', '-', $locale);
$logo = 'https://www.uabcs.mx/transparencia/assets/images/logo_uabcs.png';
@endphp
<!DOCTYPE html>
<html lang="{{ $newLocale }}">

<head>
    <link rel="icon" href="{{ $logo }}" type="image/png">
    <title>Evaluación docente</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <x-head-resources />

    <!-- Incluir Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.css" integrity="sha512-MQXduO8IQnJVq1qmySpN87QQkiR1bZHtorbJBD0tzy7/0U9+YIC93QWHeGTEoojMVHWWNkoCp8V6OzVSYrX0oQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Incluir Flatpickr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/flatpickr.min.js" integrity="sha512-K/oyQtMXpxI4+K0W7H25UopjM8pzq0yrVdFdG21Fh5dBe91I40pDd9A4lzNlHPHBIP2cwZuoxaUSX0GJSObvGA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Incluir el archivo de localización para español -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.13/l10n/es.min.js" integrity="sha512-qNFoLkoKxYYiUEW14iAJbDcNsfoLTNznoq7UTa5xUp23NmGnlgC/pPWzN5kMcQC4bm+eFx2ibqelc3ARWf+SJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .btn-primary, .btn-secondary, .btn-third {
        border: none!important;
        color: white!important;
    }
    .btn-primary {
        background-color: #3780e0!important;
    }

    .btn-secondary {
        background-color: #48d3b0!important;
    }

    .btn-third {
        background-color: #46c5d6!important;
    }
</style>
</head>

<body>
<div class="bg-gray-50 text-black/50">
        <x-general-header />
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            @if (Route::has('login'))
                @if (Auth::check())
                    <x-nav-menu :user="Auth::user()" />
                @endif
            @endif    
    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        <div class="flex lg:justify-center lg:col-start-2"></div>
        <nav class="-mx-3 flex flex-1 justify-end"></nav>
@php
$user = Auth::user();
$userType = $user->user_type;
$user_identity = $user->id; 
@endphp


    </header><br>
    <div class="container mt-4 printButtonClass">

    <x-dates_users 
        buttonClass="btn-primary" 
        buttonText="Fecha de llenado de las evaluaciones para docentes"
        inputIdStart="fechaDocentesLlenadoInicio"
        inputIdEnd="fechaDocentesLlenadoFin"
        collapseId="collapseDocentesLlenado"
        :endpointSave="url('/evaluation-dates/docentes-llenado')"
        minDate=""
        maxDate="2027-01-31"
    />

    <x-dates_users 
        buttonClass="btn-secondary" 
        buttonText="Fecha de evaluación para docentes"
        inputIdStart="fechaDocentesEvaluacionInicio"
        inputIdEnd="fechaDocentesEvaluacionFin"
        collapseId="collapseDocentesEvaluacion"
        :endpointSave="url('/evaluation-dates/docentes-evaluacion')"
        minDate="2026-01-01"
        maxDate="2027-01-31"
    />

    <x-dates_users 
        buttonClass="btn-third" 
        buttonText="Fecha de capturación de actas"
        inputIdStart="fechaEvaluadoresInicio"
        inputIdEnd="fechaEvaluadoresFin"
        collapseId="collapseEvaluadores"
        :endpointSave="url('/evaluation-dates/evaluadores-captura')"
        minDate="2026-02-01"
        maxDate="2027-01-31"
    />

    </div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // --- PASO 1: Inicializar todos los calendarios flatpickr ---
    const allPickers = document.querySelectorAll('.flatpickr-input');
    allPickers.forEach(input => {
        flatpickr(input, {
            dateFormat: "Y-m-d",
            locale: "es",
            //minDate: input.dataset.minDate || "today",
            minDate: input.dataset.minDate || null,
            maxDate: input.dataset.maxDate || null,
        });
    });

    // --- PASO 2: Obtener las instancias de flatpickr para el encadenamiento ---
    const selectors = [
        { start: 'fechaDocentesLlenadoInicio', end: 'fechaDocentesLlenadoFin' },
        { start: 'fechaDocentesEvaluacionInicio', end: 'fechaDocentesEvaluacionFin' },
        { start: 'fechaEvaluadoresInicio', end: 'fechaEvaluadoresFin' }
    ];

    const pickers = selectors.map(sel => {
        const startEl = document.querySelector(`#${sel.start}`);
        const endEl = document.querySelector(`#${sel.end}`);
        // La instancia _flatpickr ahora existirá con seguridad
        return {
            start: startEl._flatpickr,
            end: endEl._flatpickr
        };
    });

    // --- PASO 3: Definir la lógica de encadenamiento ---
    for (let i = 0; i < pickers.length; i++) {
        const current = pickers[i];
        const next = pickers[i + 1];

        // Encadenar INICIO con FIN dentro del mismo componente
        current.start.config.onChange.push((selectedDates) => {
            if (selectedDates[0]) {
                // La fecha final no puede ser anterior a la de inicio
                current.end.set('minDate', selectedDates[0]);
            }
        });

        // Encadenar FIN del actual con INICIO del siguiente componente
        if (next) {
            current.end.config.onChange.push((selectedDates) => {
                if (selectedDates[0]) {
                    // La fecha de inicio del siguiente periodo debe ser el día después.
                    const endDate = selectedDates[0];
                    const nextMinDate = new Date(endDate.getTime()); // Clonar la fecha
                    nextMinDate.setDate(endDate.getDate() + 1);

                    // Formatear la fecha a 'YYYY-MM-DD' para evitar errores de interpretación.
                    const year = nextMinDate.getFullYear();
                    const month = String(nextMinDate.getMonth() + 1).padStart(2, '0'); // +1 porque los meses son 0-11
                    const day = String(nextMinDate.getDate()).padStart(2, '0');
                    const nextMinDateString = `${year}-${month}-${day}`;

                    // Establecer la fecha mínima y saltar a esa vista en el calendario.
                    next.start.set('minDate', nextMinDateString);
                    next.start.jumpToDate(nextMinDateString);
                }
            });
        }
    }

    // --- PASO 4: Cargar datos existentes y aplicar la lógica de encadenamiento inicial ---
    function loadAndApplyInitialDates() {
        fetch('{{ url("/evaluation-dates") }}')
            .then(response => response.json())
            .then(data => {
                // Mapeo de claves de datos a IDs de los inputs
                const dateMappings = {
                    docentes_llenado: pickers[0],
                    dictaminadores_capturando_datos: pickers[1],
                    files_capture_dates: pickers[2]
                };

                // Poblar inputs y disparar la lógica de encadenamiento
                Object.keys(dateMappings).forEach(key => {
                    if (data[key]) {
                        const pickerPair = dateMappings[key];
                        const startDate = data[key].start_date;
                        const endDate = data[key].end_date;

                        // Establecer los valores en los calendarios
                        pickerPair.start.setDate(startDate, false); // El 'false' evita disparar onChange
                        pickerPair.end.setDate(endDate, false);

                        // Disparar manualmente la lógica de encadenamiento
                        // 1. Encadenamiento interno (inicio -> fin)
                        pickerPair.end.set('minDate', startDate);

                        // 2. Encadenamiento externo (fin del actual -> inicio del siguiente)
                        const nextPickerPair = pickers[pickers.indexOf(pickerPair) + 1];
                        if (nextPickerPair) {
                            const nextMinDate = new Date(endDate);
                            nextMinDate.setDate(nextMinDate.getDate() + 1);
                            const nextMinDateString = nextMinDate.toISOString().split('T')[0];
                            
                            nextPickerPair.start.set('minDate', nextMinDateString);
                        }
                    }
                });
            })
            .catch(error => console.error('Error al cargar las fechas iniciales:', error));
    }

    loadAndApplyInitialDates();
});
</script>
</body>
</html>
