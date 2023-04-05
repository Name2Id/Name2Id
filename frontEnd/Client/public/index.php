<?php declare(strict_types = 1); 
    #constantes
    define('APP_INTERFACE','../../../backEnd/Server/App/Name2Ids/Name2IdsInterface/Name2Ids_Interface.php');
    define('APP','../../../backEnd/Server/App/Name2Ids/Name2IdsClass/Name2Ids.php');
    define('AJAX','../../../backEnd/Server/App/AjaxDevelomentWithPhp/Ajax.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Name2Ids</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./css/base.css">
        <link rel="stylesheet" href="./css/cardsV1.css">
    </head>
    <body>
        <script src="https://kit.fontawesome.com/51765d8f2a.js" crossorigin="anonymous"></script>
        <?php
        
            require_once(APP_INTERFACE);
            require_once(APP);
            $app = new Name2Ids;
            require_once(AJAX);
            $app->add_card(new Ajax);
            Ajax::printAll(
                Ajax::mainBlockHtmlTag().
                Ajax::buttonHtmlTag().
                Ajax::scriptHtmlTag()
            );
        
        ?>
    </body>
</html>