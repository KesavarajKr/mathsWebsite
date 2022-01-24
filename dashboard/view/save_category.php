<?php
	session_start();
	require_once("../modal/db.php");




		if(isset($_POST['addCategory']))
	{
		$catid=$_POST['catid'];
$catname=$_POST['catname'];
$cid = $_POST['cid'];

 		$sql = "INSERT INTO catergory (`categoryid`,`name`,`cid`) VALUES
          ('$catid','$catname','$cid')";
 		$query = mysqli_query($con,$sql);

 		if($query)
 		{
		
 			echo "<script>alert('Category Added Successfully...')</script>";
 			echo "<script>window.location='questionCateory.php'</script>";
 		}
 		else
 		{
            echo "<script>alert('Category Added Failed...')</script>";
            echo "<script>window.location='questionCateory.php'</script>";
 		}
 	}

 

?>



