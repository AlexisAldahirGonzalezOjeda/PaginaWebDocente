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
                            <li><a href="index.php?accion=Matematicas">Matemáticas</a></li>
                            <li><a href="index.php?accion=Fisica">Física</a></li>
                            <li><a href="index.php?accion=Quimica">Química</a></li>
                            <li><a href="index.php?accion=Programacion">Programación</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?accion=Sesion">Iniciar sesión</a>
                        <ul>
                            <li><a href="index.php?accion=Registro">Registrarse</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div id="cuadroLogIn"> 
            <br>
            <br>
            <img id="img_login" src="Vista/imagenes/login.png">
            <br>
            <br>
            <div id="formulario"> 
                <!-- <h1>Iniciar sesión</h1> -->
                <form name="formulario" id="formulario" action="index.php?accion=Prueba" method="post">
                    <div id="datos"> 
                        <!-- electrónico: --> 
                        <input type="email" name="email" id="email" placeholder=" Ingrese su correo electrónico" class="boton" required><br>
                        <!--Contaseña: --> 
                        <br>
                        <input type="password" name="password" id="password" placeholder=" Ingrese su contraseña" class="boton" required><br>   
                        <br>
                        <input type="submit" id="enviar" class="enviar" value="Iniciar sesión"> 
                    </div>  
                </form> 
                <br>
                ¿No tienes cuenta? <a href="index.php?accion=Registro">Registrate</a> 
                <br>
            </div>  
        </div>
    </body>
</html>