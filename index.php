<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 
        <?php
        require_once 'Controlador/controlador.php';
        require_once 'Modelo/conexion.php';
        $controlador = new Controlador();
        if (filter_input(INPUT_GET, "accion")) {
            if (filter_input(INPUT_GET, "accion") == "Inicio") {
                $controlador->verPagina('Vista/html/principal.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Formulario") {
                $controlador->verPagina('Vista/html/formulario.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Sesion") {
                $controlador->verPagina('Vista/html/iniciarSesion.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Registro") {
                $controlador->verPagina('Vista/html/registro.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Matematicas") {
                $controlador->verPagina('Vista/html/matematicas.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Fisica") {
                $controlador->verPagina('Vista/html/fisica.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Quimica") {
                $controlador->verPagina('Vista/html/quimica.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Programacion") {
                $controlador->verPagina('Vista/html/programacion.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Prueba") {
                $controlador->verPagina('Vista/html/sesion.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Cliente") {
                $controlador->verPagina('Vista/html/cliente.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Docente") {
                $controlador->verPagina('Vista/html/docente.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Administrador") {
                $controlador->verPagina('Vista/html/administrador.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Historial") {
                $controlador->verPagina('Vista/html/historialClases.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Eliminar") {
                $controlador->verPagina('Vista/html/eliminarUser.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Cerrar") {
                $controlador->verPagina('Vista/html/cerrarSesion.php');
            }
        } else {
            $controlador->verPagina('Vista/html/principal.php');
        }
        ?>
    </body>
</html>
