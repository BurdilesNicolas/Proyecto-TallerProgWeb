<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $cantidad = $_POST["cantidad"];

    $sql = "INSERT INTO carrito (producto, cantidad, precio) VALUES ('$producto', '$cantidad', '$precio')";
    if ($conexion->query($sql) === TRUE) {
        echo "Producto agregado al carrito.";
    } else {
        echo "Error: " . $conexion->error;
    }
}

$conexion->close();
?>