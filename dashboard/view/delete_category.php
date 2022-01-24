<?php 
	require_once('../modal/db.php');

	$id=$_GET['delete'];


	$sql = "DELETE FROM catergory WHERE id='$id'";

if ($con->query($sql) === TRUE) {
  	echo "<script>window.location = 'questionCateory.php'</script>";
} else {
  echo "Error deleting record: " . $con->error;
}

$con->close();

	
?>
