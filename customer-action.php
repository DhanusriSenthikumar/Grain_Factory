<?php
session_start();

require_once 'connect.php';

// Define $username and $password 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM customer WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1){
	
	$_SESSION['login'] = true;
    $_SESSION['username'] = $record['username'];

// Register $username, $password and redirect to file "welcome.php"

header("location:customer-dashboard.php");
}
else {
echo "Wrong Username or Password";
header('Refresh: 3; URL = customer-login.php');
}
ob_end_flush();
?>
