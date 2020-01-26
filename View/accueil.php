<?php
require '../Classes/ClassManager.php';
require '../Classes/Class.php';

session_start ();

var_dump($_SESSION['login']);
// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {


  if ($_SESSION['admin'] == 0) {

    $show = new TLN();

    $r = $show->affichage();

    $l = $show->modification();

    ?>
    <input type="button" value="Deconnexion" onclick="window.location.href='../Traitement/deco.php'">
    <?php

  }
  else {

    $show = new TLN();

    $r = $show->affichage();

  	echo 'Admin';


  }
}
else {

	echo 'bvn';

}

?>
