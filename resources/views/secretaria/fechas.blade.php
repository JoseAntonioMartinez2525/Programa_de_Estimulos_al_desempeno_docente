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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Incluir jQuery (si vas a usarlo para otros componentes) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Incluir Flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Incluir el archivo de localización para español -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/es.js"></script>

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
        endpointSave="/evaluation-dates/docentes-llenado"
        minDate="today"
        maxDate="2027-01-31"
    />

    <x-dates_users 
        buttonClass="btn-secondary" 
        buttonText="Fecha de evaluación para docentes"
        inputIdStart="fechaDocentesEvaluacionInicio"
        inputIdEnd="fechaDocentesEvaluacionFin"
        collapseId="collapseDocentesEvaluacion"
        endpointSave="/evaluation-dates/docentes-evaluacion"
        minDate="2026-01-01"
        maxDate="2027-01-31"
    />

    <x-dates_users 
        buttonClass="btn-third" 
        buttonText="Fecha de capturación de actas"
        inputIdStart="fechaEvaluadoresInicio"
        inputIdEnd="fechaEvaluadoresFin"
        collapseId="collapseEvaluadores"
        endpointSave="/evaluation-dates/evaluadores-captura"
        minDate="2026-02-01"
        maxDate="2027-01-31"
    />

    </div>

</body>
</html>
