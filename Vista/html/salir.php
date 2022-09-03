<?php

session_start(); 
unset($_SESSION['busqueda']);
unset($_SESSION['id_User']);
unset($_SESSION['nombreUser']); 
unset($_SESSION['apellidoUser']);
unset($_SESSION['tipo_documentoUser']);
unset($_SESSION['nro_documentoUser']);
unset($_SESSION['ciudadUser']); 
unset($_SESSION['direccionUser']);
unset($_SESSION['correoUser']); 
unset($_SESSION['celularUser']); 
unset($_SESSION['User']);

header("location: index.php?accion=AdministrarUsuarios");
?> 