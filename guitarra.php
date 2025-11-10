<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guitarra SG Vintage</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
  <header>
    <div class="logo">
      <h1>GUITAR<span>HERO</span></h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="galeria.html">Galería</a></li>
        <li><a href="#">Consultas</a></li>
        <li><a href="contactos.html">Contacto</a></li>
      </ul>
        <nav>
    <a href="index.php">Inicio</a>
    <a href="ver_carrito.php">🛒 Ver carrito</a>
  </nav>
    </nav>
  </header>

  <main class="detalle-guitarra">
    <div class="contenedor-producto">

      <div class="imagenes">
        <img src="img/SG_Historic_SGSR64VOCHNM1.webp" alt="Guitarra SG Vintage">
        <img src="img/SG_Historic_SGSR64VOCHNM1.webp" alt="Detalle cuerpo guitarra">
      </div>

      <div class="info-producto">
        <h2>Gibson SG Standard '61 Vintage Cherry</h2>
        <p class="etiqueta">Producto exclusivo</p>
        <p class="precio">€1.999</p>

        <p class="acabado">Acabado: Vintage Cherry</p>

        <div class="botones-compra">
          <button class="carrito">Añadir al carrito</button>
          <button class="comprar">Comprar ahora</button>
          <form action="agregar_carrito.php" method="POST" class="form-carrito">
  <input type="hidden" name="producto" value="Fender Stratocaster">
  <input type="hidden" name="precio" value="950.00">

  <label for="cantidad">Cantidad:</label>
  <input type="number" id="cantidad" name="cantidad" value="1" min="1">

  <button type="submit">Agregar al carrito</button>
</form>

        </div>

        <div class="beneficios">
          <details><summary>Garantía de por vida</summary></details>
          <details><summary>Incluye estuche rígido</summary></details>
          <details><summary>Ajuste y calibración incluidos</summary></details>
        </div>
      </div>
    </div>

    <section class="descripcion">
      <h3>The Classic SG For Any Generation</h3>
      <p>
        La SG Standard '61 conserva el diseño clásico que la hizo relevante y amada a través de generaciones.
        Su cuerpo de caoba sólida, doble cutaway y mástil de perfil SlimTaper™ ofrecen un sonido potente y una
        comodidad excepcional. Ideal para músicos que buscan un tono clásico con un toque moderno.
      </p>
    </section>
  </main>

  <footer>
    <p>© 2025 GuitarHero | Dulce de leche</p>
  </footer>
</body>
</html>
