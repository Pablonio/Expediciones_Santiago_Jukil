<!DOCTYPE html>
<html>
<head>
	<title>Santiago Jukil Esxpediciones</title>
	<!-- CSS only -->
<?php require('inc/links.php'); ?>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<link rel="stylesheet" type="text/css" href="css/common.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<style type="text/css">
	
	.availability-form{
		margin-top: -50px;
		z-index: 2;
		position: relative;
	}

	@media screen and (max-width: 575px) {
	.availability-form{
		margin-top: 25px;
		padding: 0 35px;
	}

	}
</style>
<style>
	/* Estilos para el botón de cambio de modo */
	.form-switch {
	display: flex;
	align-items: center;
	margin-left: 1rem;
	}

	/* Aplicación del modo oscuro */
	body.dark-mode {
	background-color: #f3f4f6; /* Gris pastel */
	color: #333; /* Color de texto oscuro */
	}

	/* Estilos específicos para la barra de navegación */
	.navbar {
	background-color: #fff; /* Fondo claro para el navbar */
	}

	.navbar .nav-link {
	color: #333; /* Color de texto oscuro para enlaces del navbar */
	}

</style>
</head>
<body>

<?php require('inc/header.php'); ?>
<!-- Swiper Carousal-->
 <div class="container-fluid px-lg-4 mt-4">
 	 <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/1.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/2.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/3.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/4.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/5.png" class="w-100 d-block" />
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/6.png" class="w-100 d-block" />
        </div>
        
      </div>
      
    </div>
 </div>

 <!-- Formulario de disponibilidad -->
<div class="container availability-form">
	<div class="row">
		<!-- Columna que ocupa todo el ancho del contenedor, con fondo blanco, sombra y bordes redondeados -->
		<div class="col-lg-12 bg-white shadow p-4 rounded">
			<!-- Título del formulario -->
			<h5 class="col-lg-3">Realiza una reserva</h5>
			<!-- Formulario -->
			<form>
				<!-- Fila de elementos alineados verticalmente -->
				<div class="row align-items-end">
					<!-- Columna para seleccionar la fecha de check-in -->
					<div class="col-lg-3 mb-3">
						<label class="form-label" style="font-weight: 500;">Check-in</label>
						<input type="date" class="form-control shadow-none">
					</div>
					<!-- Columna para seleccionar la fecha de check-out -->
					<div class="col-lg-3 mb-3">
						<label class="form-label" style="font-weight: 500;">Check-out</label>
						<input type="date" class="form-control shadow-none">
					</div>
					<!-- Columna para seleccionar el número de personas -->
					<div class="col-lg-3 mb-3">
						<label class="form-label" style="font-weight: 500;">Personas</label>
						<select class="form-select shadow-none">
							<option value="1">Uno</option>
							<option value="2">Dos</option>
							<option value="3">Tres</option>
							<option value="4">Cuatro</option>
							<option value="5">Cinco</option>
							<option value="6">Seis</option>
						</select>
					</div>
					<!-- Columna para el botón de enviar el formulario -->
					<div class="col-lg-1 mb-lg-3 mt-2">
						<button type="submit" class="btn text-white shadow-none custom-bg">Encontrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

 
