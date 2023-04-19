function replaceText () {
    var target = document.getElementById('main');
    var xhr = new XMLHttpRequest();
    xhr.open('GET','./response.php',true);
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