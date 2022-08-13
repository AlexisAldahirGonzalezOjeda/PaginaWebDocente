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
            <?php
            session_start();
            $admin = $_SESSION['nombre_usuario'];
            echo "<ul id='nombre'>$admin</ul>";
            ?>
        </div>
        <?php 
        echo "<h1>Bienvenido $admin</h1>";
        ?>  
        
        <div id="ajustes">
            <form name="formulario" id="formulario" method="post" style="text-align: left">
                <datalist id="busq2">  
                    <option value="CategoriaMateria"></option>
                    <option value="Materia"></option> 
                </datalist>
                <input type="text" name="busquedaInput2" id="busquedaInput2" list="busq2" placeholder=" --- Seleccione item de busqueda ---" class="boton" required>
                <br><br>
                <input type="text" name="campo" id="campo" placeholder=" Ingresar valor del nuevo campo" class="boton" required>
                <input type="submit" id="buscar" class="buscar" value="Buscar"> 
            </form> 
        </div>
    </body>
</html>

