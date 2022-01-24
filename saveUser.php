<?php
	session_start();

	require_once('dashboard/modal/db.php');

	if(isset($_POST['signup']))
	{
		$uname = $_POST['name'];
		$email = $_POST['email'];
		$pnumber = $_POST['phone'];
        $qualification = $_POST['qualification'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM register WHERE email = '$email'";


		$query = mysqli_query($con,$sql);


		$count = mysqli_num_rows($query);

		if($count < 1)
		{
				$sql = "INSERT INTO register (`name`,`email`,`phone`,`qualification`,`password`) VALUES ('$uname','$email','$pnumber','$qualification','$password')";

			$query = mysqli_query($con,$sql);

			if($query)
			{
				echo "<script>alert('Signup Successfully..')</script>";
				echo "<script>window.location='login.php'</script>";
			}
			else
			{
				echo "Register Failed".mysqli_error($con);
			}	


		}	


		else


		{


			echo "<script>alert('E-mail Already Used..')</script>";


			echo "<script>window.location='signup.php'</script>";


		}





	}





	if(isset($_POST['signin']))


	{
		$uname = $_POST['name'];
		$pwd = $_POST['password'];

		if($uname && $pwd)
		{

			$sql = "SELECT * FROM register WHERE (email = '$uname' OR phone = '$uname') AND password = '$pwd'";

			$query = mysqli_query($con,$sql);
			$ct = mysqli_num_rows($query);
			$validUser = false;


			while($row = mysqli_fetch_array($query)){		 	

			  $_SESSION["userId"] = $row[0];
			  $validUser = true;              
				break;

			}

		if($validUser)

			{

				echo "<script>window.location='chooseTest.php'</script>";


			}


			else


			{


				echo "<script>alert('Something Wrong Please check Your Username')</script>";


				echo "<script>window.location='login.php'</script>";


			}


		}


	}


?>