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
            <input list="profesores" name="profesores">
            <datalist id="profesores"> 
                <?php
                foreach ($arr as $clave => $valor) {
                    echo '<option value=\'' . $valor['nombre'] . ' ' . $valor['apellido'] . '\'>';
                }
                ?>
            </datalist> <?php
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
            <input list="materias" name="materias">
            <datalist id="materias"> 
                <?php
                foreach ($arr as $clave => $valor) {
                    echo '<option value=\'' . $valor['materia'] . '\'>';
                }
                ?>
            </datalist> <?php
        }
        pg_close($conn);
    }

}
