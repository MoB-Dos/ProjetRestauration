<?php

setcookie('admin', '0', time() + 365*24*3600, null, null, false, true);

setcookie('login','0', time() + 365*24*3600, null, null, false, true);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Mail/vendor/phpmailer/phpmailer/src/Exception.php';
require 'Mail/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'Mail/vendor/phpmailer/phpmailer/src/SMTP.php';
require 'Mail/vendor/autoload.php';


class ClassManager
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

        header("location: ../steakshopModif/Connexion-Form.php");
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
      $mail->Password   = 'projetweb932azer';
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
  $login = $donnees->getLogin();

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

        if ($donne['admin'] == '0')
        {
          //Renvoi vers la page Classique

          setcookie('admin','0', time() + 365*24*3600, null, null, false, true);
          $_SESSION['admin'] = 0;
          header ('location: ../steakshopModif/(index).php');
        }

        if ($donne['admin'] == '1')
        {
          setcookie('admin', '1', time() + 365*24*3600, null, null, false, true);
          $_SESSION['admin'] = 1;
          header ('location: ../steakshopModif/(index).php');

        }
      }
      //Sinon on affiche une boite de dialogue d'alerte
      else
      {
        echo '<body onLoad="alert(\'Acces refuse\')">';

        echo '<meta http-equiv="refresh" content="0;URL=Connexion-Form.php">';
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
$req = $bdd->prepare('SELECT * FROM stockagecompte WHERE login = :login');
$req->execute(array('login' => $_SESSION['login']));

$donnees=$req->fetchall();


//Affichage de chacune des donnees selon le profil_id
foreach ($donnees as $value) {

    echo "Nom : ".$value['nom'].'<br><br>';
    echo "Prenom : ".$value['prenom'].'<br><br>';
    echo "Mail : ".$value['mail'].'<br><br>' ;
    echo "Votre login: ".$value['login'].'<br><br>' ;
  }

}

public function affichage2 ()
{

  try{
    $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
    }
    
    catch(Exception $e){
      die('Erreur:'.$e->getMessage());
    }
  
$req = $bdd->prepare('SELECT * FROM reservationtable WHERE login = :login');
$req->execute(array('login' => $_SESSION['login']));

$donnees=$req->fetchall();

if(isset($donnees))
{
  


  foreach ($donnees as $value) {

    echo "Nom : ".$value['nom']." "." tel : ".$value['tel']." "." Mail : ".$value['mail']." "." place: ".$value['place']." "." date: ".$value['date'].'<br/><br/>';
  }


}else
{
  echo "pas d'info";
}

}

public function affichage3 ()
{

  try{
    $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
    }
    
    catch(Exception $e){
      die('Erreur:'.$e->getMessage());
    }
  
$req = $bdd->query('SELECT * FROM reservationtable');


$donnees=$req->fetchall();

if(isset($donnees))
{
  


  foreach ($donnees as $value) {

    echo "Nom : ".$value['nom']." "." tel : ".$value['tel']." "." Mail : ".$value['mail']." "." place: ".$value['place']." "." date: ".$value['date'].'<br/><br/>';
  }


}else
{
  echo "pas d'info";
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
$req=$bdd->prepare('SELECT * FROM stockagecompte WHERE login= ?');
$req->execute(array( $_SESSION['login']));
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


public function ModificationUser(SetUp $donnees)
{


  setcookie('login',$_SESSION['login'], time() + 365*24*3600, null, null, false, true);


  $nom = $donnees->getNom();
  $prenom = $donnees->getPrenom();
  $mail = $donnees->getMail();
  $login =$donnees->getLogin();

  try{
  $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
  }

  catch(Exception $e){
    die('Erreur:'.$e->getMessage());
  }



  //Modification dans la table utilisateur
    $req = $bdd->prepare('UPDATE stockagecompte SET login = ?, nom = ?, prenom = ?, mail = ? WHERE login = ?');
    $a = $req -> execute(array($login, $nom,$prenom, $mail, $_SESSION['login']));


    $this-> Deconnexion();

    $_SESSION['login'] = $login;

}

public function Deconnexion()
{

  session_destroy();

}

public function reservationtable(Setup $test)
{

  session_start ();

  $nom = $test->getNom();
  $place = $test->getPlace();
  $mail = $test->getMail();
  $date =$test->getDate();
  $tel = $test->getTel();

  var_dump($nom) ;
  var_dump($tel) ;
  var_dump($mail) ;
  var_dump($place) ;
  var_dump($date) ;

  
  try
  {
  $bdd2= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
 


  $req2 = $bdd2->prepare('INSERT INTO reservationtable (login,nom,tel,mail,place,date) VALUES (?,?,?,?,?,?)');

  $req2 -> execute(array($_SESSION['login'],$nom,$tel,$mail,$place,$date));

  var_dump($test);


}

public function contact(Setup $test)
{

        $mail = $test->getMail();
        $nom = $test->getNom();
        $objet = $test->getObjet();
        $sujet = $test->getSujet();
        $email = 'projetweb932@gmail.com';

        $sujet = "Email:"." ".$mail.'<br/><br/>'." "."Nom:"." ".$nom.'<br/><br/>'." "."Message:"." ".$sujet; 

        echo $sujet;

        $this-> Mail($objet,$sujet,$email);

        header ('location: ../steakshopModif/contact.php');

}


public function commentaireAff()
{

  try{
    $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
    }
    
    catch(Exception $e){
      die('Erreur:'.$e->getMessage());
    }
  
$req = $bdd->query('SELECT * FROM commentaire');


$donnees=$req->fetchall();

if(isset($donnees))
{
  


  foreach ($donnees as $value) {

    echo $value['nom']." : ".$value['message'].'<br/><br/>';
  }


}else
{
  echo "pas de commentaire";
}

}


}


 ?>
