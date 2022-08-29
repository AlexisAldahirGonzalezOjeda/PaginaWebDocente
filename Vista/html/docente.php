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
                    <li><a href="index.php?accion=Historial">Historial de clases</a></li> 
                    <li><a href="index.php?accion=Docente">Ajustes</a></li> 
                    <li><a href="index.php?accion=Cerrar">Cerrar sesión</a></li> 
                </ul>
            </div> 
            <?php
            session_start();
            $profesor= $_SESSION['nombre_usuario']; 
            echo "<ul id='nombre'>$profesor</ul>";
            ?>
            <img id="imgIn" src="Vista/imagenes/loginP.png">
        </div> 
        <?php 
        $correo = $_SESSION['correo'];
        $celular = $_SESSION['celular'];
        $ciudad = $_SESSION['ciudad'];
        $direccion = $_SESSION['direccion'];
        //echo "<h1>Bienvenido $profesor</h1>";
        ?> 
        <div id="ajustes" style="margin-top: 80px;">
            <?php echo "<h2>Datos de la cuenta</h2>"; ?> 
            <?php echo "<h2>Correo: $correo</h2>"; ?> 
            <?php echo "<h2>Celular: $celular</h2>"; ?> 
            <?php echo "<h2>Ciudad: $ciudad</h2>"; ?> 
            <?php echo "<h2>Dirección: $direccion</h2>"; ?> 
            <br><br>
            <form name="formulario" id="formulario" action="index.php?accion=ModificarProfesor" method="post" style="text-align: left">
            <datalist id="mod">  
                <option value="Correo"></option>
                <option value="Celular"></option>
                <option value="Ciudad"></option>
                <option value="Direccion"></option>
            </datalist>
            <input type="text" name="modificarInput" id="modificarInput" list="mod" placeholder=" --- Seleccione campo a modificar ---" class="boton" required>
            <br><br>
            <input type="text" name="campo" id="campo" placeholder=" Ingresar valor del nuevo campo" class="boton" required>
            <input type="submit" id="modificar" class="modificar" value="Modificar"> 
        </form>
        </div> 
    </body>
</html>
