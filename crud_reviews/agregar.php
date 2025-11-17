<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Reseña</title>
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
        <h2>Agregar Nueva Reseña</h2>

        <form action="insertar.php" method="POST">

            <div class="input-group">
                <label>Nombre del Usuario</label>
                <input type="text" name="nombre" placeholder="Ej: Juan Pérez" required>
            </div>

            <div class="input-group">
                <label>Opinión</label>
                <textarea name="opinion" rows="4" placeholder="Escribe la opinión del cliente..." required></textarea>
            </div>

            <div class="form-buttons">
                <button type="submit" class="btn-save">Guardar</button>
                <a href="reviews.php" class="btn-cancel">Volver</a>
            </div>

        </form>
    </div>

</main>

<footer class="footer">
    <p>© 2025 GuitarHero | Dulce de leche</p>
</footer>

</body>
</html>
