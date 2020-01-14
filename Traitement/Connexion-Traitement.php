<?php

require '../Classes/ClassManager.php';

$login = $_POST['login'];
$mdp = $_POST['mdp'];

$a = new TLN;

$a->Connexion($mdp,$login);




 ?>
