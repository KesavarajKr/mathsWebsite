<?php 
session_start();
require_once('dashboard/modal/db.php');
if(isset($_SESSION['userId']))
{
	$uid = $_SESSION['userId'];
	 
}
else
{
	echo "<script>window.location='login.php'</script>";
}

    require_once('navbar.php');
?>


			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Quiz</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

			<div class="faq-page section-spacing">
				<div class="container">
					<div class="theme-title-one">
						<h2>Test Heading</h2>
						<p>Total Number Of Questions : 80</p>
					</div> <!-- /.theme-title-one -->
	<form method="POST" action="questionanswer.php">

	
	        		<div class="faq-panel">
						<div class="panel-group theme-accordion" id="accordion">
							<?php 
								$sql = "SELECT * FROM questions ORDER BY RAND()";
								$qry = mysqli_query($con,$sql);
								$i = 1;
								$n = 0;
								while($row = mysqli_fetch_array($qry))
								{
								$n=$n+1;	
									?>
									
<div class="panel">
						    <div class="panel-heading <?php if($n == 1){echo "active-panel";}else{} ?>">
						      <h6 class="panel-title">
						        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['id'] ?>">
						        <span style="font-weight:bold;color:green;padding-bottom:15px">Q.No. <input readonly  style="width:30px;border:0px;color:green;font-weight:bold" type="text" name="userqnno[]" value="<?php echo $i++ ?>"> : </span><?php echo $row['question_statement'] ?></a>
						      </h6>
						    </div>
						    <div id="collapse<?php echo $row['id'] ?>" class="panel-collapse collapse <?php if($n==1) { ?> show <?php }else{ echo "";} ?>">
						      <div class="panel-body">
							  
						      	
								  <div class="row">
								  <input type="hidden" name="chapter[]" value="<?php echo $row['chapters'] ?>">
									  <input type="hidden" name="catgory[]" value="<?php echo $row['catid'] ?>">
									  <input type="hidden" name="qno[]" value="<?php echo $row['id'] ?>">
									  <div class="col-lg-4">
									  	<div class="form-check ">
			<input class="form-check-input" type="radio" name="ans<?php echo $row['id'] ?>" id="inlineRadio2" value="1">
			<label class="form-check-label" for=""><?php echo $row['answer_1'] ?></label>
										</div>
									  </div>
									  <div class="col-lg-4">
									  	<div class="form-check ">
			<input class="form-check-input" type="radio" name="ans<?php echo $row['id'] ?>" id="inlineRadio2" value="2">
			<label class="form-check-label" for=""><?php echo $row['answer_2'] ?></label>
										</div>
									  </div>
									  <div class="col-lg-4">
									  	<div class="form-check ">
			<input class="form-check-input" type="radio" name="ans<?php echo $row['id'] ?>" id="inlineRadio2" value="3">
			<label class="form-check-label" for=""><?php echo $row['answer_3'] ?></label>
										</div>
									  </div>
									  <div class="col-lg-4">
									  	<div class="form-check ">
			<input class="form-check-input" type="radio" name="ans<?php echo $row['id'] ?>" id="inlineRadio2" value="4">
			<label class="form-check-label" for=""><?php echo $row['answer_4'] ?></label>
										</div>
									  </div>
									  <div class="col-lg-4">
									  	<div class="form-check ">
			<input class="form-check-input" type="radio" name="ans<?php echo $row['id'] ?>" id="inlineRadio2" value="5">
			<label class="form-check-label" for=""><?php echo $row['answer_5'] ?></label>
										</div>
									  </div>
								  </div>
								  
						      </div>
						    </div>
						  </div> <!-- /panel 1 -->
									<?php
								}
							?>
						  
						 

						</div> <!-- end #accordion -->
					</div> <!-- /.faq-panel -->
					<input type="hidden" name="userid" value="<?php echo $uid; ?>">

					<input type="submit" style="cursor:pointer" name="submitanswer" class="theme-button-one pull-right" Value="Submit Answer">
					</form>
				</div> <!-- /.container -->
			</div> <!-- /.faq-page -->
           
<?php 
    require_once('footer.php');
?>