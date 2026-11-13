<?php
if ($_POST) {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $monto = $_POST["monto"];

    if ($monto < 500)         $porc = 0;
    elseif ($monto <= 1000)   $porc = 5;
    elseif ($monto <= 7000)   $porc = 11;
    elseif ($monto <= 15000)  $porc = 18;
    else                      $porc = 25;

    $descuento = $monto * $porc / 100;
    $pagar = $monto - $descuento;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Descuentos de la tienda</title></head>
<body>
    <h2>Descuento por monto de compra</h2>
    <form method="post">
        Nombre del cliente: <input type="text" name="nombre" required><br><br>
        Monto de la compra ($): <input type="number" step="any" name="monto" min="0" required><br><br>
        <button>Calcular</button>
    </form>

    <?php if (isset($pagar)): ?>
        <h3>Resultados</h3>
        <p>Cliente: <?= $nombre ?></p>
        <p>Monto de la compra: $<?= number_format($monto, 2) ?></p>
        <p>Descuento recibido (<?= $porc ?>%): $<?= number_format($descuento, 2) ?></p>
        <p>Monto a pagar: $<?= number_format($pagar, 2) ?></p>
    <?php endif; ?>
</body>
</html>