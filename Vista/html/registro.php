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
                </ul>
            </div>
        </div>
        <div id="agrupar">
            <div id="agrupar">
                <div id="formulario"> 
                    <h1>Registrarse</h1>
                    <form name="formulario" id="formulario" method="get">
                        <div id="datos">
                            Nombre: <input type="text" name="nombre" id="nombre" required><br>
                            Tipo de documento:  
                            <datalist id="documentos">  
                                <option value="Cedula de ciudadanía"></option>
                                <option value="Cedula de extranjería"></option>
                                <option value="Número único de identificación"></option>
                                <option value="Tarjeta de identidad"></option>
                            </datalist>
                            <input type="text" name="documento" id="documento" list="documentos" placeholder="--Seleccione una opción--" required>
                            <br> 
                            Número de documento: <input type="number" name="numero" id="numero" required><br>
                            Correo electrónico: <input type="email" name="email" id="email" required><br>
                            Número de contacto: <input type="number" name="telefono" id="telefono" required><br>
                            Contaseña: <input type="text" name="telefono" id="telefono" required><br>
                            Confirmar contaseña: <input type="text" name="telefono" id="telefono" required><br>
                            <input type="submit" id="enviar" value="Enviar">
                        </div>  
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>