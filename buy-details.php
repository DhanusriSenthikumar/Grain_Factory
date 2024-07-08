<?php 
error_reporting(E_ERROR | E_PARSE);
ob_start();
session_start(); 
include('connect.php');
$err_msg=$suces_msg="";

	$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
	$query = "select * from product where id ='$id'";
	$data = mysql_query($query);
	while($rec = mysql_fetch_array($data)) {

		$proname = $rec['proname'];
		$weight = $rec['weight'];
		$price = $rec['price'];
		$path = $rec['path'];
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

	<?php include("header.php") ?>
		
 
	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Buy Product</div>
					<ol class="breadcrumb">
						<li class="active">Buy Product</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<!-- Team -->
	<div class="section why overlap">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-md-push-8">
					<div class="widget categories">
						<ul class="category-nav">
							<li class="active"><a>Product Name : <?php echo $proname; ?></a></li>
							<li><a>Weight : <?php echo $weight; ?> Kg</a></li>
							<li><a>Price : Rs. <?php echo $price; ?></a></li>
							<form method="post" action="buy.php">
								<input type="text" name="proname" value="<?php echo $proname; ?>" style="display: none;" >
								<input type="text" name="weight" value="<?php echo $weight; ?>" style="display: none;">
								<input type="text" name="price" value="<?php echo $price; ?>" style="display: none;">
								<input type="text" name="qty" placeholder="Quanitity" class="form-control" required>
								<input type="submit" name="buy" value="Buy"  class="btn btn-secondary btn-block btn-sidebar">
							</form>
						</ul>
					</div> 
				</div>
				<div class="col-sm-8 col-md-8 col-md-pull-4">
					<div class="single-page">
						<img src="images/service-detail-1.jpg" alt="" class="img-responsive"> 
						<div class="margin-bottom-30"></div>
						<h2 class="section-heading">
							<?php echo $proname; ?>
						</h2>
						<img src="<?php echo $path; ?>">
					</div>
				</div>

			</div>
		</div>
	</div>	
	 
	<!-- FOOTER SECTION -->
	<?php include("footer.php") ?>
		
</body>
</html>