<?php

require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';

var_dump($_POST);

$test = new SetUp([
    'nom' => $_POST['nom'],
    'mail' =>$_POST['mail'],
    'objet' => $_POST['objet'],
    'sujet' => $_POST['sujet'],

]);

$add = new ClassManager($test);

$r = $add->contact($test);

//header("location: ../View/Connexion-Form.php");


 ?>