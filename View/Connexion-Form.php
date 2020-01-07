<?php
//Démarrage de la sessions
session_start();
?>
<!--Formulaire de connexion -->
<form method="post" action="../Traitement/Connexion-Traitement.php">

	Votre Login:
	<input type="text" name="login" required/>

  Votre mot de passe:
	<input type="password" name="mdp" required/>

<!--Boutons de validation et de retour -->
	<input type="submit" value="Connexion"/>
  <input type="button" value="Annuler" onclick="window.location.href='index.php'">


</form>
