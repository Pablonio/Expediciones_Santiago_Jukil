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
                        <p class="card-text">contenido</p>
                        <h6 class="card-subtitle mb-1 fw-bold">Acerca De</h6>
                        <p class="card-text">contenido</p>
                    </div>
                </div>

                <!--General ajuste modal-->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form>
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Ajustes Generales</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Titulo del Sitio</label>
                                        <input type="text" name="nombre_sitio" class="form-control shadow-none">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Aceca De</label>
                                        <textarea name="acercade_sitio" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCELAR</button>
                                    <button type="button" class="btn custom-bg text-white shadow-none">SUBIR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Incluir scripts utilizando PHP -->
    <?php require('inc/scripts.php')?>

    <script>
        let general_data;

        function get_general(){
            let nombre_sitio;
            let acercade_sitio;

            let xhr = new XLHttpRquest();
            xhr.open("POST","ajax/settings_crud.php", true);
            
        }
    </script>
</body>
</html>
