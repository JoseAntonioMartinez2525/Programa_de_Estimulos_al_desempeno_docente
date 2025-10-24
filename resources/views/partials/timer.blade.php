<script>
document.addEventListener('DOMContentLoaded', function () {
  (function () {

    // 🔹 Configuración
    const TIEMPO_TOTAL = @json($tiempoTotal ?? 15 * 60); // default 15 min
    const userEmail = "{{ Auth::user()->email }}";
    const STORAGE_KEY = `tiempoRestante_${userEmail}`;
    const EXPIRED_KEY = `tiempoExpirado_${userEmail}`;

  let timerDisplay = document.getElementById("timerDisplay");

  if (!timerDisplay) {
    timerDisplay = document.createElement("div");
    timerDisplay.id = "timerDisplay";
    timerDisplay.style.position = "fixed";
    timerDisplay.style.top = "10px";
    timerDisplay.style.right = "10px";
    timerDisplay.style.background = "rgb(34 34 34)";
    timerDisplay.style.color = "rgb(255 255 255)";
    timerDisplay.style.padding = "10px 15px";
    timerDisplay.style.borderRadius = "8px";
    timerDisplay.style.fontWeight = "bold";
    timerDisplay.style.zIndex = "9999";
    timerDisplay.style.fontFamily = "monospace";
    document.body.appendChild(timerDisplay);
  }

    let tiempoRestante = null;
    let intervalo = null;

    // 🔹 Función para actualizar el display del timer
    function actualizarDisplay() {
      const minutos = Math.floor(tiempoRestante / 60);
      const segundos = tiempoRestante % 60;
      timerDisplay.textContent = `⏱ Tiempo restante: ${minutos}:${segundos < 10 ? '0'+segundos : segundos}`;

      const porcentaje = tiempoRestante / TIEMPO_TOTAL;
      if (porcentaje > 0.5) {
        timerDisplay.style.backgroundColor = "#006400"; // verde
        timerDisplay.style.color = "#fff";
      } else if (porcentaje > 0.2) {
        timerDisplay.style.backgroundColor = "#FFD700"; // amarillo
        timerDisplay.style.color = "#000";
      } else {
        timerDisplay.style.backgroundColor = "#B22222"; // rojo
        timerDisplay.style.color = "#fff";
      }
    }

    // 🔹 Bloquear formularios
    function bloquearFormularios() {
      document.querySelectorAll("form").forEach(f => {
        f.querySelectorAll("input, select, button, textarea").forEach(el => el.disabled = true);
      });
    }

    // 🔹 Mostrar timer finalizado
    function mostrarFinalizado() {
      timerDisplay.textContent = "⏰ Tiempo finalizado";
      timerDisplay.style.background = "red";
      timerDisplay.style.color = "#fff";

    

    }



    // 🔹 Finalizar timer
    function finalizarFormularios() {
      clearInterval(intervalo);
      bloquearFormularios();
      mostrarFinalizado();
      localStorage.setItem(EXPIRED_KEY, "true");
      localStorage.removeItem(STORAGE_KEY);

      // Actualizamos estado en BD
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
        if(tiempoRestante <= 0){
          finalizarFormularios();
        } else {
          tiempoRestante--;
          localStorage.setItem(STORAGE_KEY, tiempoRestante);
          actualizarDisplay();
        }
      }, 1000);
    }

    // 🔹 Inicialización híbrida (localStorage + BD)
    if (localStorage.getItem(EXPIRED_KEY) === "true") {
      // Si ya expiró para este usuario
      bloquearFormularios();
      mostrarFinalizado();
   
    } else if (localStorage.getItem(STORAGE_KEY)) {
      // Continuar desde localStorage
      tiempoRestante = parseInt(localStorage.getItem(STORAGE_KEY), 10);
      iniciarTimer();
    } else {
      // Traer desde BD
      fetch('/timer') // endpoint que retorna { tiempo_restante, expirado }
        .then(r => r.json())
        .then(data => {
          tiempoRestante = data.tiempo_restante ?? TIEMPO_TOTAL;
          if(data.expirado){
            bloquearFormularios();
            mostrarFinalizado();
            localStorage.setItem(EXPIRED_KEY, "true");
            // timerDisplay.style.background = "rgb(255,255,255)"; div#timerDisplay
          } else {
            localStorage.setItem(STORAGE_KEY, tiempoRestante);
            iniciarTimer();
          }
        });
    }

    // 🔹 Función para admin: reiniciar/prorrogar timer
    window.resetTimerAdmin = function(nuevoTiempoSegundos){
      tiempoRestante = nuevoTiempoSegundos ?? TIEMPO_TOTAL;
      localStorage.setItem(STORAGE_KEY, tiempoRestante);
      localStorage.removeItem(EXPIRED_KEY);
      iniciarTimer();

      // Actualizar BD
      fetch('/timer/update', {
        method: 'POST',
        headers: { 
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Content-Type': 'application/json' 
        },
        body: JSON.stringify({ expirado: false, tiempo_restante: tiempoRestante })
      });
    }

  })();
});
</script>

