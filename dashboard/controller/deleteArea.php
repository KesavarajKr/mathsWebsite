<?php 
	require_once('../modal/db.php');

	$id=$_GET['id'];


	$sql = "DELETE FROM area WHERE id='$id'";

if ($con->query($sql) === TRUE) {
  echo '<script>alert("Area Deleted successfully")</script>';
  	echo "<script>window.location = '../view/area.php'</script>";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();

	
?>
