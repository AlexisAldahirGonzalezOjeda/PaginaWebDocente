<?php

session_start(); 
$_SESSION['materiasInput'] = filter_input(INPUT_POST, 'materiasInput');
$Area = $_SESSION['Area'];
$Materia = $_SESSION['materiasInput'];

$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
$result = pg_query($conn, "SELECT * FROM CategoriaMateria WHERE categoria = '$Area'");
$cantidad = pg_num_rows($result);
$arr = pg_fetch_all($result); 
$id_cat = $arr[0]['id_categoria']; 
 
$result1 = pg_query($conn, "SELECT * FROM Materia WHERE materia = '$Materia'");
$cantidad1 = pg_num_rows($result1);
$arr1 = pg_fetch_all($result1);
$id_mat = $arr1[0]['id_materia'];  
 
$delete1 = pg_query($conn, "DELETE FROM CategoriaMateria WHERE id_categoria= $id_cat");
$delete2 = pg_query($conn, "DELETE FROM Materia WHERE id_materia= $id_mat");
$delete3 = pg_query($conn, "DELETE FROM ProfesorMateria WHERE id_materia= $id_mat");
$delete4 = pg_query($conn, "DELETE FROM Servicio WHERE id_materia= $id_mat");

pg_close($conn);
unset($_SESSION['Area']);
unset($_SESSION['materiasInput']);
header("location: index.php?accion=AdministrarMaterias"); 
?> 