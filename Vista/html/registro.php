<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css" media="all and (min-width: 621px)"> 
        <link rel="stylesheet" type="text/css" href="Vista/css/tablas.css" media="all and (min-width: 0px) and (max-width: 620px)">
        <link rel="stylesheet" type="text/css" href="Vista/css/estilosCelular.css" media="all and (min-width: 0px) and (max-width: 620px)">
        <script src="Vista/js/funciones.js"></script>
        <script src="Vista/js/registro.js"></script>
        <script src="Vista/js/tablas.js"></script>
    </head>
    <body style="height: 1220px">  
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
        <div id="cuadroRegistro"> 
            <h1>¡Únase en forma gratuita!</h1>
            <form name="formulario" id="formulario" action="index.php?accion=SignUp" method="post">
                <div id="datos">
                    <input type="text" name="nombre" id="nombre" placeholder=" Ingrese su nombre" class="boton" required style="margin-left: 18%; color: black"><br><br><br>
                    <input type="text" name="apellido" id="apellido" placeholder=" Ingrese su apellido" class="boton" required><br><br>
                    <input type="text" name="documento" id="documento" list="documentos" placeholder=" --- Seleccione tipo de documento ---" class="boton" required>
                    <datalist id="documentos">  
                        <option value="Cedula de ciudadanía"></option>
                        <option value="Cedula de extranjería"></option>
                        <option value="Número único de identificación"></option>
                        <option value="Tarjeta de identidad"></option>
                    </datalist> 
                    <br><br> 
                    <input type="number" name="numero" id="numero" class="boton" placeholder=" Ingrese su número de documento" required><br><br>
                    <input type="text" name="ciudad" id="ciudad" class="boton" placeholder=" Ingrese su ciudad" required><br><br>
                    <input type="text" name="direccion" id="direccion" class="boton" placeholder=" Ingrese su dirección" required><br><br>
                    <input type="email" name="email" id="email" class="boton" placeholder=" Ingrese su correo electrónico" required><br><br>
                    <input type="number" name="telefono" id="telefono" class="boton" placeholder=" Ingrese su número de contacto" required><br><br>
                    <datalist id="registro">  
                        <option value="Alumno"></option>
                        <option value="Profesor"></option> 
                    </datalist>
                    <input type="text" name="registroInput" id="registroInput" list="registro" placeholder=" --- Seleccione tipo de registro ---" class="boton" required> 
                    <br><br>
                    <div id="datosP" style="display: none;">
                        <input type="file" id="cargarD" class="boton" name="cargarD" value="cargarD"> 
                        <br><br>  
                        <?php
                        $conn = new Conexion();
                        $conn->consultarMaterias();
                        ?>
                        <br>
                        <br> 
                        <input type="checkbox" id="lunes" name="lunes" value="lunes">
                        <label for="lunes"> Lunes </label><br>
                        <input type="checkbox" id="martes" name="martes" value="martes">
                        <label for="lunes"> Martes </label><br>
                        <input type="checkbox" id="miercoles" name="miercoles" value="miercoles">
                        <label for="lunes"> Miércoles </label><br>
                        <input type="checkbox" id="jueves" name="jueves" value="jueves">
                        <label for="lunes"> Jueves </label><br>
                        <input type="checkbox" id="viernes" name="viernes" value="viernes">
                        <label for="lunes"> Viernes </label><br>
                        <input type="checkbox" id="sabado" name="sabado" value="sabado">
                        <label for="lunes"> Sábado</label><br>
                        <input type="checkbox" id="domingo" name="domingo" value="domingo">
                        <label for="lunes"> Domingo </label> <br><br>
                        <datalist id="turno">  
                            <option value="Mañana (8am a 12am)"></option>
                            <option value="Tarde (2pm a 6pm)"></option> 
                            <option value="Mañana y Tarde"></option>
                        </datalist> 
                        <input type="text" name="turno" id="turnoInput" list="turno" placeholder=" --- Seleccione su horario disponble ---" class="boton"> 
                        <br>
                        <br>
                        <input type="text" name="cuenta" id="cuenta" class="boton" placeholder=" Ingrese su número de cuenta bancaria"><br><br>
                    </div>  
                    <input type="password" name="contraseña" id="contraseña" class="boton" placeholder=" Ingrese su contaseña" required><br><br>
                    <input type="password" name="validarContraseña" id="validarContraseña" class="boton"  placeholder=" Ingrese su contaseña nuevamente" required><br><br>
                    <input type="submit" id="enviar" class="enviar" value="Enviar">
                </div>  
            </form>  
        </div> 
        <footer id="pie">
            <p>
                <a href="https://www.sic.gov.co/sites/default/files/documentos/072020/Pol%C3%ADtica%20de%20Tratamiento%20de%20Datos%20Personales%20-%20SIC.pdf" target="_blank">
                    Política de privacidad de datos </a>
            </p>
        </footer> 
    </body>
</html>