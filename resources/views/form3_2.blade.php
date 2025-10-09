@php
$locale = app()->getLocale() ?: 'en';
$newLocale = str_replace('_', '-', $locale);
$logo = 'https://www.uabcs.mx/transparencia/assets/images/logo_uabcs.png';
@endphp
<!DOCTYPE html>
<html lang="">

<head>
    <link rel="icon" href="{{ $logo }}" type="image/png">
    <title>Evaluación docente</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-head-resources />
<style>
    body.chrome @media print {
        #convocatoria {
            font-size: 1.2rem;
            color: blue;
            /* Ejemplo de estilo específico para Chrome */
        }
    }

#piedepagina { display: none; }

    @media print {
        #piedepagina{
            display: block !important;
        }
        body {
            margin-left: 200px;
            margin-top: -10px;
            padding: 0;
            font-size: .8rem;

        }

       footer {
    position: absolute; /* Usar absolute en lugar de fixed */
    font-size: .8rem;
    bottom: 0;
    left: 0;
    width: 100%;
    text-align: center;
    background-color: white;
    z-index: 10;
    padding: 5px 0;
    border-top: 1px solid #ccc;
}

    footer::after {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            
            background: white;
            padding: 5px;
            z-index: 10;
        }


    .prevent-overlap {
        page-break-before: always;
    }

    #convocatoria {
        margin: 0;
        font-size: .8rem;
    }

    #piedepagina {
        margin: 0;
         page-break-inside: avoid; /* Evitar saltos dentro del pie de página */
    }

    div {
        page-break-after: avoid;
        page-break-before: avoid;
    }
    

    @page {
        size: landscape;
        margin: 20mm; /* Ajusta según sea necesario */
        
    }


        page-break-after: auto; /* La última página no necesita salto extra */

}
    body.dark-mode #r1, body.dark-mode #r2, body.dark-mode #r3, body.dark-mode #prom90_100, 
    body.dark-mode #prom80_90, body.dark-mode #prom70_80 {
        color: white;
        background-color: transparent;
    }

    body.dark-mode [id^="obs3_2"] {
        color: black;
    }

    [id^="btn3_"]{
    margin-left: 900px;
}

body.dark-mode [id^="btn3_"]{
        background-color: #456483;
        color: floralwhite;
}

body.dark-mode [id^="btn3_"]:hover {
    background-color: #6a5b9f;
    
}

</style>
</head>

<body class="bg-gray-50 text-black/50">

    <div class="relative min-h-screen flex flex-col items-center justify-center">
        @if (Route::has('login'))
            @if (Auth::check())
                <x-nav-menu :user="Auth::user()" />
            @endif
        @endif
    </div>
    <x-general-header />
@php
$user = Auth::user();
$userType = $user->user_type;
$user_identity = $user->id; 
@endphp

<button id="toggle-dark-mode" class="btn btn-secondary printButtonClass"><i class="fa-solid fa-moon"></i>&nbspModo Obscuro</button>

<div class="container mt-4" id="seleccionDocente">
    @if($userType !== 'docente')
        <!-- Buscando docentes -->
        <x-docente-search />
    @endif
