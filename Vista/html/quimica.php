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
            <h1>Química</h1>
            <p>¡Hola! Entre los temas de química en los que podrás agendar clases se encuentran:</p>
            <ul>
                <li>Nomeclantura.</li>
                <li>Propiedades de la Tabla Periodica.</li>
                <li>Estequiometría.</li>
                <li>Relaciones de masa en reacciones químicas.</li>
                <li>Relaciones de disolución acuosa.</li> 
                <li>Leyes de los gases.</li>  
                <li>Ácidos y bases.</li>
                <li>Enlaces químicos.</li> 
            </ul> 
            <br>
            <p id="back"><a href="index.php?accion=Fisica">Anterior</a></p> 
            <p id="next"><a href="index.php?accion=Programacion">Siguiente</a></p>
        </div>
    </body>
</html>
