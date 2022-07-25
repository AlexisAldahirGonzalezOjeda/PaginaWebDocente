<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    </head>
    <body> 
        <div id="cabecera"> 
            <ul id="menu">
                <li><a href="index.php?accion=Inicio">Inicio</a> </li>
                <li><a href="index.php?accion=Formulario">Agendar clase</a> </li>
                <li>
                    <select name="servicios" id="servicios">
                        <option value="m">Servicios</option>
                        <option value="m">Matemáticas</option>
                        <option value="a">Física</option>
                        <option value="v">Química</option>
                        <option value="v">Programación</option>
                    </select>
                </li>
                <li>
                    <select name="sesion" id="sesion"> 
                        <option value="m">
                        <a href="index.php?accion=Sesion">Iniciar sesión</a> 
                        </option>
                        <option value="m">
                        <a href="index.php?accion=Registro">Registrarse</a> 
                        </option>
                    </select>
                </li> 
            </ul>
        </div>
        <div id="agrupar">
            <div id="contenido">
                <h2>Título de página</h2>
                <p>Contenido de la página</p>
            </div>
        </div>
    </body>
</html>