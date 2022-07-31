<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css" media="all and (min-width: 621px)"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/estilosCelular.css" media="all and (min-width: 0px) and (max-width: 620px)">
    </head>
    <body> 
        <div id="cabecera">
            <div id="header">
                <ul class="nav">
                    <li><a href="index.php?accion=Inicio">Inicio</a></li> 
                    <li><a href="index.php?accion=Matematicas">Servicios</a>
                        <ul>
                            <li><a href="index.php?accion=Matematicas">Matemáticas</a></li>
                            <li><a href="index.php?accion=Fisica">Física</a></li>
                            <li><a href="index.php?accion=Quimica">Química</a></li>
                            <li><a href="index.php?accion=Programacion">Programación</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?accion=Sesion">Iniciar sesión</a></li> 
                    <li><a href="index.php?accion=Registro">Crear cuenta</a></li> 
                </ul>
            </div>
        </div>  
        <div class="servicio"> 
            <h1>Programación</h1>
            <p>¡Hola! Entre los temas de programación en los que podrás agendar clases se encuentran:</p>
            <ul>
                <li>Pseudocódigo.</li>
                <li>Tipos de variables.</li> 
                <li>Entrada y salida de datos.</li>
                <li>Condicionales.</li>
                <li>Estructuras iterativas.</li>
                <li>Arreglos y colecciones.</li>
                <li>Funciones.</li>
                <li>Manejo de archivos.</li>
                <li>Conección a base de datos.</li>
                <li>Clases y objetos.</li>
                <li>Herencia y polimorfismo.</li>
                <li>Interfaz gráfica.</li>
            </ul>   
            <br>
            <p id="back"><a href="index.php?accion=Quimica">Anterior</a></p> 
        </div>
    </body>
</html>
