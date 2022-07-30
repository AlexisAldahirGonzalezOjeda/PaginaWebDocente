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
            <h1>Mátematicas</h1> 
            <p>¡Hola! Entre los temas de matemáticas en los que podrás agendar clases se encuentran:</p>
            <ul>
                <li>Mátematicas básicas.</li>
                <li>Geometría.</li>
                <li>Álgebra lineal.</li>
                <li>Cálculo diferencial.</li>
                <li>Cálculo integral.</li>
                <li>Cálculo multivariable.</li>
                <li>Cálculo vectorial.</li>
                <li>Ecuaciones diferenciales.</li>
                <li>Variable compleja.</li>
            </ul> 
            <br>
            <p id="next"><a href="index.php?accion=Fisica">Siguiente</a></p>
        </div>
    </body>
</html>
