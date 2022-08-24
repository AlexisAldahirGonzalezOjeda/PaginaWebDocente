<?php

session_start();
$id_alumno = $_SESSION['id_alumno'];
$Area = $_SESSION['Area'];
$materia = $_SESSION['materia'];
$tipoS = $_SESSION['tipoS'];
$fecha = $_SESSION['fecha'];
$cantidadHoras = $_SESSION['cantidadHoras'][0];
$franjaH = explode(" ", $_SESSION['franjaH']);
$profesor = explode(" ", filter_input(INPUT_POST, 'profesorInput'));
$tipoPago = filter_input(INPUT_POST, 'pagoInput');
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");

$id_p = pg_query($conn, "SELECT id_profesor FROM Profesor WHERE nombre='$profesor[0]' AND apellido='$profesor[1]'");
$id_m = pg_query($conn, "SELECT id_materia FROM Materia WHERE materia='$materia'");
$id_h = pg_query($conn, "SELECT id_hora FROM Hora WHERE inicio='$franjaH[0]' AND fin='$franjaH[2]'");
$id_prof = pg_fetch_all($id_p);
$id_mat = pg_fetch_all($id_m);
$id_hor = pg_fetch_all($id_h);
$id_profesor = $id_prof[0]['id_profesor'];
$id_materia = $id_mat[0]['id_materia'];
$id_hora = $id_hor[0]['id_hora']; 

 $agregar = pg_query($conn, "INSERT INTO
  Servicio(id_profesor, id_materia, id_alumno, tipo_servicio, tipo_pago, id_hora, fecha, descripcion, estado)
  VALUES ($id_profesor, $id_materia, $id_alumno, '$tipoS', '$tipoPago', $id_hora, '$fecha', 'Clases', 'Agendada')"
); 
pg_close($conn);
/*echo $id_alumno . ' ' . $Area . ' ' . $materia . ' ' . $tipoS;
echo $fecha . ' ' . $cantidadHoras . ' ' . $profesor[0] . ' ' . $profesor[1];
echo $franjaH . ' '  . $id_hora . ' ' . $tipoPago;*/
unset($_SESSION['Area']);
unset($_SESSION['materia']); 
unset($_SESSION['tipoS']);
unset($_SESSION['fecha']);
unset($_SESSION['cantidadHoras']);
unset($_SESSION['franjaH']); 
unset($_SESSION['$profesor']);
unset($_SESSION['$tipoPago']); 

header("location: index.php?accion=Cliente");
?> 
