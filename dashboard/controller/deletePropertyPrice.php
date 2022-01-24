<?php 
	require_once('../modal/db.php');

	$id=$_GET['id'];


	$sql = "DELETE FROM property_rates WHERE id='$id'";

if ($con->query($sql) === TRUE) {
 	echo "<script>window.location = '../view/PropertyRates.php'</script>";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();

	
?>
