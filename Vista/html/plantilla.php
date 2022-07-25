<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sistema de Gestión Odontológica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    </head>
    <body>
        <div id="contenedor"> 
            <ul id="menu">
                <li><a href="index.php">Inicio</a> </li>
                <li><a href="index.php">Agendar clase</a> </li>
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
                        <option value="m">Iniciar sesión</option>
                        <option value="m">Registrarse</option>
                    </select>
                </li> 
            </ul>
            <div id="contenido">
                <h2>Título de página</h2>
                <p>Contenido de la página</p>
            </div>
        </div>
    </body>
</html>
