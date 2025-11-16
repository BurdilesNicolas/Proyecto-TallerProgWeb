<?php
include("db.php");

if (!isset($_GET['id'])) {
    header("Location: reviews.php");
    exit();
}

$id = intval($_GET['id']);
$sql = "SELECT * FROM Cliente WHERE id_cliente = $id";
$resultado = mysqli_query($conn, $sql);

if (!$fila = mysqli_fetch_assoc($resultado)) {
    echo "Reseña no encontrada.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Editar Reseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container mt-4" style="max-width: 600px;">
        <h1>Editar Reseña</h1>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id_cliente" value="<?= $fila['id_cliente'] ?>">
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" value="<?= htmlspecialchars($fila['nombre']) ?>" required>
            </div>
            
            <div class="mb-3">
                <label for="opinion" class="form-label">Opinión</label>
                <input type="text" id="opinion" name="opinion" class="form-control" value="<?= htmlspecialchars($fila['opinion']) ?>" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="reviews.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
