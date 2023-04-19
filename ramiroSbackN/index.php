<?php
    require_once './ramiroSbackN.php';
    $rSbN = new ramiroSbackN;
    $message = "hello worrld!";
    $rSbN->puntoDeEntrada (
        '<div class="container">'.
            '<div id="main" class="container">'.$message.'</div>'.
            $rSbN->botonGrisConEfectoHover(
                '<i class="fa-solid fa-fire"></i> '.
                $rSbN->obtenerContador (). 
                ' - obtener topics <i class="fa-solid fa-fire"></i>'
            ).
        '</div>'.
        '<script src="./javascript.js"></script>'
    );
?>