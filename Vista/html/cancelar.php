<?php

session_start();
$_SESSION['id'] = filter_input(INPUT_POST, 'cancelar');
$id = $_SESSION['id'];
$id_alumno = $_SESSION['id_alumno'];
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");

$delete = pg_query($conn, "DELETE FROM Servicio WHERE id_servicio=$id AND id_alumno=$id_alumno");




pg_close($conn);
header("location: index.php?accion=Cliente");
?> 