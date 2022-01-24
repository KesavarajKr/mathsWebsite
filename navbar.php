<?php 
	
	require_once('dashboard/modal/db.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>TURN RIGHT HUMAN RELATIONS ASSESSMENT & SOLUTIONS PVT LTD</title>
		<!-- Favicon -->
		<!-- <link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png"> -->
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">


		<!-- Fix Internet Explorer ______________________________________-->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->	
	</head>

	<body>
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>

			

			<!-- 
			=============================================
				Theme Header Two
			============================================== 
			-->
			<header class="header-two">
				<div class="top-header">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-8 col-12">
								<ul class="left-widget">
									<li>We are leading consultant firm!</li>
									
								</ul>
							</div>
							<div class="col-md-6 col-sm-4 col-12">
								<ul class="social-icon">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<div class="logo float-left"><a href="#">Logo</a></div>
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-right">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="active"><a href="#">Home</a>
									    	
									    </li>
									    <li><a href="#">About</a>
									    	
									    </li>
									    <li><a href="#">Service</a>
									    	
									    </li>
									    <li><a href="#">Quiz</a>
									    	
									    </li>
									   
									    <li><a href="#">contact</a></li>

										<?php 
											if(isset($_SESSION['userId']))
											{
												?>
												<li><a href="logout.php">Logout</a></li>
												<?php
											}
											else
											{
												?>
													<li><a href="login.php">Login</a></li>
												<?php
											}
											
											?>
										
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->
					   		
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-two -->
