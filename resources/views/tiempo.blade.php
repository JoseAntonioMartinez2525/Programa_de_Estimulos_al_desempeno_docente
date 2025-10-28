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


<div class="container mt-4 printButtonClass">
   
    @if($userType !== 'docente')
        <!-- Buscando docentes -->
        <x-docente-search />
    @endif
</div>
    <!-- Campo oculto para almacenar el email seleccionado -->
    <input type="hidden" id="selectedDocenteEmail" name="email">
    <!-- Input dinámico y botón para prórroga -->
    <div class="d-flex align-items-center gap-2 mt-2 p-2" style="margin-left:12rem;">
        <input type="number" id="prorrogaInput" class="form-control" min="1" placeholder="Segundos a prorrogar" style="width: 200px;">
        <button id="prorrogarTimerBtn" class="btn btn-primary">Prorrogar</button>
        <span id="conversionLabel" class="text-muted" style="margin-left: 1rem;"></span>
    </div>

    </header>
            
</body>
<script>

const docenteSearch = document.getElementById('docenteSearch');
const docenteSuggestions = document.getElementById('docenteSuggestions');
const selectedDocenteEmail = document.getElementById('selectedDocenteEmail');
const adminResetTimerUrl = @json(route('admin.reset.timer'));
const input = document.getElementById('prorrogaInput');
const conversionLabel = document.getElementById('conversionLabel');

// 🔹 Conversión automática segundos → minutos:segundos
input.addEventListener('input', () => {
    const segundos = parseInt(input.value, 10);
    if (!isNaN(segundos) && segundos > 0) {
        const minutos = Math.floor(segundos / 60);
        const resto = segundos % 60;
        conversionLabel.textContent = `🕒 Equivale a ${minutos} min ${resto} seg`;
    } else {
        conversionLabel.textContent = '';
    }
});

// 🔹 Búsqueda de docentes (igual que antes)
docenteSearch.addEventListener('input', async function() {
    const search = this.value;
    if (!search) {
        docenteSuggestions.style.display = 'none';
        return;
    }

    const res = await fetch(`/formato-evaluacion/get-docentes?search=${search}`);
    const docentes = await res.json();

    docenteSuggestions.innerHTML = '';
    docentes.forEach(d => {
        const li = document.createElement('li');
        li.classList.add('list-group-item', 'list-group-item-action');
        li.textContent = `${d.nombre} (${d.email})`;
        li.addEventListener('click', () => {
            docenteSearch.value = d.nombre;
            selectedDocenteEmail.value = d.email;
            docenteSuggestions.style.display = 'none';
        });
        docenteSuggestions.appendChild(li);
    });

    docenteSuggestions.style.display = docentes.length ? 'block' : 'none';
});

// 🔹 Envío de prórroga
document.getElementById('prorrogarTimerBtn').addEventListener('click', async () => {
    const email = selectedDocenteEmail.value;
    const segundosExtra = parseInt(input.value, 10);

    if (!email) {
        alert('Selecciona un docente primero');
        return;
    }

    if (isNaN(segundosExtra) || segundosExtra <= 0) {
        alert('Ingresa un valor válido en segundos');
        return;
    }

    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    const res = await fetch(adminResetTimerUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify({ email, segundosExtra })
    });

    if (res.ok) {
        const data = await res.json();
        // 🔹 Actualiza el timer del lado del docente si está abierta su sesión
        if (window.resetTimerAdmin) {
            window.resetTimerAdmin(data.nuevoTiempo);
        }

        alert(`✅ Se asignaron ${segundosExtra} segundos al docente ${email}`);
        input.value = '';
        conversionLabel.textContent = '';
    } else {
        const errorData = await res.json().catch(() => null);
        console.error(errorData);
        alert('❌ Error al prorrogar el timer');
    }
});


</script>

</html>

