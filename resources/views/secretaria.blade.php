@php
$locale = app()->getLocale() ?: 'en';
$newLocale = str_replace('_', '-', $locale);
$formType = request()->query('formType');
$formName = request()->query('formName');
$logo = 'https://www.uabcs.mx/transparencia/assets/images/logo_uabcs.png';
use App\Models\DynamicForm; // Ensure to include the model

$forms = DynamicForm::all(); // Fetch all forms from the database
$existingFormNames = [];
@endphp
<!DOCTYPE html>
<html lang="{{ $newLocale }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ $logo }}" type="image/png">
    <title>Evaluación docente</title>

    <x-head-resources />
    <style>
        @media print {
            .footer-number::after {
                content: "1";
            }
        }

        .table-responsive {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
        }

        .form-control {
            width: 100%;
            padding: 0.375rem 0.75rem;
        }
        .dataAcreditacion{
            font-weight: bold;
        }
        .puntajeValues{
            text-align: right;
        }
        #PrimerValorNumerico{
            text-align: center;
        }

        #puntajeComisionValues, #observacionesNForm{
            background-color: #d6fff7;
            
        }

        body.dark-mode #puntajeComisionValues, body.dark-mode #observacionesNForm{
            color: black;
        }
        /* Botón de modo oscuro */
        .dark-mode-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        /* Hierarchy Layout Styles */
        .hierarchy-container {
            display: flex;
            gap: 30px;
            padding: 20px;
            align-items: flex-start;
        }

        .hierarchy-column-left {
            flex: 0 0 auto;
            min-width: 300px;
        }

        .hierarchy-column-right {
            flex: 1;
            position: relative;
        }

        .hierarchy-level-1 {
            margin-bottom: 15px;
        }

        .hierarchy-level-1 .hierarchy-button {
            width: 100%;
            text-align: left;
            font-weight: 500;
            background-color: #528fb3;
            color: white;
            border-color: #528fb3;
        }

        .hierarchy-level-1 .hierarchy-button:hover {
            background-color: #4280a3;
            border-color: #4280a3;
            color: white;
        }

        .hierarchy-level-1 .hierarchy-button.category-header {
            background-color: #528fb3;
            color: white;
            border-color: #528fb3;
            pointer-events: none;
            opacity: 0.9;
            position: relative;
        }

        /* Horizontal line connecting category 3 to bracket */
        .hierarchy-level-1 .hierarchy-button.category-header::after {
            content: '';
            position: absolute;
            right: -30px;
            top: 50%;
            width: 30px;
            height: 3px;
            background-color: #528fb3;
            transform: translateY(-50%);
        }

        .bracket-container {
            position: relative;
            padding-left: 40px;
        }

        .bracket-container::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 25px;
            border-left: 3px solid #528fb3;
            border-top: 3px solid #528fb3;
            border-bottom: 3px solid #528fb3;
            border-radius: 15px 0 0 15px;
        }

        .bracket-item {
            margin-bottom: 12px;
        }

        .bracket-item .hierarchy-button {
            width: 100%;
            text-align: left;
            background-color: #528fb3;
            color: white;
            border-color: #528fb3;
        }

        .bracket-item .hierarchy-button:hover {
            background-color: #4280a3;
            border-color: #4280a3;
            color: white;
        }

        /* Dark mode adjustments */
        body.dark-mode .hierarchy-level-1 .hierarchy-button,
        body.dark-mode .bracket-item .hierarchy-button {
            background-color: #22426d;
            border-color: #22426d;
        }

        body.dark-mode .hierarchy-level-1 .hierarchy-button:hover,
        body.dark-mode .bracket-item .hierarchy-button:hover {
            background-color: #1a3555;
            border-color: #1a3555;
        }

        /* Responsive adjustments */
        @media (max-width: 992px) {
            .hierarchy-container {
                flex-direction: column;
                gap: 20px;
            }

            .hierarchy-column-left {
                min-width: 100%;
            }

            .hierarchy-column-right {
                width: 100%;
            }

            /* Hide connecting line on mobile */
            .hierarchy-level-1 .hierarchy-button.category-header::after {
                display: none;
            }
        }

        @media (max-width: 768px) {
            .bracket-container {
                padding-left: 25px;
            }

            .bracket-container::before {
                width: 15px;
                border-width: 2px;
                border-radius: 10px 0 0 10px;
            }
        }

        @media (max-width: 576px) {
            .hierarchy-container {
                padding: 10px;
            }

            .bracket-container {
                padding-left: 20px;
            }
        }
    </style>
</head>

