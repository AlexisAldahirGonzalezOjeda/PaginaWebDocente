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
            <div id="contenido">
                <h1>Bienvenidos</h1>
                <p>
                    En esta página encontrarás el lugar ideal <br/>
                    para encontrar servicios particulares para <br/>
                    clases y asesorias en las principales <br/>
                    materias en nivel de bachillerato y <br/>
                    universidad <br/>
                </p>
                <?php
                //"host=sheep port=5432 dbname=test user=lamb password=bar"
                $conexion = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                if ($conexion) {
                    echo "Sí";
                } else {
                    echo "No";
                }
                ?>
            </div>
        </div>
    </body>
</html>
