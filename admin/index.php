<?php 
	require('inc/essentials.php');  // Incluir el archivo essentials.php
	require('inc/db_config.php');   // Incluir el archivo db_config.php
    
	session_start();  // Iniciar la sesión
	
	// Verificar si el usuario ya ha iniciado sesión como administrador
	if((isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
		redirect('dashboard.php');  // Redirigir a dashboard.php si ya ha iniciado sesión
	}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Configuración de metadatos y enlaces a archivos CSS -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login Panel</title>
	<?php require('inc/links.php'); ?>  <!-- Incluir enlaces a archivos CSS usando PHP -->

	<style>
		div.login-form{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
		}
	</style>
</head>
<body class="bg-light">
	<!-- Formulario de inicio de sesión -->
	<div class="login-form text-center rounded bg-white shadow overflow-none">
		<form method="POST">
			<h4 class="bg-dark text-white py-3">INICIO SESION ADMINISTRADOR</h4>	
			<div class="p-4">
				<div class="mb-3">
					<input name="admin_nombre" required type="text" class="form-control shadow-none text-center" placeholder="Nombre de Administrador">
				</div>
				<div class="mb-4">
					<input name="admin_contrasena" required type="password" class="form-control shadow-none text-center" placeholder="Contraseña">
				</div>
				<button name="login" type="submit" class="btn text-white bg-dark custom-bg shadow-none">INICIAR SESION</button>
			</div>
		</form>
	</div>

	<?php 
		// Comprobar si se ha enviado el formulario de inicio de sesión
		if(isset($_POST['login']))
		{
			$frm_data = filteration($_POST);  // Filtrar los datos del formulario usando la función filteration()

			$query = "SELECT * FROM admin_cred WHERE admin_nombre = ? AND admin_contrasena = ?";
			$values = [$frm_data['admin_nombre'],$frm_data['admin_contrasena']];

			$res = select($query,$values,"ss");  // Ejecutar una consulta SELECT usando la función select()

			// Verificar si las credenciales de inicio de sesión son válidas
			if($res->num_rows == 1){
				$row = mysqli_fetch_assoc($res);
				$_SESSION['adminLogin'] = true;
				$_SESSION['adminId'] = $row['sr_no'];
				redirect('dashboard.php');  // Redirigir a dashboard.php si las credenciales son válidas
			}
			else{
				alert('error','Login Failed - Credenciales Inválidas');  // Mostrar una alerta si las credenciales son inválidas
			}
		}
	?>

	<?php require('inc/scripts.php'); ?>  <!-- Incluir scripts usando PHP -->
</body>
</html>
