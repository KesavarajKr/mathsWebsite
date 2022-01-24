<?php
	
    $localhost = "localhost";
	$uname = "root";
	$pwd = "";
	$db_name = "maths";

	$con = mysqli_connect($localhost,$uname,$pwd,$db_name);

	if(!$con)
	{
		echo "Data base not connect";
	}
	
	
?>