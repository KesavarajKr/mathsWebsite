<?php 
	require_once('../modal/db.php');

	$name=$_GET['country_name'];


	$sql = "DELETE FROM countries WHERE country_name='$name'";

if ($con->query($sql) === TRUE) {
  	echo "<script>window.location = '../view/country.php'</script>";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();

	
?>
