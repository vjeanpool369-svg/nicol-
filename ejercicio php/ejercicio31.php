<?php
if ($_POST) {
    $km = $_POST["km"];

    if ($km <= 300)       $pago = 5000;
    elseif ($km <= 1000)  $pago = 5000 + 200 * ($km - 300);
    else                  $pago = 5000 + 200 * 700 + 150 * ($km - 1000);
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Alquiler de automóviles</title></head>
<body>
    <h2>Alquiler de automóviles</h2>
    <form method="post">
        Kilómetros recorridos: <input type="number" step="any" name="km" min="0" required><br><br>
        <button>Calcular</button>
    </form>

    <?php if (isset($pago)): ?>
        <h3>Resultado</h3>
        <p>Distancia recorrida: <?= $km ?> km</p>
        <p>Total a pagar: <?= number_format($pago, 2) ?> Bolívares</p>
    <?php endif; ?>
</body>
</html>
