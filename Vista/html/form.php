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
$inicio = filter_var($franjaH[0], FILTER_SANITIZE_NUMBER_INT);
$fin = filter_var($franjaH[2], FILTER_SANITIZE_NUMBER_INT);
$conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
$_SESSION['valido'] = 0;
        
$id_p = pg_query($conn, "SELECT id_profesor FROM Profesor WHERE nombre='$profesor[0]' AND apellido='$profesor[1]'");
$id_m = pg_query($conn, "SELECT id_materia FROM Materia WHERE materia='$materia'");
$id_h = pg_query($conn, "SELECT id_hora FROM Hora WHERE inicio=$inicio AND fin=$fin");

$id_prof = pg_fetch_all($id_p);
$id_mat = pg_fetch_all($id_m);
$id_hor = pg_fetch_all($id_h);
$id_profesor = $id_prof[0]['id_profesor'];
$id_materia = $id_mat[0]['id_materia'];
$id_hora = $id_hor[0]['id_hora'];

 
for ($i = 1; $i <= $cantidadHoras; $i++) {
    $validar = pg_query($conn, "SELECT * FROM Servicio WHERE id_profesor=$id_profesor 
        AND fecha='$fecha' AND hora_inicio=$inicio AND hora_fin=$inicio+1");
    if (pg_num_rows($validar) == 0) {
        $agregar = pg_query($conn, "INSERT INTO
  Servicio(id_profesor, id_materia, id_alumno, tipo_servicio, tipo_pago, id_hora, hora_inicio, hora_fin, fecha, descripcion, estado)
  VALUES ($id_profesor, $id_materia, $id_alumno, '$tipoS', '$tipoPago', $id_hora, $inicio, $inicio+1, '$fecha', 'Clases', 'Agendada')"
        );
        $_SESSION['valido'] = $_SESSION['valido'] + 1;
    } 

    $inicio = $inicio + 1;
} 

if($_SESSION['valido']!=$cantidadHoras){
    $_SESSION['error'] = true;
}
pg_close($conn);

/* echo $id_alumno . ' ' . $Area . ' ' . $materia . ' ' . $tipoS;
  echo $fecha . ' ' . $cantidadHoras . ' ' . $profesor[0] . ' ' . $profesor[1];
  echo $franjaH . ' '  . $id_hora . ' ' . $tipoPago; */

 
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