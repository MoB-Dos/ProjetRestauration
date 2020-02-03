<!DOCTYPE html>
<!DOCTYPE html>

<?php

require '../Classes/ClassManager.php';
require '../Classes/SetUp.php';

session_start ();

if (isset($_SESSION['login'])) {
?>

<div class="menu-trigger">
  <span></span>
  <span></span>
  <span></span>
</div>

<header class="fixed-menu">
  <span class="menu-close"><i class="fa fa-times"></i></span>
  <div class="menu-header">
    <div class="logo d-flex justify-content-center">
      <img style="width:100px" src="img/LogoWeb.png" alt="">
    </div>
  </div>
  <div class="nav-wraper">
    <div class="navbar">
      <ul class="navbar-nav">

        <li class="nav-item"> <a class="nav-link" href="(index).php"><img  style="width:50px" src="img/header/chef-hat.png" alt=""> home</a></li>

        <li class="nav-item"><a class="nav-link" href="menu.php"><img style="width:50px" src="img/header/meal.png" alt="">menu</a></li>

        <li class="nav-item"><a class="nav-link" href="book-table.php"><img style="width:50px" src="img/header/dining-room.png" alt="">Book
            Table</a></li>

        <li class="nav-item submenu dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false"><img style="width:50px" src="img/header/ramen.png" alt="">Blog</a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
          </ul>
        </li>

        <!--<li class="nav-item"><a class="nav-link" href="contact.php"><img src="img/header/nav-icon5.png" alt="">contact</a></li>-->

        <li class="nav-item"><a class="nav-link" href="contact.php"><img style="width:50px" src="img/header/love.png" alt="">contact</a></li>

        <li class="nav-item"><a class="nav-link" href="about-us.php"> <img style="width:50px" src="img/header/spoon.png" alt=""> about</a></li>

        <li class="nav-item"><a class="nav-link" href="../View/Affichage.php"><img style="width:50px" src="img/header/contact-form.png" alt="">Information</a></li>

        <li class="nav-item"><a class="nav-link" href="../Traitement/deco.php"><img style="width:50px" src="img/header/exit.png" alt="">Deconnexion</a></li>

      </ul>
    </div>
  </div>
</header>
<?php
}
else {
?>

  <div class="menu-trigger">
    <span></span>
    <span></span>
    <span></span>
  </div>

  <header class="fixed-menu">
    <span class="menu-close"><i class="fa fa-times"></i></span>
    <div class="menu-header">
      <div class="logo d-flex justify-content-center">
        <img style="width:100px" src="img/LogoWeb.png" alt="">
      </div>
    </div>
    <div class="nav-wraper">
      <div class="navbar">
        <ul class="navbar-nav">

          <li class="nav-item"> <a class="nav-link" href="(index).php"><img  style="width:50px" src="img/header/chef-hat.png" alt=""> home</a></li>

          <li class="nav-item"><a class="nav-link" href="menu.php"><img style="width:50px" src="img/header/meal.png" alt="">menu</a></li>

          <li class="nav-item"><a class="nav-link" href="book-table.php"><img style="width:50px" src="img/header/dining-room.png" alt="">Book
              Table</a></li>

          <li class="nav-item submenu dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
             aria-expanded="false"><img style="width:50px" src="img/header/ramen.png" alt="">Blog</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
              <li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
            </ul>
          </li>

          <!--<li class="nav-item"><a class="nav-link" href="contact.php"><img src="img/header/nav-icon5.png" alt="">contact</a></li>-->

          <li class="nav-item"><a class="nav-link" href="contact.php"><img style="width:50px" src="img/header/love.png" alt="">contact</a></li>

          <li class="nav-item"><a class="nav-link" href="about-us.php"> <img style="width:50px" src="img/header/spoon.png" alt=""> about</a></li>

          <li class="nav-item"><a class="nav-link" href="../View/Connexion-Form.php"><img style="width:50px" src="img/header/sign-in.png" alt="">Connexion</a></li>

          <li class="nav-item"><a class="nav-link" href="../View/Inscription-Form.php"><img style="width:50px" src="img/header/add.png" alt="">Inscription</a></li>

        </ul>
      </div>
    </div>
  </header>
<?php
}

?>
