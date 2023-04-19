<?php

require_once 'C:/xampp/htdocs/micro-piezas/Portafolio\ApiRest/NewInstance/Classes/Auth/Auth.php';
require_once 'C:/xampp/htdocs/micro-piezas/Portafolio/ApiRest/NewInstance/Classes/Respuestas/Respuestas.php';

$_auth = new Auth;
$_respuestas = new Respuestas;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    /*
    echo "esta funcionando todo el programa de la api rest 
    hasta el momento felicidades campeon !.";
    */
    $postBody = file_get_contents("php://input");
    print_r($postBody);
} else {
    echo "Metodo no Permitido !";
}