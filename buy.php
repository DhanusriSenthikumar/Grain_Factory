<?php
ob_start();
session_start(); 
$username=$_SESSION['username'];
require_once "connect.php";
$msg = "";
if(isset($_REQUEST['btnBuy'])) 
	{
		$proname = $_REQUEST['proname'];
		$weight = $_REQUEST['weight'];
		$price = $_REQUEST['price'];
		$qty = $_REQUEST['qty'];
		$total = $_REQUEST['total'];

		$date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
        $date = date('Y-m-d H:i:s');

		$query = "insert into orders (date,proname,weight,price,qty,total,username) values ('$date','$proname','$weight','$price','$qty','$total','$username')";
		if(mysql_query($query))
		{
		echo '<script language="javascript">';
		echo 'alert("Order Submitted Successfully!")';
		echo '</script>';
		header('Refresh: 3; URL = myorder-list.php');
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
    <?php include("customer-header.php") ?>
 
	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Product Details</div>
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
							<?php
								$proname = $_POST['proname'];
								$weight = $_POST['weight'];
								$price = $_POST['price'];
								$qty = $_POST['qty'];
							?>
							<div class="form-group">
								Product Name : <?php echo $proname; ?>
							</div>
							<div class="form-group">
								Product Weight : <?php echo $weight;  ?> Kg
							</div>
							<div class="form-group">
								Product Price : Rs. <?php echo $price;  ?>
							</div>
							<div class="form-group">
								Quantity : <?php echo $qty;  ?>
							</div>
							<div class="form-group">
								Total : <?php echo $total = $qty * $price ;  ?>
							</div>
							<h5>Enter your card Details </h5>
							<div class="form-group">
								<input type="text" class="form-control" name="cname" placeholder="Card Number" required="" maxlength="12">
							</div>
							
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Expiry Month" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="place" placeholder="Year" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="mobile" placeholder="CVV" required="" maxlength="3">
							</div>
							
							<input type="text" name="proname" value="<?php echo $proname; ?>" style="display: none;" >
								<input type="text" name="weight" value="<?php echo $weight; ?>" style="display: none;">
								<input type="text" name="price" value="<?php echo $price; ?>" style="display: none;">
								<input type="text" name="qty" value="<?php echo $qty; ?>" style="display: none;">
								<input type="text" name="total" value="<?php echo $total; ?>" style="display: none;">

							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;" name="btnBuy">Submit</button>
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