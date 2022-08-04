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
        $correo = $_SESSION['correo'];
        $celular = $_SESSION['celular'];
        $direccion = $_SESSION['direccion'];
        echo "<h1>Bienvenido $admin</h1>";
        ?> 
        <div id="AjustesAdmin">
            <?php echo "<h2>Correo: $correo</h2>"; ?> 
            <?php echo "<h2>Celular: $celular</h2>"; ?> 
            <?php echo "<h2>Direccion: $direccion</h2>"; ?> 
        </div>
    </body>
</html>