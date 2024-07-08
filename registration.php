<?php

require_once "connect.php";
$msg = "";
if(isset($_REQUEST['btnSubmit'])) 
	{
		$cname = $_REQUEST['cname'];
		$mobile = $_REQUEST['mobile'];
		$email = $_REQUEST['email'];
		$place = $_REQUEST['place'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];

		
		$query = "insert into customer (cname,mobile,email,place,username,password) values ('$cname','$mobile','$email','$place','$username','$password')";
		if(mysql_query($query))
		{
		echo '<script language="javascript">';
		echo 'alert("Registered Successfully!")';
		echo '</script>';
		
		} 
		else 
		{
		echo '<script language="javascript">';
		echo 'alert("Unable to Save!")';
		echo '</script>';
		}
	}
?>
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
    <?php include("header.php") ?>
 
	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Customer Registration</div>
				</div>
			</div>
		</div>
	</div>
	 
	<!-- Contact -->
	<div class="section contact overlap">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-md-push-8">
				

				</div>
				<div class="col-sm-8 col-md-8 col-md-pull-4">
					<div class="content" style="background-color: #ccc; padding: 50px;">
						<div class="margin-bottom-30"></div>

						<form class="form-contact" method="post">
							<div class="form-group">
								<input type="text" class="form-control" name="cname" placeholder="Customer Name..." required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="mobile" placeholder="Mobile" required="" maxlength="10">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" placeholder="E-Mail">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="place" placeholder="Place">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="username" placeholder="User Name..." required="">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password..." required="">
							</div>

							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;" name="btnSubmit">Register</button>
							</div>
						</form>
					
					 </div>
				</div>

			</div>
			
		</div>
	</div>	
	
	 
	<!-- FOOTER SECTION -->
	<?php include("footer.php") ?>
		
</body>
</html>