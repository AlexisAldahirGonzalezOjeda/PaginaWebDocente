<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    </head>
    <body> 
        <div id="cabecera">
            <div id="header">
                <ul class="nav">
                    <li><a href="index.php?accion=Inicio">Inicio</a></li> 
                    <li><a href="index.php?accion=Matematicas">Servicios</a>
                        <ul>
                            <li><a href="index.php?accion=Matematicas">Matemáticas</a></li>
                            <li><a href="index.php?accion=Fisica">Física</a></li>
                            <li><a href="index.php?accion=Quimica">Química</a></li>
                            <li><a href="index.php?accion=Programacion">Programación</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?accion=Sesion">Iniciar sesión</a></li> 
                    <li><a href="index.php?accion=Registro">Crear cuenta</a></li> 
                </ul>
            </div>
        </div> 
        <div class="servicio"> 
            <h1>Física</h1>
            <p>¡Hola! Entre los temas de física en los que podrás agendar clases se encuentran:</p>
            <ul>
                <li>Movimiento uniformemente acelerado.</li>
                <li>Leyes de Newton.</li> 
                <li>Dinámica angular.</li>
                <li>Movimiento armónico simple.</li>
                <li>Estática de Fluidos.</li>
                <li>Dinámica de Fluidos.</li>
                <li>Termodinámica.</li>
                <li>Física eléctrica.</li>
                <li>Física magnética.</li>
                <li>Física moderna.</li>
            </ul> 
            <br>
            <p id="back"><a href="index.php?accion=Matematicas">Anterior</a></p> 
            <p id="next"><a href="index.php?accion=Quimica">Siguiente</a></p>
        </div>
    </body>
</html>
