<?php
if ($_POST) {
    $total = $_POST["piezas"] * $_POST["precio"];

    if ($total > 500000) { $propio = $total * 0.55; $banco = $total * 0.30; $credito = $total * 0.15; }
    else                 { $propio = $total * 0.70; $banco = 0;             $credito = $total * 0.30; }

    $intereses = $credito * 0.20;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Compra de piezas</title></head>
<body>
    <h2>Compra de piezas</h2>
    <form method="post">
        Cantidad de piezas: <input type="number" name="piezas" min="1" required><br><br>
        Precio por pieza ($): <input type="number" step="any" name="precio" min="0" required><br><br>
        <button>Calcular</button>
    </form>

    <?php if (isset($total)): ?>
        <h3>Resultados</h3>
        <p>Monto total de la compra: $<?= number_format($total, 2) ?></p>
        <p>Inversión de la empresa: $<?= number_format($propio, 2) ?></p>
        <p>Cantidad a pagar a crédito: $<?= number_format($credito, 2) ?></p>
        <p>Intereses del fabricante (20%): $<?= number_format($intereses, 2) ?></p>
        <?php if ($banco > 0) echo "<p>Préstamo al banco: $" . number_format($banco, 2) . "</p>"; ?>
    <?php endif; ?>
</body>
</html>
