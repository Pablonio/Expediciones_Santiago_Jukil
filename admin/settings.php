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
                <h3 class="mb-4">AJUSTES</h3>
                <!-- Ajustes Generales Seccion -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Ajustes generales</h5>
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"> </i>Editar
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Titulo del Sitio</h6>
                        <p class="card-text" id="nombre_sitio"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">Acerca De</h6>
                        <p class="card-text" id="acercade_sitio"></p>
                    </div>
                </div>

                <!-- General ajuste modal -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <!-- Contenido del modal -->
                </div>
            </div>
        </div>
    </div>

    <!-- Incluir scripts utilizando PHP -->
    <?php require('inc/scripts.php')?>

    <!-- Script JavaScript -->
    <script>
        let general_data;

        // Función para obtener datos generales
        function get_general(){
            let nombre_sitio = document.getElementById('nombre_sitio');
            let acercade_sitio = document.getElementById('acercade_sitio');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function(){
                general_data = JSON.parse(this.responseText);
                
                nombre_sitio.innerText = general_data.nombre_sitio;
                acercade_sitio.innerText = general_data.acercade_sitio;
            }

            xhr.send('get_general');
        }

        // Se ejecuta cuando la página se carga completamente
        window.onload = function(){
            get_general();
        }
    </script>
</body>
</html>
