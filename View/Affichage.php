<?php
require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';



session_start ();

    $show = new ClassManager();

    echo 'Affichage : '.'<br><br>';

    $r = $show->affichage();

    echo 'Reservation : '.'<br><br>';

    $t = $show->affichage2();



    echo 'Modification :'.'<br><br>';

    $l = $show->modification();




?>
