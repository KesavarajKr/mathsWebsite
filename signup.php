<?php 
    require_once('dashboard/modal/db.php');
    require_once('navbar.php');
?>
	<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Sign Up</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
<div class="contact-us-section section-spacing">
				<div class="container">
					<div class="clearfix main-content no-gutters row">
						<div class="col-lg-5 col-12"><div class="img-box"></div></div>
						<div class="col-lg-7 col-12">
							<div class="form-wrapper">
								<form action="SaveUser.php" method="POST" class="theme-form-one " autocomplete="off">
									<div class="row">
										<div class="col-sm-12 col-12"><input type="text" placeholder="Name *" name="name" required></div>
										<div class="col-sm-12 col-12"><input type="text" placeholder="Phone *" name="phone" required></div>
										<div class="col-sm-12 col-12"><input type="email" placeholder="Email *" name="email" required></div>
										<div class="col-sm-12 col-12"><input type="text" placeholder="Qualification *" name="qualification" required></div>
										<div class="col-sm-12 col-12"><input type="password" placeholder="Password *" name="password" required></div>
									</div> <!-- /.row -->
									<button type="submit" name="signup" class="theme-button-one">SIGN UP</button>
								</form>
							</div> <!-- /.form-wrapper -->
						</div> <!-- /.col- -->
					</div> <!-- /.main-content -->
				</div> <!-- /.container -->

				<!--Contact Form Validation Markup -->
				<!-- Contact alert -->
				
			   
			</div> <!-- /.contact-us-section -->
<?php 
    require_once('footer.php');
?>