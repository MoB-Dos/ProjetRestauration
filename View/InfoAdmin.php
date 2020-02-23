<?php
require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';



session_start ();

    echo 'Toute les reservations  : '.'<br><br>';

    $show = new ClassManager();

    $y = $show->affichage3();





?>
