<?php
if ($_POST) {
    [$v1, $v2, $v3] = [$_POST["v1"], $_POST["v2"], $_POST["v3"]];

    if (abs($v1 * $v2 / 2 - $v3) < 0.0001)       $msg = "Es un Triángulo";
    elseif (abs($v2 * $v1 ** 2 - $v3) < 0.0001)  $msg = "Es un Círculo";
    elseif (abs($v1 * $v2 - $v3) < 0.0001)       $msg = "Es un Rectángulo";
    else                                         $msg = "No es ninguna figura conocida";
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Figuras</title></head>
<body>
    <h2>¿Qué figura es?</h2>
    <form method="post">
        Valor 1: <input type="number" step="any" name="v1" required><br><br>
        Valor 2: <input type="number" step="any" name="v2" required><br><br>
        Valor 3 (área): <input type="number" step="any" name="v3" required><br><br>
        <button>Analizar</button>
    </form>
    <?php if (isset($msg)) echo "<h3>$msg</h3>"; ?>
</body>
</html>

