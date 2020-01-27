<?php
session_start();

require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';

$deco = new ClassManager;

$r = $deco->Deconnexion();

header("location: ../View/accueil.php");

?>
