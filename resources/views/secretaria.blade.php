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
                @if (Auth::check() && Auth::user()->user_type === '')
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
                        <div id="formGrid" class="container mt-4">
                           <div class="row g-3">
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form2')">1. Permanencia en las actividades de la docencia</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form2_2')">2. Dedicación en el desempeño docente</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_1')">3.1 Participación en actividades de diseño curricular</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_2')">3.2 Calidad del desempeño docente evaluada por el alumnado</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_3')">3.3 Publicaciones relacionadas con la docencia</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_4')">3.4 Distinciones académicas recibidas por el docente</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_5')">3.5 Asistencia, puntualidad y permanencia en el desempeño docente</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_6')">3.6 Capacitación y actualización pedagógica recibida</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_7')">3.7 Cursos de actualización disciplinaria</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_8')">3.8 Impartición de cursos, diplomados, seminarios</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_8_1')" title="Responsabilidad Social Universitaria">3.8.1 RSU</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_9')">3.9 Trabajos dirigidos para la titulación</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_10')">3.10 Tutorías a estudiantes</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_11')">3.11 Asesoría a estudiantes</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_12')">3.12 Publicaciones de investigación</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_13')">3.13 Proyectos académicos de investigación</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_14')">3.14 Participación como ponente en congresos</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_15')">3.15 Registro de patentes y productos de investigación</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_16')">3.16 Actividades de arbitraje y edición</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_17')">3.17 Proyectos académicos de extensión</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_18')">3.18 Organización de congresos institucionales</button>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <button class="btn btn-outline-primary w-100 form-option" onclick="navigateToRoute('/formato-evaluacion/form3_19')">3.19 Participación en cuerpos colegiados</button>
                            </div>
                       
                    
                            <!-- Dynamic options -->
                            @foreach($forms as $form)
                                @if(!in_array($form->form_name, $existingFormNames)) <!-- Check for duplicates -->
                                    <option value="{{ $form->form_name }}" data-id="{{ $form->id }}">{{ $form->form_name }}</option>
                                    @php $existingFormNames[] = $form->form_name; @endphp <!-- Add to existing names -->
                                @endif
                            @endforeach
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

        /*Manejo del formulario dinámico*/
        // document.addEventListener('DOMContentLoaded', (event) => {
        //     const formGrid = document.getElementById('formGrid');
        //     //console.log('Dropdown Options:', Array.from(formGrid.options).map(option => option.value)); // Log the dropdown options

        //     formGrid.addEventListener('change', function () {
        //         const selectedOption = this.options[this.selectedIndex];
        //         const selectedForm = selectedOption.getAttribute('value');
        //         const selectedFormId = selectedOption.getAttribute('data-id');
        //         const formContainer = document.getElementById('formContainer');

        //         console.log('Selected Form:', selectedForm); // Log the selected form
        //         console.log('Selected Form ID:', selectedFormId); // Log the selected form ID

        //         if (selectedForm) {
        //             if (selectedForm.startsWith('form')) {
        //                 // Manejar formularios estáticos
        //                 window.location.href = `/formato-evaluacion/${selectedForm}`;
        //             } else {
        //                 // Formularios dinámicos
        //                 fetch(`/formato-evaluacion/get-form-data/${selectedForm}`)
        //                     .then(response => response.json())
        //                     .then(data => {
        //                         console.log('Returned Data:', data);
        //                         console.log('Columns:', data.columns); // Log the columns
        //                         console.log('Values:', data.values); // Log the values
        //                         console.log('Puntaje máximo:', data.puntaje_maximo);
        //                         console.log('Acreditación:', data.acreditacion); // Log the acreditación

        //                         if (data.success) {
        //                             formContainer.innerHTML = '';

        //                             // Mostrar el puntaje máximo en la parte superior con fondo negro
        //                             let tableHTML = `<div style="margin-bottom: 10px;"><strong>Puntaje máximo</strong> <span style="background-color: #000; color: #fff; font-weight: bold; text-align: center; padding: 2px 10px;">${data.puntaje_maximo}</span></div>`;

        //                             // Crear la tabla
        //                             tableHTML += '<table class="table table-bordered">';

        //                             // Encabezados principales
        //                             tableHTML += '<thead><tr>';
        //                             tableHTML += '<th>Actividad</th>';

        //                             // Agregar los nombres de las columnas dinámicas
        //                             const columnNames = data.columns.map(column => column.column_name);

        //                             // Filtrar solo subencabezados dinámicos (excluyendo los fijos)
        //                             const fixedHeaders = ['Actividad', 'Puntaje a evaluar', 'Puntaje de la Comisión Dictaminadora', 'Observaciones'];
        //                             const dynamicColumnNames = data.columns
        //                                 .map(column => column.column_name)
        //                                 .filter(name => !fixedHeaders.includes(name));

        //                             // Agregar solo las columnas dinámicas (subencabezados)
        //                             dynamicColumnNames.forEach(columnName => {
        //                                 tableHTML += `<th>${columnName}</th>`;
        //                             });

        //                             tableHTML += '<th>Puntaje a evaluar</th>';
        //                             tableHTML += '<th>Puntaje de la Comisión Dictaminadora</th>';
        //                             tableHTML += '<th>Observaciones</th>';
        //                             tableHTML += '</tr></thead><tbody>';

        //                             // Obtener los valores de actividad
        //                             const activityColumnId = data.columns.find(col => col.column_name === 'Actividad')?.id;
        //                             const activityValues = [];
                                    
        //                             if (activityColumnId) {
        //                                 // Obtener todos los valores de actividad en orden
        //                                 const activityData = data.values
        //                                     .filter(val => val.dynamic_form_column_id === activityColumnId)
        //                                     .sort((a, b) => a.id - b.id); // Ordenar por ID
                                            
        //                                 activityData.forEach(activity => {
        //                                     activityValues.push(activity.value);
        //                                 });
        //                             }
                                    
        //                             // Si no hay actividades, usar el nombre del formulario como primera actividad
        //                             if (activityValues.length === 0) {
        //                                 activityValues.push(selectedForm);
        //                             }
                                    
        //                             // Obtener valores para cada columna
        //                             const valuesByColumn = {};
        //                             data.columns.forEach(column => {
        //                                 valuesByColumn[column.column_name] = data.values
        //                                     .filter(val => val.dynamic_form_column_id === column.id)
        //                                     .sort((a, b) => a.id - b.id); // Ordenar por ID
        //                             });
                                    
        //                             // Primera fila
        //                             tableHTML += '<tr>';
        //                             // Primera actividad
        //                             tableHTML += `<td>${activityValues[0] || selectedForm}</td>`;
                                    
        //                             // Buscar qué valores corresponden a cada columna dinámica en la primera fila
        //                             dynamicColumnNames.forEach(colName => {
        //                                 const colValues = valuesByColumn[colName] || [];
        //                                 const firstValue = colValues.length > 0 ? colValues[0].value : '';
        //                                 tableHTML += `<td id="celdaVacia"></td>`;
        //                             });
                                    
        //                             // Buscar valores para puntajes y observaciones
        //                             const puntajeEvalValues = valuesByColumn['Puntaje a evaluar'] || [];
        //                             const puntajeComisionValues = valuesByColumn['Puntaje de la Comisión Dictaminadora'] || [];
        //                             const observacionesValues = valuesByColumn['Observaciones'] || [];
                                    
        //                             // Primera fila - puntajes y observaciones
        //                             tableHTML += `<td style="background-color: #0b5967; color: #ffff; text-align:center; font-weight:bold;">${puntajeEvalValues.length > 0 ? puntajeEvalValues[0].value : '0'}</td>`;
        //                             tableHTML += `<td style="background-color: #ffcc6d; text-align:center;font-weight:bold;">${puntajeComisionValues.length > 0 ? puntajeComisionValues[0].value : '0'}</td>`;
        //                             tableHTML += `<td>${observacionesValues.length > 0 ? observacionesValues[0].value : ''}</td>`;
        //                             tableHTML += '</tr>';
                                    
        //                             // Segunda fila - Si no tenemos una segunda actividad o valor no numérico, lo buscamos
        //                             if (activityValues.length < 2) {
        //                                 fetch(`/formato-evaluacion/get-first-non-numeric-value/${selectedFormId}`)
        //                                     .then(response => response.json())
        //                                     .then(secondData => {
        //                                         if (secondData.success && secondData.value) {
        //                                             const secondActivity = secondData.value;
        //                                             addSecondRow(secondActivity);
        //                                         }
        //                                         finalizarTabla();
        //                                     })
        //                                     .catch(error => {
        //                                         console.error('Error al obtener segunda actividad:', error);
        //                                         finalizarTabla();
        //                                     });
        //                             } else {
        //                                 // Ya tenemos una segunda actividad, podemos usarla directamente
        //                                 addSecondRow(activityValues[1]);
        //                                 finalizarTabla();
        //                             }
                                    
        //                             function addSecondRow(secondActivity) {
        //                                 // Agregar segunda fila con el segundo valor de actividad
        //                                 tableHTML += '<tr>';
        //                                 tableHTML += `<td id="inicioActividad">${secondActivity}</td>`;
                                        
        //                                 // Valores para columnas dinámicas en segunda fila
        //                                 dynamicColumnNames.forEach(colName => {
        //                                     const colValues = valuesByColumn[colName] || [];
        //                                     const secondValue = colValues.length > 1 ? colValues[1].value : '';
        //                                     tableHTML += `<td id="PrimerValorNumerico">${secondValue}</td>`;
        //                                 });
                                        
        //                                 // Segunda fila - puntajes y observaciones
        //                                 tableHTML += `<td class="puntajeValues">${puntajeEvalValues.length > 1 ? puntajeEvalValues[1].value : '0'}</td>`;
        //                                 tableHTML += `<td id="puntajeComisionValues" class="puntajeValues">${puntajeComisionValues.length > 1 ? puntajeComisionValues[1].value : '0'}</td>`;
        //                                 tableHTML += `<td id="observacionesNForm"></td>`;
        //                                 tableHTML += '</tr>';
        //                             }
                                    
        //                             function finalizarTabla() {
        //                                 // Agregar fila de acreditación
        //                                 tableHTML += '<tr>';
        //                                 tableHTML += '<td>Acreditación:</td>';
                                        
        //                                 // Colspan para las columnas restantes
        //                                 const totalColumns = dynamicColumnNames.length + 3; // +3 por puntajes y observaciones
        //                                 tableHTML += `<td class="dataAcreditacion" colspan="${totalColumns}">${data.acreditacion || ''}</td>`;
        //                                 tableHTML += '</tr>';
                                        
        //                                 tableHTML += '</tbody></table>';
        //                                 formContainer.innerHTML = tableHTML;
        //                             }
        //                         } else {
        //                             formContainer.innerHTML = '<p class="alert alert-danger">Error al cargar el formulario: ' + (data.message || 'Formulario no encontrado') + '</p>';
        //                         }
        //                     })
        //                     .catch(error => {
        //                         console.error('Error:', error);
        //                         formContainer.innerHTML = '<p class="alert alert-danger">Error: ' + error.message + '</p>';
        //                     });
        //             }
        //         } else {
        //             formContainer.innerHTML = '';
        //         }
        //     });
        // });


