<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css" media="all and (min-width: 621px)"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/estilosCelular.css" media="all and (min-width: 0px) and (max-width: 620px)">
        <script src="Vista/js/funciones.js"></script>
    </head>
    <body>
        <div id="cabecera">
            <div id="header">
                <ul class="nav">
                    <li><a href="index.php?accion=Historial">Historial de clases</a></li> 
                    <li><a href="index.php?accion=Docente">Ajustes</a></li> 
                    <li><a href="index.php?accion=Cerrar">Cerrar sesión</a></li> 
                </ul>
            </div>
            <?php
            session_start();
            $profesor = $_SESSION['nombre_usuario'];
            echo "<ul id='nombre'>$profesor</ul>";
            ?>
            <img id="imgIn" src="Vista/imagenes/loginP.png">
        </div> 
        <?php
        $alumno = $_SESSION['nombre_usuario'];
        $id_profesor = $_SESSION['id_profesor'];

        $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");

        if (pg_num_rows(pg_query($conn, "SELECT id_servicio, fecha, tipo_servicio, materia, descripcion, estado
                                        FROM Servicio
                                        INNER JOIN Materia
                                        ON Servicio.id_materia = Materia.id_materia WHERE Servicio.id_profesor=$id_profesor
                                        ORDER BY fecha DESC")) == 0) {
            echo "<h2>No hay reservas registradas.\n</h2>";
            exit;
        } else {
            $arr = pg_fetch_all(pg_query($conn, "SELECT id_servicio, fecha, tipo_servicio, materia, descripcion, estado
                                        FROM Servicio
                                        INNER JOIN Materia
                                        ON Servicio.id_materia = Materia.id_materia WHERE Servicio.id_profesor=$id_profesor
                                        ORDER BY fecha DESC"));
            ?>  <table id="Reservas" style="position: relative; top: 15%;"><tr><th>Id Servicio</th><th>Fecha</th><th>Tipo servicio</th><th>Materia</th><th>Descripcion</th><th>Estado</th></tr><?php
                        foreach ($arr as $clave => $valor) {
                            ?> <tr> 
                        <td> <?php echo $valor['id_servicio'] ?> </td>
                        <td> <?php echo $valor['fecha'] ?> </td>
                        <td> <?php echo $valor['tipo_servicio'] ?> </td>  
                        <td> <?php echo $valor['materia'] ?> </td>
                        <td> <?php echo $valor['descripcion'] ?> </td>
                        <td> <?php echo $valor['estado'] ?> </td>  
                    </tr> <?php
                }
                ?> </table> <?php
        }
        pg_close($conn);
        ?>  
    </body>
</html>