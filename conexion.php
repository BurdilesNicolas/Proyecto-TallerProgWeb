<?php
$conexion = new mysqli("localhost", "root", "", "tienda_guitarras");

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}
?>