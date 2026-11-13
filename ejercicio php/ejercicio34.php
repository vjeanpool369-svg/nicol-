<?php
if ($_POST) {
    $categoria = $_POST["categoria"];
    $sueldo = $_POST["sueldo"];

    $aumentos = [1 => 15, 2 => 10, 3 => 8, 4 => 7];
    $porc = $aumentos[$categoria];

    $aumento = $sueldo * $porc / 100;
    $nuevo = $sueldo + $aumento;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Aumento de sueldo</title></head>
<body>
    <h2>Aumento de sueldo por categoría</h2>
    <form method="post">
        Categoría:
        <select name="categoria">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>
        Sueldo actual ($): <input type="number" step="any" name="sueldo" min="0" required><br><br>
        <button>Calcular</button>
    </form>

    <?php if (isset($nuevo)): ?>
        <h3>Resultados</h3>
        <p>Categoría del trabajador: <?= $categoria ?></p>
        <p>Aumento (<?= $porc ?>%): $<?= number_format($aumento, 2) ?></p>
        <p>Nuevo sueldo: $<?= number_format($nuevo, 2) ?></p>
    <?php endif; ?>
</body>
</html>