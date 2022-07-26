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
            <div id="formulario"> 
                <h1>Agendar clase</h1>
                <form name="formulario" id="formulario" method="get">
                    <div id="datos">
                        Nombre: <input type="text" name="nombre" id="nombre" required><br>
                        Tipo de documento: 
                        <datalist id="documentos">
                            <option value="Tarjeta de identidad"></option>
                            <option value="Cedula de extranjería"></option>
                            <option value="Cedula de ciudadanía"></option>
                            <option value="Número único de identificación"></option>
                        </datalist>
                        <input type="text" name="documento" id="documento" list="documentos" placeholder="Cedula de Ciudadanía" required>
                        <br>
                        Número de documento: <input type="number" name="numero" id="numero" required><br>
                        Correo electrónico: <input type="email" name="email" id="email" required><br>
                        Número de contacto: <input type="number" name="telefono" id="telefono" required><br>
                        <input type="submit" id="enviar" value="Enviar">
                    </div>  
                </form>
            </div>
        </div>
    </body>
</html>