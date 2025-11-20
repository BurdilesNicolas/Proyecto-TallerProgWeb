<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - GuitarHero</title>
  <link rel="stylesheet" href="CSS/contac.css">
  <link rel="stylesheet" href="CSS/fijo.css">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap');
  </style>
</head>

<body>
  <header>
    <div class="logo">
      <img src="img/logo guitarhero.png" width="250">
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="crud_reviews/reviews.php">Reseñas</a></li>
        <li><a href="contactos.php" class="activo">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <main>

    <!-- Título -->
    <h1 class="titulo">Comunicate con nosotros</h1>

    <!-- Redes -->
    <section class="parent">
      <div class="caja">
        <h3>Instagram</h3>
        <a href="https://www.instagram.com/fender/"><img src="img/Instagram_logo_2022.svg"></a>
      </div>
      <div class="caja">
        <h3>Facebook</h3>
        <a href="https://www.facebook.com/Fender/"><img src="img/faceboologo.png"></a>
      </div>
      <div class="caja">
        <h3>Tik Tok</h3>
        <a href="https://www.tiktok.com/@fender"><img src="img/tiktoklogo2.png"></a>
      </div>
      <div class="caja">
        <h3>X</h3>
        <a href="https://x.com/Fender"><img src="img/logotwiter.avif"></a>
      </div>
    </section>

    <!-- Datos de contacto -->
    <section class="datos">
      <h2>Información de contacto</h2>
      <p><strong>📍 Dirección:</strong> Av. Siempre Viva 123, Buenos Aires</p>
      <p><strong>📞 Teléfono:</strong> +54 11 5555-5555</p>
      <p><strong>📧 Email:</strong> contacto@guitarhero.com</p>
      <p><strong>🕓 Horarios:</strong> Lunes a Sábado – 9:00 a 20:00</p>
    </section>

    <!-- Formulario -->
    <section class="formulario-contenedor">
      <h2>Envíanos un mensaje</h2>

      <form action="#" method="post" class="formulario">

        <label>Nombre</label>
        <input type="text" name="nombre" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Mensaje</label>
        <textarea name="mensaje" rows="5" required></textarea>

        <button type="submit">Enviar</button>
      </form>
    </section>

    <!-- Mapa -->
    <section class="mapa">
      <h2>Donde estamos</h2>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.922955561939!2d-58.451236!3d-34.556725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5b8f9fbffed%3A0x61d88e8ec8c4e75e!2sFender%20Store!5e0!3m2!1ses!2sar!4v1697499999999"
        width="100%" 
        height="300" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </section>

    <!-- Socios -->
    <section class="socios">
      <h3>Socios</h3>
      <a href="https://intl.fender.com/">
        <img src="img/fendersocio.png" alt="Fender" width="120">
      </a>
    </section>

  </main>

  <footer>
    <p>© 2025 GuitarHero | Dulce de leche</p>
  </footer>

</body>
</html>
