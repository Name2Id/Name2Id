<?php
require_once './ramiroSbackN.php';
$rSbN = new ramiroSbackN;
$rSbN->conectar ();
print_r ( $rSbN->getData ("SELECT * FROM kftable_topics") );