<?php 
	require_once('../modal/db.php');

	$name=$_GET['state_name'];

	$sql = "DELETE FROM states WHERE state_name='$name'";

if ($con->query($sql) === TRUE) {
//   echo "Record deleted successfully";
  	echo "<script>window.location = '../view/state.php'</script>";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();

	
?>