</div>

    <main class="container">
        <!-- Form for Part 3_1 -->
        <form id="form3_2" method="POST" onsubmit="event.preventDefault(); submitForm('/formato-evaluacion/store-form32', 'form3_2');">
            @csrf
            <input type="hidden" name="dictaminador_email" value="{{ Auth::user()->email }}">
            <input type="hidden" name="dictaminador_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="user_id" value="">
            <input type="hidden" name="email" value="">
            <input type="hidden" name="user_type" value="">
            <div>
            <!-- Actividad 3.2 Calidad del desempeño docente evaluada por el alumnado -->
            <h4 id="puntajeMaxForm3_2">Puntaje máximo
                <label class="bg-black text-white px-4 mt-3" for="">50</label>
            </h4>
            </div>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Actividad</th>
                            <th class="table-ajust" scope="col"></th>
                            <th class="table-ajust" scope="col"></th>
                            <th class="table-ajust cd" scope="col">Puntaje a evaluar</th>
                            <th class="table-ajust cd" scope="col">Puntaje de la Comisión Dictaminadora</th>
                            {{-- <th class="table-ajust" scope="col">Observaciones</th> --}}
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td id="seccion3_2" colspan="3" style="height: 50px; width: 200px;">3.2 Calidad del desempeño
                                docente
                                evaluada por el alumnado
                            </td>
                            <td id="score3_2" for="">0</td>
                            <td id="comision3_2">0</td>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                              <td></td>
                            <td>Puntaje</td>
                            <td class="text-center">Cantidad</td>
                            <td colspan="2"></td>
                            
                            <td class="text-center table-ajust" scope="col">Observaciones</td>
                            
                        </tr>
                    </thead>
                    <thead>
                        <!--prom90-100-->
                        <tr>
                            <td class="ranges">
                                <center>Promedio 90-100</center>
                            </td>
                            <td id="ran1"><b>50</b></td>
                            <td class="elabInput" style="background-color: #c1cfd3;text-align:right;"><span id="r1" name="r1"></span></td>
                            <td id="cant1" name="cant1">0</td>
                            <td class="td_obs">
                            @if($userType == 'dictaminador')
                                <input id="prom90_100" type="number" step="0.01"
                                    oninput="onActv3_2Comision()" value="{{ oldValueOrDefault('prom90_100') }}">
                            @else
                            <span id="prom90_100" name="prom90_100"></span>
                            @endif
                            </td>
                            <td class="td_obs">
                            @if($userType == 'dictaminador')
                                <input id="obs3_2_1" name="obs3_2_1" type="text">
                            @else
                                <span id="obs3_2_1" name="obs3_2_1"></span>
                            @endif

                            </td>
                        </tr>
                        <!--prom80-90-->
                        <tr>
                            <td class="ranges">
                                <center>Promedio 80-90</center>
                            </td>
                            <td id="ran2"><b>40</b></td>
                            <td class="elabInput" style="background-color: #c1cfd3;"><span id="r2" name="r2"></span></td>
                            <td id="cant2" name="cant2">0</td>

                            <td class="td_obs">
                             @if($userType == 'dictaminador')   
                                <input id="prom80_90" type="number" step="0.01"
                                    oninput="onActv3_2Comision()" value="{{ oldValueOrDefault('prom80_90') }}">
                            @else
                                <span id="prom80_90" name="prom80_90"></span>
                            @endif
                            </td>
                            <td class="td_obs">
                            @if($userType == 'dictaminador')    
                                <input id="obs3_2_2" name="obs3_2_2" type="text">
                            @else
                                <span id="obs3_2_2" name="obs3_2_2"></span>
                            @endif
                            </td>
                        </tr>
                        <!--prom70-80-->
                        <tr>
                            <td class="ranges">
                                <center>Promedio 70-80</center>
                            </td>
                            <td id="ran3"><b>30</b></td>
                            <td class="elabInput" style="background-color: #c1cfd3;">
                                <span id="r3" name="r3"></span>
                            </td>
                            <td id="cant3">0</td>
                            <td class="td_obs">
                            @if($userType == 'dictaminador')  
                                <input id="prom70_80" placeholder="0" type="number" step="0.01"
                                        oninput="onActv3_2Comision()" value="{{ oldValueOrDefault('prom70_80') }}">
                            @else
                            <span id="prom70_80" name="prom70_80"></span>
                            @endif
                            </td>
                            <td class="td_obs">
                            @if($userType == 'dictaminador')  
                                <input id="obs3_2_3"  name="obs3_2_3" type="text">
                            @else
                                <span id="obs3_2_3" name="obs3_2_3"></span>
                            @endif
                            </td>
                        </tr>
                    </thead>
                    </table>
                    <!--Tabla informativa Acreditacion Actividad 3.2-->
                <table>
                    <thead>
                        <tr><br>
                            <th class="acreditacion" scope="col">Acreditacion: </th>

                            <th class="descripcionDDIE"><b>DDIE</b>
                            <th> 
                            @if($userType != '')     
                                <button id="btn3_2" type="submit" class="btn custom-btn printButtonClass">Enviar
                            @endif
                            </th>
                        </tr>

                    </thead>
                </table>
        </form>
    </main>
    <center>
    <footer id="footerForm3_4">
        <center>
            <div id="convocatoria">
                <!-- Mostrar convocatoria -->
                @if(isset($convocatoria))

                    <div style="margin-right: -700px;">
                        <h1>Convocatoria: {{ $convocatoria->convocatoria }}</h1>
                    </div>
                @endif
            </div>
        </center>
    
        <div id="piedepagina" style="margin-left: 500px;margin-top:10px;">
            <x-form-renderer :forms="[['view' => 'form3_2', 'startPage' => 5, 'endPage' => 5]]" />
        </div>
    </footer>

    </center>

    <script>

        window.onload = function () {
            const footerHeight = document.querySelector('footer').offsetHeight;
            const elements = document.querySelectorAll('.prevent-overlap');

            elements.forEach(element => {
                const rect = element.getBoundingClientRect();
                const viewportHeight = window.innerHeight;

                // Verifica si el elemento está demasiado cerca del footer y aplica page-break-before si es necesario
                if (rect.bottom + footerHeight > viewportHeight) {
                    element.style.pageBreakBefore = "always"; // Forzar salto antes
                }
            });

        };   
            
