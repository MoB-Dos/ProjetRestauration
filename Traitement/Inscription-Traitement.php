<?php

require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';

var_dump($_POST);

$test = new SetUp([
    'login' => $_POST['login'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'mail' =>$_POST['mail'],
    'mdp' => $_POST['mdp'],
    'mdp2' => $_POST['mdp2'],

]);

$add = new ClassManager($test);

$r = $add->Traitement($test);

header("location: ../View/Connexion-Form.php");


 ?>
