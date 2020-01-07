<?php

class TLN
{

  public function Traitement($nom,$prenom,$mail,$login,$mdp,$mdp2)
  {
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
        $req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, mail,mdp,login,admin) VALUES (?,?,?,?,?,?)');
        $req -> execute(array($nom, $prenom, $mail,$login,$mdp,$admin));

        //Envoi du mail de confirmation
        /*$objet = "lol"
        $sujet = "mdr"
        $DE = "projetweb932@gmail.com"
        $A = "e.birba@lprs.fr"*/


        //$this-> Mail();

        //Renvoi vers la page Connexion
          header("location:#");
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

/*public function Mail($objet,$sujet,$DE,$A)
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
      $mail->Subject = 'Inscription';
      $mail->Body    = 'Inscription reussie!';
      $mail->AltBody = 'Inscription reussie!';

      $mail->send();
      echo 'Message has been sent';
        } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

  }*/

//fonction de connexion

public function Connexion($mdp,$login)
{
  //Démarrage de la session
  session_start ();

  //Connexion à la base de données projetweb
  try
  {
  $bdd= new PDO('mysql:host=localhost;dbname=projetrestauration;charset=utf8','root','');
  }
  catch(Exception $e)
  {
    die('Erreur:'.$e->getMessage());
  }
  $a = md5($_POST['mdp']);

  //Sélection dans la table utilisateur
  $reponse=$bdd->prepare('SELECT * FROM utilisateur WHERE login = :login AND mdp = :mdp AND profil_id = :profil_id');
  $reponse->execute(array(
    'login' => $_POST['login'],
    'mdp' => md5($_POST['mdp']),
    'profil_id' => $_POST['profil_id']

  ));
  $donne=$reponse->fetch();

  //Pour chaque donnée

    //Si les zones login et mdp sont entrées
    if (isset($_POST['login']) && isset($_POST['mdp']))
    {

      //Si les données correspondent au données de la base de données
      if ($donne['nom'] == $_POST['login'] && $donne['mdp'] == md5($_POST['mdp']) && $donne['prenom'] == $_POST['prenom'])
      {
        //On enregistre login et prénom dans la session

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['prenom'] = $_POST['prenom'];

        if ($donne['profil_id'] == '0')
        {
          //Renvoi vers la page Classique
          header ('location: #');
        }

        if ($donne['profil_id'] == '1')
        {
          //Renvoi vers la page Admin
          header ('location: #');
        }
      }
      //Sinon on affiche une boite de dialogue d'alerte
      else
      {
        echo '<body onLoad="alert(\'Accès refusé\')">';

        echo '<meta http-equiv="refresh" content="0;URL=#">';
      }
    }
    //Sinon on demande à remplir les champs vides
    else
    {
      echo 'Veuillez remplir les champs vides';
    }

}

}


 ?>
