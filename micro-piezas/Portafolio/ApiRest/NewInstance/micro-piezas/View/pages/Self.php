<?php
    $setTo0 = false;
    require_once './Name2Id/conf/const.php';
    require_once (BOTHIN2D);
    require_once (BOTHCN2D);
    $n2d = new ClassN2d;
    
    if ($setTo0) {
        require_once './View/pages/SelfSetCardTo0.php';
    } else {
        require_once './View/pages/SelfSetCardTo2.php';
    }
    
    echo $n2d->create_card ($n2d);
?>