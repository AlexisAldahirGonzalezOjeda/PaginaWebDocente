<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css" media="all and (min-width: 621px)"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/estilosCelular.css" media="all and (min-width: 0px) and (max-width: 620px)">
        <script src="Vista/js/funciones.js"></script> 
    </head>
    <body> 
        <div id="cabecera">
            <div id="header">
                <ul class="nav">
                    <li><a href="index.php?accion=Formulario">Agendar clase</a></li>
                    <li><a href="index.php?accion=Cliente">Historial de reservas</a></li>
                    <li><a href="index.php?accion=Inicio">Cerrar sesión</a></li>
                </ul>
            </div>
            <img id="imgIn" src="Vista/imagenes/login2.png">
        </div>
        <div id="cuadroAgendamiento">
            <div id="formulario"> 
                <h1>Agendar clase</h1>
                <form name="formulario" id="formulario" method="get">
                    <div id="datos">
                        Horas:  
                        <datalist id="cantidadHoras">
                            <option value="1 hora"></option>
                            <option value="2 horas"></option>
                            <option value="3 horas"></option>
                            <option value="4 horas"></option>
                        </datalist>  
                        <input type="text" name="cantidadHoras" id="cantidadHoras" list="cantidadHoras" placeholder=" --- Seleccione cantidad de horas --- " class="boton" required>
                        <br>
                        <br>
                        Fecha: 
                        <input type="date" name="fecha" min="2022-07-27" max="2023-12-31" class="boton" required />
                        <br>
                        <br>
                        Franja horaria: 
                        <datalist id="franjaH">
                            <option value="7:00am a 8:00am"></option>
                            <option value="8:00am a 9:00am"></option>
                            <option value="9:00am a 10:00am"></option>
                            <option value="10:00am a 11:00am"></option>
                            <option value="11:00am a 12:00am"></option>
                        </datalist>
                        <input type="text" name="franjaH" id="franjaH" list="franjaH" placeholder="--Seleccione una opción--" class="boton" required>    
                        <!--<p id="current_date"></p>
                        <script>
                            fecha = Date().split(' ');
                            document.getElementById("current_date").innerHTML = fecha[2];
                        </script>-->
                        <br>
                        <br>
                        Materia: 
                        <?php
                        $conn = new Conexion();
                        $conn->consultarMaterias();
                        ?>
                        <br>
                        <br>
                        Profesor: 
                        <?php
                        $conn = new Conexion();
                        $conn->consultarProfesores();
                        ?>
                        <br> 
                        <br>
                        Tipo de pago: 
                        <datalist id="pago">
                            <option value="Efectivo"></option>
                            <option value="Transferencia bancaria"></option> 
                        </datalist> 
                        <input type="text" name="pago" id="pago" list="pago" placeholder="--Seleccione una opción--" class="boton" required>
                        <br> 
                        <br> 
                        <input type="submit" id="enviar" class="enviar" value="Enviar">
                    </div>  
                </form>
            </div>
        </div>
    </body>
</html>