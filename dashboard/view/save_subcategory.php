<?php
	session_start();
	require_once("../modal/db.php");

$subcatid=$_POST['subcatid'];
$catname=$_POST['catname'];
$subcatname = $_POST['subcatname'];


		if(isset($_POST['addSubCategory']))
	{

 		$sql = "INSERT INTO subcategory (`catid`,`subcatname`,`subcategoryid`) VALUES
          ('$catname','$subcatname','$subcatid')";
 		$query = mysqli_query($con,$sql);

 		if($query)
 		{
		
 			echo "<script>alert('SubCategory Added Successfully...')</script>";
 			echo "<script>window.location='qnsubcategory.php'</script>";
 		}
 		else
 		{
            echo "<script>alert('SubCategory Added Failed...')</script>";
            echo "<script>window.location='qnsubcategory.php'</script>";
 		}
 	}

 

?>