//         document.addEventListener('DOMContentLoaded', () => {
//     const formGrid = document.getElementById('formGrid');
//     const formContainer = document.getElementById('formContainer');
//     const docenteSelect = document.getElementById('teacherSelect');
//     const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

//     // Cargar la lista de docentes 
//     fetch('/get-docentes')
//         .then(response => response.json())
//         .then(docentes => {
//             // Limpiar opciones existentes
//             docenteSelect.innerHTML = '<option value="">Seleccionar un docente</option>';
            
//             // CORREGIDO: Solo mostrar el email del docente como texto de la opción
//             docentes.forEach(docente => {
//                 const option = document.createElement('option');
//                 option.value = docente.email;
//                 option.textContent = docente.email; // Solo el email, sin mostrar "undefined"
//                 docenteSelect.appendChild(option);
//             });
//         })
//         .catch(error => {
//             console.error('Error al cargar los docentes:', error);
//         });

//     // Evento al cambiar docente
//     docenteSelect.addEventListener('change', function() {
//         const selectedDocente = this.value;
//         const selectedForm = null;
//         const selectedFormId = formGrid.options[formGrid.selectedIndex].getAttribute('data-id');
        
//         if (selectedDocente && selectedForm) {
//             if (selectedForm.startsWith('form')) {
//                 // Para formularios estáticos
//                 window.location.href = `/${selectedForm}?teacher=${selectedDocente}`;
//             } else {
//                 // Para formularios dinámicos
//                 cargarFormularioConDatosDocente(selectedForm, selectedFormId, selectedDocente);
//             }
//         }
//     });

