<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>SteakShop Restaurant</title>
	<style type="text/css">
            #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
                height:500px;
                margin-bottom:10%;
            }
        </style>
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
							<h1>Contact Us</h1>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher
								conduct standards
								especially in the workplace. That’s why it’s crucial that, as women.</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="index.html">Home</a>
									<a href="contact.html">Contact</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<!--================Contact Area =================-->
		<section class="contact_area section_gap">
			<div class="container">
	        <div id="map">
	    <!-- Ici s'affichera la carte -->
	</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="contact_info">
							<div class="info_item">
								<i class="lnr lnr-home"></i>
								<h6>California, United States</h6>
								<p>Santa monica bullevard</p>
							</div>
							<div class="info_item">
								<i class="lnr lnr-phone-handset"></i>
								<h6><a href="#">00 (440) 9865 562</a></h6>
								<p>Mon to Fri 9am to 6 pm</p>
							</div>
							<div class="info_item">
								<i class="lnr lnr-envelope"></i>
								<h6><a href="#">support@colorlib.com</a></h6>
								<p>Send us your query anytime!</p>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<form class="row contact_form" action="../Traitement/contactTraitement.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="nom" name="nom" placeholder="Enter your name" required />
								</div>
								<div class="form-group">
									<input type="email" class="form-control" id="mail" name="mail" placeholder="Enter email address" required >
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="objet" name="objet" placeholder="Enter Subject" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" name="sujet" id="sujet" rows="1" placeholder="Enter Message" required></textarea>
								</div>
							</div>
							<div class="col-md-12 text-right">
								<button type="submit" value="submit" class="primary-btn text-uppercase">Send Message</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!--================Contact Area =================-->

		<!--================ Start Footer Area =================-->
<?php  require_once('footer.html') ?>
		<!--================ Start Footer Area =================-->
	</div>

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php  require_once('linkjs.html') ?>
</body>

</html>
