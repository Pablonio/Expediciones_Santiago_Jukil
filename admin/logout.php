<?php 
    // Incluir un archivo llamado 'essentials.php' ubicado en la carpeta 'inc'
    require('inc/essentials.php');

    // Iniciar la sesión
    session_start();

    // Destruir la sesión, lo que eliminará todas las variables de sesión
    session_destroy();

    // Redireccionar al usuario a la página 'index.php'
    redirect('index.php');
?>
