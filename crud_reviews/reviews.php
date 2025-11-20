<?php
include("db.php");
$resultado = mysqli_query($conn, "SELECT * FROM Cliente");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reseñas de Usuarios</title>
    <link rel="stylesheet" href="../CSS/reviews.css">
    <link rel="stylesheet" href="../CSS/fijo.css">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
</style>
</head>
<body>

<header class="header">
    <div class="logo">
              <img src="../img/logo guitarhero.png" width="250">
    </div>
    <nav class="nav">
        <ul>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../galeria.php">Galería</a></li>
            <li><a href="#">Reseñas</a></li>
            <li><a href="../contactos.php">Contacto</a></li>
        </ul>
    </nav>
</header>


<main>
    <h1 class="titulo">Reseñas de Nuestros Clientes</h1>

    <div class="reviews-grid">

        <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
        
        <div class="review-card">
            <div class="review-user">
                <h3><?= $fila['nombre'] ?></h3>
            </div>

            <p class="review-text">
                "<?= $fila['opinion'] ?>"
            </p>

            <div class="review-actions">
                <a class="btn-edit" href="editar.php?id=<?= $fila['id_cliente'] ?>">Editar</a>
                <a class="btn-delete" href="eliminar.php?id=<?= $fila['id_cliente'] ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
            </div>
        </div>

        <?php } ?>

    </div>

<div class="add-btn-container">
    <a class="btn-add" href="agregar.php">+ Agregar Reseña</a>
</div>

</main>


<footer class="footer">
    <p>© 2025 GuitarHero | Dulce de leche</p>
</footer>

</body>
</html>
