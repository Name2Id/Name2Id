<?php

    require_once './ramiroSbackN.php';
    $rSbN = new ramiroSbackN;
    $rSbN->conectar ();

    if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

        $postBody = file_get_contents ("php://input");
        $datarray = $rSbN->login($postBody);
        header ("Content-Type: application/json"); 
        if (isset($datarray["result"]["error_id"])) {
            $responseCode = $datarray["result"]["error_id"];
            http_response_code($responseCode);
        } else {
            http_response_code(200);
        }
        echo json_encode($datarray);

    } else {
        
        header ("Content-Type: application/json");
        $datarray = $rSbN->error_405 ();
        echo json_encode ($datarray);

    }

    if ( $_SERVER['REQUEST_METHOD'] == "GET" ) {
        $data = $rSbN->getData ("SELECT * FROM kftable_topics");
        for ($i = 0; $i < count($data); $i++) {
            echo "<div class='container noBorder container__' style='width:30%;'><div class='card'>
            <div class='contenido container__'>".$data[$i]['id']."</div>
            <div class='contenido container__'>".$data[$i]['topic']."</div>
            </div></div>";
        }
    }

?>