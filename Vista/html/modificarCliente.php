<?php

session_start();

$id_alumno = $_SESSION['id_alumno'];
$mod = strtolower(filter_input(INPUT_POST, 'modificarInput'));
$campo = filter_input(INPUT_POST, 'campo');
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
$result = pg_query($conn, "UPDATE Alumno SET $mod='$campo' WHERE id_alumno='$id_alumno'");

$resultAlumno = pg_query($conn, "SELECT * FROM Alumno WHERE id_alumno='$id_alumno'");
$cantidadAlumno = pg_num_rows($resultAlumno);
$arrAlumno = pg_fetch_all($resultAlumno);

$_SESSION['nombre_usuario'] = $arrAlumno[0]['nombre'] . " " . $arrAlumno[0]['apellido'];
$_SESSION['id_alumno'] = $arrAlumno[0]['id_alumno'];
$_SESSION['correo'] = $arrAlumno[0]['correo'];
$_SESSION['celular'] = $arrAlumno[0]['celular'];
$_SESSION['ciudad'] = $arrAlumno[0]['ciudad'];
$_SESSION['direccion'] = $arrAlumno[0]['direccion'];
header("location: index.php?accion=AjustesCliente");
?>  