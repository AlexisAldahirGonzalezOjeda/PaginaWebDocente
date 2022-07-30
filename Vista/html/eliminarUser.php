<!DOCTYPE html>
 
<html>
    <head>
        <title>Página Web del Profesor</title>
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"> 
        <script src="Vista/js/control.js"></script>
    </head>
    <body>
        <div id="cabecera">
            <div id="header">
                <ul class="nav">
                    <li><a href="index.php?accion=Eliminar">Eliminar usuario</a></li>
                    <li><a href="index.php?accion=Administrador">Modificar usuario</a></li> 
                    <li><a href="index.php?accion=Inicio">Cerrar sesión</a></li> 
                </ul>
            </div> 
            <img id="imgIn" src="Vista/imagenes/admin.png">
        </div>
        <?php
        session_start();
        $admin = $_SESSION['nombre_usuario'];
        echo "Eliminar"; 
        ?>  
        <br>
        <input type="checkbox" id="checkbox1" name="checkbox1" value="verA">
        <label for="checkbox1"> Ver Alumnos</label><br>
        <input type="checkbox" id="checkbox2" name="checkbox2" value="verP">
        <label for="checkbox2"> Ver Profesores</label><br>
        <?php
        $conn = new Conexion();
        $conn->verProfesores();
        $conn->verAlumnos();
        ?>
    </body>
</html>

