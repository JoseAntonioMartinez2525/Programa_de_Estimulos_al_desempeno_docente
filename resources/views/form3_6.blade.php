@php
$locale = app()->getLocale() ?: 'en';
$newLocale = str_replace('_', '-', $locale);
$logo = 'https://www.uabcs.mx/transparencia/assets/images/logo_uabcs.png';

$docenteConfig =  $docenteConfig ?? [
        'formKey' => 'form3_6',
        'docenteDataEndpoint' => '/formato-evaluacion/get-docente-data', 
        'docentesEndpoint' => '/formato-evaluacion/get-docentes',
        'dictEndpoint' => '/formato-evaluacion/get-dictaminators-responses',
        'dictCollectionKey' => 'form3_6',
        'userTypeForDict' => '',
        'docenteMappings' => [
        // score y su copia
        'score3_6' => 'score3_6',     
        // cantidades y subtotales
        'puntaje3_6' => 'puntaje3_6',
        'puntajeHoras3_6' => 'puntajeHoras3_6',
        ],
        // Mapeos para respuestas de dictaminadores (si aplica)
    'dictMappings' => [
        // comisiones / comIncisos
        '#comision3_6' => 'comision3_6',
        'comisionDict3_6' => 'comisionDict3_6',

        // observaciones (span o elementos de texto)
        '#obs3_6_1' => 'obs3_6_1',

        // repetir score/rc/stotals para sobrescribir si vienen desde dictaminador
        'score3_6' => 'score3_6',
        // cantidades y subtotales
        'puntaje3_6' => 'puntaje3_6',
        'puntajeHoras3_6' => 'puntajeHoras3_6',
    ],

    // Inputs ocultos que deben llenarse desde docenteData.form3_6
    'fillHiddenFrom' => [
        'user_id' => 'user_id',
        'email' => 'email',
        'user_type' => 'user_type',
    ],

    // Inputs ocultos que deben llenarse desde la respuesta de dictaminador seleccionada
    'fillHiddenFromDict' => [
        'dictaminador_id' => 'dictaminador_id',
        'user_id' => 'user_id',
        'email' => 'email',
        'user_type' => 'user_type',
    ],

    // comportamiento al no encontrar respuesta de dictaminador
    'resetOnNotFound' => false,
    'resetValues' => [
        // opcional: valores por defecto explícitos para targets 
        'score3_6' => '0',
        '#comision3_6' => '0',
        '#obs3_6_1' => '',


    ],

];
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
    @include('partials.docente-autocomplete', ['config' => $docenteConfig])

    <link href="{{ asset('css/onePage.css') }}" rel="stylesheet">
<style>
#btn3_6{
    margin-left: 280px;
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
            {{-- Buscar Docentes: --}}
                <x-docente-search />
        @endif
    </div>

    <main class="container">
        <!-- Form for Part 3_1 -->
        <form id="form3_6" method="POST" onsubmit="event.preventDefault(); submitForm('/formato-evaluacion/store-form36', 'form3_6');">
            @csrf
            <input type="hidden" name="dictaminador_email" value="{{ Auth::user()->email }}">
            <input type="hidden" name="dictaminador_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="user_id" value="">
            <input type="hidden" name="email" value="">
            <input type="hidden" name="user_type" value="">
            <div>
                <!-- 3.6 Capacitación y actualización pedagógica recibida  -->
                <h4>Puntaje máximo
                    <label class="bg-black text-white px-4 mt-3" for="">40</label>
                </h4>
            </div>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">Actividad</th>
                        <th class="table-ajust" scope="col"></th>
                        <th class="table-ajust" scope="col"></th>
            
                        <th class="table-ajust cd" scope="col">Puntaje a evaluar</th>
                        <th class="table-ajust cd" scope="col">Puntaje de la Comisión Dictaminadora
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    <thead>
                        <tr>
                            <th id="seccion3_6" colspan="3" class="punto3_6" scope=col>3.6
                                Capacitación y
                                actualización
                                pedagógica recibida </th>
                            <td id="score3_6" for="">0</td>
                            <td id="comision3_6">0</td>
                        </tr>
                        <tr>
                            <td colspan="1"></td>
                            <td class="punto3_6">Factor</td>
                            <td class="punto3_6">Horas</td>
                            <td colspan="2"></td>
                            <td class="obsv table-ajust2" scope="col">Observaciones</td>
                        </tr>
                    </thead>
                    <thead>
                        <tr>
                            <td>0.5 por cada hora</td>
                            <td id="pMedio">0.5</td>
                            <td id="puntaje3_6" ></td>
                            <td id="puntajeHoras3_6"></td>
                            <td class="td_obs" class="text-center">
                                @if($userType == 'dictaminador')
                                    <input type="number"  step="0.01" id="comisionDict3_6" name="comisionDict3_6" oninput="onActv3Comision3_6()" value="{{ oldValueOrDefault('comisionDict3_6') }}">
                                @else
                                <span id="comisionDict3_6" name="comisionDict3_6"></span>
                                @endif
                            </td>
                            <td class="td_obs">
                                @if($userType == 'dictaminador')
                                <input id="obs3_6_1" name="obs3_6_1" class="table-header" type="text">
                                @else
                                <span id="obs3_6_1" name="obs3_6_1"></span>
                                @endif
                            </td>
                        </tr>
                    </thead>
                    <!--Tabla informativa Acreditacion Actividad 3.6-->
                    <table>
                        <thead>
                            <tr>
                                <th class="acreditacion" scope="col">Acreditacion: </th>
            
                                <th class="descripcion"><b>DDIE</b>
            
                                <th>@if($userType != '')
                                    <button id="btn3_6" type="submit" class="btn custom-btn printButtonClass">Enviar</button>
                                @endif
                                </th>
                            </tr>
                        </thead>
                    </table>
                </tbody>
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
        <x-form-renderer :forms="[['view' => 'form3_6', 'startPage' => 10, 'endPage' => 10]]" />
    </div>