<!-- Sección de "NUESTROS SITIOS" -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">NUESTROS SITIOS</h2>
<div class="container">
  <div class="row">

    <!-- Tarjeta de sitio 1 -->
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Visita al Salar</h5>
          <h6 class="mb-4">$15.99 por persona </h6>
          <!-- Características del sitio -->
          <div class="features mb-4">
            <h6 class="mb-1">Realizarás</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Exploraciones
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Camping
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Sesión de Fotos
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Sesión de Video
            </span>
          </div>
          <!-- Facilidades del sitio -->
          <div class="Facilities mb-4">
            <h6 class="mb-1">Cuenta con</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Transporte
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Desayuno
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Almuerzo
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Cena
            </span>
          </div>
          <!-- Número de personas -->
          <div class="guests mb-4">
            <h6 class="mb-1">Personas</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              25 personas
            </span>
          </div>
          <!-- Calificación del sitio -->
          <div class="rating mb-4">
            <h6 class="mb-1">Calificaciones</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <!-- Botones de compra y detalles -->
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Compra Ahora</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Más Detalles</a>
          </div>
        </div>
      </div>
    </div>
	<!-- Tarjeta de sitio 1 -->
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Visita al Salar</h5>
          <h6 class="mb-4">$8.99 por persona </h6>
          <!-- Características del sitio -->
          <div class="features mb-4">
            <h6 class="mb-1">Realizarás</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Exploraciones
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Camping
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Sesión de Fotos
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Sesión de Video
            </span>
          </div>
          <!-- Facilidades del sitio -->
          <div class="Facilities mb-4">
            <h6 class="mb-1">Cuenta con</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Transporte
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Desayuno
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Almuerzo
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Cena
            </span>
          </div>
          <!-- Número de personas -->
          <div class="guests mb-4">
            <h6 class="mb-1">Personas</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              55 personas
            </span>
          </div>
          <!-- Calificación del sitio -->
          <div class="rating mb-4">
            <h6 class="mb-1">Calificaciones</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
			  <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <!-- Botones de compra y detalles -->
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Compra Ahora</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Más Detalles</a>
          </div>
        </div>
      </div>
    </div>
	<!-- Tarjeta de sitio 1 -->
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Visita al Salar</h5>
          <h6 class="mb-4">$15.99 por persona </h6>
          <!-- Características del sitio -->
          <div class="features mb-4">
            <h6 class="mb-1">Realizarás</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Exploraciones
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Camping
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Sesión de Fotos
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Sesión de Video
            </span>
			<span class="badge rounded-pill bg-light text-dark text-wrap">
              Fuegos artificiales
            </span>
          </div>
          <!-- Facilidades del sitio -->
          <div class="Facilities mb-4">
            <h6 class="mb-1">Cuenta con</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Transporte
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Desayuno
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Almuerzo
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              Cena
            </span>
          </div>
          <!-- Número de personas -->
          <div class="guests mb-4">
            <h6 class="mb-1">Personas</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap">
              25 personas
            </span>
          </div>
          <!-- Calificación del sitio -->
          <div class="rating mb-4">
            <h6 class="mb-1">Calificaciones</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <!-- Botones de compra y detalles -->
          <div class="d-flex justify-content-evenly mb-2">
            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Compra Ahora</a>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Más Detalles</a>
          </div>
        </div>
      </div>
    </div>
 		<div class="col-lg-12 text-center mt-5">
 			<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Mas Sitios</a>
 		</div>
 	</div>	
</div>

<!-- Sección de "OUR FACILITIES" -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Te Ofrecemos</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">

    <!-- Columna para una instalación con animación -->
    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 facility-card">
      <img src="images/Facilities/Diversion.svg" width="80px">
      <h5 class="mt-3">Diversion</h5>
    </div>

	<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 facility-card">
      <img src="images/Facilities/Aventura.svg" width="80px">
      <h5 class="mt-3">Aventura</h5>
    </div>

	<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 facility-card">
      <img src="images/Facilities/Sorpresa.svg" width="80px">
      <h5 class="mt-3">Sorpresas</h5>
    </div>

	<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3 facility-card">
      <img src="images/Facilities/Naturaleza.svg" width="80px">
      <h5 class="mt-3">Naturaleza</h5>
    </div>


    <!-- Botón "More Facilities" -->
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded rounded-0 fw-bold shadow-none">More Facilities >>></a>
    </div>
  </div>
</div>


<!-- Sección de Opiniones -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OPINIONES</h2>

