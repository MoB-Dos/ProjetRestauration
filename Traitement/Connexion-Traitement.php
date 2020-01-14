<?php

require '../Classes/Class.php';

$login = $_POST['login'];
$mdp = $_POST['mdp'];

$a = new TLN;

$a->Connexion($mdp,$login);




 ?>
