<style>
 

   /* Personaliza los colores del navbar (barra de navegación) */
   .navbar {
      background-color: #fa5c05;
   }
   /* Personaliza el ícono del botón para mostrar el menú en la barra de navegación */
   .navbar-toggler-icon {
      background-color: #faa935;
   }
   /* Personaliza el estilo del botón con borde oscuro */
   .btn-outline-dark {
      color: #fa5c05;
      border-color: #fa5c05;
   }
   /* Personaliza el estilo del botón cuando se pasa el cursor por encima */
   .btn-outline-dark:hover {
      color: #fff;
      background-color: #fa5c05;
      border-color: #fa5c05;
   }

   /* Personaliza el estilo del encabezado del modal (ventana emergente) */
   .modal-header {
      background-color: #faa935;
      color: #fff;
   }
   /* Personaliza el tamaño del título del modal */
   .modal-title {
      font-size: 1.25rem;
   }
   /* Personaliza el estilo del botón primario */
   .btn-primary {
      background-color: #fa5c05;
      border-color: #fa5c05;
   }
</style>

<!-- Definición de la barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm sticky-top">
   <!-- Contenedor principal de la barra de navegación -->
   <div class="container-fluid">
      <!-- Marca del sitio en la barra de navegación -->
      <a class="navbar-brand me-5 fw-bold fs-3 h-font text-dark" href="index.php">EXPEDICIONES SANTIAGO JUKIL</a>
      <!-- Botón de alternancia para mostrar el menú en dispositivos pequeños -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Contenido del menú de navegación -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <!-- Lista de elementos de navegación -->
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="rooms.php">Sitios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="facilities.php">Qué Ofrecemos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="contact.php">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2" href="about.php">Acerca De</a>
            </li>
         </ul>
         <!-- Botones de inicio de sesión y registro -->
         <div class="d-flex">
            <button type="button" class="btn btn-outline-dark me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModel">Inicia Sesión</button>
            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#registerModel">Regístrate</button>
         </div>
      </div>
   </div>
</nav>

<!-- Definición del modal de inicio de sesión -->
<div class="modal fade" id="loginModel" tabindex="-1" aria-labelledby="loginModelLabel" aria-hidden="true">
   <!-- Contenedor principal del modal -->
   <div class="modal-dialog modal-dialog-centered">
      <!-- Contenido del modal -->
      <div class="modal-content">
         <!-- Encabezado del modal -->
         <div class="modal-header">
            <!-- Ícono y título del modal -->
            <h5 class="modal-title" id="loginModelLabel">
               <i class="bi bi-person-circle fs-3 me-2"></i>Inicio de Sesión Usuario
            </h5>
            <!-- Botón para cerrar el modal -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <!-- Cuerpo del modal -->
         <div class="modal-body">
            <!-- Formulario de inicio de sesión -->
            <form>
               <!-- Campos para el correo y la contraseña -->
               <div class="mb-3">
                  <label for="emailInput" class="form-label">Correo</label>
                  <input type="email" class="form-control" id="emailInput">
               </div>
               <div class="mb-3">
                <label for="passwordInput" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="passwordInput">
              </div>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <button type="submit" class="btn btn-dark">Iniciar Sesión</button>
                <a href="#" class="text-secondary text-decoration-none">¿Olvidaste tu contraseña?</a>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <!-- Botones para cerrar el modal y confirmar acción -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Entendido</button>
         </div>
      </div>
   </div>
</div>




<!-- Definición del modal de registro -->
<div class="modal fade" id="registerModel" tabindex="-1" aria-labelledby="registerModelLabel" aria-hidden="true">
   <!-- Contenedor principal del modal -->
   <div class="modal-dialog modal-lg">
      <!-- Contenido del modal -->
      <div class="modal-content">
         <!-- Encabezado del modal -->
         <div class="modal-header">
            <!-- Ícono y título del modal -->
            <h5 class="modal-title">
               <i class="bi bi-person-lines-fill fs-3 me-2"></i>Registro de Usuario
            </h5>
            <!-- Botón para cerrar el modal -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <!-- Cuerpo del modal -->
         <div class="modal-body">
          <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
            Nota: Tus detalles deben coincidir con tu identificación (tarjeta, pasaporte, licencia de conducir, etc.) que será requerida durante el checkeo.
          </span>
            <div class="container-fluid">
              <div class="row">
                <form class="row g-3">
                  <div class="col-md-6 mb-3">
                      <label for="nameInput" class="form-label">Nombre</label>
                      <input type="text" class="form-control" id="nameInput">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="emailInput" class="form-label">Correo</label>
                      <input type="email" class="form-control" id="emailInput">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="phoneInput" class="form-label">Celular</label>
                      <input type="number" class="form-control" id="phoneInput">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="photoInput" class="form-label">Foto</label>
                      <input type="file" class="form-control" id="photoInput">
                  </div>
                  <div class="col-md-12 mb-3">
                      <label for="addressInput" class="form-label">Dirección</label>
                      <textarea class="form-control" id="addressInput" rows="1"></textarea>
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="postalCodeInput" class="form-label">Código Postal</label>
                      <input type="number" class="form-control" id="postalCodeInput">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="birthdateInput" class="form-label">Fecha de Cumpleaños</label>
                      <input type="date" class="form-control" id="birthdateInput">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="passwordInput" class="form-label">Contraseña</label>
                      <input type="password" class="form-control" id="passwordInput">
                  </div>
                  <div class="col-md-6 mb-3">
                      <label for="confirmPasswordInput" class="form-label">Confirmar Contraseña</label>
                      <input type="password" class="form-control" id="confirmPasswordInput">
                  </div>
                  <div class="col-12 text-center">
                      <button type="submit" class="btn btn-dark">Registrar</button>
                  </div>
                </form>
              </div>
            </div>
         </div>
      </div>
   </div>
</div>


