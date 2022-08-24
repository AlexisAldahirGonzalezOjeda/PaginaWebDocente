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
                    <li><a href="index.php?accion=Formulario">Reservar clase</a></li>
                    <li><a href="index.php?accion=Cliente">Historial de reservas</a></li>
                    <li><a href="index.php?accion=AjustesCliente">Ajustes</a></li> 
                    <li><a href="index.php?accion=Cerrar">Cerrar sesión</a></li>
                </ul>
            </div>
            <?php
            session_start();
            $alumno = $_SESSION['nombre_usuario'];
            $id_alumno = $_SESSION['id_alumno'];
            echo "<ul id='nombre'>$alumno</ul>";
            ?>
            <img id="imgIn" src="Vista/imagenes/login2.png"> 
        </div> 
        <?php
        //echo "<h1>Bienvenido $alumno</h1>";
        $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
        if (pg_num_rows(pg_query($conn, "SELECT fecha, tipo_servicio, materia, descripcion
                            FROM Materia
                            INNER JOIN Servicio
                            ON Materia.id_materia = Servicio.id_materia
                            WHERE Servicio.id_alumno= '$id_alumno'
                            ORDER BY fecha DESC")) == 0) {
            echo "<h2>No hay reservas registradas.</h2>";
            exit;
        } else {
            $arr = pg_fetch_all(pg_query($conn, "SELECT id_servicio, fecha, inicio, fin, tipo_servicio, nombre, apellido, materia, descripcion
                            FROM Servicio
                            INNER JOIN Materia 
                            ON Materia.id_materia = Servicio.id_materia
                            INNER JOIN Hora
                            ON Hora.id_hora = Servicio.id_hora
                            INNER JOIN Profesor
                            ON Servicio.id_profesor = Profesor.id_profesor
                            WHERE Servicio.id_alumno= 1
                            ORDER BY fecha DESC"));
            ?>  <table id="Reservas"><tr><th>Id Servicio</th><th>Fecha</th><th>Hora</th><th>Tipo servicio</th><th>Profesor</th><th>Materia</th><th>Descripcion</th></tr><?php
            foreach ($arr as $clave => $valor) {
                ?> <tr> 
                        <td> <?php echo $valor['id_servicio'] ?> </td>
                        <td> <?php echo $valor['fecha'] ?> </td>
                        <td> <?php
                            if (intval($valor['inicio']) > 7 && intval($valor['inicio']) < 13) {
                                if(intval($valor['fin'])==12){
                                    $hora = $valor['inicio'] . "am" . " - " . $valor['fin'] . "pm";
                                }else{
                                   $hora = $valor['inicio'] . "am" . " - " . $valor['fin'] . "am"; 
                                } 
                            }elseif(intval($valor['inicio']) > 1 && intval($valor['inicio']) < 7){
                                $hora = $valor['inicio'] . "pm " . " - " . $valor['fin'] . "pm";
                            } 
                            echo $hora;
                            ?> 
                        </td> 
                        <td> <?php echo $valor['tipo_servicio'] ?> </td>
                        <td> <?php echo $valor['nombre'] . ' ' . $valor['apellido'] ?> </td>
                        <td> <?php echo $valor['materia'] ?> </td>
                        <td> <?php echo $valor['descripcion'] ?> </td>  
                    </tr> <?php
                }
                ?> </table> <?php
        }
        pg_close($conn);
        ?>  
        <br> 
        <div style="display: block; position: relative; margin-right: 50%;">
            <form name="formulario" id="formulario" action="index.php?accion=Cancel" method="post" style="text-align: left">
                <input type="text" name="cancelar" id="cancelar" placeholder=" Ingrese Id del Servicio a cancelar" class="boton" required>
                <input type="submit" id="eliminar" class="eliminar" value="Cancelar">
            </form>
        </div>
    </body>
</html>
