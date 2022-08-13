<?php

session_start();
$_SESSION['franjaH'] = filter_input(INPUT_POST, 'franjaInput');  
header("location: index.php?accion=Formulario"); 
?> 