//     // Modificar el evento change del selector de formulario
//     formGrid.addEventListener('click', function(event) {
//         if (event.target.classList.contains('form-option')) {
//             // Remover clase activo de todos los botones
//             document.querySelectorAll('.form-option').forEach(btn => btn.classList.remove('active'));

//             // Añadir clase activo al botón clickeado
//             event.target.classList.add('active');

//             // Guardar selección
//             selectedForm = event.target.getAttribute('data-value');
//             const selectedFormId = null; // Si usas data-id, agregalo en el botón

//             const selectedDocente = docenteSelect ? docenteSelect.value : null;

//                 // Lógica igual que antes
//                 if (selectedForm && selectedDocente) {
//                 if (selectedForm.startsWith('form')) {
//                     window.location.href = `/formato-evaluacion/${selectedForm}?teacher=${selectedDocente}`;
//                 } else {
//                     cargarFormularioConDatosDocente(selectedForm, selectedFormId, selectedDocente);
//                 }
//                 } else if (selectedForm) {
//                 if (selectedForm.startsWith('form')) {
//                     window.location.href = `/formato-evaluacion/${selectedForm}`;
//                 } else {
//                     cargarFormularioDinamico(selectedForm, selectedFormId);
//                 }
//                 } else {
//                 formContainer.innerHTML = '';
//                 }
//             }
// });

