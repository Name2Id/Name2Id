<?php

    require_once './ramiroSbackN.php';
    $rSbN = new ramiroSbackN;

    if ( $_SERVER['REQUEST_METHOD'] == "POST" ) {

        $postBody = file_get_contents ("php://input");
        print_r ($postBody);

    } else {

        $rSbN->conectar ();
        print_r ( $rSbN->getData ("SELECT * FROM kftable_topics") );

    }

?>