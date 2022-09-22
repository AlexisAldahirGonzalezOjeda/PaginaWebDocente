<?php

$nombre = filter_input(INPUT_POST, 'nombre');
$apellido = filter_input(INPUT_POST, 'apellido');
$documento = filter_input(INPUT_POST, 'documento');
$numero = filter_input(INPUT_POST, 'numero');
$ciudad = filter_input(INPUT_POST, 'ciudad');
$direccion = filter_input(INPUT_POST, 'direccion');
$mail = filter_input(INPUT_POST, 'email');
$telefono = filter_input(INPUT_POST, 'telefono');
$registroInput = filter_input(INPUT_POST, 'registroInput');
$pass = filter_input(INPUT_POST, 'contraseña');


if ($registroInput == 'Alumno') {
    $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
    session_start();
    $agregar = pg_query($conn, "INSERT INTO
    Alumno(nombre, apellido, tipo_documento, nro_documento, ciudad, direccion, correo, celular, contraseña)
    VALUES ('$nombre', '$apellido', '$documento', '$numero', '$ciudad', '$direccion', '$mail', '$telefono', '$pass')"
    );
    $resultAlumno = pg_query($conn, "SELECT * FROM Alumno WHERE correo='$mail' AND contraseña='$pass'");
    $cantidadAlumno = pg_num_rows($resultAlumno);
    $arrAlumno = pg_fetch_all($resultAlumno);

    $_SESSION['nombre_usuario'] = $arrAlumno[0]['nombre'] . " " . $arrAlumno[0]['apellido'];
    $_SESSION['id_alumno'] = $arrAlumno[0]['id_alumno'];
    $_SESSION['correo'] = $arrAlumno[0]['correo'];
    $_SESSION['celular'] = $arrAlumno[0]['celular'];
    $_SESSION['ciudad'] = $arrAlumno[0]['ciudad'];
    $_SESSION['direccion'] = $arrAlumno[0]['direccion'];

    header("location: index.php?accion=Formulario");
}
if ($registroInput == 'Profesor') {
    $cuenta = filter_input(INPUT_POST, 'cuenta');
    $materia = filter_input(INPUT_POST, 'materias');
    $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
    session_start();
    $agregar = pg_query($conn, "INSERT INTO
    Profesor(nombre, apellido, tipo_documento, nro_documento, ciudad, direccion, correo, celular, n_cuenta, contraseña)
    VALUES ('$nombre', '$apellido', '$documento', '$numero', '$ciudad', '$direccion', '$mail', '$telefono', '$cuenta', '$pass')"
    );
    $resultProfesor = pg_query($conn, "SELECT * FROM Profesor WHERE correo='$mail' AND contraseña='$pass'");
    $cantidadProfesor = pg_num_rows($resultProfesor);
    $arrProfesor = pg_fetch_all($resultProfesor);

    
    $resultMateria = pg_query($conn, "SELECT * FROM Materia WHERE materia='$materia'");
    $cantidadMateria = pg_num_rows($resultMateria);
    $arrMateria = pg_fetch_all($resultMateria);  
    
    
    $id_m = $arrMateria[0]['id_materia'];
    $id_p = $arrProfesor[0]['id_profesor'];
    
    $agregarMateria = pg_query($conn, "INSERT INTO
    ProfesorMateria(id_materia, id_profesor)
    VALUES ('$id_m', '$id_p')"
    );
    
    $_SESSION['nombre_usuario'] = $arrProfesor[0]['nombre'] . " " . $arrProfesor[0]['apellido'];
    $_SESSION['id_profesor'] = $arrProfesor[0]['id_profesor'];
    $_SESSION['correo'] = $arrProfesor[0]['correo'];
    $_SESSION['celular'] = $arrProfesor[0]['celular'];
    $_SESSION['ciudad'] = $arrProfesor[0]['ciudad'];
    $_SESSION['direccion'] = $arrProfesor[0]['direccion'];
    
    header("location: index.php?accion=Historial");
}
/*
  $materiasInput = filter_input(INPUT_POST, 'materiasInput');
  $lunes = filter_input(INPUT_POST, 'lunes');
  $martes = filter_input(INPUT_POST, 'martes');
  $miercoles = filter_input(INPUT_POST, 'miercoles');
  $jueves = filter_input(INPUT_POST, 'jueves');
  $viernes = filter_input(INPUT_POST, 'viernes');
  $sabado = filter_input(INPUT_POST, 'sabado');
  $domingo = filter_input(INPUT_POST, 'domingo');
  $turnoInput = filter_input(INPUT_POST, 'turnoInput');
  $cuenta = filter_input(INPUT_POST, 'cuenta');
  $contaseña = filter_input(INPUT_POST, 'contaseña');
  echo $nombre . $apellido . $documento . $numero . $ciudad . $direccion;
  echo $email . $telefono . $registroInput . $materiasInput . $lunes . $martes;
  echo $miercoles . $jueves . $viernes . $sabado . $domingo . $turnoInput;
  echo $cuenta . $contaseña; */
?>