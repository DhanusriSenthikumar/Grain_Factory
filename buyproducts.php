<?php 
if(isset($_REQUEST['buy'])) 
	{
		$proname = $_REQUEST['proname'];
		$weight = $_REQUEST['weight'];
		$price = $_REQUEST['price'];
		$qty = $_REQUEST['qty'];
		$total = $price * $qty;
		
		$query = "insert into orders (proname,weight,price,qty,total) values ('$proname','$weight','$price','$qty','$total')";
		if(mysql_query($query))
		{
		echo '<script language="javascript">';
		echo 'alert("Order Submitted Successfully!")';
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