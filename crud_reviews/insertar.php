<?php
require "db.php";

$nombre = $_POST['nombre'];
$opinion = $_POST['opinion'];

mysqli_query($conn, "INSERT INTO Cliente (nombre, opinion) VALUES ('$nombre', '$opinion')");

header("Location: reviews.php");
?>
