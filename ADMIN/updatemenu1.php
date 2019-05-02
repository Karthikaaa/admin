<?php
session_start();
$mysqli = new mysqli("localhost", "root", "newhorizon", "ACCASE"); 


if (isset($_POST['submit']))
{
	$product_id=$_SESSION['product_id'];
    $price=$_SESSION['price'];
	$sql = "INSERT INTO `products` (`product_name`,`product_price`) VALUES ('$product_id','$price');";
	$result = $mysqli->query($sql);
    if(mysqli_query($mysqli, $sql))
	{  
		$message = "Availability Status Updated";
	}
	else
	{  
		$message = "Could not insert record"; 
	}
    echo "<script type='text/javascript'>alert('$message');</script>";
}

?>

