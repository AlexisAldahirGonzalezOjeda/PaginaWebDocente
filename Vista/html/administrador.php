<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css" media="all and (min-width: 621px)"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/estilosCelular.css" media="all and (min-width: 0px) and (max-width: 620px)">
        <!--<script src="Vista/js/control.js"></script>-->
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



        <!-- <br>
         <input type="checkbox" id="checkbox1" name="checkbox1" value="verA">
         <label for="checkbox1"> Ver Alumnos</label><br>
         <input type="checkbox" id="checkbox2" name="checkbox2" value="verP">
         <label for="checkbox2"> Ver Profesores</label><br>
        <?php
        /* $conn = new Conexion();
          $conn->verProfesores();
          $conn->verAlumnos(); */
        ?>-->


        <?php
        if (isset($_SESSION['id_User'])) {
            if (isset($_SESSION['mod']) or isset($_SESSION['elim'])) {
                if (isset($_SESSION['elim'])) {
                    ?>
                    <h2>El usuario no existe o ha sido eliminado.</h2>
                    <form name="formulario" id="formulario" action="index.php?accion=Exit" method="post" style="text-align: left">
                        <input type="submit" id="consultar" class="consultar" value="Salir">
                    </form>
                <?php } else { ?>
                    <div style = "display: block; position: absolute; margin: 0px; right: 25%;">
                        <table style = "position: relative; margin-top: 10px">
                            <tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Documento</th>
                                <th>nro</th><th>Ciudad</th><th>Direccion</th><th>Correo</th><th>Celular</th></tr>
                            <tr>
                                <td> <?php echo $_SESSION['id_User']
                    ?> </td> 
                                <td> <?php echo $_SESSION['nombreUser'] ?> </td>
                                <td> <?php echo $_SESSION['apellidoUser'] ?> </td>
                                <td> <?php echo $_SESSION['tipo_documentoUser'] ?> </td>
                                <td> <?php echo $_SESSION['nro_documentoUser'] ?> </td>
                                <td> <?php echo $_SESSION['ciudadUser'] ?> </td>
                                <td> <?php echo $_SESSION['direccionUser'] ?> </td>
                                <td> <?php echo $_SESSION['correoUser'] ?> </td>
                                <td> <?php echo $_SESSION['celularUser'] ?> </td> 
                            </tr>  
                        </table>
                        <form name="formulario" id="formulario" action="index.php?accion=ElimU" method="post" style="text-align: left">
                            <input type="submit" id="eliminar" class="eliminar" value="Eliminar"> 
                        </form>
                        <br><br>
                        <form name="formulario" id="formulario" action="index.php?accion=ModU" method="post" style="text-align: left">
                            <datalist id="mod">  
                                <option value="nombre"></option>
                                <option value="apellido"></option>
                                <option value="nro_documento"></option>
                                <option value="ciudad"></option>
                                <option value="direccion"></option>
                                <option value="correo"></option>
                                <option value="celular"></option>
                            </datalist>
                            <input type="text" name="modificarInput" id="modificarInput" list="mod" placeholder=" --- Seleccione campo a modificar ---" class="boton" required>
                            <br><br>
                            <input type="text" name="campoMod" id="campoMod" placeholder=" Ingresar valor del nuevo campo" class="boton" required>

                            <input type="submit" id="modificar" class="modificar" value="Modificar"> 
                        </form> 
                        <br><br>
                        <form name="formulario" id="formulario" action="index.php?accion=Exit" method="post" style="text-align: left">
                            <input type="submit" id="consultar" class="consultar" value="Salir">
                        </form>
                    </div>
                <?php }
                ?> 
            <?php } else {
                ?>
                <div style="display: block; position: absolute; margin: 0px; right: 25%;">
                    <table style = "position: relative; margin-top: 10px">
                        <tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Documento</th>
                            <th>nro</th><th>Ciudad</th><th>Direccion</th><th>Correo</th><th>Celular</th></tr>
                        <tr>
                            <td> <?php echo $_SESSION['id_User'] ?> </td> 
                            <td> <?php echo $_SESSION['nombreUser'] ?> </td>
                            <td> <?php echo $_SESSION['apellidoUser'] ?> </td>
                            <td> <?php echo $_SESSION['tipo_documentoUser'] ?> </td>
                            <td> <?php echo $_SESSION['nro_documentoUser'] ?> </td>
                            <td> <?php echo $_SESSION['ciudadUser'] ?> </td>
                            <td> <?php echo $_SESSION['direccionUser'] ?> </td>
                            <td> <?php echo $_SESSION['correoUser'] ?> </td>
                            <td> <?php echo $_SESSION['celularUser'] ?> </td> 
                        </tr>  
                    </table>
                    <form name="formulario" id="formulario" action="index.php?accion=ElimU" method="post" style="text-align: left">
                        <input type="submit" id="eliminar" class="eliminar" value="Eliminar"> 
                    </form>
                    <br><br>
                    <form name="formulario" id="formulario" action="index.php?accion=ModU" method="post" style="text-align: left">
                        <datalist id="mod">  
                            <option value="nombre"></option>
                            <option value="apellido"></option>
                            <option value="nro_documento"></option>
                            <option value="ciudad"></option>
                            <option value="direccion"></option>
                            <option value="correo"></option>
                            <option value="celular"></option>
                        </datalist>
                        <input type="text" name="modificarInput" id="modificarInput" list="mod" placeholder=" --- Seleccione campo a modificar ---" class="boton" required>
                        <br><br>
                        <input type="text" name="campoMod" id="campoMod" placeholder=" Ingresar valor del nuevo campo" class="boton" required>

                        <input type="submit" id="modificar" class="modificar" value="Modificar"> 
                    </form> 
                    <br><br>
                    <form name="formulario" id="formulario" action="index.php?accion=Exit" method="post" style="text-align: left">
                        <input type="submit" id="consultar" class="consultar" value="Salir">
                    </form>
                </div> 
            <?php } ?>

        <?php } else { ?>
            <div id="ajustes" style="margin-top: 80px; height:200px;">

                <h2>Administrar usuarios</h2>
                <form name="formulario" id="formulario" action="index.php?accion=Buscar" method="post" style="text-align: left">
                    <datalist id="busq">  
                        <option value="Cedula"></option>
                        <option value="Correo"></option> 
                    </datalist>
                    <input type="text" name="busquedaInput" id="busquedaInput" list="busq" placeholder=" --- Seleccione item de busqueda ---" class="boton" required>
                    <br><br>
                    <input type="text" name="campo" id="campo" placeholder=" Ingresar valor del campo seleccionado" class="boton" required>
                    <input type="submit" id="buscar" class="buscar" value="Buscar"> 
                </form>

                <?php
            }
            ?>

    </body>
</html>
