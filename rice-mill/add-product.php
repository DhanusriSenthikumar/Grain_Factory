<?php 
error_reporting(E_ERROR | E_PARSE);
ob_start();
session_start(); 
include('connect.php');
$err_msg=$suces_msg="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$proname=mysql_real_escape_string($_POST['proname']);
$weight=mysql_real_escape_string($_POST['weight']);
$price=mysql_real_escape_string($_POST['price']);

									
									 $result = mysql_query("SELECT max(sno)as max FROM product");
									 $row = mysql_fetch_array($result);
									 $sno=$row['max']+1;
											
											if($_FILES["file"]["name"]<>"")
											{								
												$filename=$sno;				
												$allowedExts = array("jpg","png","bmp","gif","jpeg","pdf");
												$temp = explode(".", $_FILES["file"]["name"]);
												$extension = end($temp);
												if (in_array($extension, $allowedExts))
												{
												move_uploaded_file($_FILES["file"]["tmp_name"],"product/$filename.$extension" );
												}
												$path="product/$filename.$extension";		 
											}

mysql_query ("insert into product(sno,proname,weight,price,path) values ($sno,'$proname','$weight','$price','$path')");

echo '<script language="javascript">';
echo 'alert("Your Product Added Successfullly!")';
echo '</script>';

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
    <?php include("admin-header.php") ?>
 
	<!-- BANNER -->
	<div class="section banner-page about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="title-page">Add Product</div>
					<ol class="breadcrumb">
						<li class="active">Add Product</li>
					</ol>
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
						<h3 class="section-heading-2">
							Add Product
						</h3>
							<form role="form" class="form-contact" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
							<div class="form-group">
								<input type="text" class="form-control" name="proname" placeholder="Product Name" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="weight" placeholder="Weight in Kg" required="">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="price" placeholder="Price" required="">
							</div>
							<div class="form-group"> Product Image
								<input type="file" class="form-control" name="file" required="">
							</div>

							<div class="form-group">
								<div id="success"></div>
								<button type="submit" class="btn btn-secondary disabled" style="pointer-events: all; cursor: pointer;">ADD</button>
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