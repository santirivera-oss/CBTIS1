<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $bd = "cbtis1";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $bd );

?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CBTIS Institucional</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   <!-- Librería de iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="script.js"></script>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CBTIS 1 Fresnillo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- HEADER -->
  <header>

<header>
 <header class="hero-header">
  <div class="overlay"></div>
  <div class="hero-content">
    <h1>CBTis 1</h1>
    <p>✉️ Contacto</p>
    <!-- Íconos de redes -->
    <div class="iconos-redes">
      <a href="https://www.facebook.com/profile.php?id=100083165298765"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/cbtis001?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a>
      <a href="https://wa.me/4939326715"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
  </div>
</header>

      <!-- Nivel 2: Menú -->
  <nav class="header-nav">
    <a href="index.html">🏠 Inicio</a>
    <a href="direccion.html">📍 Dirección</a>
    <a href="escolares.html">📚 Escolares</a>
    <a href="docentes.html">👔 Docentes</a>
    <a href="administrativa.html">📂 Administrativa</a>
    <a href="contacto.html">✉️ Contacto</a>
  </nav>
    <!-- Menú hamburguesa para móviles -->
  <div class="hamburger" onclick="toggleMenu()">☰</div>
</header>

</header>

<main>
  <!-- SECCIÓN DE CONTACTO -->
<section class="contacto" id="contacto">
  <h2>Contáctanos</h2>
  <p class="intro">
    Estamos aquí para resolver tus dudas. Escríbenos o visítanos en nuestras instalaciones.
  </p>

  <div class="contacto-contenedor">
    <!-- Formulario -->
    <div class="contacto-form">
      <form action="#" method="POST" name="ejemplo">
        <div class="form-group">
          <label for="nombre">Nombre completo</label>
          <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre" required>
        </div>

        <div class="form-group">
          <label for="correo">Correo electrónico</label>
          <input type="email" id="correo" name="correo" placeholder="Ejemplo: alumno@correo.com" required>
        </div>

        <div class="form-group">
          <label for="mensaje">Mensaje</label>
          <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu mensaje aquí..." required></textarea>
        </div>

        <button type="submit" class="btn-enviar" name="enviar">Enviar</button>
      </form>
    </div>

    <!-- Información de contacto -->
    <div class="contacto-info">
      <h3>Datos de contacto</h3>
      <p><strong>Dirección:</strong> C. Magisterio 23, Tecnologica, 99020 Fresnillo, Zac</p>
      <p><strong>Teléfono:</strong> (493) 932 6715</p>
      <p><strong>Correo:</strong> cbtis001.orientacion@dgeti.sems.gob.mx</p>
      <p><strong>Horario:</strong> Lunes a Viernes, 8:00 AM - 8:00 PM</p>

      <!-- Redes sociales -->
      <div class="social">
        <a href="https://www.facebook.com/profile.php?id=100083165298765"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook"></a>
        <a href="https://www.instagram.com/cbtis001?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><img src="https://cdn-icons-png.flaticon.com/512/733/733558.png" alt="Instagram"></a>
        <a href="https://wa.me/4939326715"><img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp"></a>
      </div>
    </div>
  </div>
</section>





</main>



<style>
  .pagina-dev {
    background-color: #00000014; /* azul marino */
    color: white;
    padding: 6px 12px;
    text-decoration: none;
    border-radius: 4px;
    font-size: 14px;
  }
  .pagina-dev:hover {
    background-color: #6d0f0f; /* un tono más oscuro al pasar el mouse */
  }
</style>
  <!-- FOOTER -->
  <footer>
    <!-- Íconos de redes -->
    <div class="iconos-redes">
      <a href="https://www.facebook.com/profile.php?id=100083165298765"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/cbtis001?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fa-brands fa-instagram"></i></a>
      <a href="https://wa.me/4939326715"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
    <br><br>
    <a href="https://santirivera-oss.github.io/Web-Finanzas-E-inversiones" target="_blank" class="pagina-dev">Dev Santiago</a>
    <br><br>
    <p>© CBTIS No.001 Fresnillo - Todos los derechos reservados.</p>
    <br>
  </footer>

  <script src="script.js"></script>
</body>
</html>

<?php

  if(isset($_POST['enviar'])){
      
      $nombre = $_POST['nombre'];
      $correo = $_POST['correo'];
      $mensaje = $_POST['mensaje'];
      
      $insertar = "INSERT INTO datos Values ('$nombre','$correo','$mensaje','')";
      
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>