document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('docenteSearch');
    const suggestionsBox = document.getElementById('docenteSuggestions');
    const hiddenEmail = document.getElementById('selectedDocenteEmail');

    const userType = @json($userType);
    const userIdentity = @json($user_identity);

    let debounceTimer;

    // Autocompletado: Buscar docentes mientras se escribe
    searchInput.addEventListener('input', function () {
        const query = this.value.trim();
        clearTimeout(debounceTimer);

        if (query.length < 2) {
            suggestionsBox.style.display = 'none';
            return;
        }

        debounceTimer = setTimeout(async () => {
            try {
                const response = await fetch(`/formato-evaluacion/get-docentes?search=${encodeURIComponent(query)}`);
                const docentes = await response.json();

                suggestionsBox.innerHTML = '';
                if (docentes.length > 0) {
                    docentes.forEach(d => {
                        const li = document.createElement('li');
                        li.classList.add('list-group-item', 'list-group-item-action');
                        li.innerHTML = `<strong>${d.nombre}</strong><br><small>${d.email}</small>`;
                        li.addEventListener('click', () => {
                            searchInput.value = `${d.nombre} (${d.email})`;
                            hiddenEmail.value = d.email;
                            suggestionsBox.style.display = 'none';

                            // Disparar evento personalizado
                            const selectedEvent = new CustomEvent('docenteSelected', { detail: d });
                            document.dispatchEvent(selectedEvent);
                        });
                        suggestionsBox.appendChild(li);
                    });
                    suggestionsBox.style.display = 'block';
                } else {
                    suggestionsBox.style.display = 'none';
                }
            } catch (error) {
                console.error('Error buscando docentes:', error);
            }
        }, 300);
    });

    // Ocultar sugerencias al hacer clic fuera
    document.addEventListener('click', (e) => {
        if (!e.target.closest('#docenteSearch') && !e.target.closest('#docenteSuggestions')) {
            suggestionsBox.style.display = 'none';
        }
    });

    // Evento cuando se selecciona un docente
