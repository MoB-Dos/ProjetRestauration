<?php

class SetUp
{
  private $_nom,$_prenom,$_mail,$login,$mdp;

  public function __construct(array $donnees)
  {
      $this->hydrate($donnees);
  }

  // Un tableau de données doit être passé à la fonction (d'où le préfixe « array »).
  public function hydrate(array $donnees)
  {
      foreach ($donnees as $key => $value)
      {
          // On récupère le nom du setter correspondant à l'attribut.
          $method = 'set'.ucfirst($key);

          // Si le setter correspondant existe.
          if (method_exists($this, $method))
          {
              // On appelle le setter.
              $this->$method($value);
          }

      }
  }

  public function setNom($nom) {
      if (is_string($nom) && strlen($nom) <= 20) {
          $this->_nom = $nom;
      } else { $this->setMessage('Champs incorrect','index.php'); }
  }

  public function setPrenom($prenom) {
      if (is_string($prenom) && strlen($prenom) <= 20) {
          $this->_prenom = $prenom;
      } else { $this->setMessage('Champs incorrect','index.php'); }
  }

  public function setMail($mail){
  $string = 'e.birbalprs.fr';
  if(stristr($string, '@') === FALSE) {
   $this->setMessage('Champs incorrect','index.php');
  }else{
      $this->_prenom = $prenom;;
  }

  public function setLogin($login) {
      if (is_string($login) && strlen($login) <= 100) {
          $this->_login = $login;
      } else { $this->setMessage('Champs incorrect','index.php'); }
  }

  public function setMdp($mdp) {
    if ($mdp >=5 && $mdp <= 10) {
        $this->_mdp = $mdp;
    } else { $this->setMessage('Champs incorrect','index.php'); }
}

public function getNom() { return $this->_nom; }
public function getPrenom() { return $this->_prenom; }
public function getLogin() { return $this->_login; }
public function getMail() { return $this->_mail; }
public function getMdp() { return $this->_mdp; }

}


}


 ?>
