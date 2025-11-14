<?php
require "db.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM Cliente WHERE id_cliente = $id");

header("Location: reviews.php");
?>
