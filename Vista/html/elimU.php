<?php

session_start();
$_SESSION['elim'] = 'Activo';
$busq = strtolower($_SESSION['busqueda']);
$valor = strtolower($_SESSION['valorCampo']);
$id = $_SESSION['id_User'];

$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");

if ($_SESSION['User'] == 'Alumno') {
    $delete2 = pg_query($conn, "DELETE FROM Servicio WHERE id_alumno= $id");
    $delete1 = pg_query($conn, "DELETE FROM Alumno WHERE $busq = '$valor'");
}
if ($_SESSION['User'] == 'Profesor') {
    $delete2 = pg_query($conn, "DELETE FROM ProfesorMateria WHERE id_profesor= $id");
    $delete1 = pg_query($conn, "DELETE FROM Disponibilidad WHERE id_profesor= $id");
    $delete3 = pg_query($conn, "DELETE FROM Servicio WHERE id_profesor= $id");
    $delete4 = pg_query($conn, "DELETE FROM Profesor WHERE id_profesor= $id");
}



pg_close($conn);
header("location: index.php?accion=AdministrarUsuarios");
?> 