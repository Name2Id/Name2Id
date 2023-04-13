<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./View/css/container.css">
    <link rel="stylesheet" href="./View/css/button.css">
    <title>N2D</title>
</head>
<body>
<script src="https://kit.fontawesome.com/51765d8f2a.js" crossorigin="anonymous"></script>
<div id="main" class="container">
    <div class="card">
        <figure>
            <h3>WELCOME !</h3>
        </figure>
        <div class="contenido">
            <button id="ajax-button" type="button" style="cursor:pointer;" title="CLICK ME !">
            <i class="fa-solid fa-door-open"></i>
            </button>
        </div>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="contenido">
            <h3>Funciones <i class="fa-solid fa-arrow-down"></i></h3>
        </div>
        <div class="contenido">
            <div>
                <figure>
                    <h2>
                        __construct ();
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                        __construir ();
                    </h2>
                </div>
            </div>
            <div>
                <figure>
                    <h2>
                    incrementAndprintTheCounter ();
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                    incrementaEimprimeElContador ();
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

require './View/pages/Self.php';

?>
<div class="container">
    <div class="card">
        <figure>
            <div>
                <figure>
                    <h2>
                        get ();
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                        obtener ();
                    </h2>
                </div>
            </div>
            <div>
                <figure>
                    <h2>
                    increase ();
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                    incrementar ();
                    </h2>
                </div>
            </div>
            <div>
                <figure>
                    <h2>
                    printsCounter ();
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                    imprimeContador ();
                    </h2>
                </div>
            </div>
        </figure>
        <div class="contenido">
            <div>
                <figure>
                    <h2>
                    create_card ($class);
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                    crear_tarjeta ($clase);
                    </h2>
                </div>
            </div>
            <div>
                <figure>
                    <h2>
                    print_card ($card);
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                    imprime_tarjeta ($tarjeta);
                    </h2>
                </div>
            </div>
            <div>
                <figure>
                    <h2>
                    add_card ($card);
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                    agregar_tarjeta ($tarjeta);
                    </h2>
                </div>
            </div>
            <div>
                <figure>
                    <h2>
                    subtract ();
                    </h2>
                </figure>
                <div class="contenido">
                    <h2>
                    restar ();
                    </h2>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function replaceText () {
        var target = document.getElementById('main');
        var xhr = new XMLHttpRequest();
        xhr.open('GET','./View/response/welcome.html',true);
        xhr.onreadystatechange = function () {
            console.log('readyState: ' + xhr.readyState);
            if (xhr.readyState == 2) {
                target.innerHTML = 'Loading...';
            }
            if (xhr.readyState == 4 && xhr.status == 200) {
                target.innerHTML = xhr.responseText;
            }
        }
        xhr.send(); 
    }
    var button = document.getElementById ("ajax-button");
    button.addEventListener("click", replaceText);
</script>
</body>
</html>
