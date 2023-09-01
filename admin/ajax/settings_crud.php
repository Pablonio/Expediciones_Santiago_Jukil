<?php
    // Incluir la configuración de la base de datos y las funciones esenciales
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    
    // Verificar la autenticación del administrador
    adminLogin();

    // Verificar si se ha recibido la solicitud para obtener la configuración general
    if(isset($_POST['get_general']))
    {
        // Consulta SQL para obtener los datos de configuración de la base de datos
        $q = "SELECT * FROM `settings` WHERE `sr_no`=?";
        $values = [1];
        
        // Llamar a la función "select" para ejecutar la consulta y obtener el resultado
        $res = select($q, $values, "i");
        
        // Obtener los datos como un array asociativo
        $data = mysqli_fetch_assoc($res);
        
        // Convertir los datos en formato JSON
        $json_data = json_encode($data);
        
        // Enviar los datos JSON como respuesta
        echo $json_data;
    }
?>
