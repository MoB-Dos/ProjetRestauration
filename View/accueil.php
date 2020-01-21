<?php

session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['mdp'])) {

var_dump($_SESSION['admin']);

  if ($_SESSION['admin'] == 0) {
  	echo 'boo';
    session_destroy();
  }
  else {
  	echo 'boo admin';
    session_destroy();
  }
}
else {
	echo 'oob';

  
}

?>
