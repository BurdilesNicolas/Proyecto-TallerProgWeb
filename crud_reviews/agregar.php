<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Reseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<h1 class="m-3">Agregar Reseña</h1>

<form action="insertar.php" method="POST" class="mx-3 p-2" style="width:600px">
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Opinión</label>
        <input type="text" name="opinion" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-outline-dark">Guardar</button>
    <a class="btn btn-outline-dark m-3" href="reviews.php">Volver</a>
</form>

</body>
</html>
