

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
							<h1>Vos Informations</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
        <!--================ End Home Banner Area =================-->
        

<!--================ Menu Area =================-->

<section class="menu_area section_gap">
			<div class="container">
				
				<div class="row menu_inner">
					<div class="col-lg-5">
						<div class="menu_list">
							<h1>Vos Info</h1>
							<ul class="list">
                                 
                            <?php

								
								$show = new ClassManager();
								
                                $r = $show->affichage();
                            ?>

							</ul>
						</div>

						<div class="menu_list">
							<h1>Vos Reservation</h1>
							<ul class="list">

							<?php
		
								$show = new ClassManager();
															

                                $t = $show->affichage2();

                            ?>

							</ul>
						</div>
					</div>

					<div class="col-lg-5 offset-lg-1">
						<div class="menu_list res-mr">
							<h1>Modification</h1>
							<ul class="list">
                            <?php


								$show = new ClassManager();

                                $l = $show->modification();

                            ?>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</section>
        <!--================End Menu Area =================-->
        		<!--================ Start Footer Area =================-->
	<?php  require_once('footer.html') ?>
		<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php  require_once('linkjs.html') ?>
</body>

</html>