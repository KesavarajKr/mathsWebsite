<?php
  require_once('../modal/db.php');

	$sql = "DELETE FROM user_details WHERE id ='$_GET[delete]'";

	if(mysqli_query($con,$sql))
	 {
		echo "<script>window.location = '../view/userDetails.php'</script>";
	  }
	
?>