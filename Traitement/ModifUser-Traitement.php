<?php

session_start();

require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';

var_dump($_POST);

$test = new SetUp([
    'login' => $_POST['login'],
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'mail' =>$_POST['mail'],
]);

$modif = new ClassManager($test);


$r = $modif->ModificationUser($test);


header("location: ../View/Connexion-Form.php");
/*?>
<input type="button" value="Deconnexion" onclick="window.location.href='../View/accueil.php'">
<?php*/

 ?>
