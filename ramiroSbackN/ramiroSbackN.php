<?php

    class ramiroSbackN {

        public function __construct (
            private int $contador = 1,
            private $server = null,
            private $user = null,
            private $password = null,
            private $database = null,
            private $port = null,
            private $conexion = null,
            public $response = [
                "status" => 'ok',
                "result" => array()
            ]
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
        }

        /////////\      /\|||/\     ||||||||        /\|||/\
        //      |\|     |     |         |           |     |
        //      |\|     |=====|         |           |=====|
        ///////\|/      |     |         |           |     |

        public function conectar () {
            $this->conexion = new mysqli (
                $this->server,$this->user,$this->password,$this->database,$this->port
            );
            if ($this->conexion->connect_errno) {
                return "algo salio mal con la conexion !.";
            } else {
                return "conectado a {n2d_apiRest}";
            }
        }

        private function UTF8Converter ($array) {
            array_walk_recursive($array,function (&$item,$key){
                if (!mb_detect_encoding($item,'utf-8',true)) {
                    $item = utf8_encode($item);
                }
            });
            return $array;
        }
    
        public function getData ($sqlstr) {
            $results = $this->conexion->query($sqlstr);
            $resultsArray = array();
            foreach ($results as $key ) {
                $resultsArray[] = $key;
            }
            return $this->UTF8Converter($resultsArray);
        }
    
        public function nonQuery ($sqlstr) {
            $results = $this->conexion->query($sqlstr);
            return $this->conexion->affected_rows;
        }
    
        public function nonQueryId ($sqlstr) {
            $results = $this->conexion->query($sqlstr);
            $filas = $this->conexion->affected_rows;
            if ($filas >= 1) {
                return $this->conexion->insert_id;
            } else {
                return 0;
            }
        }

        protected function encriptar ($string) {
            return md5 ($string);
        }

        //||||      //||||      //||||      //|//|//|       //||||      //||||      //||||
        //|         //|  |      //|  |      //|   //|       //|  |      //|         //|
        //||||      //||||      //||||      //|   //|       //||||      //||||      //||||    
        //|         //|\        //|\        //|   //|       //|\        //|            //| 
        //||||      //| \       //| \       //|//|//|       //| \       //||||      //||||

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

        public function error_500 ($text = "INTERNAL SERVER ERROR CODE : 500") {
            $this->response["status"] = "error";
            $this->response["result"] = [
                "error_id" => "500",
                "error_msg" => $text
            ];
            return $this->response;
        }

        #\\     //      ##      //||||      #\\     /#\\     //     
         #\\   //               //|          #\\   // #\\   //
          #\\ //        #|      //||||        #\\ //   #\\ //
           #\\/         #|      //|            #\\/     #\\/
            //\\        #|      //||||          //\\     //\\

        private function colocarEsto (string $codigo) : string {
            return $codigo;
        }

        public function obtenerContador () {
            return $this->contador;
        }

        public function botonGrisConEfectoHover (string $text) {
            $boton = "<button id='ajax-button'>".$text."</button>";
            return $boton;
        }

        public function puntoDeEntrada (
            string $bodyContent = '',
            string $title = 'ramiroSbackN'
            ) {
            $boilerplate = [
                '1' => '<!DOCTYPE html>',
                '2' => '<html lang="en">',
                '3' => '<head>',
                '4' => '    <meta charset="UTF-8">',
                '5' => '    <meta http-equiv="X-UA-Compatible" content="IE=edge">',
                '6' => '    <meta name="viewport" content="width=device-width, initial-scale=1.0">',
                '7' => '    <title>'.$title.'</title>',
                '8' => '<link rel="stylesheet" href="./style.css">',
                '9' => '</head>',
                '10' => '<body>',
                '11' => '<script src="https://kit.fontawesome.com/51765d8f2a.js" crossorigin="anonymous">
                </script>'
                .$this->colocarEsto ($bodyContent),
                '12' => '</body>',
                '13' => '</html>'
            ];
            foreach ($boilerplate as $key => $value) {
                echo $value;
            }
        }

        ///\|||/\||     ||    ||        ||||||||||      ||  ||
        //||     ||     ||    ||            ||          ||||||
        //||=====||     ||    ||            ||          ||  ||
        //||     ||     ||||||||            ||          ||  ||

        public function login ($json) {
            $datos = json_decode($json,true);
            if (
                !isset($datos['email']) ||
                !isset($datos['password'])
            ) {
                return $this->error_400 ();
            } else {
                $email = $datos['email'];
                $password = $datos['password'];
                $password = $this->encriptar ($password);
                $datos = $this->getUserData ($email);
                if ($datos) {
                    if ($password == $datos[0]['password']) {
                        if ($datos[0]['status'] == "activado") {
                            $verificarToken = $this->insertToken ($datos[0]['id']);
                            if ($verificarToken) {

                            } else {
                                $this->error_500 ();
                            }
                        } else {
                            return $this->error_200("user desactivado.!");
                        }
                    } else {
                        return $this->error_200("Passwords no coinciden.!");
                    }
                } else {
                    return $this->error_200("El email $email no existe.!");
                }
            }
        }

        private function getUserData ($email) {
            $query = "SELECT id,status,email,password FROM users WHERE email "."= '".$email."'";
            $datos = $this->getData($query);
            if ( isset($datos[0]['id']) ) {
                return $datos;
            } else {
                return 0;
            }
        }

        private function insertToken ($id) {
            $val = true;
            $token = bin2hex (openssl_random_pseudo_bytes(
                16,$val
            ));
            $date = date ("Y-m-d H:i");
            $status = "activado";
            $query = "INSERT INTO users (id,status,token,date)VALUES('id','status','token','date')";
            $verificarQuery = $this->nonQuery ($query);
            if ( $verificarQuery ) {
                return $token;
            } else {
                return 0;
            }
        }

    }

?>