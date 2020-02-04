<?php

require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';


var_dump($_POST['nom']) ;
var_dump($_POST['tel']) ;
var_dump($_POST['mail']) ;
var_dump($_POST['place']) ;
var_dump($_POST['date']) ;



$test = new SetUp([
    'nom' => $_POST['nom'],
    'tel' => $_POST['tel'],
    'mail' => $_POST['mail'],
    'place' =>$_POST['place'],
    'date' => $_POST['date'],

]);

$add = new ClassManager($test);

$r = $add->reservationtable($test);

//header("location: ../View/Connexion-Form.php");

?>