document.addEventListener('docenteSelected', async (e) => {
    const docente = e.detail;
    const email = docente.email;

    try {
        // === Comunes: cargar datos de docente ===
        const axiosResponse = await axios.get('/formato-evaluacion/get-docente-data', { params: { email } });
        const docenteData = axiosResponse.data;

        if (docenteData.docente) {
            // Actualizar convocatoria
            const convocatoriaElement = document.getElementById('convocatoria');
            if (convocatoriaElement) {
                if (docenteData.form1) {
                    convocatoriaElement.textContent = docenteData.form1.convocatoria || '';
                } else {
                    console.error('form1 no está definido en la respuesta.');
                }
            } else {
                console.error('Elemento con ID "convocatoria" no encontrado.');
            }
        }

        const user_id = docenteData.form3_2.user_id; 
        

            // Obtener datos de UsersResponseForm3_2
             const res = await fetch(`/formato-evaluacion/get-docente-data`);
            //  const scoreElements = document.querySelectorAll('.score3_2');
             
                    
                        document.getElementById('score3_2').textContent = docenteData.form3_2.score3_2 || '0';
                        document.getElementById('r1').textContent = docenteData.form3_2.r1 || '0';
                        document.getElementById('r2').textContent = docenteData.form3_2.r2 || '0';
                        document.getElementById('r3').textContent = docenteData.form3_2.r3 || '0';
                        document.getElementById('cant1').textContent = docenteData.form3_2.cant1 || '0';
                        document.getElementById('cant2').textContent = docenteData.form3_2.cant2 || '0';
                        document.getElementById('cant3').textContent = docenteData.form3_2.cant3 || '0';


                        // Populate hidden inputs
                        document.querySelector('input[name="user_id"]').value = docenteData.form3_2.user_id || '';
                        document.querySelector('input[name="email"]').value = docenteData.form3_2.email || '';
                        document.querySelector('input[name="user_type"]').value = docenteData.form3_2.user_type || '';


            if (userType === '') {
            // Obtener un solo registro de DictaminatorsResponseForm2_2
            const res = await fetch(`/formato-evaluacion/getFormData32?dictaminador_id=${encodeURIComponent(email)}`);
            const result = await res.json();

            if (result.success && result.data) {
                const data = result.data;
                    document.getElementById('r1').textContent = data.form3_2.r1 || '0';
                    document.getElementById('r2').textContent = data.form3_2.r2 || '0';
                    document.getElementById('r3').textContent = data.form3_2.r3 || '0';
                    document.getElementById('cant1').textContent = data.form3_2.cant1 || '0';
                    document.getElementById('cant2').textContent = data.form3_2.cant2 || '0';
                    document.getElementById('cant3').textContent = data.form3_2.cant3 || '0';


                    // Populate hidden inputs
                    document.querySelector('input[name="user_id"]').value = data.form3_2.user_id || '';
                    document.querySelector('input[name="email"]').value = data.form3_2.email || '';
                    document.querySelector('input[name="user_type"]').value = data.form3_2.user_type || '';
            } else {
                console.warn('No se encontraron datos de DictaminatorsResponseForm2');
            }

            // Obtener todas las respuestas de dictaminadores
            // Lógica para obtener datos de DictaminatorsResponseForm3_2
                try {
                    const response = await fetch('/formato-evaluacion/get-dictaminators-responses');
                    const dictaminatorResponses = await response.json();
                    // Filtrar la entrada correspondiente al email seleccionado
                    const selectedResponseForm3_2 = dictaminatorResponses.form3_2.find(res => res.email === email);
                    if (selectedResponseForm3_2) {

                        document.querySelector('input[name="dictaminador_id"]').value = selectedResponseForm3_2.dictaminador_id || '0';
                        document.querySelector('input[name="user_id"]').value = selectedResponseForm3_2.user_id || '';
                        document.querySelector('input[name="email"]').value = selectedResponseForm3_2.email || '';
                        document.querySelector('input[name="user_type"]').value = selectedResponseForm3_2.user_type || '';

                        document.getElementById('score3_2').textContent = selectedResponseForm3_2.score3_2 || '0';
                        document.getElementById('r1').textContent = selectedResponseForm3_2.r1 || '0';
                        document.getElementById('r2').textContent = selectedResponseForm3_2.r2 || '0';
                        document.getElementById('r3').textContent = selectedResponseForm3_2.r3 || '0';
                        document.getElementById('cant1').textContent = selectedResponseForm3_2.cant1 || '0';
                        document.getElementById('cant2').textContent = selectedResponseForm3_2.cant2 || '0';
                        document.getElementById('cant3').textContent = selectedResponseForm3_2.cant3 || '0';
                        document.getElementById('comision3_2').textContent = selectedResponseForm3_2.comision3_2 || '0';
                        document.querySelector('span[name="prom90_100"]').textContent = selectedResponseForm3_2.prom90_100 || '0';
                        document.querySelector('span[name="prom80_90"]').textContent = selectedResponseForm3_2.prom80_90 || '0';
                        document.querySelector('span[name="prom70_80"]').textContent = selectedResponseForm3_2.prom70_80 || '0';
                        document.querySelector('span[name="obs3_2_1"]').textContent = selectedResponseForm3_2.obs3_2_1 || '';
                        document.querySelector('span[name="obs3_2_2"]').textContent = selectedResponseForm3_2.obs3_2_2 || '';
                        document.querySelector('span[name="obs3_2_3"]').textContent = selectedResponseForm3_2.obs3_2_3 || '';


                    } else {

                        console.error('No form3_2 data found for the selected dictaminador.');
                        // Reset input values if no data found
                        document.querySelector('input[name="dictaminador_id"]').value = '0';
                        document.querySelector('input[name="user_id"]').value = '0';
                        document.querySelector('input[name="email"]').value = '';
                        document.querySelector('input[name="user_type"]').value = '';
                        document.getElementById('r1').textContent = '0';
                        document.getElementById('r2').textContent = '0';
                        document.getElementById('r3').textContent = '0';
                        document.getElementById('cant1').textContent = '0';
                        document.getElementById('cant2').textContent = '0';
                        document.getElementById('cant3').textContent = '0';
                        document.getElementById('comision3_2').textContent = '0';
                        document.querySelector('span[name="prom90_100"]').textContent = '0';
                        document.querySelector('span[name="prom80_90"]').textContent = '0';
                        document.querySelector('span[name="prom70_80"]').textContent = '0';
                        document.querySelector('span[name="obs3_2_1"]').textContent = '';
                        document.querySelector('span[name="obs3_2_2"]').textContent = '';
                        document.querySelector('span[name="obs3_2_3"]').textContent = '';
                    }
                } catch (error) {
                    console.error('Error fetching dictaminators responses:', error);
                }
        }

    } catch (error) {
        console.error('Error general al procesar datos del docente:', error);
    }
});

           const pages = document.querySelectorAll(".page-break");
            const isPrinting = window.matchMedia('print').matches;

            if (isPrinting) {
                const firstFooter = document.querySelector('.first-page-footer');
                const secondFooter = document.querySelector('.second-page-footer');

                // Ocultar/mostrar los pies de página según el contenido visible
                pages.forEach((page) => {
                    if (page.dataset.page === "3") {
                        firstFooter.style.display = 'table-footer-group';
                        secondFooter.style.display = 'none';
                    } else if (page.dataset.page === "4") {
                        firstFooter.style.display = 'none';
                        secondFooter.style.display = 'table-footer-group';
                    }
                });
            }

                    window.addEventListener('beforeprint', () => {
                const pages = document.querySelectorAll(".page-break");

                pages.forEach(page => {
                    const pageNumber = page.getAttribute('data-page');
                    const firstFooter = page.querySelector('.first-page-footer');
                    const secondFooter = page.querySelector('.second-page-footer');

                    if (firstFooter) {
                        firstFooter.style.display = pageNumber === '3' ? 'table-footer-group' : 'none';
                    }

                    if (secondFooter) {
                        secondFooter.style.display = pageNumber === '4' ? 'table-footer-group' : 'none';
                    }
                });
            });
});

        // Function to handle form submission
        async function submitForm(url, formId) {
            const formData = {};
            const form = document.getElementById(formId);

            if (!form) {
                console.error(`Form with id "${formId}" not found.`);
                return;
            }

            // Gather all related information from the form
            formData['dictaminador_id'] = form.querySelector('input[name="dictaminador_id"]').value;
            formData['user_id'] = form.querySelector('input[name="user_id"]').value;
            formData['email'] = form.querySelector('input[name="email"]').value;
            formData['user_type'] = form.querySelector('input[name="user_type"]').value;
            formData['r1'] = document.getElementById('r1').textContent;
            formData['prom90_100'] = document.getElementById('prom90_100').value; // Ensure input value is fetched
            formData['r2'] = document.getElementById('r2').textContent;
            formData['r3'] = document.getElementById('r3').textContent;
            formData['prom80_90'] = document.getElementById('prom80_90').value; // Ensure input value is fetched
            formData['cant1'] = document.getElementById('cant1').textContent;
            formData['cant2'] = document.getElementById('cant2').textContent;
            formData['prom70_80'] = document.getElementById('prom70_80').value; // Ensure input value is fetched
            formData['cant3'] = document.getElementById('cant3').textContent;
            formData['prom90_100'] = form.querySelector('input[id="prom90_100"]').value;
            formData['prom80_90'] = form.querySelector('input[id="prom80_90"]').value;
            formData['prom70_80'] = form.querySelector('input[id="prom70_80"]').value;
            formData['score3_2'] = document.getElementById('score3_2').textContent;
            formData['comision3_2'] = document.getElementById('comision3_2').textContent;

            // Observations
            formData['obs3_2_1'] = form.querySelector('input[name="obs3_2_1"]').value;
            formData['obs3_2_2'] = form.querySelector('input[name="obs3_2_2"]').value;
            formData['obs3_2_3'] = form.querySelector('input[name="obs3_2_3"]').value;


            console.log('Form data:', formData);

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData),
                });

                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const responseData = await response.json();
                console.log('Response received from server:', responseData);

                //Mensaje al usuario
                if (responseData.success) {
                    showMessage('Formulario enviado', 'green');
                } else {
                    showMessage('Formulario no enviado', 'red');
                }
                
            } catch (error) {
                console.error('There was a problem with the fetch operation:', error);
            }
        }
        function minWithSum(value1, value2) {
            const sum = value1 + value2;
            return Math.min(sum, 200);


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