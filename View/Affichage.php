<?php
require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';

session_start ();

    $show = new ClassManager();

    echo 'Affichage : '.'<br><br>';

    $r = $show->affichage();

    echo 'Modification :'.'<br><br>';

    $l = $show->modification();

?>
