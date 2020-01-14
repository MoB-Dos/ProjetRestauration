<?php

require '../Classes/Class.php';

var_dump($_POST);

$login = $_POST['login'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];

$mdp = md5($_POST['mdp']);
$mdp2 = md5($_POST['mdp2']);

$a = new TLN;

$a->Traitement($nom,$prenom,$mail,$login,$mdp,$mdp2);

 ?>
