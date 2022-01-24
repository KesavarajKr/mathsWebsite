<?php 

require_once('dashboard/modal/db.php');

if(isset($_POST['submitanswer']))
{
    $userid = $_POST['userid'];

    $sql = "SELECT * FROM answer_master";
    $qry = mysqli_query($con,$sql);
    $count = mysqli_num_rows($qry);
// 		$text = "P2P-";
// 		$refidgen = $count+1;
// 		$refid = $text.$refidgen;
    $text2 = "TEST";
// 		$cust = $count+1;
// 		$custid = $text2.$cust;
    $count;
    $cust = str_pad($count+1, 5, 0, STR_PAD_LEFT);
    $testid = $text2.$cust;


    $s1 = "INSERT INTO answer_master (`testid`,`userid`) VALUES ('$testid','$userid')";
    $q = mysqli_query($con,$s1);
    
    
    

    foreach ($_POST['qno'] as $key => $value) 
{
             $qno = $_POST['qno'][$key];
             $userqnno = $_POST['userqnno'][$key];
             $category = $_POST['catgory'][$key];
             $chapter = $_POST['chapter'][$key];
             
                    
    $s2 = "INSERT INTO answers (`userid`,`testid`,`questionno`,`userquestionno`,`category`,`chapters`) VALUES ('$userid','$testid','$qno','$userqnno','$category','$chapter')";
     $q= mysqli_query($con,$s2);

     for($i = 1;$i<=80;$i++)
    {   
        $ans ='';

        if(isset($_POST['ans'.$i]))
        {
            $ans = $_POST['ans'.$i];
             
      
        }
        
         $s3 = "UPDATE answers SET answer = '$ans' WHERE testid = '$testid' AND questionno = '$i'";
        $q2 = mysqli_query($con,$s3);

        
    }
    
        
}
if($q2)
        {
        
            echo "<script>alert('Answer Submitted Successfully')</script>";
            echo "<script>window.location='result.php?userid=$userid&testid=$testid'</script>";
        }
        else{

        }
    
    }

    


?>