<script>
document.addEventListener('DOMContentLoaded', function () {
  (function () {

    // 🔹 Configuración inicial
    const TIEMPO_TOTAL = @json($tiempoTotal ?? 15 * 60); // default 15 min
    const userEmail = "{{ Auth::user()->email }}";
    const STORAGE_KEY = `tiempoRestante_${userEmail}`;
    const EXPIRED_KEY = `tiempoExpirado_${userEmail}`;
    let tiempoRestante = TIEMPO_TOTAL;
    let intervalo = null;

    // 🔹 Crear display si no existe
    let timerDisplay = document.getElementById("timerDisplay");
    if (!timerDisplay) {
        timerDisplay = document.createElement("div");
        timerDisplay.id = "timerDisplay";
        Object.assign(timerDisplay.style, {
            position: "fixed",
            top: "10px",
            right: "10px",
            background: "rgb(34 34 34)",
            color: "rgb(255 255 255)",
            padding: "10px 15px",
            borderRadius: "8px",
            fontWeight: "bold",
            zIndex: "9999",
            fontFamily: "monospace"
        });
        document.body.appendChild(timerDisplay);
    }

    // 🔹 Función para actualizar display
    function actualizarDisplay() {
        const minutos = Math.floor(tiempoRestante / 60);
        const segundos = tiempoRestante % 60;
        timerDisplay.textContent = `⏱ Tiempo restante: ${minutos}:${segundos < 10 ? '0'+segundos : segundos}`;

        const porcentaje = tiempoRestante / TIEMPO_TOTAL;
        if (porcentaje > 0.5) {
            timerDisplay.style.backgroundColor = "#006400";
            timerDisplay.style.color = "#fff";
        } else if (porcentaje > 0.2) {
            timerDisplay.style.backgroundColor = "#FFD700";
            timerDisplay.style.color = "#000";
        } else {
            timerDisplay.style.backgroundColor = "#B22222";
            timerDisplay.style.color = "#fff";
        }
    }

    // 🔹 Bloquear formularios
    function bloquearFormularios() {
        document.querySelectorAll("form").forEach(f =>
            f.querySelectorAll("input, select, button, textarea").forEach(el => el.disabled = true)
        );
    }

    // 🔹 Mostrar timer finalizado
    function mostrarFinalizado() {
        timerDisplay.textContent = "⏰ Tiempo finalizado";
        timerDisplay.style.background = "red";
        timerDisplay.style.color = "#fff";
        timerDisplay.classList.add("expired");
    }

    // 🔹 Finalizar timer
    function finalizarTimer() {
        clearInterval(intervalo);
        bloquearFormularios();
        mostrarFinalizado();
        localStorage.setItem(EXPIRED_KEY, "true");
        localStorage.removeItem(STORAGE_KEY);

        fetch('/timer/update', {
            method: 'POST',
            headers: { 
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ expirado: true, tiempo_restante: 0 })
        });
    }

    // 🔹 Iniciar contador
    function iniciarTimer() {
        actualizarDisplay();
        intervalo = setInterval(() => {
            if (tiempoRestante <= 0) {
                finalizarTimer();
            } else {
                tiempoRestante--;
                localStorage.setItem(STORAGE_KEY, tiempoRestante);
                actualizarDisplay();
            }
        }, 1000);
    }

    // 🔹 Inicialización desde BD
    fetch('/timer')
        .then(r => r.json())
        .then(data => {
            tiempoRestante = data.tiempo_restante ?? TIEMPO_TOTAL;

            if (data.expirado) {
                bloquearFormularios();
                mostrarFinalizado();
                localStorage.setItem(EXPIRED_KEY, "true");
            } else {
                localStorage.setItem(STORAGE_KEY, tiempoRestante);
                localStorage.removeItem(EXPIRED_KEY);
                iniciarTimer();
            }
        });

    // 🔹 Polling: verificar cada 5s si admin extendió tiempo
    setInterval(() => {
        fetch('/timer')
            .then(r => r.json())
            .then(data => {
                const nuevoTiempo = data.tiempo_restante ?? TIEMPO_TOTAL;
                const expirado = data.expirado;

                if (expirado && !timerDisplay.classList.contains('expired')) {
                    finalizarTimer();
                } else if (nuevoTiempo > tiempoRestante) {
                    tiempoRestante = nuevoTiempo;
                    localStorage.setItem(STORAGE_KEY, tiempoRestante);
                    localStorage.removeItem(EXPIRED_KEY);
                    actualizarDisplay();
                }
            }).catch(err => console.error("Error verificando timer:", err));
    }, 5000);

    // 🔹 Función global para admin
    window.resetTimerAdmin = function(nuevoTiempoSegundos){
        tiempoRestante = nuevoTiempoSegundos ?? TIEMPO_TOTAL;
        localStorage.setItem(STORAGE_KEY, tiempoRestante);
        localStorage.removeItem(EXPIRED_KEY);
        actualizarDisplay();
    }

  })();
});
</script>
