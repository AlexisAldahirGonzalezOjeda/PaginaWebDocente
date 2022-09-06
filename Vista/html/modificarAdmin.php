<?php

session_start();
$id_admin = $_SESSION['id_admin'];
$mod = strtolower(filter_input(INPUT_POST, 'modificarInput'));
$campo = filter_input(INPUT_POST, 'campo');
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
$result = pg_query($conn, "UPDATE Administrador SET $mod='$campo' WHERE id_admin='$id_admin'");

$resultAdmin = pg_query($conn, "SELECT * FROM Administrador WHERE id_admin='$id_admin'");
$cantidadAdmin = pg_num_rows($resultAdmin);
$arrAdmin = pg_fetch_all($resultAdmin);

$_SESSION['nombre_usuario'] = $arrAdmin[0]['nombre'] . " " . $arrAdmin[0]['apellido'];
$_SESSION['id_admin'] = $arrAdmin[0]['id_admin'];
$_SESSION['correo'] = $arrAdmin[0]['correo'];
$_SESSION['celular'] = $arrAdmin[0]['celular'];
$_SESSION['ciudad'] = $arrAdmin[0]['ciudad'];
$_SESSION['direccion'] = $arrAdmin[0]['direccion'];
header("location: index.php?accion=AjustesAdmin");
?>  

