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
    <meta charset="UTF-8">
    <title>Editar Reseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/fijo.css">
    <link rel="stylesheet" href="../CSS/review_form.css">

</head>
<body>

<header class="header">
    <div class="logo">
        <h1>GUITAR<span>HERO</span></h1>
    </div>
</header>

<main class="form-container">
    <div class="form-card">
        <h2>Editar Reseña</h2>

        <form action="actualizar.php" method="POST">

            <input type="hidden" name="id_cliente" value="<?= $fila['id_cliente'] ?>">

            <div class="input-group">
                <label>Nombre del Usuario</label>
                <input type="text" name="nombre" value="<?= htmlspecialchars($fila['nombre']) ?>" required>
            </div>

            <div class="input-group">
                <label>Opinión</label>
                <textarea name="opinion" rows="4" required><?= htmlspecialchars($fila['opinion']) ?></textarea>
            </div>

            <div class="form-buttons">
                <button type="submit" class="btn-save">Actualizar</button>
                <a href="reviews.php" class="btn-cancel">Cancelar</a>
            </div>

        </form>
    </div>
</main>

<footer class="footer">
    <p>© 2025 GuitarHero | Dulce de leche</p>
</footer>

</body>
</html>
