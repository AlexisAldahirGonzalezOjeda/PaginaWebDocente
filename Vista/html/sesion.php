<?php

$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
session_start();
$mail = filter_input(INPUT_POST, 'email');
$pass = filter_input(INPUT_POST, 'password');
$result = pg_query($conn, "SELECT * FROM Alumno WHERE correo='$mail' AND contraseña='$pass'");
$cantidad = pg_num_rows($result);
$arr = pg_fetch_all($result);

if ($cantidad > 0) {
    $_SESSION['nombre_usuario'] = $arr[0]['nombre'] . " " . $arr[0]['apellido'];
    header("location: index.php?accion=Cliente");
} else {
    header("location: index.php?accion=Sesion");
}
 
?>
 