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
                    <li><a href="index.php?accion=Historial">Historial de clases</a></li> 
                    <li><a href="index.php?accion=Docente">Modificar disponibilidad</a></li> 
                    <li><a href="index.php?accion=Inicio">Cerrar sesión</a></li> 
                </ul>
            </div>
            <img id="imgIn" src="Vista/imagenes/loginP.png">
        </div>
        <?php 
        echo "historial";
        ?> 
    </body>
</html>