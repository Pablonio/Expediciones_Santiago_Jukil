<?php 
	// Definición de variables para la conexión a la base de datos
	$hname = 'localhost';  // Nombre del host de la base de datos (normalmente 'localhost')
	$uname = 'root';       // Nombre de usuario de la base de datos
	$pass = '';            // Contraseña del usuario de la base de datos
	$db = 'expediciones-santiago-jukil';  // Nombre de la base de datos

	// Conexión a la base de datos utilizando MySQLi
	$con = mysqli_connect($hname,$uname,$pass,$db);

	// Verificar si la conexión se estableció correctamente
	if (!$con) {
		die("Cannot Connect to Database".mysqli_connect_error());
	}

	// Definición de una función para filtrar y sanear los datos
	function filteration($data){
		foreach ($data as $key => $value) {
			$data[$key] = trim($value);            // Eliminar espacios en blanco al principio y al final
			$data[$key] = stripcslashes($value);    // Eliminar barras invertidas
			$data[$key] = htmlspecialchars($value); // Convertir caracteres especiales en entidades HTML
			$data[$key] = strip_tags($value);       // Eliminar etiquetas HTML y PHP
		}
		return $data;  // Devolver los datos filtrados
	}

	// Definición de una función para realizar una consulta SELECT en la base de datos
	function select($sql,$values,$datatypes)
	{
		$con = $GLOBALS['con'];  // Acceder a la conexión a la base de datos

		// Preparar la consulta SQL con parámetros
		if ($stmt = mysqli_prepare($con,$sql)) 
		{
			// Vincular parámetros a la consulta SQL
			mysqli_stmt_bind_param($stmt,$datatypes,...$values);
			
			// Ejecutar la consulta preparada
			if (mysqli_stmt_execute($stmt)){
				// Obtener el resultado de la consulta
				$res = mysqli_stmt_get_result($stmt);
				mysqli_stmt_close($stmt);  // Cerrar la consulta preparada
				return $res;  // Devolver el resultado
			}
			else{
				mysqli_stmt_close($stmt);  // Cerrar la consulta preparada
				die("Query cannot be executed - Select");  // Terminar el script con un mensaje de error
			}
		}
		else{
			die("Query cannot be prepared - Select");  // Terminar el script con un mensaje de error
		}
	}
 ?>
