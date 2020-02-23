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

<body id="book-table">

	<!--================ Start Header Menu Area =================-->
	<?php  require_once('navbar.php') ?>
	<!--================ End Home Banner Area =================-->
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
							<h1>Reservation d'une table</h1>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that, as women.</p>
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
						<div class="contact-form-section">
							<h1>Formulaire de reservation</h1>
							<form class="contact-form-area contact-page-form contact-form text-right" action="../Traitement/reservation.php" method="post">
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="name" name="nom" placeholder="Nom" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Nom'">
								</div>
								<div class="form-group col-md-12">
									<input type="email" class="form-control" id="email" name="mail" placeholder="Adresse Mail" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Adresse Mail'">
								</div>

								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="subject" name="tel" placeholder="Numero de telephone" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Numero de telephone'">
								</div>

								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="place" name="place" placeholder="Nombre de personne" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Nombre de personne'">
								</div>


								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="datepicker" name="date" placeholder="Choissisez une date !" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Choissisez une date !'">
								</div>
								<div class="col-lg-12 text-center">
									<button class="primary-btn text-uppercase">Faire une reservation !</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->

		<!--================ Start Footer Area =================-->
		<?php  require_once('footer.html') ?>

		<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php  require_once('linkjs.html') ?>

</body>

</html>
