<?php

session_start();
$_SESSION['franjaH'] = filter_input(INPUT_POST, 'franjaInput');  
$_SESSION['inicio'] = explode(" ", $_SESSION['franjaH'])[0];
$_SESSION['c'] = explode(" ", $_SESSION['franjaH'])[1];
$_SESSION['fin'] = explode(" ", $_SESSION['franjaH'])[2];
header("location: index.php?accion=Formulario"); 
?> 
