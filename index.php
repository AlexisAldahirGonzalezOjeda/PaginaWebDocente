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
            if (filter_input(INPUT_GET, "accion") == "IniciarSesion") {
                $controlador->verPagina('Vista/html/sesion.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Cliente") {
                $controlador->verPagina('Vista/html/cliente.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Docente") {
                $controlador->verPagina('Vista/html/docente.php');
            }
            if (filter_input(INPUT_GET, "accion") == "AdministrarUsuarios") {
                $controlador->verPagina('Vista/html/administrador.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Historial") {
                $controlador->verPagina('Vista/html/historialClases.php');
            }
            if (filter_input(INPUT_GET, "accion") == "AdministrarMaterias") {
                $controlador->verPagina('Vista/html/administrarMaterias.php');
            }
            if (filter_input(INPUT_GET, "accion") == "Cerrar") {
                $controlador->verPagina('Vista/html/cerrarSesion.php');
            }
            if (filter_input(INPUT_GET, "accion") == "AjustesAdmin") {
                $controlador->verPagina('Vista/html/ajustesAdmin.php');
            }
            if (filter_input(INPUT_GET, "accion") == "AjustesCliente") {
                $controlador->verPagina('Vista/html/ajustesCliente.php');
            }
            if (filter_input(INPUT_GET, "accion") == "ModificarAdmin") {
                $controlador->verPagina('Vista/html/modificarAdmin.php');
            }
            if (filter_input(INPUT_GET, "accion") == "ModificarCliente") {
                $controlador->verPagina('Vista/html/modificarCliente.php');
            }
            if (filter_input(INPUT_GET, "accion") == "ModificarProfesor") {
                $controlador->verPagina('Vista/html/modificarProfesor.php');
            }
        } else {
            $controlador->verPagina('Vista/html/principal.php');
        }
        ?>
    </body>
</html>
