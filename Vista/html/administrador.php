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
                    <li><a href="index.php?accion=Inicio">Inicio</a></li>
                    <li><a href="index.php?accion=Formulario">Agendar clase</a></li>
                    <li><a href="">Servicios</a>
                        <ul>
                            <li><a href="index.php?accion=Matematicas">Matemáticas</a></li>
                            <li><a href="index.php?accion=Fisica">Física</a></li>
                            <li><a href="index.php?accion=Quimica">Química</a></li>
                            <li><a href="index.php?accion=Programacion">Programación</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?accion=Inicio">Cerrar sesión</a></li> 
                </ul>
            </div> 
            <img id="imgIn" src="Vista/imagenes/login.png">
        </div>
        <?php
        session_start();
        $admin = $_SESSION['nombre_usuario'];
        echo "<h1>Bienvenido $admin</h1>";
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
