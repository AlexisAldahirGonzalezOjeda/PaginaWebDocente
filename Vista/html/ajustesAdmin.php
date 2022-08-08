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
                    <li><a href="index.php?accion=Inicio">Cerrar sesión</a></li>
                </ul>
            </div> 
            <img id="imgIn" src="Vista/imagenes/admin.png">
        </div>
        <?php
        session_start();
        $admin = $_SESSION['nombre_usuario'];
        $id_admin = $_SESSION['id_admin'];
        $correo = $_SESSION['correo'];
        $celular = $_SESSION['celular'];
        $ciudad = $_SESSION['ciudad'];
        $direccion = $_SESSION['direccion'];
        echo "<h1>Bienvenido $admin</h1>";
        ?> 
        <div id="ajustes">
            <?php echo "<h2>Datos de la cuenta</h2>"; ?> 
            <?php echo "<h2>Correo: $correo</h2>"; ?> 
            <?php echo "<h2>Celular: $celular</h2>"; ?> 
            <?php echo "<h2>Ciudad: $ciudad</h2>"; ?> 
            <?php echo "<h2>Dirección: $direccion</h2>"; ?> 
            <br><br>
            <form name="formulario" id="formulario" action="index.php?accion=ModificarAdmin" method="post" style="text-align: left">
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