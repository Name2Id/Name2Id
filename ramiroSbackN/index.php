<?php
    require_once './ramiroSbackN.php';
    $rSbN = new ramiroSbackN;
    #$rSbN->conectar();
    #$filasAfectadasAlInsertar = $rSbN->nonQuery("INSERT INTO kftable_topics (topic)VALUES('new topic family kids')");
    #$ultimoIdInsertado = $rSbN->nonQueryId("INSERT INTO kftable_topics (topic)VALUES('new topic family kids')");
    $message = "hello worrld!<br>filas afectadas al insertar : \$filasAfectadasAlInsertar<br>ultimo id insertado : \$ultimoIdInsertado";
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