<?php
class Ajax {
    public static function mainBlockHtmlTag () {
        return "<div class=\"container\">
        <div class=\"card\" style=\"padding:20px;\">
        <h3 id=\"main\">This is the original text when the page first loads.</h3>
        <h2>Code</h2>
        <pre>
        require_once(APP_INTERFACE);
        require_once(APP);
        \$app = new Name2Ids;
        require_once(AJAX);
        \$app->add_card(new Ajax);
        Ajax::printAll(
            Ajax::mainBlockHtmlTag().
            Ajax::buttonHtmlTag().
            Ajax::scriptHtmlTag()
        );
        </pre>";
    }
    public static function buttonHtmlTag () {
        return "<h3><button id=\"ajax-button\" type=\"button\" style=\"cursor:pointer;\">Update title with Ajax</button></h3>";
    }
    public static function scriptHtmlTag () {
        return "<script>
        function replaceText () {
            var target = document.getElementById('main');
            var xhr = new XMLHttpRequest();
            xhr.open('GET','../../../backEnd/Server/App/AjaxDevelomentWithPhp/title.txt',true);
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
        var button = document.getElementById (\"ajax-button\");
        button.addEventListener(\"click\", replaceText);
        </script></div></div>";
    }
    public static function printAll ($all) {
        echo $all;
    }
}