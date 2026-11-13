<?php
if ($_POST) {
    $temp = $_POST["temp"];

    if ($temp > 85)       $deporte = "Natación";
    elseif ($temp > 70)   $deporte = "Tenis";
    elseif ($temp > 32)   $deporte = "Golf";
    elseif ($temp > 10)   $deporte = "Esquí";
    else                  $deporte = "Marcha";
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Deporte según la temperatura</title></head>
<body>
    <h2>Deporte apropiado según la temperatura</h2>
    <form method="post">
        Temperatura (°F): <input type="number" step="any" name="temp" required><br><br>
        <button>Consultar</button>
    </form>

    <?php if (isset($deporte)): ?>
        <h3>Resultado</h3>
        <p>Con <?= $temp ?> °F el deporte apropiado es: <strong><?= $deporte ?></strong></p>
    <?php endif; ?>
</body>
</html>