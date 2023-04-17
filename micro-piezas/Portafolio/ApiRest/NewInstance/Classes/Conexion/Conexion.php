<?php

class Conexion {

    public function __construct (
        private $server = null,
        private $user = null,
        private $password = null,
        private $database = null,
        private $port = null,
        private $conexion = null
    ) {

        $direccion = dirname(__FILE__);
        $jsondata = file_get_contents($direccion."/"."config");
        $listadatos = json_decode($jsondata, true);
        foreach($listadatos as $key => $value) {
            $this->server = $value["server"];
            $this->user = $value["user"];
            $this->password = $value["password"];
            $this->database = $value["database"];
            $this->port = $value["port"];
        }
        $this->conexion = new mysqli (
            $this->server,$this->user,$this->password,$this->database,$this->port
        );
        if ($this->conexion->connect_errno) {
            echo "algo salio mal con la conexion !.";
            die();
        } else {
            echo "conectado a {n2d_apiRest}";
        }

    }

}