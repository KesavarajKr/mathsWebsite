<?php
require_once('../modal/db.php');

$AreaName=$_POST['AreaName'];
$cityname = $_POST['cityname'];



$sql = "INSERT INTO area (area_name,cityname) VALUES ('$AreaName','$cityname')";

if ($con->query($sql) === TRUE) {
  echo '<script>alert("Area Inserted successfully")</script>';
  	echo "<script>window.location = '../view/area.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