<body class="font-sans antialiased">
    <x-general-header />
        <!-- Botón de modo oscuro (fuera del flujo normal) -->
        <button id="toggle-dark-mode" class="btn btn-secondary printButtonClass dark-mode-button">
            <i class="fa-solid fa-moon"></i>&nbspModo Obscuro
        </button>
    <div class="bg-gray-50 text-black/50">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            @if (Route::has('login'))
                @if (Auth::check() && Auth::user()->user_type === 'secretaria')
                    <x-nav-menu :user="Auth::user()">
                        <div>
                            <!--Funcionalidad en caso de que se requiera un nuevo formulario
                            <ul style="list-style: none;">
                                <li class="nav-item">
                                    <a class="nav-link active enlaceSN" style="width: 300px;" href="{{route('dynamic_forms')}}"
                                        title="Ingresar nuevo formulario"><i class="fa-solid fa-folder-plus"></i>&nbspIngresar
                                        nuevo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active enlaceSN" style="width: 300px;"
                                        href="{{route('edit_delete_form')}}" title="Editar ó eliminar formulario"><i
                                            class="fa-solid fa-user-pen"></i>&nbspEditar/Eliminar</a>
                                </li>
                            </ul>
                            -->
                        </div>
                    </x-nav-menu>
                @endif

                <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                    <div class="flex lg:justify-center lg:col-start-2"></div>

                    <nav class="-mx-3 flex flex-1 justify-end"></nav>

                    <div class="container mt-4 printButtonClass">
                        <!-- Selector para elegir el formulario -->
                        <label for="formGrid">Buscar Evaluación:</label>
                        
                        <div id="formGrid" class="hierarchy-container mt-4">
                            <!-- Left Column: Categories 1, 2, and 3 -->
                            <div class="hierarchy-column-left">
                                <!-- Level 1: Category 1 -->
                                <div class="hierarchy-level-1">
                                    <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form2')">
                                        1. Permanencia en las actividades de la docencia
                                    </button>
                                </div>

                                <!-- Level 1: Category 2 -->
                                <div class="hierarchy-level-1">
                                    <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form2_2')">
                                        2. Dedicación en el desempeño docente
                                    </button>
                                </div>

                                <!-- Level 1: Category 3 -->
                                <div class="hierarchy-level-1">
                                    <button class="btn hierarchy-button category-header">
                                        3. Calidad en la docencia
                                    </button>
                                </div>
                            </div>

                            <!-- Right Column: Sub-categories with left bracket -->
                            <div class="hierarchy-column-right">
                                <div class="bracket-container">
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_1')">
                                            3.1 Participación en actividades de diseño curricular
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_2')">
                                            3.2 Calidad del desempeño docente evaluada por el alumnado
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_3')">
                                            3.3 Publicaciones relacionadas con la docencia
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_4')">
                                            3.4 Distinciones académicas recibidas por el docente
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_5')">
                                            3.5 Asistencia, puntualidad y permanencia en el desempeño docente
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_6')">
                                            3.6 Capacitación y actualización pedagógica recibida
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_7')">
                                            3.7 Cursos de actualización disciplinaria
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_8')">
                                            3.8 Impartición de cursos, diplomados, seminarios
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_8_1')" title="Responsabilidad Social Universitaria">
                                            3.8.1 RSU
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_9')">
                                            3.9 Trabajos dirigidos para la titulación
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_10')">
                                            3.10 Tutorías a estudiantes
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_11')">
                                            3.11 Asesoría a estudiantes
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_12')">
                                            3.12 Publicaciones de investigación
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_13')">
                                            3.13 Proyectos académicos de investigación
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_14')">
                                            3.14 Participación como ponente en congresos
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_15')">
                                            3.15 Registro de patentes y productos de investigación
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_16')">
                                            3.16 Actividades de arbitraje y edición
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_17')">
                                            3.17 Proyectos académicos de extensión
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_18')">
                                            3.18 Organización de congresos institucionales
                                        </button>
                                    </div>
                                    <div class="bracket-item">
                                        <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/form3_19')">
                                            3.19 Participación en cuerpos colegiados
                                        </button>
                                    </div>

                                    <!-- Dynamic options -->
                                    @foreach($forms as $form)
                                        @if(!in_array($form->form_name, $existingFormNames))
                                            <div class="bracket-item">
                                                <button class="btn hierarchy-button form-option" onclick="navigateToRoute('/formato-evaluacion/{{ $form->form_name }}')">
                                                    {{ $form->form_name }}
                                                </button>
                                            </div>
                                            @php $existingFormNames[] = $form->form_name; @endphp
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="formContainer" class="mt-4">
                        <!-- Aquí se cargará el contenido del formulario seleccionado -->
                    </div>
                </header>
            @endif
        </div>
    </div>

    <div>
        <footer>
            <div>
                <canvas id="convocatoriaCanvas" width="1500" height="500"></canvas>
            </div>
        </footer>
    </div>

    <script>
        // Funciones de utilidad para cálculos
        function minWithSum(value1, value2) {
            const sum = value1 + value2;
            return Math.min(sum, 200);
        }

        function min40(...values) {
            const sum40 = values.reduce((acc, val) => acc + val, 0);
            return Math.min(sum40, 40);
        }

        function min30(...values) {
            const sum30 = values.reduce((acc, val) => acc + val, 0);
            return Math.min(sum30, 30);
        }

        function subtotal(value1, value2) {
            const st = value1 * value2;
            return st;
        }

        function min60(...values) {
            const sum60 = values.reduce((acc, val) => acc + val, 0);
            return Math.min(sum60, 60);
        }

        function minWithSumThree(value1, value2, value3, value4) {
            const ms = value1 + value2 + value3 + value4;
            return Math.min(ms, 100);
        }

        function min50(...values) {
            const ms = values.reduce((acc, val) => acc + val, 0);
            return Math.min(ms, 50);
        }

        function minWithSumThreeFive(value1, value2) {
            const ms = value1 + value2;
            return Math.min(ms, 75);
        }

        function minTutorias() {
            // convert the arguments object to an array
            const values = Array.from(arguments);
            // use reduce to sum the values
            const ms = values.reduce((acc, current) => {
                return acc + current;
            }, 0);
            // return the minimum of ms and 200
            return Math.min(ms, 200);
        }

        function min700(...values) {
            const ms = values.reduce((acc, val) => acc + val, 0);
            return Math.min(ms, 700);
        }


        // Mantener las funciones existentes que podrían ser utilizadas en otras partes
        function onChange() {
            // Obtener los valores de los inputs
            const puntajePosgrado = parseFloat(document.getElementById("horasPosgrado").value);
            const puntajeSemestre = parseFloat(document.getElementById("horasSemestre").value);
            const h = parseFloat(document.querySelector('#hoursText'));

            // Realizar los cálculos
            const dsePosgrado = puntajePosgrado * 8.5;
            const dseSemestre = puntajeSemestre * 8.5;
            const hora = (dsePosgrado + dseSemestre);

            // Actualizar el contenido de las etiquetas <label>
            document.getElementById("DSE").innerText = dsePosgrado;
            document.getElementById("DSE2").innerText = dseSemestre;

            // Mostrar los valores actualizados en la consola
            console.log(dsePosgrado);
            console.log(dseSemestre);

            const minimo = minWithSum(dsePosgrado, dseSemestre);

            document.getElementById("hoursText").innerText = minimo;
            console.log(minimo);
        }

        function hayObservacion(indiceActividad) {
            var selectEscala = document.getElementById('selectEscala' + indiceActividad);
            var selectActividad = document.getElementById('selectActividad' + indiceActividad);
            var inputObservacion = document.getElementById('observacion' + indiceActividad);
            var mensajeObservacion = document.getElementById('mensajeObservacion' + indiceActividad);

            if (selectActividad.value != 0 && selectEscala.value != 0) {
                mensajeObservacion.textContent = 'Observación: ' + inputObservacion.value;
                mensajeObservacion.style.display = 'block';
                return true;
            } else {
                mensajeObservacion.style.display = 'none';
                return false;
            }
        }

        const nav = document.querySelector('nav');
        let lastScrollLeft = 0; // Variable to store the last horizontal scroll position

        window.addEventListener('scroll', () => {
            let currentScrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

            // Check if scrolling to the right
            if (currentScrollLeft > lastScrollLeft) {
                // Scrolling to the right, hide the navigation
                nav.style.display = 'none';
            } else {
                // Scrolling to the left or not horizontally, show the navigation
                nav.style.display = 'block';
            }

            lastScrollLeft = currentScrollLeft <= 0 ? 0 : currentScrollLeft; // For Mobile or negative scrolling
        });

    document.addEventListener('DOMContentLoaded', function () {
            const toggleDarkModeButton = document.getElementById('toggle-dark-mode');
            if (toggleDarkModeButton) {
                const widthDarkButton = window.outerWidth - 230;
                toggleDarkModeButton.style.marginLeft = `${widthDarkButton}px`;
            }

            toggleDarkMode();
        });
        
 function navigateToRoute(route) {
        window.location.href = route;
      }

    </script>
</body>
</html>