//     // Función para cargar formulario dinámico (sin datos de docente)
//     function cargarFormularioDinamico(formName, formId) {
//         formContainer.innerHTML = '<div class="text-center"><div class="spinner-border" role="status"></div><p>Cargando formulario...</p></div>';
        
//         fetch(`/get-form-data/${formName}`)
//             .then(response => response.json())
//             .then(data => {
//                 console.log('Datos del formulario:', data);
                
//                 if (data.success) {
//                     formContainer.innerHTML = '';
//                     renderizarTablaOriginal(data, formName, formId);
//                 } else {
//                     formContainer.innerHTML = `<div class="alert alert-danger">Error: ${data.message || 'No se pudieron cargar los datos'}</div>`;
//                 }
//             })
//             .catch(error => {
//                 console.error('Error al cargar el formulario:', error);
//                 formContainer.innerHTML = `<div class="alert alert-danger">Error al cargar el formulario: ${error.message}</div>`;
//             });
//     }
    
//     // Función para cargar formulario con datos del docente
//     function cargarFormularioConDatosDocente(formName, formId, docenteEmail) {
//         formContainer.innerHTML = '<div class="text-center"><div class="spinner-border" role="status"></div><p>Cargando datos del docente...</p></div>';
        
//         fetch(`/get-teacher-form-data/${docenteEmail}/${formName}`)
//             .then(response => {
//                 if (!response.ok) {
//                     throw new Error('No se pudo obtener los datos del docente para este formulario');
//                 }
//                 return response.json();
//             })
//             .then(data => {
//                 console.log('Datos del formulario para el docente:', data);
                
//                 if (data.success) {
//                     formContainer.innerHTML = '';
//                     renderizarTablaOriginal(data, formName, formId, docenteEmail, data.commission_data);
//                 } else {
//                     formContainer.innerHTML = `<div class="alert alert-danger">Error: ${data.message || 'No se pudieron cargar los datos del docente'}</div>`;
//                 }
//             })
//             .catch(error => {
//                 console.error('Error al cargar datos del docente:', error);
                
//                 // Si falla, cargar el formulario sin datos del docente
//                 cargarFormularioDinamico(formName, formId);
//             });
//     }
    
//     // Función para renderizar la tabla con el formato original
//     function renderizarTablaOriginal(data, formName, formId, docenteEmail = null, commissionData = []) {
//         // Crear el encabezado con puntaje máximo
//         let tableHTML = `<form id="${formId}" method="POST">`;
//         tableHTML = `<div style="margin-bottom: 10px;"><strong>Puntaje máximo</strong> <span style="background-color: #000; color: #fff; font-weight: bold; text-align: center; padding: 2px 10px;">${data.puntaje_maximo}</span></div>`;
        
