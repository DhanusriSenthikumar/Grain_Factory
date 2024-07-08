<?php 
error_reporting(E_ERROR | E_PARSE);
ob_start();
session_start(); 
include('connect.php');
$err_msg=$suces_msg="";

	$query = "select * from customer order by id desc";
	$data = mysql_query($query);

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
    <style type="text/css">
    	table, th, td {
  border: 1px solid;
}
    </style>

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
					<div class="title-page">Customers List</div>
					<ol class="breadcrumb">
						<li class="active">Customers List</li>
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
							Customers List
						</h3>
							 <table border="1" cellpadding="5" width="100%" border="1">
    <tr>
    <th>Customer Name</th><th>Mobile</th> <th>Email</th> <th>Place</th><th>Username</th>
    </tr>
    <?php while($rec = mysql_fetch_array($data)) { ?>
    <tr>
        <td> <?php echo $rec['cname']; ?> </td>
        <td> <?php echo $rec['mobile']; ?> </td>
        <td> <?php echo $rec['email']; ?> </td>
        <td> <?php echo $rec['place']; ?> </td>
        <td> <?php echo $rec['username']; ?> </td>
    </tr>
<?php } ?>
</table>
					
					 </div>
				</div>

			</div>
			
		</div>
	</div>	
	
	 
	<!-- FOOTER SECTION -->
	<?php include("footer.php") ?>
		
</body>
</html>