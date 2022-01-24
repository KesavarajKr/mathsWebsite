<?php
require_once('../modal/db.php');

$State_Name=$_POST['StateName'];
$Country=$_POST['country'];
	
$sql = "INSERT INTO states (state_name,country_id)
VALUES ('$State_Name','$Country')";

if ($con->query($sql) === TRUE) {
  echo '<script>alert("State details Inserted successfully")</script>';
  	echo "<script>window.location = '../view/state.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

