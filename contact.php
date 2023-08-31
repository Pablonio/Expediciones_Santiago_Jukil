<!-- Encabezado del documento -->
<!DOCTYPE html>
<html>
<head>
  <title>Sitio Web de Reserva de Hotel</title>
  <!-- Solo CSS -->
  <?php require('inc/links.php'); ?> <!-- Incluye enlaces a archivos CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="css/common.css"> <!-- Incluye hoja de estilos comunes -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> <!-- Incluye el archivo JavaScript de Swiper -->
  <style>
    /* Estilos personalizados */
    .custom-bg {
      background-color: #fa5c05;
      border-color: #fa5c05;
    }

    .custom-btn {
      background-color: #faa935;
      border-color: #faa935;
    }

    .custom-text {
      color: #faa935;
    }
  </style>
</head>
<body>

<?php require('inc/header.php'); ?> <!-- Incluye el encabezado del sitio -->

<!-- Sección de información de contacto -->
<div class="my-5 px-4">
  <h2 class="fw-bold h-font text-center">CONTÁCTANOS</h2> <!-- Título principal -->
  <div class="h-line bg-dark"></div> <!-- Línea divisoria -->
  <p class="text-center mt-3">
    En Santiago Jukil, estamos aquí para responder a tus preguntas, curiosidades y planificar la escapada de tus sueños al Salar de Uyuni. Ya sea que quieras obtener más detalles sobre nuestros emocionantes recorridos, consultar la disponibilidad o personalizar tu experiencia, nuestro equipo de atención al cliente está listo para brindarte asistencia experta.
  </p>
</div>

<div class="container">
  <div class="row">
    <!-- Columna de información de contacto -->
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <!-- Mapa embebido de Google -->
        <iframe class="w-100 rounded mb-4" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63225.996807740055!2d80.97815907936754!3d7.934196847392783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb456e05e5a4c9%3A0x72cd1cfea9d4d0a9!2sPolonnaruwa%20Ancient%20City!5e0!3m2!1sen!2slk!4v1659525623039!5m2!1sen!2slk" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <h5>Dirección</h5>
        <a href="https://goo.gl/maps/2g7zSZjWx5hTrybLA" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> Calle Ayacucho entre Mexico,Bolivia
        </a>
        <h5 class="mt-4">Llámanos</h5>
        <a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 768799665</a>
        <br>
        <a href="tel: +94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +94 768799665</a>
        <h5 class="mt-4">Correo Electrónico</h5>
        <a href="mailto: dineshslweb@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill"></i> dineshslweb@gmail.com</a>

        <h5 class="mt-4">Síguenos</h5>
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-twitter me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5 me-2">
            <i class="bi bi-facebook me-1"></i>
        </a>
        
        <a href="#" class="d-inline-block text-dark fs-5">
          <i class="bi bi-instagram me-1"></i>
        </a>
      </div>
    </div>
    <!-- Columna de formulario de contacto -->
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white rounded shadow p-4">
        <form>
          <h5>Envía un mensaje</h5>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Nombre</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Correo Electrónico</label>
            <input type="email" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Asunto</label>
            <input type="text" class="form-control shadow-none">
          </div>
          <div class="mb-3">
            <label class="form-label" style="font-weight: 500;">Mensaje</label>
            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn text-white custom-bg mt-3">Enviar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php require('inc/footer.php'); ?> <!-- Incluye el pie de página -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> <!-- Incluye el archivo JavaScript de Bootstrap -->
</body>
</html>
