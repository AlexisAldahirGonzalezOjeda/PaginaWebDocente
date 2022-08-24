<?php

session_start();
$_SESSION['Area'] = filter_input(INPUT_POST, 'AreaInput');
$Area = $_SESSION['Area']; 
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
$result = pg_query($conn, "SELECT * FROM CategoriaMateria WHERE categoria = '$Area'");
$arr = pg_fetch_all($result);
$_SESSION['id_categoria'] = $arr[0]['id_categoria'];
pg_close($conn); 
header("location: index.php?accion=AdministrarMaterias");
?> 