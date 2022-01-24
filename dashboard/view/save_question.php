<?php
	session_start();
	require_once("../modal/db.php");




		if(isset($_POST['addQuestion']))
	{
		$catid=$_POST['category_name'];
$subcatname=$_POST['subcatname'];
$chapter = $_POST['chapter'];

foreach ($_POST['qnno'] as $key => $value) 
	{
 				$qnno = $_POST['qnno'][$key];
 				$question = $_POST['question'][$key];
 				$question1 = $_POST['question1'][$key];
                $question2 = $_POST['question2'][$key];
                $question3 = $_POST['question3'][$key];
                $question4 = $_POST['question4'][$key];
                $question5 = $_POST['question5'][$key];

                $sql = "INSERT INTO questions (`question_id`,`question_statement`,`answer_1`,`answer_2`,`answer_3`,`answer_4`,`answer_5`,`catid`,`subcatid`,`chapters`) VALUES
          ('$qnno','$question','$question1','$question2','$question3','$question4','$question5','$catid','$subcatname','$chapter')";
 		$query = mysqli_query($con,$sql);
 				          
    }

 		

 		if($query)
 		{
		
 			echo "<script>alert('Question Added Successfully...')</script>";
 			echo "<script>window.location='questions.php'</script>";
 		}
 		else
 		{
            echo "<script>alert('Question Added Failed...')</script>";

            // echo "<script>window.location='questions.php'</script>";
 		}
 	}

 

?>



