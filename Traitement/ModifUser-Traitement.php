<?php

require '../Classes/ClassManager.php';
require '../Classes/Class.php';


$test = new SetUp([
    'login' => $_POST['login'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'mail' =>$_POST['mail'],
]);

$modif = new TLN($test);


$modif = new TLN();

$r = $modif->modification();

header("location: ../View/Connexion-Form.php");


 ?>
