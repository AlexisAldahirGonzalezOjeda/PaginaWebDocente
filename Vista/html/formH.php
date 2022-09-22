<?php

session_start();
$_SESSION['materia'] = filter_input(INPUT_POST, 'materiasInput'); 
$_SESSION['tipoS'] = filter_input(INPUT_POST, 'InputTipoS'); 
$_SESSION['fecha'] = filter_input(INPUT_POST, 'fecha'); 
$_SESSION['cantidadHoras'] = filter_input(INPUT_POST, 'InputcantidadHoras');
header("location: index.php?accion=Formulario"); 
?> 
