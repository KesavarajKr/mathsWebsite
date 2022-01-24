<?php
	
	require_once("../modal/db.php");

	session_start();

	$login = $_POST['email'];
	$password = $_POST['password'];


	if(isset($_POST['signin']))
	{
		
			 $query = "select * from dashboard_login where email='".$_POST['email']."' and password='".$_POST['password']."'";
		 	$result = mysqli_query($con,$query);

		 	if(mysqli_fetch_assoc($result)) {

		 		$_SESSION['user']=$_POST['email'];
		 		// $_SESSION['branch']=$_POST['branch'];
		 		// $_SESSION['role']=$_POST['role'];
		 		// $_SESSION['userid']=$_POST['id'];
		 		echo "<script>window.location = '../view/dashboard.php'</script>";
		 	}
		 	else
		 	 {
		 	 	echo "<script>alert('Please Enter correct username and password...!')</script>";
				echo "<script>window.location = '../view/login.php'</script>";
		 	}
		}
	
	else
	{
		echo "not working".mysqli_error($con);
	}
?>