<?php 

    // Función para verificar si un administrador ha iniciado sesión
    function adminLogin()
    {
        // Iniciar la sesión
        session_start();
        
        // Verificar si el usuario ha iniciado sesión como administrador
        if(!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin']==true)){
            // Si no ha iniciado sesión, redireccionar al index.php
            echo "<script>
                window.location.href='index.php';
            </script>";
        }
        
        // Regenerar el ID de sesión para mejorar la seguridad
        session_regenerate_id(true);
    }

    // Función para redireccionar a una URL especificada
    function redirect($url){
        echo "<script>
            window.location.href='$url'; 
        </script>";
    }

    // Función para mostrar una alerta
    function alert($type, $msg){
        // Determinar la clase de Bootstrap según el tipo de alerta
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";
        
        // Mostrar una alerta usando una sintaxis de heredoc
        echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
    }
?>
