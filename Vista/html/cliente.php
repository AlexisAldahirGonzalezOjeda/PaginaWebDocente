<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
        <script src="Vista/js/funciones.js"></script>
    </head>
    <body>
        <div id="cabecera">
            <div id="header">
                <ul class="nav"> 
                    <li><a href="index.php?accion=HistorialClases">Agendar clase</a></li>
                    <li><a href="index.php?accion=Cliente">Historial de reservas</a></li>
                    <li><a href="index.php?accion=Inicio">Cerrar sesión</a></li>
                </ul>
            </div>
            <img id="imgIn" src="Vista/imagenes/login2.png">
        </div>
        <?php
        session_start();
        $alumno = $_SESSION['nombre_usuario'];
        echo "<h1>Bienvenido $alumno</h1>";
        ?> 
    </body>
</html>
