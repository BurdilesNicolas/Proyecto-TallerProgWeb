<?php
include("conexion.php");

$id = $_GET["id"];
$consulta = $conexion->query("SELECT * FROM carrito WHERE id=$id");
$fila = $consulta->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST["cantidad"];
    $sql = "UPDATE carrito SET cantidad='$cantidad' WHERE id=$id";

    if ($conexion->query($sql) === TRUE) {
        header("Location: ver_carrito.php");
    } else {
        echo "Error al actualizar: " . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Editar Carrito</title>
</head>
<body>
  <h2>Editar cantidad</h2>
  <form method="POST">
    <label>Nueva cantidad:</label>
    <input type="number" name="cantidad" value="<?php echo $fila['cantidad']; ?>" min="1">
    <button type="submit">Actualizar</button>
  </form>
</body>
</html>
