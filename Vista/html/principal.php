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
                        <a href="index.php?accion=Sesion">
                            <option value="m">Iniciar sesión</option>
                        </a>
                        <option value="m">
                        <a href="index.php?accion=Registro">Registrarse</a> 
                        </option>
                    </select>
                </li> 
            </ul>
        </div>
        <div id="agrupar">
            <div id="contenido">
                <h2>Bienvenidos</h2>
                <p>
                    En esta página encontrarás el lugar ideal <br/>
                    para encontrar servicios particulares para <br/>
                    clases y asesorias en las principales <br/>
                    materias en nivel de bachillerato y <br/>
                    universidad <br/>
                </p>
            </div>
        </div>
    </body>
</html>
