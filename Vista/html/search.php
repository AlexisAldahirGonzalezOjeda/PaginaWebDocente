<?php

session_start();
$_SESSION['busqueda'] = filter_input(INPUT_POST, 'busquedaInput');
$_SESSION['valorCampo'] = filter_input(INPUT_POST, 'campo');
$busq = strtolower($_SESSION['busqueda']);
$valor = strtolower($_SESSION['valorCampo']);
echo $busq . ' ' . $valor;
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
$result1 = pg_query($conn, "SELECT * FROM Alumno WHERE $busq = '$valor'"); 
$cantidadA = pg_num_rows($result1);
$result2 = pg_query($conn, "SELECT * FROM Profesor WHERE $busq = '$valor'"); 
$cantidadP = pg_num_rows($result2);

if ($cantidadA > 0) {
    $arr = pg_fetch_all($result1);
    $_SESSION['User'] = 'Alumno';
    $_SESSION['id_User'] = $arr[0]['id_alumno'];
    $_SESSION['nombreUser'] = $arr[0]['nombre'];
    $_SESSION['apellidoUser'] = $arr[0]['apellido'];
    $_SESSION['tipo_documentoUser'] = $arr[0]['tipo_documento'];
    $_SESSION['nro_documentoUser'] = $arr[0]['nro_documento'];
    $_SESSION['ciudadUser'] = $arr[0]['ciudad'];
    $_SESSION['direccionUser'] = $arr[0]['direccion'];
    $_SESSION['correoUser'] = $arr[0]['correo'];
    $_SESSION['celularUser'] = $arr[0]['celular'];
    $_SESSION['contraseñaUser'] = $arr[0]['contraseña'];
}
if ($cantidadP > 0) {
    $arr = pg_fetch_all($result2);
    $_SESSION['User'] = 'Profesor';
    $_SESSION['id_User'] = $arr[0]['id_profesor'];
    $_SESSION['nombreUser'] = $arr[0]['nombre'];
    $_SESSION['apellidoUser'] = $arr[0]['apellido'];
    $_SESSION['tipo_documentoUser'] = $arr[0]['tipo_documento'];
    $_SESSION['nro_documentoUser'] = $arr[0]['nro_documento'];
    $_SESSION['ciudadUser'] = $arr[0]['ciudad'];
    $_SESSION['direccionUser'] = $arr[0]['direccion'];
    $_SESSION['correoUser'] = $arr[0]['correo'];
    $_SESSION['celularUser'] = $arr[0]['celular'];
    $_SESSION['contraseñaUser'] = $arr[0]['contraseña'];
}

pg_close($conn);
header("location: index.php?accion=AdministrarUsuarios");
?>