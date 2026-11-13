<?php
if ($_POST) {
    $ventas = [$_POST["v1"], $_POST["v2"], $_POST["v3"]];
    $salario = $_POST["salario"];
    $total = array_sum($ventas);

    foreach ($ventas as $i => $v) {
        $extra[$i] = ($v > $total * 0.33) ? $salario * 0.20 : 0;
        $pago[$i]  = $salario + $extra[$i];
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Incentivos de ventas</title></head>
<body>
    <h2>Incentivos por departamento</h2>
    <form method="post">
        Ventas Departamento 1: <input type="number" step="any" name="v1" min="0" required><br><br>
        Ventas Departamento 2: <input type="number" step="any" name="v2" min="0" required><br><br>
        Ventas Departamento 3: <input type="number" step="any" name="v3" min="0" required><br><br>
        Salario mensual de cada vendedor ($): <input type="number" step="any" name="salario" min="0" required><br><br>
        <button>Calcular</button>
    </form>

    <?php if (isset($total)): ?>
        <h3>Resultados</h3>
        <p>Ventas totales: $<?= number_format($total, 2) ?></p>
        <?php foreach ($pago as $i => $p): ?>
            <p>Departamento <?= $i + 1 ?>:
               cada vendedor recibe $<?= number_format($p, 2) ?>
               <?= $extra[$i] > 0 ? "(incluye incentivo de $" . number_format($extra[$i], 2) . ")" : "(sin incentivo)" ?>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>