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
<div id="main"><i class="fa-regular fa-face-surprise"></i></div>
<?php

require './View/pages/Self.php';

?>
<button id="ajax-button" type="button" style="cursor:pointer;" title="CLICK ME !">
<i class="fa-solid fa-play"></i>
</button>
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
