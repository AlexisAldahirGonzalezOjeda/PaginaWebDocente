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
            <div id="header">
                <ul class="nav">
                    <li><a href="index.php?accion=AdministrarUsuarios">Usuarios</a></li>
                    <li><a href="index.php?accion=AdministrarMaterias">Materias</a></li> 
                    <li><a href="index.php?accion=AjustesAdmin">Ajustes</a></li> 
                    <li><a href="index.php?accion=Cerrar">Cerrar sesión</a></li>
                </ul>
            </div> 
            <?php
            session_start();
            $admin = $_SESSION['nombre_usuario'];
            echo "<ul id='nombre'>$admin</ul>";
            ?>
            <img id="imgIn" src="Vista/imagenes/admin.png">
        </div>
        <?php
        //echo "<h1>Bienvenido $admin</h1>";
        ?>  

        
        <div id="ajustes" style="margin-top: 80px; height: 200px;">
            <h2>Crear categoria y/o materia</h2>
            <form name="formulario" id="formulario"  action="index.php?accion=CrearCM" method="post" style="text-align: left"> 
                <input type="text" name="categoriaInput" id="categoriaInput" placeholder=" Ingrese área" class="boton" required>
                <br><br>
                <input type="text" name="materiaInput" id="materiaInput" placeholder=" Ingrese materia" class="boton" required>
                <input type="submit" id="crear" class="crear" value="Crear"> 
            </form> 

        </div>
        

        <h2>Consultar materias registradas</h2>


        <?php if (isset($_SESSION['Area'])) { ?> 
            <form name="formulario1" id="formulario1" action="index.php?accion=FormAAdmin" method="post">

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
                    <input list="Area" name="AreaInput" id="AreaInput" placeholder=<?php echo $_SESSION['Area'] ?> class="boton"><?php
                }
                pg_close($conn2);
                ?> 
                <input type="submit" id="consultar" class="consultar" value="Consultar">
            </form>
            <!--<form name="formulario2" id="formulario2" action="index.php?accion=ElimM" method="post">-->
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
                    <input list="materias" name="materiasInput" id="materiasInput" placeholder=" --- Materias registradas ---" class="boton" required>
                    <br><br>
                    <!--<input type="submit" id="eliminar" class="eliminar" value="Eliminar">-->
                <!--</form>-->
                <?php
            }
            pg_close($conn);
        } else {
            ?>
            <form name="formulario1" id="formulario1" action="index.php?accion=FormAAdmin" method="post">

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
                    <input list="Area" name="AreaInput" id="AreaInput" placeholder=" --- Seleccione área ---" class="boton"><?php
                }
                pg_close($conn2);
                ?> 
                <input type="submit" id="consultar" class="consultar" value="Consultar">
            </form>
        <?php }
        ?>


        



    </body>
</html>

