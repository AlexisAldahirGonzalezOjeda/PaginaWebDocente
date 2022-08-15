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
        $getdate = getdate();
        $hoy = $getdate['year'] . '-' . $getdate['mon'] . '-' . $getdate['mday'];
        ?>
        <div id="cuadroAgendamiento">
            <h1>Agendar clase</h1> 
            <?php
            if (isset($_SESSION['Area'])) {
                $Area = $_SESSION['Area'];
                if (isset($_SESSION['cantidadHoras'])) {
                    $materia = $_SESSION['materia'];
                    $tipoS = $_SESSION['tipoS'];
                    $fecha = $_SESSION['fecha'];
                    $cantidadHoras = $_SESSION['cantidadHoras'][0];
                    if (isset($_SESSION['franjaH'])) {
                        $franjaH = $_SESSION['franjaH'];
                        ?>
                        <form name="formulario1" id="formulario1" action="index.php?accion=FormA" method="post">

                            <br>
                            <br>
                            <?php
                            $conn2 = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                            $result = pg_query($conn2, "SELECT * FROM CategoriaMateria");
                            if (!$result) {
                                echo "An error occurred.\n";
                                exit;
                            } else {
                                $arr = pg_fetch_all($result);
                                ?> 
                                <datalist id="Area"> 
                                    <?php
                                    foreach ($arr as $clave => $valor) {
                                        echo '<option value=\'' . $valor['categoria'] . '\'>';
                                    }
                                    ?>
                                </datalist> 
                                <input list="Area" name="AreaInput" id="AreaInput" placeholder=<?php echo $Area ?> class="boton"><?php
                            }
                            pg_close($conn2);
                            ?> 
                            <input type="submit" id="consultar" class="consultar" value="Consultar">
                        </form>
                        <form name="formulario2" id="formulario2" action="index.php?accion=FormH" method="post">
                            <?php
                            $id_categoria = $_SESSION['id_categoria'];
                            $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                            $result2 = pg_query($conn, "SELECT * FROM Materia WHERE id_categoria='$id_categoria'");
                            if (!$result2) {
                                echo "An error occurred.\n";
                                exit;
                            } else {
                                $arr = pg_fetch_all($result2);
                                ?> <br> 
                                <datalist id="materias"> 
                                    <?php
                                    foreach ($arr as $clave => $valor) {
                                        echo '<option value=\'' . $valor['materia'] . '\'>';
                                    }
                                    ?>
                                </datalist> 
                                <input list="materias" name="materiasInput" id="materiasInput" placeholder=<?php echo $materia ?> class="boton" required><?php
                            }
                            pg_close($conn);
                            ?>
                            <br><br>
                            <datalist id="tipoS">
                                <option value="Presencial"></option>
                                <option value="Virtual"></option>  
                            </datalist> 
                            <input type="text" name="InputTipoS" id="InputTipoS" list="tipoS" placeholder=<?php echo $tipoS ?> class="boton" required>
                            <br><br> 
                            <input type="date" name="fecha" id="fecha" min="2022-07-27" max="2023-12-31" class="boton" required />
                            <br><br>
                            <datalist id="cantidadHoras">
                                <option value="1 hora"></option>
                                <option value="2 horas"></option>
                                <option value="3 horas"></option>
                                <option value="4 horas"></option>
                            </datalist>  
                            <input type="text" name="InputcantidadHoras" id="InputcantidadHoras" list="cantidadHoras" placeholder=<?php echo $cantidadHoras ?> class="boton" required>
                            <input type="submit" id="consultar" class="consultar" value="Consultar">
                        </form> 
                        <form name="formulario3" id="formulario3" action="index.php?accion=FormP" method="post">
                            <?php
                            $conn3 = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                            $result3 = pg_query($conn3, "SELECT * FROM Hora WHERE horas=$cantidadHoras");
                            if (!$result3) {
                                echo "An error occurred.\n";
                                exit;
                            } else {
                                $arr = pg_fetch_all($result3);
                                ?> <br> 
                                <datalist id="franja"> 
                                    <?php
                                    foreach ($arr as $clave => $valor) {
                                        echo '<option value=\'' . $valor['inicio'] . ' - ' . $valor['fin'] . '\'>';
                                    }
                                    ?>
                                </datalist> 
                                <input list="franja" name="franjaInput" id="franjaInput" placeholder=<?php echo $franjaH ?> class="boton" required><?php
                            }
                            pg_close($conn3);
                            ?>
                            <input type="submit" id="consultar" class="consultar" value="Consultar">

                        </form>  
                        <form name="formulario4" id="formulario4" action="index.php?accion=Form" method="post">
                            <?php
                            $conn3 = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                            $result3 = pg_query($conn3, "SELECT materia, nombre, apellido FROM ProfesorMateria
                        INNER JOIN Profesor
                        ON Profesor.id_profesor = ProfesorMateria.id_profesor 
                        INNER JOIN Materia
                        ON Materia.id_materia = ProfesorMateria.id_materia  
                        WHERE Materia.materia='$materia'; ");
                            if (!$result3) {
                                echo "An error occurred.\n";
                                exit;
                            } else {
                                $arr = pg_fetch_all($result3);
                                ?> <br> 
                                <datalist id="profesor"> 
                                    <?php
                                    foreach ($arr as $clave => $valor) {
                                        echo '<option value=\'' . $valor['nombre'] . ' ' . $valor['apellido'] . '\'>';
                                    }
                                    ?>
                                </datalist> 
                                <input list="profesor" name="profesorInput" id="profesorInput" placeholder=" --- Seleccione un profesor --- " class="boton" required><?php
                            }
                            pg_close($conn3);
                            ?>
                            <br> 
                            <br>  
                            <datalist id="pago">
                                <option value="Efectivo"></option>
                                <option value="Nequi"></option> 
                                <option value="Transferencia bancaria"></option> 
                            </datalist> 
                            <input type="text" name="pagoInput" id="pagoInput" list="pago" placeholder=" --- Seleccione opción de pago ---" class="boton" required>
                            <br> 
                            <br> 
                            <input type="submit" id="enviar" class="enviar" value="Enviar">
                        </form>

                    <?php } else {
                        ?> 
                        <form name="formulario1" id="formulario1" action="index.php?accion=FormA" method="post">

                            <br>
                            <br>
                            <?php
                            $conn2 = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                            $result = pg_query($conn2, "SELECT * FROM CategoriaMateria");
                            if (!$result) {
                                echo "An error occurred.\n";
                                exit;
                            } else {
                                $arr = pg_fetch_all($result);
                                ?> 
                                <datalist id="Area"> 
                                    <?php
                                    foreach ($arr as $clave => $valor) {
                                        echo '<option value=\'' . $valor['categoria'] . '\'>';
                                    }
                                    ?>
                                </datalist> 
                                <input list="Area" name="AreaInput" id="AreaInput" placeholder=<?php echo $Area ?> class="boton"><?php
                            }
                            pg_close($conn2);
                            ?> 
                            <input type="submit" id="consultar" class="consultar" value="Consultar">
                        </form>
                        <form name="formulario2" id="formulario2" action="index.php?accion=FormH" method="post">
                            <?php
                            $id_categoria = $_SESSION['id_categoria'];
                            $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                            $result2 = pg_query($conn, "SELECT * FROM Materia WHERE id_categoria='$id_categoria'");
                            if (!$result2) {
                                echo "An error occurred.\n";
                                exit;
                            } else {
                                $arr = pg_fetch_all($result2);
                                ?> <br> 
                                <datalist id="materias"> 
                                    <?php
                                    foreach ($arr as $clave => $valor) {
                                        echo '<option value=\'' . $valor['materia'] . '\'>';
                                    }
                                    ?>
                                </datalist> 
                                <input list="materias" name="materiasInput" id="materiasInput" placeholder=<?php echo $materia ?> class="boton" required><?php
                            }
                            pg_close($conn);
                            ?>
                            <br><br>
                            <datalist id="tipoS">
                                <option value="Presencial"></option>
                                <option value="Virtual"></option>  
                            </datalist> 
                            <input type="text" name="InputTipoS" id="InputTipoS" list="tipoS" placeholder=<?php echo $tipoS ?> class="boton" required>
                            <br><br> 
                            <input type="date" name="fecha" id="fecha" min="2022-07-27" max="2023-12-31" class="boton" required />
                            <br><br>
                            <datalist id="cantidadHoras">
                                <option value="1 hora"></option>
                                <option value="2 horas"></option>
                                <option value="3 horas"></option>
                                <option value="4 horas"></option>
                            </datalist>  
                            <input type="text" name="InputcantidadHoras" id="InputcantidadHoras" list="cantidadHoras" placeholder=<?php echo $cantidadHoras ?> class="boton" required>
                            <input type="submit" id="consultar" class="consultar" value="Consultar">
                        </form> 
                        <form name="formulario3" id="formulario3" action="index.php?accion=FormP" method="post">
                            <?php
                            $conn3 = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                            $result3 = pg_query($conn3, "SELECT * FROM Hora WHERE horas=$cantidadHoras");
                            if (!$result3) {
                                echo "An error occurred.\n";
                                exit;
                            } else {
                                $arr = pg_fetch_all($result3);
                                ?> <br> 
                                <datalist id="franja"> 
                                    <?php
                                    foreach ($arr as $clave => $valor) {
                                        echo '<option value=\'' . $valor['inicio'] . ' - ' . $valor['fin'] . '\'>';
                                    }
                                    ?>
                                </datalist> 
                                <input list="franja" name="franjaInput" id="franjaInput" placeholder=" --- Seleccione una franja horaria ---" class="boton" required><?php
                            }
                            pg_close($conn3);
                            ?>
                            <input type="submit" id="consultar" class="consultar" value="Consultar">
                        </form>
                        <?php
                    }
                } else {
                    ?> 
                    <form name="formulario1" id="formulario1" action="index.php?accion=FormA" method="post">

                        <br>
                        <br>
                        <?php
                        $conn2 = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                        $result = pg_query($conn2, "SELECT * FROM CategoriaMateria");
                        if (!$result) {
                            echo "An error occurred.\n";
                            exit;
                        } else {
                            $arr = pg_fetch_all($result);
                            ?> 
                            <datalist id="Area"> 
                                <?php
                                foreach ($arr as $clave => $valor) {
                                    echo '<option value=\'' . $valor['categoria'] . '\'>';
                                }
                                ?>
                            </datalist> 
                            <input list="Area" name="AreaInput" id="AreaInput" placeholder=<?php echo $Area ?> class="boton"><?php
                        }
                        pg_close($conn2);
                        ?> 
                        <input type="submit" id="consultar" class="consultar" value="Consultar">
                    </form>
                    <form name="formulario2" id="formulario2" action="index.php?accion=FormH" method="post">
                        <?php
                        $id_categoria = $_SESSION['id_categoria'];
                        $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                        $result = pg_query($conn, "SELECT * FROM Materia WHERE id_categoria='$id_categoria'");
                        if (!$result) {
                            echo "An error occurred.\n";
                            exit;
                        } else {
                            $arr = pg_fetch_all($result);
                            ?> <br> 
                            <datalist id="materias"> 
                                <?php
                                foreach ($arr as $clave => $valor) {
                                    echo '<option value=\'' . $valor['materia'] . '\'>';
                                }
                                ?>
                            </datalist> 
                            <input list="materias" name="materiasInput" id="materiasInput" placeholder=" --- Seleccione una materia ---" class="boton" required><?php
                        }
                        pg_close($conn);
                        ?>
                        <br><br>
                        <datalist id="tipoS">
                            <option value="Presencial"></option>
                            <option value="Virtual"></option>  
                        </datalist> 
                        <input type="text" name="InputTipoS" id="InputTipoS" list="tipoS" placeholder=" --- Seleccione tipo de servicio ---" class="boton" required>
                        <br><br>
                        <input type="date" name="fecha" id="fecha" min="2022-07-27" max="2023-12-31" class="boton" required />
                        <br><br>
                        <datalist id="cantidadHoras">
                            <option value="1 hora"></option>
                            <option value="2 horas"></option>
                            <option value="3 horas"></option>
                            <option value="4 horas"></option>
                        </datalist>  
                        <input type="text" name="InputcantidadHoras" id="InputcantidadHoras" list="cantidadHoras" placeholder=" --- Seleccione cantidad de horas --- " class="boton" required>
                        <input type="submit" id="consultar" class="consultar" value="Consultar">
                    </form> 
                    <?php
                }
            } else {
                ?> 
                <form name="formulario1" id="formulario1" action="index.php?accion=FormA" method="post"> 
                    <br>
                    <br>
                    <?php
                    $conn1 = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
                    $result = pg_query($conn1, "SELECT * FROM CategoriaMateria");
                    if (!$result) {
                        echo "An error occurred.\n";
                        exit;
                    } else {
                        $arr = pg_fetch_all($result);
                        ?> 
                        <datalist id="Area"> 
                            <?php
                            foreach ($arr as $clave => $valor) {
                                echo '<option value=\'' . $valor['categoria'] . '\'>';
                            }
                            ?>
                        </datalist> 
                        <input list="Area" name="AreaInput" id="AreaInput" placeholder=" --- Seleccione área de interés ---" class="boton"><?php
                    }
                    pg_close($conn1);
                    ?> 
                    <input type="submit" id="consultar" class="consultar" value="Consultar">
                </form>
            <?php }
            ?> 
        </div>   

    </body>
</html>