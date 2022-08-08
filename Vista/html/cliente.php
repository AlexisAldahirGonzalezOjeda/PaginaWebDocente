<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css" media="all and (min-width: 621px)"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/estilosCelular.css" media="all and (min-width: 0px) and (max-width: 620px)">
    </head>
    <body>
        <div id="cabecera">
            <div id="header" style="width: 620px">
                <ul class="nav"> 
                    <li><a href="index.php?accion=Formulario">Agendar clase</a></li>
                    <li><a href="index.php?accion=Cliente">Historial de reservas</a></li>
                    <li><a href="index.php?accion=AjustesCliente">Ajustes</a></li> 
                    <li><a href="index.php?accion=Cerrar">Cerrar sesión</a></li>
                </ul>
            </div>
            <img id="imgIn" src="Vista/imagenes/login2.png">
        </div>
        <div id="ajustes" style="position: absolute; top: 25%;">
            <?php
            session_start();
            $alumno = $_SESSION['nombre_usuario'];
            $id_alumno = $_SESSION['id_alumno'];
            //echo "<h1>Bienvenido $alumno</h1>";
            $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
            if (pg_num_rows(pg_query($conn, "SELECT fecha, tipo_servicio, materia, descripcion
                            FROM Materia
                            INNER JOIN Servicio
                            ON Materia.id_materia = Servicio.id_materia
                            WHERE Servicio.id_alumno= '$id_alumno'
                            ORDER BY fecha DESC")) == 0) {
                echo "No hay reservas registradas.\n";
                exit;
            } else {
                $arr = pg_fetch_all(pg_query($conn, "SELECT fecha, tipo_servicio, materia, descripcion
                            FROM Materia
                            INNER JOIN Servicio
                            ON Materia.id_materia = Servicio.id_materia
                            WHERE Servicio.id_alumno= '$id_alumno'
                            ORDER BY fecha DESC"));
                ?>  <table id="Reservas" style="position: absolute; top: 5%;"><tr><th>Fecha</th><th>Tipo servicio</th><th>Materia</th><th>Descripcion</th></tr><?php
                            foreach ($arr as $clave => $valor) {
                                ?> <tr> 
                            <td> <?php echo $valor['fecha'] ?> </td>
                            <td> <?php echo $valor['tipo_servicio'] ?> </td>  
                            <td> <?php echo $valor['materia'] ?> </td>
                            <td> <?php echo $valor['descripcion'] ?> </td>  
                        </tr> <?php
                    }
                    ?> </table> <?php
            }
            pg_close($conn);
            ?> 
        </div>
    </body>
</html>
