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
<header>
    <h1><a href="./" style="color:#fff;">Api Rest</a></h1>
</header>

<div class="card">
    <div class="contenido">
        <i class="fa-solid fa-code"></i>
            Home <a href="../../../../../../../micro-piezas/" style="cursor: pointer;">
                Ir
            </a>
        <i class="fa-solid fa-code"></i>
    </div>
</div>

<div id="main" class="container">
    <div class="card">
        <figure>
            <h3>Api Rest Start !</h3>
        </figure>
        <div class="contenido">
            <button id="ajax-button" type="button" style="cursor:pointer;" title="CLICK ME !">
            <i class="fa-solid fa-door-open"></i>
            </button>
        </div>
    </div>
</div>

<?php

require './View/pages/Self.php';

?>

<footer>
    <h3>
        &copy; Api Rest - RAMIRO G GONZALEZ - 2023 - <i class="fa-solid fa-infinity" style="color:gold;"></i>.
    </h3>
</footer>
<script>
    function replaceText () {
        var target = document.getElementById('main');
        var xhr = new XMLHttpRequest();
        xhr.open('GET','./View/response/welcome.php',true);
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
