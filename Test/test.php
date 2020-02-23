<?php

try{
    $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
    }
    
    catch(Exception $e){
      die('Erreur:'.$e->getMessage());
    }
  
$date = '02/20/2020';

$req = $bdd->prepare ('SELECT COUNT(*) as lol FROM reservationtable WHERE date = ?  ');
$req -> execute(array($date));


$donnees=$req->fetch();

echo 'Il y a ' . $donnees['lol'] . ' entrée dans la table.';

?>