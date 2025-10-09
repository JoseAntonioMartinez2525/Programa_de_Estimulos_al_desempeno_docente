<script>
window.ENDPOINTS = {!! json_encode([
    'getTotalDocenciaEvaluar'    => url('/get-total-docencia-evaluar'),
    'getTotalDocencia'           => url('/get-total-docencia'),
    'getDictaminatorsResponses'  => url('/get-dictaminators-responses'),
    // agrega más endpoints que vayas a reutilizar
]) !!};
console.log('ENDPOINTS', window.ENDPOINTS);
</script>