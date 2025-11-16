<?php
include("db.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id_cliente']);
    $nombre = mysqli_real_escape_string($conn, $_POST['nombre']);
    $opinion = mysqli_real_escape_string($conn, $_POST['opinion']);

    $sql = "UPDATE Cliente SET nombre='$nombre', opinion='$opinion' WHERE id_cliente=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: reviews.php");
        exit();
    } else {
        echo "Error al actualizar: " . mysqli_error($conn);
    }
} else {
    header("Location: reviews.php");
    exit();
}
