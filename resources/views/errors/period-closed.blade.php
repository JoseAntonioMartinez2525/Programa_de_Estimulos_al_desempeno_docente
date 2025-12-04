@php
$logo = 'https://www.uabcs.mx/transparencia/assets/images/logo_uabcs.png';
@endphp
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Período de Evaluación Cerrado</title>
    <link rel="icon" href="{{ $logo }}" type="image/png">
    <x-head-resources />
</head>
<body class="font-sans antialiased">
    <x-general-header />
    <div class="bg-gray-50 text-black/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="text-center">
                <h1 class="text-2xl font-bold text-gray-800 mb-4">Período de Evaluación Cerrado</h1>
                <p class="text-gray-600">
                    {{ $message ?? 'El período para el llenado de la evaluación docente no se encuentra activo.' }}
                </p>
                <div class="mt-6">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary">
                        Cerrar Sesión
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
