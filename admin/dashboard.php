<?php 
    // Incluir el archivo 'essentials.php'
    require('inc/essentials.php');
    
    // Llamar a la función adminLogin() para verificar la autenticación del administrador
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Configuración de metadatos y enlaces a archivos CSS -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    
    <!-- Incluir enlaces a archivos CSS utilizando PHP -->
    <?php require('inc/links.php')?>
</head>
<body class="bg-light">
    <!-- Encabezado del panel de administrador -->
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0"> ADMINISTRADOR DE PANEL</h3>
        <a href="logout.php" class="btn btn-light btn-sm">Cerrar Sesión</a>
    </div>
    
    <!-- Incluir scripts utilizando PHP -->
    <?php require('inc/scripts.php')?>
</body>
</html>
