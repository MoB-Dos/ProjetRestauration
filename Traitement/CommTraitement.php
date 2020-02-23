<?php


$message = $_POST['message'];
$nom = $_POST['nom'];

try
    {
    $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
    }
    catch(Exception $e)
    {
      die('Erreur:'.$e->getMessage());
    }



$req = $bdd->prepare('INSERT INTO commentaire (message,nom) VALUES (?,?)');
        $req -> execute(array($message,$nom));


header ('location: ../steakshopmodif/blog.php');

?>