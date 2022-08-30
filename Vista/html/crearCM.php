<?php

session_start();
$_SESSION['categoriaInput'] = filter_input(INPUT_POST, 'categoriaInput');
$_SESSION['materiaInput'] = filter_input(INPUT_POST, 'materiaInput');
$Area = $_SESSION['categoriaInput'];
$Materia = $_SESSION['materiaInput'];
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
$result = pg_query($conn, "SELECT * FROM CategoriaMateria WHERE categoria = '$Area'");
$cantidad = pg_num_rows($result);


if ($cantidad > 0) {
    $arr = pg_fetch_all($result);
    $_SESSION['id_categoria'] = $arr[0]['id_categoria'];
    $id = $_SESSION['id_categoria'];
    $insertMateria = pg_query($conn, "INSERT INTO 
                                      Materia(id_categoria, materia)
                                      VALUES  ($id, '$Materia')");
} else {
    $insertCategoria = pg_query($conn, "INSERT INTO 
                                        CategoriaMateria(categoria)
                                        VALUES  ('$Area')");
    $result = pg_query($conn, "SELECT * FROM CategoriaMateria WHERE categoria = '$Area'");
    $cantidad = pg_num_rows($result);
    $arr = pg_fetch_all($result);
    $_SESSION['id_categoria'] = $arr[0]['id_categoria'];
    $id = $_SESSION['id_categoria'];
    $insertMateria = pg_query($conn, "INSERT INTO 
                                      Materia(id_categoria, materia)
                                      VALUES  ($id, '$Materia')");
}

pg_close($conn);
unset($_SESSION['categoriaInput']);
unset($_SESSION['materiaInput']);
header("location: index.php?accion=AdministrarMaterias");
?> 