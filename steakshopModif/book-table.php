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
							<h1>Book table</h1>
							<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards
								especially in the workplace. That’s why it’s crucial that, as women.</p>
						</div>
						<div class="col-lg-5 col-md-12">
							<div class="page-link-wrap">
								<div class="page_link">
									<a href="index.html">Home</a>
									<a href="book-table.html">Book Table</a>
								</div>
							</div>
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
							<h1>Reservation Form</h1>
							<form class="contact-form-area contact-page-form contact-form text-right" id="myForm" action="mail.html" method="post">
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Name'">
								</div>
								<div class="form-group col-md-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Email Address'">
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="subject" name="subject" placeholder="Phone Number" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Phone Number'">
								</div>
								<div class="form-group col-md-12">
									<div class="form-select">
										<select>
											<option value="1">Number of people</option>
											<option value="1">Select event Dhaka</option>
											<option value="1">Select event Dilli</option>
											<option value="1">Select event Newyork</option>
											<option value="1">Select event Islamabad</option>
										</select>
									</div>
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="datepicker" name="text" placeholder="Select Date & Time" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Select Date & Time'">
								</div>
								<div class="form-group col-md-12">
									<div class="form-select">
										<select>
											<option value="1">Select event</option>
											<option value="1">Select event Dhaka</option>
											<option value="1">Select event Dilli</option>
											<option value="1">Select event Newyork</option>
											<option value="1">Select event Islamabad</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 text-center">
									<button class="primary-btn text-uppercase">Make Reservation</button>
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
