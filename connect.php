<?php
$host_name = 'localhost';
$user_name = 'root';
$pass_word = '';
$database_name = 'mill';

$conn = mysql_connect($host_name, $user_name, $pass_word) or die ('Error connecting to mysql');
mysql_select_db($database_name);
?>