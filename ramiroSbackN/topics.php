<?php

    require_once './ramiroSbackN.php';
    $rSbN = new ramiroSbackN;
    $rSbN->conectar ();

    if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

        $postBody = file_get_contents ("php://input");
        $datarray = $rSbN->login($postBody);
        print_r (json_encode($datarray));

    } else {

        print_r ( $rSbN->getData ("SELECT * FROM kftable_topics") );

    }

?>