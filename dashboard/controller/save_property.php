<?php
	session_start();
	require_once("../modal/db.php");
$title=$_POST['title'];
$location=$_POST['location'];
$price=$_POST['price'];
$facing=$_POST['facing'];
$g_community=$_POST['g_community'];
$c_plot=$_POST['c_plot'];
$f_r_w=$_POST['f_r_w'];
$gst=$_POST['gst'];
$r_fee=$_POST['r_fee'];
$s_d_c=$_POST['s_d_c'];
$o_type=$_POST['o_type'];
$t_parking=$_POST['t_parking'];
$amenities=$_POST['amenities'];
$u_price=$_POST['u_price'];
$l_map=$_POST['l_map'];
$pro_type=$_POST['pro_type'];
$n_o_b=$_POST['n_o_b'];
$s_type=$_POST['s_type'];
$area=$_POST['area'];
$c_status=$_POST['c_status'];
$Possession=$_POST['Possession'];
$a_o_c=$_POST['a_o_c'];
$f_name=$_POST['f_name'];
$d_facing=$_POST['d_facing'];
$n_o_bat=$_POST['n_o_bat'];
$c_parking=$_POST['c_parking'];
$a_property=$_POST['a_property'];
		if(isset($_POST['addproperty']))
	{

 		echo $sql = "INSERT INTO `property_details`(`title`, `location`, `price`, `property_facing`, `gate_community`, `corner_plot`, `front_road_width`, `gst_amount`, `r_fee`, `stamp_duty_type`, `ownership_type`, `parking`, `amenities`, `unit _price`, `location_map`, `property_type`, `no_of_bedrooms`, `sale_type`, `area_Sqft`, `construction_status`, `possession`, `age_construction`, `f_type`, `direction_facing`, `no_of_bathroom`, `car_parking`, `about_property`) VALUES ('$title','$location','$price','$facing','$g_community','$c_plot','$f_r_w','$gst','$r_fee','$s_d_c','$o_type','$t_parking','$amenities','$u_price','$l_map','$pro_type','$n_o_b','$s_type','$area','$c_status','$Possession','$a_o_c','$f_name','$d_facing','$n_o_bat','$c_parking','$a_property')";
 		$query = mysqli_query($con,$sql);

 		if($query)
 		{
		
 			echo "<script>alert('Property Added Successfully...')</script>";
 			echo "<script>window.location='../view/addProperty.php'</script>";
 		}
 		else
 		{
 			echo "<script>alert('Property Added Failed...')</script>";
 			// echo "<script>window.location='../view/addProperty.php'</script>";
 		}
 	}

 

?>



