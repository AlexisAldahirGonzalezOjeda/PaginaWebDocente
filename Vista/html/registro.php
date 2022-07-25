<!DOCTYPE html>

<html>
    <head>
        <title>Página Web del Profesor</title>
        <link href="Vista\imagenes\icono.ico" rel="icon" />
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css">
    </head>
    <body> 
        <div id="cabecera"> 
            <ul id="menu">
                <li><a href="index.php?accion=Inicio">Inicio</a> </li>
                <li><a href="index.php?accion=Formulario">Agendar clase</a> </li>
                <li>
                    <select name="servicios" id="servicios">
                        <option value="m">Servicios</option>
                        <option value="m">Matemáticas</option>
                        <option value="a">Física</option>
                        <option value="v">Química</option>
                        <option value="v">Programación</option>
                    </select>
                </li>
                <li>
                    <select name="sesion" id="sesion"> 
                        <option value="m">
                        <a href="index.php?accion=Sesion">Iniciar sesión</a> 
                        </option>
                        <option value="m">
                        <a href="index.php?accion=Registro">Registrarse</a> 
                        </option>
                    </select>
                </li> 
            </ul>
        </div>
        <div id="agrupar">
            <div id="agrupar">
                <div id="formulario"> 
                    <h2>Información de pago</h2>
                    <form name="formulario" id="formulario" method="get">
                        <div id="datos">
                            Nombre: <input type="text" name="nombre" id="nombre" required><br>
                            Tipo de documento: 
                            <datalist id="documentos">
                                <option value="Tarjeta de identidad"></option>
                                <option value="Cedula de extranjería"></option>
                                <option value="Cedula de ciudadanía"></option>
                                <option value="Número único de identificación"></option>
                            </datalist>
                            <input type="text" name="documento" id="documento" list="documentos" placeholder="Cedula de Ciudadanía" required>
                            <br>
                            Número de documento: <input type="number" name="numero" id="numero" required><br>
                            Correo electrónico: <input type="email" name="email" id="email" required><br>
                            Número de contacto: <input type="number" name="telefono" id="telefono" required><br>
                            Escriba los datos de la imagen como aparecen: <br>
                        </div> 
                        <input type="submit" id="enviar" value="Pagar">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>