<?php
	session_start();
	require_once("../modal/db.php");

  $title=$_POST['title'];
  $price=$_POST['price']; 
  $id=$_POST['id']; 
		if(isset($_POST['editpackage']))
	{

 		$sql = "UPDATE package_details SET package_title = '$title',package_price='$price' WHERE id = '$id'";
 		$query = mysqli_query($con,$sql);

 		if($query)
 		{		
 			echo "<script>alert('Update Successfully...')</script>";
 			echo "<script>window.location='../view/packageDetails.php'</script>";
 		}
 		else
 		{
 			echo "<script>alert('Update Failed...')</script>";
 			echo "<script>window.location='../view/packageDetails.php'</script>";
 		}
 	}
?>