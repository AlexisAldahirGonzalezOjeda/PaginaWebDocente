<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="Vista\imagenes\loginP.png"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css" media="all and (min-width: 621px)"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/estilosCelular.css" media="all and (min-width: 0px) and (max-width: 620px)">   
        <link rel="stylesheet" type="text/css" href="Vista/css/contrast.css">  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.js"></script> 
        <script src="Vista/js/aumentar.js"></script> 
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
        <br><br> 
        <div class="servicio" style="height: auto;">

            <img src="Vista/imagenes/logo.png" width="600" height="200"">

            <h1>¡Bienvenidos!</h1>
            <p>
                En esta página encontrarás el lugar ideal <br/>
                para encontrar servicios particulares para <br/>
                clases y asesorias en las principales <br/>
                materias en nivel de bachillerato y <br/>
                universidad <br/>
            </p>  

            <h2>¿Tienes dudas?</h2>
            <p>
                Si tienes dudas de cómo navegar mira el siguiente  <br/>
                video, en menos 5 minutos te convertirás  <br/>
                en un experto <br/> 
            </p>

            <iframe width="480" height="270" src="https://www.powtoon.com/embed/gjYaWRIuB58/" frameborder="0" allowfullscreen></iframe>
            
            <p>
                ¡Si eres alumno registrate ahora! <br/>
                Te tenemos una super oferta, por tiempo limitado, <br/>
                las tres primeras horas de clases son <b>GRATIS</b>.  <a href="index.php?accion=Registro">Registrate</a> <br/> 
            </p>
            <br/>
            <h2>!Nuestra política de datos!</h2>
            <p>
                Haz click en el siguiente enlace y revisa<br/>
                nuestra política de datos.
                 <a href="https://www.sic.gov.co/sites/default/files/documentos/072020/Pol%C3%ADtica%20de%20Tratamiento%20de%20Datos%20Personales%20-%20SIC.pdf" target="_blank">
                    Política de privacidad de datos </a><br/> <br/>
            </p>

        </div>
        <span class="aumentar icon-contrast"></span> 
        <footer id="pie">
            <p>
                &copy; 2022 paginadocente.herokuapp.com 
            </p>
        </footer>   
    </body>
</html>