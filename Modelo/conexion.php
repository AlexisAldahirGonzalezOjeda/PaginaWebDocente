<?php

class Conexion {

    private $mySQLI;

    public function agregarReserva() {
        $cli_nombre = filter_input(INPUT_POST, "asignarNombre");
        $cli_ape = filter_input(INPUT_POST, "asignarApellido");
        $cli_id = filter_input(INPUT_POST, "asignarIdentificacion");
        $cli_celular = filter_input(INPUT_POST, "asignarCelular");
        $ct_descripcion = filter_input(INPUT_POST, "asignarServicio");
        $pag_fecha = filter_input(INPUT_POST, "asignarFecha");
        $this->mySQLI = new mysqli("127.0.0.1:3306", "root", "123456789", "proyecto");
        $this->mySQLI->query("INSERT INTO clientes VALUES ( '$cli_id', '$cli_nombre', '$cli_ape', null, '$cli_celular')");
        $this->mySQLI->query("INSERT INTO cortetratamiento VALUES ( null, '$cli_id', null, '$ct_descripcion', null)");
        $this->mySQLI->query("INSERT INTO pago VALUES ( '$pag_fecha', '$cli_id', null)");
        $this->mySQLI->query("INSERT INTO reservas VALUES ( null, '$cli_id', 'No Cancelada', '$pag_fecha')");
    }

}
