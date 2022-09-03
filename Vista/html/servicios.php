<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css" media="all and (min-width: 621px)"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/estilosCelular.css" media="all and (min-width: 0px) and (max-width: 620px)">
        <link rel="stylesheet" type="text/css" href="Vista/css/fonts.css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script> 
        <script src="Vista/js/arriba.js"></script>
    </head>
    <body> 
        <div id="cabecera">
            <div id="headerInicio">
                <ul class="nav">
                    <li><a href="index.php?accion=Inicio">Inicio</a></li> 
                    <li><a href="index.php?accion=Servicios">Servicios</a>
                        <!--<ul>
                            <li><a href="index.php?accion=Matematicas">Matemáticas</a></li>
                            <li><a href="index.php?accion=Fisica">Física</a></li>
                            <li><a href="index.php?accion=Quimica">Química</a></li>
                            <li><a href="index.php?accion=Programacion">Programación</a></li>
                        </ul>-->
                    </li>
                    <li><a href="index.php?accion=Sesion">Iniciar sesión</a></li> 
                    <li><a href="index.php?accion=Registro">Crear cuenta</a></li> 
                </ul>
            </div>
        </div>  
        <div class="servicio">
            <?php
            $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
            $categorias = pg_query($conn, "SELECT * FROM CategoriaMateria");

            if (!$categorias) {
                echo "An error occurred.\n";
                exit;
            } else {
                $arr = pg_fetch_all($categorias);
                foreach ($arr as $clave => $valor) {
                    ?><h2 style="text-align: left; margin-left: 30px;" style="position: relative; left: 10%;"><a href="#<?php echo $valor['categoria']; ?>"><?php echo $valor['categoria']; ?></a></h2><?php
                }
                ?><br><br><div id="servicio2"><?php
                    foreach ($arr as $clave => $valor) {
                        ?><h1 id="<?php echo $valor['categoria']; ?>"><?php echo $valor['categoria']; ?></h1><?php
                        $cat = strtolower($valor['categoria']);
                        $id = $valor['id_categoria'];
                        $materias = pg_query($conn, "SELECT * FROM Materia WHERE id_categoria=$id");
                        echo "<p>¡Hola! Entre los temas de $cat en los que podrás agendar clases se encuentran:</p>"
                        ?><ul><?php
                            $arr2 = pg_fetch_all($materias);
                            foreach ($arr2 as $clave2 => $valor2) {
                                ?><li><?php echo $valor2['materia']; ?></li><?php
                            }
                            ?><br><br></ul><?php
                        }
                    }
                    pg_close($conn);
                    ?>
                <span class="ir-arriba icon-arrow-up"></span>
                <footer id="pie">
                    <p>
                        <a href="https://www.sic.gov.co/sites/default/files/documentos/072020/Pol%C3%ADtica%20de%20Tratamiento%20de%20Datos%20Personales%20-%20SIC.pdf" target="_blank" style="font-family:Arial, Helvetica, sans-serif; font-size: 14px;">
                            Política de privacidad de datos </a>
                    </p>
                </footer> 
            </div> 
        </div>   
    </body>
</html>
