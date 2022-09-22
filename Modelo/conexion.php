<?php

class Conexion {

    private $conn;

    public function consultarProfesores() {
        $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
        $result = pg_query($conn, "SELECT * FROM Profesor");
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        } else {
            $arr = pg_fetch_all($result);
            ?> 
            <datalist id="profesores"> 
                <?php
                foreach ($arr as $clave => $valor) {
                    echo '<option value=\'' . $valor['nombre'] . ' ' . $valor['apellido'] . '\'>';
                }
                ?>
            </datalist> 
            <input list="profesores" name="profesores" placeholder=" --- Seleccione un docente --- " class="boton" required><?php
        }
        pg_close($conn);
    }

    public function consultarMaterias() {
        $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
        $result = pg_query($conn, "SELECT * FROM Materia");
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        } else {
            $arr = pg_fetch_all($result);
            ?> 
            <datalist id="materias"> 
                <?php
                foreach ($arr as $clave => $valor) {
                    echo '<option value=\'' . $valor['materia'] . '\'>';
                }
                ?>
            </datalist> 
            <input list="materias" name="materias" id="materiasInput" placeholder=" --- Seleccione una materia ---" class="boton"><?php
        }
        pg_close($conn);
    }

    public function LogInAlumno($mail, $password) {
        $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
        $result = pg_query($conn, "SELECT correo, contraseña FROM Alumno");
        if (!$result) {
            echo "An error occurred.\n";
            exit;
        } else {
            $arr = pg_fetch_all($result);
            foreach ($arr as $clave => $valor) {
                if ($mail == $valor['correo'] and $password == $valor['contraseña']) {
                    echo "Valido";
                } else {
                    echo "ERROR. No se encuentra en el sistema. ";
                }
                ?> <br> <?php
            }
        }
        pg_close($conn);
    }

    public function verAlumnos() {
        $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
        if (!pg_query($conn, "SELECT * FROM Alumno")) {
            echo "No hay Alumnos registrados.\n";
            exit;
        } else {
            $arr = pg_fetch_all(pg_query($conn, "SELECT * FROM Alumno"));
            ?> <table id="tablaA"><tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Celular</th><th>Contraseña</th></tr><?php
                foreach ($arr as $clave => $valor) {
                    ?> <tr> 
                        <td> <?php echo $valor['id_alumno'] ?> </td>
                        <td> <?php echo $valor['nombre'] ?> </td>  
                        <td> <?php echo $valor['apellido'] ?> </td>
                        <td> <?php echo $valor['correo'] ?> </td> 
                        <td> <?php echo $valor['celular'] ?> </td> 
                        <td> <?php echo 'XXXXXX' ?></td> 
                    </tr> <?php
                }
                ?> </table> <?php
        }
        pg_close($conn);
    }
    
    public function verProfesores() {
        $conn = pg_connect("host=ec2-50-19-255-190.compute-1.amazonaws.com port=5432 dbname=d3cmr855thvoos user=zkthsrptvksxmv password=297f7243f6066dfd85e419d6faf3cd622950a9bba1a556b0c4f65b89cffb951f");
        if (!pg_query($conn, "SELECT * FROM Profesor")) {
            echo "No hay Alumnos registrados.\n";
            exit;
        } else {
            $arr = pg_fetch_all(pg_query($conn, "SELECT * FROM Profesor"));
            ?> <table id="tablaP"><tr><th>Id</th><th>Nombre</th><th>Apellido</th><th>Correo</th><th>Celular</th><th>Contraseña</th></tr><?php
                foreach ($arr as $clave => $valor) {
                    ?> <tr> 
                        <td> <?php echo $valor['id_profesor'] ?> </td>
                        <td> <?php echo $valor['nombre'] ?> </td>  
                        <td> <?php echo $valor['apellido'] ?> </td>
                        <td> <?php echo $valor['correo'] ?> </td> 
                        <td> <?php echo $valor['celular'] ?> </td> 
                        <td> <?php echo 'XXXXXX' ?></td> 
                    </tr> <?php
                }
                ?> </table> <?php
        }
        pg_close($conn);
    }

}