//         // Si hay datos del docente, mostrarlos
//         if (docenteEmail && data.teacher) {
//             tableHTML += `<div class="alert alert-info mb-3">
//                 <p><strong>Docente:</strong> ${data.teacher.name || ''}</p>
//                 <p><strong>Email:</strong> ${data.teacher.email || ''}</p>
//             </div>`;
//         }
        
//         // Crear la tabla
//         tableHTML += '<table class="table table-bordered">';
        
//         // Encabezados principales
//         tableHTML += '<thead><tr>';
//         tableHTML += '<th>Actividad</th>';
        
//         // Agregar los nombres de las columnas dinámicas
//         const columnNames = data.columns.map(column => column.column_name);
        
//         // Filtrar solo subencabezados dinámicos (excluyendo los fijos)
//         const fixedHeaders = ['Actividad', 'Puntaje a evaluar', 'Puntaje de la Comisión Dictaminadora', 'Observaciones'];
//         const dynamicColumnNames = data.columns
//             .map(column => column.column_name)
//             .filter(name => !fixedHeaders.includes(name));
        
//         // Agregar solo las columnas dinámicas (subencabezados)
//         dynamicColumnNames.forEach(columnName => {
//             tableHTML += `<th>${columnName}</th>`;
//         });
        
//         tableHTML += '<th>Puntaje a evaluar</th>';
//         tableHTML += '<th>Puntaje de la Comisión Dictaminadora</th>';
//         tableHTML += '<th>Observaciones</th>';
//         tableHTML += '</tr></thead><tbody>';
        
//         // Obtener los valores de actividad
//         const activityColumnId = data.columns.find(col => col.column_name === 'Actividad')?.id;
//         const activityValues = [];
        
//         if (activityColumnId) {
//             // Obtener todos los valores de actividad en orden
//             const activityData = data.values
//                 .filter(val => val.dynamic_form_column_id === activityColumnId)
//                 .sort((a, b) => a.id - b.id); // Ordenar por ID
            
//             activityData.forEach(activity => {
//                 activityValues.push(activity.value);
//             });
//         }
        
//         // Si no hay actividades, usar el nombre del formulario como primera actividad
//         if (activityValues.length === 0) {
//             activityValues.push(formName);
//         }
        
//         // Obtener valores para cada columna
//         const valuesByColumn = {};
//         data.columns.forEach(column => {
//             valuesByColumn[column.column_name] = data.values
//                 .filter(val => val.dynamic_form_column_id === column.id)
//                 .sort((a, b) => a.id - b.id); // Ordenar por ID
//         });
        
//         // Primera fila
//         tableHTML += '<tr>';
//         // Primera actividad
//         tableHTML += `<td>${activityValues[0] || formName}</td>`;
        
//         // Buscar qué valores corresponden a cada columna dinámica en la primera fila
//         dynamicColumnNames.forEach(colName => {
//             const colValues = valuesByColumn[colName] || [];
//             const firstValue = colValues.length > 0 ? colValues[0].value : '';
//             tableHTML += `<td id="celdaVacia"></td>`;
//         });
        
//         // Buscar valores para puntajes y observaciones
//         const puntajeEvalValues = valuesByColumn['Puntaje a evaluar'] || [];
//         const puntajeComisionValues = valuesByColumn['Puntaje de la Comisión Dictaminadora'] || [];
//         const observacionesValues = valuesByColumn['Observaciones'] || [];
        
//         // Primera fila - puntajes y observaciones
//         tableHTML += `<td style="background-color: #0b5967; color: #ffff; text-align:center; font-weight:bold;">${puntajeEvalValues.length > 0 ? puntajeEvalValues[0].value : '0'}</td>`;
        
//         // Buscar datos de comisión para esta fila
//         const primeraFilaComision = commissionData ? commissionData.find(c => 
//             c.row_identifier === 'row_1' || c.row_identifier === activityValues[0]
//         ) : null;
        
//         tableHTML += `<td style="background-color: #ffcc6d; text-align:center;font-weight:bold;">${primeraFilaComision ? primeraFilaComision.puntaje_comision : (puntajeComisionValues.length > 0 ? puntajeComisionValues[0].value : '0')}</td>`;
//         tableHTML += `<td>${primeraFilaComision ? primeraFilaComision.observaciones : (observacionesValues.length > 0 ? observacionesValues[0].value : '')}</td>`;
//         tableHTML += '</tr>';
        
