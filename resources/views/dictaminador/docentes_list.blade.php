@php
$locale = app()->getLocale() ?: 'en';
$newLocale = str_replace('_', '-', $locale);
$logo = 'https://www.uabcs.mx/transparencia/assets/images/logo_uabcs.png';
@endphp
<!DOCTYPE html>
<html lang="{{ $newLocale }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ $logo }}" type="image/png">
    <title>Docentes Asignados - Evaluación docente</title>

    <x-head-resources />
    <style>
        .docente-card {
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
        }

        .docente-card:hover {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }

        body.dark-mode .docente-card {
            background-color: #2c2c2c;
            border-color: #444;
            color: white;
        }

        .search-box {
            margin-bottom: 20px;
        }

        .btn-view-forms {
            background-color: #528fb3;
            color: white;
            border: none;
        }

        .btn-view-forms:hover {
            background-color: #4280a3;
            color: white;
        }

        body.dark-mode .btn-view-forms {
            background-color: #22426d;
        }

        body.dark-mode .btn-view-forms:hover {
            background-color: #1a3555;
        }
    </style>
</head>

<body class="font-sans antialiased">
    @auth
        @if(Auth::user()->user_type === 'dictaminador')
            <x-nav-menu :user="Auth::user()"/>
            <x-general-header />
            
            <button id="toggle-dark-mode" class="btn btn-secondary printButtonClass" style="margin-left: 100px;">
                <i class="fa-solid fa-moon"></i>&nbsp;Modo Obscuro
            </button>

            <div class="container mt-4" style="margin-left: 250px; max-width: 900px;">
                <h2 class="mb-4">
                    <i class="fas fa-users"></i> Docentes Asignados
                </h2>

                <!-- Search Box -->
                <div class="search-box">
                    <input type="text" 
                           id="searchDocente" 
                           class="form-control" 
                           placeholder="🔍 Buscar por nombre o email..."
                           onkeyup="filterDocentes()">
                </div>

                @if($docentes->count() > 0)
                    <div id="docentesList">
                        @foreach($docentes as $docente)
                            <div class="docente-card" data-name="{{ strtolower($docente->name) }}" data-email="{{ strtolower($docente->email) }}">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <h5 class="mb-1">
                                            <i class="fa-solid fa-user"></i> {{ $docente->name }}
                                        </h5>
                                        <p class="mb-0 text-xs">
                                            <i class="fa-solid fa-envelope"></i> {{ $docente->email }}
                                        </p>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <a href="{{ route('docente.forms.show', $docente->email) }}" 
                                           class="btn btn-view-forms">
                                            <i class="fa-solid fa-folder-open"></i> Ver Formularios
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-info">
                        <i class="fa-solid fa-info-circle"></i> 
                        No tiene docentes asignados actualmente.
                    </div>
                @endif
            </div>
        @else
            <p>No tiene permisos para ver esta página.</p>
        @endif
    @else
        <p>Por favor, inicia sesión.</p>
    @endauth

    <script>
        function filterDocentes() {
            const searchValue = document.getElementById('searchDocente').value.toLowerCase();
            const docenteCards = document.querySelectorAll('.docente-card');

            docenteCards.forEach(card => {
                const name = card.getAttribute('data-name');
                const email = card.getAttribute('data-email');

                if (name.includes(searchValue) || email.includes(searchValue)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const toggleDarkModeButton = document.getElementById('toggle-dark-mode');
            if (toggleDarkModeButton) {
                const widthDarkButton = window.outerWidth - 230;
                toggleDarkModeButton.style.marginLeft = `${widthDarkButton}px`;
            }

            toggleDarkMode();
        });
    </script>
</body>
</html>