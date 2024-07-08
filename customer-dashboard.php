<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sri Anandha Lakshmi Modern Rice Mill</title>
    <meta name="description" content="Sri Anandha Lakshmi Modern Rice Mill">
    <meta name="keywords" content="Sri Anandha Lakshmi Modern Rice Mill">
	
	<!-- ==============================================
	Favicons
	=============================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	<!-- ==============================================
	CSS VENDOR
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	
	<!-- ==============================================
	Custom Stylesheet
	=============================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>

</head>

<body>

	<!-- Load page -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <?php include("customer-header.php") ?>
 
	<!-- BANNER -->
	<div id="slides" class="section banner">
		<ul class="slides-container">
			<li>
				<img src="images/slide-3.jpg" alt="">
				<div class="overlay-bg"></div>
				<div class="container">
					<div class="wrap-caption">
						<h2 class="caption-heading">
							Welcome <?php ob_start();
session_start(); 
include('connect.php'); echo $_SESSION['username']; ?>
						</h2>
					</div>
				</div>
			</li>
			
		</ul>

		<nav class="slides-navigation">
			<div class="container">
				<a href="#" class="next">
					<i class="fa fa-chevron-right"></i>
				</a>
				<a href="#" class="prev">
					<i class="fa fa-chevron-left"></i>
				</a>
	      	</div>
	    </nav>
		
	</div>
			
	 <?php include("footer.php") ?>
	
	 
	<!-- FOOTER SECTION -->
	

		
</body>
</html>