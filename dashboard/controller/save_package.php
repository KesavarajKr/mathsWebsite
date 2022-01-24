<?php
	session_start();
	require_once("../modal/db.php");

$title=$_POST['title'];
$price=$_POST['price'];
$no_days=$_POST['no_days'];
$max_ads=$_POST['max_ads'];
$usertype=$_POST['usertype'];
		if(isset($_POST['addpackage']))
	{

 		$sql = "INSERT INTO package_details (`package_title`,`package_price`,`no_days`,`max_ads`,`type`) VALUES ('$title','$price','$no_days','$max_ads','$usertype')";
 		$query = mysqli_query($con,$sql);

 		if($query)
 		{
		
 			echo "<script>alert('Package Added Successfully...')</script>";
 			echo "<script>window.location='../view/packageDetails.php'</script>";
 		}
 		else
 		{
 			echo "<script>alert('Update Failed...')</script>";
 			echo "<script>window.location='../view/packageDetails.php'</script>";
 		}
 	}

 

?>



