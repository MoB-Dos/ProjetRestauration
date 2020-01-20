<?php

require '../Classes/ClassManager.php';
require '../Classes/Class.php';


$test = new SetUp([
    'login' => $_POST['login'],
    'mdp' => $_POST['mdp'],
]);

$add = new TLN($test);

$r = $add->Connexion($test);


 ?>
