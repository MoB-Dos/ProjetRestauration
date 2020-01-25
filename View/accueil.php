<?php
require '../Classes/ClassManager.php';
require '../Classes/Class.php';

session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {


  if ($_SESSION['admin'] == 0) {

    $show = new TLN();

    $r = $show->affichage();

    $r = $show->modification();


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
