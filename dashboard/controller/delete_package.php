<?php
  require_once('../modal/db.php');

	$sql = "DELETE FROM package_details WHERE id ='$_GET[delete]'";

	if(mysqli_query($con,$sql))
	 {
		echo "<script>window.location = '../view/packageDetails.php'</script>";
	  }
	
?>