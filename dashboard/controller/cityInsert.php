<?php
require_once('../modal/db.php');

$City_Name=$_POST['CityName'];
$State = $_POST['State'];



$sql = "INSERT INTO cities (city_name,state_id)
VALUES ('$City_Name',$State)";

if ($con->query($sql) === TRUE) {
  echo '<script>alert("City details Inserted successfully")</script>';
  	echo "<script>window.location = '../view/cities.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

