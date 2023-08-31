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
    <?php require('inc/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">   
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde eius dolorum voluptas consequuntur magnam dolore quas tenetur nobis culpa fuga praesentium facilis totam, ullam aperiam rerum eaque porro ipsa necessitatibus.e
            </div>
        </div >
    </div>

    <!-- Incluir scripts utilizando PHP -->
    <?php require('inc/scripts.php')?>
</body>
</html>