<div class="container mt-5">
  <!-- Swiper -->
  <div class="swiper swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <!-- Perfil del usuario -->
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/stars.png" width="30px">
          <h6 class="m-0 ms-2">Paula Benitez</h6>
        </div>
        <!-- Contenido del testimonio -->
        <p>
          Es un lugar muy recomendable espero poder ir a pasar denuevo mis vacaciones y sacarme fotos
        </p>
        <!-- Calificación del testimonio -->
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
		  <i class="bi bi-star-medium text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <!-- Perfil del usuario -->
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/stars.png" width="30px">
          <h6 class="m-0 ms-2">Anonimo</h6>
        </div>
        <!-- Contenido del testimonio -->
        <p>
          Gracias a esta inceible experiencia de poder ver ese paraiso blanco por favor no dejen de hacer recorridos por ahi.
        </p>
        <!-- Calificación del testimonio -->
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
		  <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>

      <div class="swiper-slide bg-white p-4">
        <!-- Perfil del usuario -->
        <div class="profile d-flex align-items-center mb-3">
          <img src="images/facilities/stars.png" width="30px">
          <h6 class="m-0 ms-2">Lorenzo</h6>
        </div>
        <!-- Contenido del testimonio -->
        <p>
			Well ill be there soon, but i have good ideas, about where i go.
        </p>
        <!-- Calificación del testimonio -->
        <div class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </div>
      </div>
		<!-- Testimonio 2 (Inglés) -->
		<div class="swiper-slide bg-white p-4">
		<!-- Perfil del usuario -->
		<div class="profile d-flex align-items-center mb-3">
			<img src="images/facilities/stars.png" width="30px">
			<h6 class="m-0 ms-2">Isabella</h6>
		</div>
		<!-- Contenido del testimonio -->
		<p>
			What an amazing experience! I never thought I'd witness such beauty in one place. The tour guides were incredibly knowledgeable and made the trip truly unforgettable.
		</p>
		<!-- Calificación del testimonio -->
		<div class="rating">
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
		</div>
		</div>

		<!-- Testimonio 3 (Español) -->
		<div class="swiper-slide bg-white p-4">
		<!-- Perfil del usuario -->
		<div class="profile d-flex align-items-center mb-3">
			<img src="images/facilities/stars.png" width="30px">
			<h6 class="m-0 ms-2">Lucas</h6>
		</div>
		<!-- Contenido del testimonio -->
		<p>
			Santiago Jukil realmente me dejó marcado. La vastedad del Salar de Uyuni es abrumadora, y la tranquilidad del entorno es algo que atesoraré para siempre.
		</p>
		<!-- Calificación del testimonio -->
		<div class="rating">
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
		</div>
		</div>

		<!-- Testimonio 4 (Español) -->
		<div class="swiper-slide bg-white p-4">
		<!-- Perfil del usuario -->
		<div class="profile d-flex align-items-center mb-3">
			<img src="images/facilities/stars.png" width="30px">
			<h6 class="m-0 ms-2">Olivia</h6>
		</div>
		<!-- Contenido del testimonio -->
		<p>
			Estoy tan contenta de haber elegido Santiago Jukil para mi aventura. El tour estuvo bien organizado y las vistas eran impresionantes. Los guías hicieron que la experiencia fuera a la vez placentera y educativa.
		</p>
		<!-- Calificación del testimonio -->
		<div class="rating">
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
			<i class="bi bi-star-fill text-warning"></i>
		</div>
		</div>
    </div>
    <!-- Paginación del swiper -->
    <div class="swiper-pagination"></div>
  </div>
</div>

   


 <!-- Reach Us Section -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">ENCUENTRANOS</h2>

<div class="container">
  <div class="row">
    <!-- Coluumna De Maps -->
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29904.873554730748!2d-66.84794444993979!3d-20.460707832142102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93ffbad958d3f2bd%3A0x1455841e2c4e6653!2sUyuni!5e0!3m2!1ses-419!2sbo!4v1693486161410!5m2!1ses-419!2sbo" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Informacion De Contacto -->
    <div class="col-lg-4 col-md-4">
      <div class="bg-white p-4 rounded">
        <h5>Call us</h5>
        <a href="tel:+94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +591 768799665</a>
        <br>
        <a href="tel:+94768799665" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i> +591 768799665</a>
      </div>
      <div class="bg-white p-4 rounded mt-3">
        <h5>Follow us</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i> Twitter
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i> Facebook
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i> Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
</div>
<hr>

<!-- Footer Section -->
<?php require('inc/footer.php') ?>

<!-- JavaScript Bundle with Popper -->


 <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

 <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
        	delay: 3500,
        	disableOnInteraction: false,
        }
      });

      var swiper = new Swiper(".swiper-testimonials", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        slidesPerView: "3",
        loop: true,
        coverflowEffect: {
          rotate: 50,
          stretch: 0,
          depth: 100,
          modifier: 1,
          slideShadows: false,
        },
        pagination: {
          el: ".swiper-pagination",
        },
        breakpoints: {
        	320: {
        		slidesPerView: 1,
        	},
        	640: {
        		slidesPerView: 1,
        	},
        	768: {
        		slidesPerView: 2,
        	},
        	1024: {
        		slidesPerView: 3,
        	},
        }
      });
    </script>
</body>
</html>