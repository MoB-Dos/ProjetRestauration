<?php
//Démarrage de la sessions
session_start();
?>

<!--Formulaire de connexion -->
<form method="post" action="CommTraitement.php">

	Votre Test:
	<input type="text" name="test" required/>

<!--Boutons de validation et de retour -->
	<input type="submit" value="Connexion"/>

</form>
