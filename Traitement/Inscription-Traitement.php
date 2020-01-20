<?php

require '../Classes/ClassManager.php';
require '../Classes/Class.php';

var_dump($_POST);

$test = new SetUp([
    'login' => $_POST['login'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'mail' =>$_POST['mail'],
    'mdp' => $_POST['mdp'],
    'mdp2' => $_POST['mdp2'],

]);

$add = new TLN($test);

$r = $add->Traitement($test);

header("location: ../Traitement/Connexion-Traitement.php");


 ?>
