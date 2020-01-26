<?php
session_start();

require '../Classes/ClassManager.php';
require '../Classes/Class.php';

$deco = new TLN;

$r = $deco->Deconnexion();

header("location: ../View/accueil.php");

?>
