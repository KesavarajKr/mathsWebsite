<?php 
require_once('dashboard/modal/db.php');
if(isset($_SESSION['userId']))
{
	$uid = $_SESSION['userId'];
	echo $uid;
}

    require_once('navbar.php');
?>


			<div class="theme-inner-banner section-spacing">
				<div class="overlay">
					<div class="container">
						<h2>Choose Test</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
            <div class="faq-page section-spacing">
				<div class="container">
					<!-- <div class="theme-title-one">
						<h2>FREQUENTLY ASKED QUESTIONS</h2>
						<p>A tale of a fateful trip that started from this tropic port aboard this tiny ship today stillers</p>
					</div> /.theme-title-one -->

	        		<div class="faq-panel">
						<div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                <div class="list-group text-center">
  
  <a href="quiz.php" class="list-group-item list-group-item-action">Test 1</a>
  <a href="quiz.php" class="list-group-item list-group-item-action">Test 2</a>
  <a href="quiz.php" class="list-group-item list-group-item-action">Test 3</a>
  <a href="quiz.php" class="list-group-item list-group-item-action disabled">Test 4</a>
</div>
                                </div>
                            </div>
                        </div>
					</div> <!-- /.faq-panel -->
				</div> <!-- /.container -->
			</div> 
<?php 
    require_once('footer.php');
?>