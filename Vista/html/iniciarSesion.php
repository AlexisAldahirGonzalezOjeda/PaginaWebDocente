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
                    <li><a href="index.php?accion=Inicio">Inicio</a></li>
                    <li><a href="index.php?accion=Formulario">Agendar clase</a></li>
                    <li><a href="">Servicios</a>
                        <ul>
                            <li><a href="">Matemáticas</a></li>
                            <li><a href="">Física</a></li>
                            <li><a href="">Química</a></li>
                            <li><a href="">Programación</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?accion=Sesion">Iniciar sesión</a>
                        <ul>
                            <li><a href="index.php?accion=Registro">Registrarse</a></li>
                        </ul>
                </ul>
            </div>
        </div>
        <div id="agrupar">
            <div id="agrupar">
                <div id="formulario"> 
                    <h1>Iniciar sesión</h1>
                    <form name="formulario" id="formulario" method="get">
                        <div id="datos"> 
                            Correo electrónico: <input type="email" name="email" id="email" required><br>
                            Contaseña: <input type="text" name="telefono" id="telefono" required><br> 
                            <input type="submit" id="enviar" value="Enviar"> 
                        </div>  
                    </form>
                    <p name="boton"><a href="index.php?accion=Registro">Registrarse</a></p>
                </div>

            </div>
        </div>
    </body>
</html>