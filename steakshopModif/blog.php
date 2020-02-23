
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
        <section class="home_banner_area">
            <div class="banner_inner">
                <div class="container-fluid no-padding">
                    <div class="row fullscreen">

                    </div>
                </div>
            </div>
        </section>
        <!-- Start banner bottom -->
        <div class="row banner-bottom align-items-center justify-content-center">
            <div class="col-lg-4">
                <div class="video-popup d-flex align-items-center">
                    <a class="play-video video-play-button animate" href="https://www.youtube.com/watch?v=KUln2DXU5VE"
                        data-animate="zoomIn" data-duration="1.5s" data-delay="0.1s">
                        <span><img src="img/banner/play-icon.png" alt=""></span>
                    </a>
                    <div class="watch">
                        <h6>Watch video</h6>
                        <p>You will love our execution</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="banner_content">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-8 col-md-12">
                            <p class="top-text">Steak Shop offers best steak in town</p>
                            <h1>Steak Shop offers best steak in town</h1>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                                conduct standards
                                especially in the workplace. That’s why it’s crucial that, as women.</p>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="banner-btn">
                                <a class="primary-btn text-uppercase" href="#">Explore Menu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner bottom -->
        <!--================ End Home Banner Area =================-->

        <!--================Blog Area =================-->
        
        <div class="breakfast-area section_gap_top" style="margin-left : 70px; ">
        
        <?php



        $send= new ClassManager();

        $u = $send->commentaireAff();
            
        ?>
            
            
        </div>
        
        
        <div class="breakfast-area section_gap_top" style="    margin-left : 70px; ">

                    <div class="col-lg-9">
						<form class="row contact_form" action="../Traitement/CommTraitement.php" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="nom" name="nom" placeholder="Enter your name" required />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" required></textarea>
								</div>
							</div>
							<div class="col-md-12 text-right">
								<button type="submit" value="submit" class="primary-btn text-uppercase">Send Message</button>
							</div>
						</form>
					</div>


            </div>

            <div class="breakfast-area section_gap_top">
            </div>

        <!--================Blog Area =================-->

        <!--================ Start Footer Area =================-->
<?php  require_once('footer.html') ?>
        <!--================ Start Footer Area =================-->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php  require_once('linkjs.html') ?>
</body>

</html>
