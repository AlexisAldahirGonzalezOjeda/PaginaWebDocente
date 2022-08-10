<?php

session_start();
$id_profesor = $_SESSION['id_profesor'];
$mod = strtolower(filter_input(INPUT_POST, 'modificarInput'));
$campo = filter_input(INPUT_POST, 'campo');
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
$result = pg_query($conn, "UPDATE Profesor SET $mod='$campo' WHERE id_profesor='$id_profesor'");

$resultProfesor = pg_query($conn, "SELECT * FROM Profesor WHERE id_profesor='$id_profesor'");
$cantidadProfesor = pg_num_rows($resultProfesor);
$arrProfesor = pg_fetch_all($resultProfesor);

$_SESSION['nombre_usuario'] = $arrProfesor[0]['nombre'] . " " . $arrProfesor[0]['apellido'];
$_SESSION['id_profesor'] = $arrProfesor[0]['id_profesor'];
$_SESSION['correo'] = $arrProfesor[0]['correo'];
$_SESSION['celular'] = $arrProfesor[0]['celular'];
$_SESSION['ciudad'] = $arrProfesor[0]['ciudad'];
$_SESSION['direccion'] = $arrProfesor[0]['direccion'];
header("location: index.php?accion=Docente");
?>  
