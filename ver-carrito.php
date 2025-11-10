<?php
include("conexion.php");
$resultado = $conexion->query("SELECT * FROM carrito");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carrito</title>
</head>
<body>
  <h2>Carrito de compras</h2>
  <table border="1">
    <tr>
      <th>Producto</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Total</th>
      <th>Acciones</th>
    </tr>
    <?php while($fila = $resultado->fetch_assoc()){ ?>
      <tr>
        <td><?php echo $fila["producto"]; ?></td>
        <td><?php echo $fila["cantidad"]; ?></td>
        <td><?php echo $fila["precio"]; ?></td>
        <td><?php echo $fila["cantidad"] * $fila["precio"]; ?></td>
        <td>
          <a href="editar_carrito.php?id=<?php echo $fila["id"]; ?>">Editar</a>
        </td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>
