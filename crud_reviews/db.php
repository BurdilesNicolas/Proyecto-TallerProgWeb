<?php
$conn = mysqli_connect("localhost", "root", "", "reseñas_db");

if (!$conn) {
    die("Error en la conexión: " . mysqli_connect_error());
}
?>
