<?php

setcookie('admin', '0', time() + 365*24*3600, null, null, false, true);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Mail/vendor/phpmailer/phpmailer/src/Exception.php';
require 'Mail/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'Mail/vendor/phpmailer/phpmailer/src/SMTP.php';
require 'Mail/vendor/autoload.php';


class TLN
{

  //$nom,$prenom,$mail,$login,$mdp,$mdp2
  public function Traitement(SetUp $donnees)
  {

    $nom = $donnees->getNom();
    $prenom = $donnees->getPrenom();
    $mail = $donnees->getMail();
    $login =$donnees->getLogin();
    $mdp = $donnees->getMdp();
    $mdp2 = $donnees->getMdp2();

    $admin=0;
    //Connexion à la base de données projetweb
    try
    {
    $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
    }
    catch(Exception $e)
    {
      die('Erreur:'.$e->getMessage());
    }

    //Sélection des données dans la table utilisateur
    $reponse=$bdd->prepare('SELECT * FROM stockagecompte WHERE nom=? AND prenom=? OR mail=?');
    $reponse->execute(array($nom, $prenom,$mail));

    $donne=$reponse->fetchall();

    //Si l'utilisateur existe déjà, on affiche une boite de dialogue d'alerte
    if ($donne)
    {
      echo '<body onLoad="alert(\'Utilisateur déjà existant\')">';

      echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
    }

    //Sinon si les mots de passe sont bien rentrés, on enregistre dans la tabe utilisateur
    else
    {
      if ($mdp == $mdp2)
      {
        $mdp2 = md5($mdp2);

        $req = $bdd->prepare('INSERT INTO stockagecompte (login,nom,prenom,mdp,mdp2,mail,admin) VALUES (?,?,?,?,?,?,?)');
        $req -> execute(array($login,$nom, $prenom,$mdp,$mdp2,$mail,$admin));

        //Envoi du mail de confirmation
        $objet = "Bienvenue dans le club !";
        $sujet = "Vous pourrez recevoir ici toutes les nouvauté ou encore les promotions sur nos fabuleux Hamburger.";
        $DE = "projetweb932@gmail.com";
        $email = $mail;

        $this-> Mail($objet,$sujet,$email);
      }

      //Sinon, on affiche une boite de dialogue d'erreur
      else
      {
        echo '<body onLoad="alert(\'Veuillez entrer deux mots de passe identiques\')">';

        echo '<meta http-equiv="refresh" content="0;URL=Inscription1.php">';
      }
     }
  }

//fonction pour envoyer un Mail

public function Mail($objet,$sujet,$email)
  {

  $mail = new PHPMailer(true);

  try {

      $mail->SMTPDebug = SMTP::DEBUG_SERVER;
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';
      $mail->SMTPAuth   = true;
      $mail->Username   = 'projetweb932@gmail.com';
      $mail->Password   = 'projetweb932';
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = 587;

      $mail->setFrom('projetweb932@gmail.com', 'Mailer');
      $mail->addAddress($email, 'user');

      $mail->isHTML(true);
      $mail->Subject = $objet;
      $mail->Body    = $sujet;
      $mail->AltBody = $sujet;

      $mail->send();

      echo 'Message has been sent';
        } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

  }

//fonction de connexion

public function Connexion(SetUp $donnees)
{
  //Démarrage de la session
  session_start ();

  $mdp = $donnees->getMdp();
  $login =$donnees->getLogin();

  //Connexion à la base de données projetweb

  try
  {
  $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }


  //Sélection dans la table utilisateur
  $reponse=$bdd->prepare('SELECT * FROM stockagecompte WHERE login = :login AND mdp = :mdp');
  $reponse->execute(array(
    'login' => $login,
    'mdp' => $mdp,
  ));

  $donne=$reponse->fetch();

  //Pour chaque donnée

    //Si les zones login et mdp sont entrées
    if (isset($login) && isset($mdp))
    {

      //Si les données correspondent au données de la base de données
      if ($donne['login'] == $login && $donne['mdp'] == $mdp)
      {
        //On enregistre login et prénom dans la session

        $_SESSION['login'] = $login;
        $_SESSION['mdp'] = $mdp;

        if ($donne['admin'] == '0')
        {
          //Renvoi vers la page Classique

          setcookie('admin','0', time() + 365*24*3600, null, null, false, true);
          $_SESSION['admin'] = 0;
          header ('location: ../View/accueil.php');
        }

        if ($donne['admin'] == '1')
        {
          setcookie('admin', '1', time() + 365*24*3600, null, null, false, true);
          $_SESSION['admin'] = 1;
          header ('location: ../View/accueil.php');

        }
      }
      //Sinon on affiche une boite de dialogue d'alerte
      else
      {
        echo '<body onLoad="alert(\'Acces refuse\')">';

        echo '<meta http-equiv="refresh" content="0;URL=#">';
      }
    }
    //Sinon on demande à remplir les champs vides
    else
    {
      echo 'Veuillez remplir les champs vides';
    }

}

public function affichage()
{

  try{
$bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

//Commande sql pour selectionner dans la table utilisateur
$req = $bdd->prepare('SELECT * FROM stockagecompte WHERE nom = :nom and mdp = :mdp');
$req->execute(array('nom' => $_SESSION['login'],
'mdp' => $_SESSION['mdp']));
$donne=$req->fetchall();
//Affichage de chacune des donnees selon le profil_id
foreach ($donne as $value) {

    echo "Nom : ".$value['nom'].'<br><br>';
    echo "Prenom : ".$value['prenom'].'<br><br>';
    echo "Mail : ".$value['mail'].'<br><br>' ;
    echo "Votre login: ".$value['login'].'<br><br>' ;
  }
}

//modification des info user
public function modification()
{


try{
  $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
}

catch(Exception $e){
  die('Erreur:'.$e->getMessage());
}

//Sélection dans la table utilisateur
$req=$bdd->prepare('SELECT * FROM stockagecompte WHERE nom= ? AND mdp=?');
$req->execute(array( $_SESSION['login'],  $_SESSION['mdp']));
$donnee = $req->fetch();

?>

<!-- Formulaire de modification -->
<form method="post" action="../Traitement/ModifUser-Traitement.php">

  Votre login:
	<input type="text" name="login" value=<?php echo $donnee['login'];?>>
  <br><br>

  Votre nom:
	<input type="text" name="nom" value=<?php echo $donnee['nom'];?>>
	<br><br>

	Votre prenom:
	<input type="text" name="prenom" value=<?php echo $donnee['prenom'];?>>
  <br><br>

	Votre mail:
	<input type="text" name="mail" value=<?php echo $donnee['mail'];?>>
  <br><br>

<input type="submit" value="Envoyer"/>

</form>

	<?php

}


public function ModifcationUser(SetUp $donnees)
{

  try{
  $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
  }

  catch(Exception $e){
    die('Erreur:'.$e->getMessage());
  }

var_dump($donnees);

    $nom = $donnees->getNom();
    $prenom = $donnees->getPrenom();
    $mail = $donnees->getMail();
    $login =$donnees->getLogin();


  //Modification dans la table utilisateur
    $req = $bdd->prepare('UPDATE stockagecompte SET login = ?, nom = ?, prenom = ?, mail = ? WHERE login = ? AND mdp = ?');
    $a = $req -> execute(array($login, $nom,$prenom, $mail,$_SESSION['login'], $_SESSION['mdp']));


}



}


 ?>
