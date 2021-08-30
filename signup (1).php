<?php 
ob_start();
require_once('connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sign up</title>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="myHOME - real estate template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link rel="stylesheet" type="text/css" href="styles/listings.css">
<link rel="stylesheet" type="text/css" href="styles/listings_responsive.css">

<!-- Required meta tags-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    

    <!-- Icons font CSS-->
    <link href="vendorS/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendorS/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendorS/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendorS/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="cssS/main.css" rel="stylesheet" media="all">
</head>
<body>

<div class="super_container">
	<div class="super_overlay"></div>-->
	
	<!-- Header -->

	<header class="header">
		
		<!-- Header Bar -->
		<div class="header_bar d-flex flex-row align-items-center justify-content-start">
			<div class="header_list">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<!-- Phone -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/phone-call.svg" alt=""></div>
						<span>+216 50 225 420</span>
					</li>
					<!-- Address -->
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/placeholder.svg" alt=""></div>
						<span>Tafala, no 24, Sousse</span>
					</li>
					
					<li class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="images/envelope.svg" alt=""></div>
						<span>SAMSAR.TN@contact.com</span>
					</li>
				</ul>
			</div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<div class="social">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					    <li><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						
					</ul>
				</div>
				
			</div>
		</div>

		
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="index.php">SAM<span>SAR.TN</span></a></div>
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-start justify-content-start">
					<li><a href="index.php">Home</a></li>
					<li><a href="listings.php">Listings</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
			<div class="submit ml-auto"><a href="indexlogin.php">ADD PROPRETY</a></div>
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
		</div>

	</header>

	

	<div class="menu text-right">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_log_reg">
			<nav class="menu_nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="listings.php">Listings</a></li>
					<li><a href="about.php">About us</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<!-- Home -->

	<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="post" >
                    	
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="USER NAME" onkeyup="check_user()" name="user_name" id="user_name" required="required">
                        </div>
                        <div id="checking">Checking</div>
                        <br>
                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="FOULAN@EXEMPLE.COM" name="email"  required="required">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="PASSWORD" name="pwd"  required="required">
                        </div>
                        <div class="input-group">
                                    <input class="input--style-1 js-datepicker" type="text" placeholder="BIRTHDATE" name="birthday"  required="required">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender"  required="required">
                                            
                                            <option>Female</option>
                                            <option>Male</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                         <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" id="register" name="submit">Submit</button>
                        </div>
                        <div class="row row-space">
                            <div class="col-2"></div>
                            <div class="col-2">
                                <div class="text-right p-t-13 p-b-23">
                                    <a href="indexlogin.php" class="txt2">login?</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    </form>
                </div>
                <?php if (isset($_POST['submit'])) {
                	$user_name= $_POST['user_name'];
                	$email= $_POST['email'];
                	$pwd= $_POST['pwd'];
                	$birthday= $_POST['birthday'];
                	$gender= $_POST['gender'];
                	$q="INSERT INTO `utilisateur`( `user_name`, `email`,`pwd`, `birthday`, `gender`) VALUES('".$user_name."', '".$email."', '".$pwd."', '".$birthday."', '".$gender."')";
                	$r= mysqli_query($con, $q);
                	if ($r) {
                		header("location: indexlogin.php");
                	}else{
                		echo"<script>alert('error');
                                 window.location.href='indexlogin.php';</script>";
                	}
                }?>
            </div>
        </div>
    </div>

    
    <!-- Jquery JS-->
    <script src="vendorS/jquery/jquery.min.js"></script>
    <script src="sub_file/jquery-3.4.1.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendorS/select2/select2.min.js"></script>
    <script src="vendorS/datepicker/moment.min.js"></script>
    <script src="vendorS/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="jsS/global.js"></script>
	<!-- check user -->
	
    <script>
    	document.getElementById("register").disabled= true;
    	function check_user(){
    		var user_name = document.getElementById("user_name").value;
    		//we'll sned data to user_checker
    		$.post("sub_file/user_check.php", {
    			user: user_name
    		},
             //will recieve data in this function
             function(data, status){
             	if (data=='<p style="color:red">User already registred </p>') {
             		document.getElementById("register").disabled= true;
             	}else{
             		document.getElementById("register").disabled= false;
             	}
             	document.getElementById("checking").innerHTML = data;
             }
    		);
    	}
    </script>
	

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					
					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_about">
							<div class="footer_logo"><a href="#">my<span>home</span></a></div>
							<div class="footer_text">
								<p>Your happiness is our duty.</p>
							</div>
							<div class="social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					                <li><a href="https://www.twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									
								</ul>
							</div>
							<div class="footer_submit"><a href="#">ADD PROPRETY</a></div>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_column">
							<div class="footer_title">Information</div>
							<div class="footer_info">
								<ul>
									<!-- Phone -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/phone-call.svg" alt=""></div>
										<span>+216 50 225 420</span>
									</li>
									<!-- Address -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/placeholder.svg" alt=""></div>
										<span>Tafala, no 24, Sousse</span>
									</li>
									<!-- Email -->
									<li class="d-flex flex-row align-items-center justify-content-start">
										<div><img src="images/envelope.svg" alt=""></div>
										<span>SAMSAR.TN@contact.com</span>
									</li>
								</ul>
							</div>
							
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_links">
							<div class="footer_title">Properties Types</div>
							<ul>
								<li><a href="#">Properties for rent</a></li>
								<li><a href="#">Properties for sale</a></li>
								<li><a href="#">Commercial</a></li>
								<li><a href="#">Homes</a></li>
								<li><a href="#">Villas</a></li>
								<li><a href="#">Office</a></li>
								<li><a href="#">Residential</a></li>
								<li><a href="#">Appartments</a></li>
								<li><a href="#">Off plan</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Column -->
					<div class="col-xl-3 col-lg-6 footer_col">
						<div class="footer_title">Featured Property</div>
						<div class="listing_small">
							<div class="listing_small_image">
								<div>
									<img src="images/listing_1.jpg" alt="">
								</div>
								<div class="listing_small_tags d-flex flex-row align-items-start justify-content-start flex-wrap">
									<div class="listing_small_tag tag_house"><a href="listings.php">house</a></div>
									<div class="listing_small_tag tag_sale"><a href="listings.php">for sale</a></div>
								</div>
								<div class="listing_small_price">$ 562 346</div>
							</div>
							<div class="listing_small_content">
								<div class="listing_small_location d-flex flex-row align-items-start justify-content-start">
									<img src="images/icon_1.png" alt="">
									<a href="single.php">280 Doe Meadow Drive Landover, MD 20785</a>
								</div>
								<div class="listing_small_info">
									<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_3.png" alt="">
											<span>2</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_4.png" alt="">
											<span>5</span>
										</li>
										<li class="d-flex flex-row align-items-center justify-content-start">
											<img src="images/icon_5.png" alt="">
											<span>2</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="js/listings.js"></script>
</body>
</html>