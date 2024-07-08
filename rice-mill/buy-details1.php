<?php 
error_reporting(E_ERROR | E_PARSE);
ob_start();
session_start(); 
include('connect.php');
$err_msg=$suces_msg="";

	$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : "0";
	$query = "select * from product where id ='$id'";
	$data = mysql_query($query);

	

?>

<!DOCTYPE html>
<html lang="zxx">
<head>
   
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sri Anandha Lakshmi Modern Rice Mill</title>
    <meta name="description" content="Sri Anandha Lakshmi Modern Rice Mill">
    <meta name="keywords" content="Sri Anandha Lakshmi Modern Rice Mill">
	
	
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	
	
	<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
	
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	
    <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>
    <style type="text/css">
    	table, th, td {
  border: 1px solid;
}
    </style>

</head>

<body>

	
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>


    <?php include("customer-header.php") ?>
 
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
	 
	
	<div class="section contact overlap">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-md-push-8">
				

				</div>
				<div class="col-sm-8 col-md-8 col-md-pull-4">
					<div class="content" style="background-color: #ccc; padding: 50px;">
						<div class="margin-bottom-30"></div>
						
						<?php while($rec = mysql_fetch_array($data)) { ?>	 
					<h3>Product Name : 	<?php echo $rec['proname']; ?></h3> 
					<h3>Weight: <?php echo $rec['weight']; ?></h3>
					<h3>Price : <?php echo $rec['price']; ?></h3>	
					<h3></h3>
				<?php } ?>
				<form method="post" action="buyproducts.php">
					<input type="text" class="form-control" name="proname" required="" style="display:none;" value="<?php echo $rec['proname']; ?>">
					<input type="text" class="form-control" name="weight" required="" style="display:none;" value="<?php echo $rec['weight']; ?>">
					<input type="text" class="form-control" name="price" required="" style="display:none;" value="<?php echo $rec['price']; ?>">

					<input type="text" name="qty" placeholder="Quanitity" required>
					<button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;" name="buy">Register</button>
				</form>
					 </div>
				</div>

			</div>
			
		</div>
	</div>	
	
	 
	
	<?php include("footer.php") ?>
		
</body>
</html>