<?php

$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
session_start();
$mail = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'password');

$resultAlumno = pg_query($conn, "SELECT * FROM Alumno WHERE correo='$mail' AND contraseña='$pass'");
$cantidadAlumno = pg_num_rows($resultAlumno);
$arrAlumno = pg_fetch_all($resultAlumno);

$resultProfesor = pg_query($conn, "SELECT * FROM Profesor WHERE correo='$mail' AND contraseña='$pass'");
$cantidadProfesor = pg_num_rows($resultProfesor);
$arrProfesor = pg_fetch_all($resultProfesor);

$resultAdmin = pg_query($conn, "SELECT * FROM Administrador WHERE correo='$mail' AND contraseña='$pass'");
$cantidadAdmin = pg_num_rows($resultAdmin);
$arrAdmin = pg_fetch_all($resultAdmin);
  
if ($cantidadAlumno > 0) {
    $_SESSION['nombre_usuario'] = $arrAlumno[0]['nombre'] . " " . $arrAlumno[0]['apellido'];
    $_SESSION['id_alumno'] = $arrAlumno[0]['id_alumno'];
    $_SESSION['correo'] = $arrAlumno[0]['correo'];
    $_SESSION['celular'] = $arrAlumno[0]['celular'];
    $_SESSION['ciudad'] = $arrAlumno[0]['ciudad'];
    $_SESSION['direccion'] = $arrAlumno[0]['direccion'];
    header("location: index.php?accion=Formulario");
} elseif ($cantidadProfesor > 0) {
    $_SESSION['nombre_usuario'] = $arrProfesor[0]['nombre'] . " " . $arrProfesor[0]['apellido'];
    $_SESSION['id_profesor'] = $arrProfesor[0]['id_profesor'];
    $_SESSION['correo'] = $arrProfesor[0]['correo'];
    $_SESSION['celular'] = $arrProfesor[0]['celular'];
    $_SESSION['ciudad'] = $arrProfesor[0]['ciudad'];
    $_SESSION['direccion'] = $arrProfesor[0]['direccion'];
    header("location: index.php?accion=Historial");
} elseif ($cantidadAdmin > 0) {
    $_SESSION['nombre_usuario'] = $arrAdmin[0]['nombre'] . " " . $arrAdmin[0]['apellido'];
    $_SESSION['id_admin'] = $arrAdmin[0]['id_admin'];
    $_SESSION['correo'] = $arrAdmin[0]['correo'];
    $_SESSION['celular'] = $arrAdmin[0]['celular'];
    $_SESSION['ciudad'] = $arrAdmin[0]['ciudad'];
    $_SESSION['direccion'] = $arrAdmin[0]['direccion'];
    header("location: index.php?accion=AdministrarUsuarios");
} else { 
    header("location: index.php?accion=Sesion");
}
?>
 