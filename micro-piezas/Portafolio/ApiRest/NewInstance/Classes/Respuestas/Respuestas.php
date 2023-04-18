<?php

class Respuestas {
    public function __construct (
        private $response = [
            "status" => 'ok',
            "result" => array()
        ]
    ) {}

    public function error_405 () {
        $this->response["status"] = "error";
        $this->response["result"] = [
            "error_id" => "405",
            "error_msg" => "Metodo no Permitido"
        ];
        return $this->response;
    }

    public function error_200 ($text = "wrong data") {
        $this->response["status"] = "error";
        $this->response["result"] = [
            "error_id" => "200",
            "error_msg" => $text
        ];
        return $this->response;
    }

    public function error_400 () {
        $this->response["status"] = "error";
        $this->response["result"] = [
            "error_id" => "400",
            "error_msg" => "Datos enviados Incompletos o formato incorrecto"
        ];
        return $this->response;
    }
}