<?php
if ($_POST) {
    $p = $_POST["p"];
    $q = $_POST["q"];

    $resultado = $p ** 3 + $q ** 4 - 2 * $p ** 2;
    $cumple = $resultado > 680;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Expresión P y Q</title></head>
<body>
    <h2>P³ + Q⁴ - 2·P² &gt; 680</h2>
    <form method="post">
        P: <input type="number" name="p" required><br><br>
        Q: <input type="number" name="q" required><br><br>
        <button>Verificar</button>
    </form>

    <?php if (isset($cumple)): ?>
        <h3>Resultado</h3>
        <p>Valor de la expresión: <?= $resultado ?></p>
        <?php if ($cumple): ?>
            <p>Sí cumple la expresión. P = <?= $p ?> y Q = <?= $q ?></p>
        <?php else: ?>
            <p>Los valores P = <?= $p ?> y Q = <?= $q ?> no satisfacen la expresión.</p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>