<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Controlador/Controlador.php';  
        $controlador = new Controlador(); 
        if (isset($_GET["accion"])) {
            if ( filter_input( INPUT_GET , "accion") == "Inicio") {
                $controlador->verPagina('Vista/html/principal.php');
            }
            if ( filter_input( INPUT_GET , "accion") == "Formulario") {
                $controlador->verPagina('Vista/html/formulario.php');
            }
            if ( filter_input( INPUT_GET , "accion") == "Sesion") {
                $controlador->verPagina('Vista/html/iniciarSesion.php');
            }
            if ( filter_input( INPUT_GET , "accion") == "Registro") {
                $controlador->verPagina('Vista/html/registro.php');
            }  
        } else {
            $controlador->verPagina('Vista/html/principal.php');
        }
        ?>
    </body>
</html>
