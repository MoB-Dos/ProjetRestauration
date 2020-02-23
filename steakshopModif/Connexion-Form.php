

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>SteakShop Restaurant</title>
	<!-- Bootstrap CSS -->
<?php  require_once('linkcss.html') ?>
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<?php  require_once('navbar.php') ?>
	<!--================ End Header Menu Area =================-->

	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<h1>Connecte toi pour plus de fun !</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
								dolore
								magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<section class="reservation-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 offset-lg-6">
						<div class="contact-form-section" style="padding-top: 50px;">
							<h1>Formulaire de Connexion</h1>

							<form class="contact-form-area contact-page-form contact-form text-right" action="../Traitement/Connexion-Traitement.php" method="post">
							<div class="col-md-12 text-center">

									<div class="form-group">
										<input type="text" class="form-control" id="login" name="login" placeholder="Entrer un Login" required />
									</div>

									<div class="form-group">
										<input type="password" class="form-control" id="mdp" name="mdp" placeholder="Entrer un Mot De Passe" required >
									</div>

									</div>

								<div class="col-md-12 text-center">
									<button type="submit" value="submit" class="primary-btn text-uppercase">Connexion</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!--================ Start Footer Area =================-->
<?php  require_once('footer.html') ?>
		<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php  require_once('linkjs.html') ?>
</body>

</html>