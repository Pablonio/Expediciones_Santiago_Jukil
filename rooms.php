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
</head>
<body>

<?php require('inc/header.php'); ?> <!-- Incluye el encabezado del sitio -->

<!-- Sección de títulos -->
<div class="my-5 px-4">
	<h2 class="fw-bold h-font text-center">NUESTROS SITIOS</h2> <!-- Título principal -->
	<div class="h-line bg-dark"></div> <!-- Línea divisoria -->
</div>

<div class="container">
	<div class="row">
		<!-- Columna de filtros -->
		<div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
			<!-- Barra de navegación con filtros -->
			<nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
				<div class="container-fluid flex-lg-column align-items-stretch">
					<h4 class="mt-2">FILTROS</h4>
					<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!-- Contenido de los filtros colapsable -->
					<div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
						<!-- Filtro de disponibilidad -->
						<div class="border bg-light p-3 rounded mb-3">
							<h5 class="mb-3" style="font-size: 18px;">REVISAR DISPONIBILIDAD</h5>
							<label class="form-label">Check-in</label>
							<input type="date" class="form-control shadow-none mb-3">
							<label class="form-label">Check-in</label>
							<input type="date" class="form-control shadow-none">
						</div>
						<!-- Filtro de cantidad -->
						<div class="border bg-light p-3 rounded mb-3">
							<h5 class="mb-3" style="font-size: 18px;">Cantidad</h5>
							<div class="mb-2">
								<input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
								<label class="form-check-label" for="f1">Uno</label>
							</div>
							<!-- Repite para otras cantidades... -->
						</div>
						<!-- Filtro de personas -->
						<div class="border bg-light p-3 rounded mb-3">
							<h5 class="mb-3" style="font-size: 18px;">Personas</h5>
							<div class="d-flex">
								<div class="me-2">
									<label class="form-label">Cantidad</label>
									<input type="number" class="form-control shadow-none">
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<!-- Columna de sitios -->
		<div class="col-lg-9 col-md-12 px-4">
			<!-- Tarjeta de sitio -->
			<div class="card mb-4 border-0 shadow">
				<div class="row g-0 p-3 align-items-center">
					<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
						<img src="images/rooms/1.jpg" class="img-fluid rounded">
					</div>
					<div class="col-md-5 px-lg-3 px-md-3 px-0">
						<h5 class="mb-3">Salar de Uyuni</h5>
						<!-- Detalles del sitio... -->
					</div>
					<div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
						<h6 class="mb-4">Ꝛ2000 por noche</h6>
						<a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Reservar Ahora</a>
						<a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Más Detalles</a>
					</div>
				</div>
			</div>
			<!-- Repite para otros sitios... -->
		</div>
	</div>
</div>

<?php require('inc/footer.php'); ?> <!-- Incluye el pie de página -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> <!-- Incluye el archivo JavaScript de Bootstrap -->
</body>
</html>
