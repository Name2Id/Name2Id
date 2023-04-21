<?php
    require_once './ramiroSbackN.php';
    $rSbN = new ramiroSbackN;
    /*
        $rSbN->conectar();
        $filasAfectadasAlInsertar = $rSbN->nonQuery("INSERT INTO kftable_topics 
        (topic)VALUES('new topic family kids')");
        $ultimoIdInsertado = $rSbN->nonQueryId("INSERT INTO kftable_topics 
        (topic)VALUES('new topic family kids')");
    */
    $message = "ramiroSbackN";
    $rSbN->puntoDeEntrada (
        '<div class="container card contenido noBorder">
                <header>
                    <h1 style="padding:15px;border-radius:6px;"><a href="./"
                     style="padding:15px;border-radius:6px;">HOME</a></h1>
                </header>
        </div>'.
        '<div class="container card contenido noBorder">'.
            '<div id="main" class="container">'.$message.'</div>'.
            $rSbN->botonGrisConEfectoHover(
                '<i class="fa-solid fa-fire"></i> '.
                $rSbN->obtenerContador (). 
                ' - obtener topics <i class="fa-solid fa-fire"></i>'
            ).
        '</div>'.
        '<div class="container card contenido noBorder">
                <footer>
                    <h1>ramiro 2(g) &copy; 2023.</h1>
                </footer>
        </div>'.
        '<script src="./javascript.js"></script>'
    );
?>