<?php

require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';


$test = new SetUp([
    'login' => $_POST['login'],
    'mdp' => $_POST['mdp'],
]);

$add = new ClassManager($test);

$r = $add->Connexion($test);


 ?>