</footer>

    <script>
    let selectedEmail = null;
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

    // Function to handle form submission
    async function submitForm(url, formId) {
        const form = document.getElementById(formId);
        if (!form) { console.error(`Form ${formId} not found`); return; }

        // Garantizar que email y user_id estén presentes
        const hiddenEmailInput = form.querySelector('input[name="email"]');
        const hiddenUserIdInput = form.querySelector('input[name="user_id"]');
        const selectedDocenteEmailInput = document.getElementById('selectedDocenteEmail'); // partial usa este id por defecto
        const docenteSearch = document.getElementById('docenteSearch');

        // 1) resolver email (varias fuentes)
        let email = (hiddenEmailInput && hiddenEmailInput.value && hiddenEmailInput.value.trim()) ||
                    (selectedDocenteEmailInput && selectedDocenteEmailInput.value && selectedDocenteEmailInput.value.trim()) ||
                    (docenteSearch && typeof docenteSearch.value === 'string' && (docenteSearch.value.match(/\(([^)]+)\)$/) || [])[1]) ||
                    '';

        if (!email) {
            alert('Seleccione un docente antes de enviar (email ausente).');
            return;
        }
        // asegurar hidden input actualizado
        if (hiddenEmailInput) hiddenEmailInput.value = email;

        // 2) resolver user_id si hace falta
        let userId = hiddenUserIdInput && hiddenUserIdInput.value && hiddenUserIdInput.value.trim();
        if (!userId) {
            try {
                const resp = await fetch(`/formato-evaluacion/get-user-id?email=${encodeURIComponent(email)}`);
                if (resp.ok) {
                    const json = await resp.json();
                    userId = json.user_id || '';
                    if (hiddenUserIdInput) hiddenUserIdInput.value = userId;
                }
            } catch (err) {
                console.warn('No se pudo obtener user_id desde el servidor:', err);
            }
        }

        // si aún no hay user_id, opcional: bloquear envío
        if (!userId) {
            const ok = confirm('No se pudo resolver user_id. Desea enviar de todos modos?');
            if (!ok) return;
        }

        // Recolectar resto de campos (ajusta según tu form)
        const formData = {
            dictaminador_id: form.querySelector('input[name="dictaminador_id"]').value || '',
            user_id: hiddenUserIdInput ? hiddenUserIdInput.value : userId,
            email: selectedEmail,
            user_type: form.querySelector('input[name="user_type"]')?.value || '',
            // campos específicos de form3_6 (ejemplo)
            score3_6: document.getElementById('score3_6')?.textContent || '0',
            puntaje3_6: document.getElementById('puntaje3_6')?.textContent || '0',
            puntajeHoras3_6: document.getElementById('puntajeHoras3_6')?.textContent || '0',
            comision3_6: document.getElementById('comision3_6')?.textContent || '0',

            comisionDict3_6: (
                document.querySelector('input[name="comisionDict3_6"]')?.value ||
                document.querySelector('span[name="comisionDict3_6"]')?.textContent ||
                '0'

            ), 
            obs3_6_1: (
                document.querySelector('input[name="obs3_6_1"]')?.value ||
                document.querySelector('span[name="obs3_6_1"]')?.textContent ||
                ''
            ),
        };

        console.log('Submitting form3_6 data:', formData);

        try {
            const resp = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(formData)
            });

            const json = await resp.json();
            if (!resp.ok) {
                console.error('Server error:', json);
                showMessage(json.message || 'Error al enviar', 'red');
                return;
            }
            showMessage(json.message || 'Enviado', 'green');
        } catch (err) {
            console.error('Network error:', err);
            showMessage('Problema de red al enviar', 'red');
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