//         // Segunda fila - Si no tenemos una segunda actividad o valor no numérico, lo buscamos
//         if (activityValues.length < 2) {
//             // Agregar segunda fila con un placeholder
//             const secondActivity = "Actividad adicional";
//             addSecondRow(secondActivity);
//             finalizarTabla();
//         } else {
//             // Ya tenemos una segunda actividad, podemos usarla directamente
//             addSecondRow(activityValues[1]);
//             finalizarTabla();
//         }
        
//         function addSecondRow(secondActivity) {
//             // Determina el row_identifier para la segunda fila
//             const rowId = `row_2`;
            
//             // Buscar datos de comisión para esta fila
//             const segundaFilaComision = commissionData ? commissionData.find(c => 
//                 c.row_identifier === rowId || c.row_identifier === secondActivity
//             ) : null;
            
//             // CORREGIDO: Obtener el valor de puntaje_input_values si existe
//             const puntajeInputValue = segundaFilaComision ? segundaFilaComision.puntaje_input_values || '' : '';
            
//             // Agregar segunda fila con el segundo valor de actividad
//             tableHTML += '<tr data-row-id="' + rowId + '">';
//             tableHTML += `<td id="inicioActividad">${secondActivity}</td>`;
            
//             // Valores para columnas dinámicas en segunda fila
//             dynamicColumnNames.forEach(colName => {
//                 const colValues = valuesByColumn[colName] || [];
//                 const secondValue = colValues.length > 1 ? colValues[1].value : '';
//                 tableHTML += `<td id="PrimerValorNumerico">${secondValue}</td>`;
//             });
            
//             // Segunda fila - puntajes y observaciones
//             tableHTML += `<td class="puntajeValues">${puntajeEvalValues.length > 1 ? puntajeEvalValues[1].value : '0'}</td>`;
            
//             // CORREGIDO: Agregar el campo hidden con el valor de puntaje_input_values
//             tableHTML += `<td id="puntajeComisionValues" class="puntajeValues">
//                 <input id="inputValues" 
//                        type="number" 
//                        class="puntaje-comision" 
//                        data-row-id="${rowId}" 
//                        value="${segundaFilaComision ? segundaFilaComision.puntaje_comision : ''}" 
//                        placeholder="0">
//                 <input type="hidden" id="puntaje_input_values" name="puntaje_input_values" value="${puntajeInputValue}">
//             </td>`;
            
//             tableHTML += `<td id="observacionesNForm">
//                 <input id="inputObservaciones" 
//                        class="observaciones" 
//                        data-row-id="${rowId}" 
//                        value="${segundaFilaComision ? segundaFilaComision.observaciones : ''}" 
//                        placeholder="escriba aqui los comentarios">
//             </td>`;
            
//             tableHTML += '</tr>';
//         }
        
//         function finalizarTabla() {
//             // Agregar fila de acreditación
//             tableHTML += '<tr>';
//             tableHTML += '<td>Acreditación:</td>';
            
//             // Colspan para las columnas restantes
//             const totalColumns = dynamicColumnNames.length + 3; // +3 por puntajes y observaciones
//             tableHTML += `<td class="dataAcreditacion" colspan="${totalColumns}">${data.acreditacion || ''}</td>`;
//             tableHTML += '</tr>';
            
//             tableHTML += '</tbody></table>';
            
//             // CORREGIDO: Estilo del botón para que sea como los demás botones de la app
//             if (docenteEmail) {
//                 tableHTML += `<button type="submit" class="btn custom-btn printButtonClass dynamicBtn" id="btnGuardarEvaluacion">Enviar</button>`;
//             } else {
//                 tableHTML += `<div class="alert alert-warning mt-3">
//                     <p>Para evaluar este formulario, seleccione un docente primero.</p>
//                 </div>`;
//             }
            
//             tableHTML += '</form>';
//             formContainer.innerHTML = tableHTML;
            
//             // Agregar evento al botón de guardar
//             const btnGuardar = document.getElementById('btnGuardarEvaluacion');
//             if (btnGuardar) {
//                 btnGuardar.addEventListener('click', function(e) {
//                     e.preventDefault(); // Prevenir el envío del formulario
//                     guardarDatosComision(formId, docenteEmail);
//                 });
//             }
//         }
//     }

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