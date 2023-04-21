<?php

    require_once './ramiroSbackN.php';
    $rSbN = new ramiroSbackN;
    $rSbN->conectar ();

    if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

        $postBody = file_get_contents ("php://input");
        $datarray = $rSbN->login($postBody);
        print_r (json_encode($datarray));

    } else {

        #print_r ( $rSbN->getData ("SELECT * FROM kftable_topics") );
        $data = $rSbN->getData ("SELECT * FROM kftable_topics");
        for ($i = 0; $i < count($data); $i++) {
            echo "<div class='container noBorder' style='width:30%;'><div class='card'>
            <div class='contenido'>".$data[$i]['id']."</div>
            <div class='contenido'>".$data[$i]['topic']."</div>
            </div></div>";
        }

    }

?>