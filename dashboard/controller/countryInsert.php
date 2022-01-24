<?php
require_once('../modal/db.php');

$Country_Name=$_POST['CountryName'];

$sql = "INSERT INTO countries (country_name)
VALUES ('$Country_Name')";

if ($con->query($sql) === TRUE) {
  echo '<script>alert("Country details Inserted successfully")</script>';
  	echo "<script>window.location = '../view/country.php'</script>";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

