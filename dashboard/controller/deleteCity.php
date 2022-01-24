<?php 
	require_once('../modal/db.php');

	$name=$_GET['city_name'];


	$sql = "DELETE FROM cities WHERE city_name='$name'";

if ($con->query($sql) === TRUE) {
 	echo "<script>window.location = '../view/cities.php'</script>";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();

	
?>
