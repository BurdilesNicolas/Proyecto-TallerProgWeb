<?php
require "db.php";
$resultado = mysqli_query($conn, "SELECT * FROM Cliente");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Reseñas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/fijo.css">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>
    <header>
    <div class="logo">
      <h1>GUITAR<span>HERO</span></h1>
    </div>
    <nav>
      <ul>
        <li><a href="../index.php">Inicio</a></li>
        <li><a href="../galeria.php">Galeria</a></li>
        <li><a href="crud_reviews/reviews.php">Reseñas</a></li>
        <li><a href="../contactos.php">Contacto</a></li>
      </ul>
    </nav>
  </header>
    <main>
<h1 class="m-3">Lista de Reseñas</h1>

<table class="table table-striped mx-3 p-2" style="width: 800px">
    <thead>
        <tr>
            <th>Nombre de Usuario</th>
            <th>Opinión</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>

    <?php while ($fila = mysqli_fetch_assoc($resultado)) { ?>
        <tr>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['opinion'] ?></td>
            <td>
                <a href="editar.php?id=<?= $fila['id_cliente'] ?>">Editar</a> |
                <a href="eliminar.php?id=<?= $fila['id_cliente'] ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>
            </td>
        </tr>
    <?php } ?>

    </tbody>
</table>

<a class="btn btn-outline-dark m-3" href="agregar.php">Agregar Reseña</a>
</main>
  <footer>
    <p>© 2025 GuitarHero| Dulce de leche</p>
  </footer>
</body>
</html>
