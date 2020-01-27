<?php
require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';

session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login'])) {


  if ($_SESSION['admin'] == 0) {

    $show = new ClassManager();

    echo 'Affichage : '.'<br><br>';

    $r = $show->affichage();

    echo 'Modification :'.'<br><br>';

    $l = $show->modification();

    ?>
    <input type="button" value="Deconnexion" onclick="window.location.href='../Traitement/deco.php'">
    <?php

  }
  else {

    $show = new ClassManager();

    $r = $show->affichage();

  	echo 'Admin';


  }
}
else {

	echo 'bvn';

}

?>
