<?php
if ($_POST) {
    [$a, $b, $c, $d] = [$_POST["a"], $_POST["b"], $_POST["c"], $_POST["d"]];

    $n = $a * 1000 + $b * 100 + $c * 10 + $d;
    $redondeado = round($n / 100) * 100;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Redondeo a la centena</title></head>
<body>
    <h2>Redondear a la centena más próxima</h2>
    <form method="post">
        A (millares): <input type="number" name="a" min="1" max="9" required><br><br>
        B (centenas): <input type="number" name="b" min="0" max="9" required><br><br>
        C (decenas): <input type="number" name="c" min="0" max="9" required><br><br>
        D (unidades): <input type="number" name="d" min="0" max="9" required><br><br>
        <button>Redondear</button>
    </form>

    <?php if (isset($n)): ?>
        <h3>Resultados</h3>
        <p>Número formado (N): <?= $n ?></p>
        <p>Redondeado a la centena: <?= $redondeado ?></p>
    <?php endif; ?>
</body>
</html>
