<?php 
    session_start();
    require_once('../dashboard/modal/db.php');


  
    if(isset($_GET['userid']))
    {
        $userid = $_GET['userid'];
        $testid = $_GET['testid'];
    }
    for($x = 1; $x <= 8; $x++) {
    $catid="CAT-".$x;
    
    $s = "SELECT sum(answer) as  cat FROM answers WHERE testid = '$testid' AND category = '$catid'";
    $q = mysqli_query($con,$s);
    $r = mysqli_fetch_array($q);
    
       $tot = $r['cat']/50*100;
       
       $ran1[]=$tot;
       
    }
      
    // Rank Allacation


    $numbers = $ran1;
    rsort($numbers);
    
    $arrlength = count($numbers);
    $i=0;
    $mark=0;
    $rank = [];
    for($x = 0; $x < $arrlength; $x++) {    
    //   echo $numbers[$x]; 
    //   echo "<br>";
      if($numbers[$x]!= $mark){
       $i=$i+1;  
       $mark=number_format($numbers[$x]);
       $rank[$mark] = $i;
    //    echo "Rank".$i;
    //    echo "<br>";
      }
      else
      {

      $i=$i+1;
      
      }
      
      
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

</head>

<body>

    <section class="top1">
        <div class="container">
            <div class="top-title">
                <h1>PERSONALITY <br> ANALYSIS </h1>
            </div>

            <span> CANDIDATE :</span>
            <span> INSTITUTION NAME :</span>

            <div class="top-footer">
                <p>TURN RIGHT HUMAN RELATIONS <br>ASSESSMENT AND SOLUTIONS PRIVATE LTD </p>
            </div>
        </div>
    </section>

    <section>

        <div class="container company-intro">
            <h2>COMPANY INTRO</h2>

            <div class="company-intro-para">
                <div class="first-para">
                    <span>TURN RIGHT</span> involves in the Assessment of any individual through Psychometric Concepts for their Personality Development, which paves the way for the betterment of the Individual , which also in turn, helps for a happier
                    environment.
                </div>

                <div class="second-para">
                    Apart from Psychometric Concepts, <span>TURN RIGHT</span>also involves in the sectors of Training and Knowledge Development like, POCSO Awareness, Skill Development Training, Placement Support etc.,
                </div>
            </div>
        </div>
    </section>

    <section class="team-lead">

        <div class="container">
            <h2>TEAM LEAD INTRO</h2>
            <div class="team-lead-name">
                <span>Team Lead :</span>

                <p>
                    Dr.M. Balasubramanian MSc. M Phil(Maths), B.Ed, PGDMM, M.S, Ph.D. (Psychotherapy & Counseling) CEO - European International University, Kuwait, GCC Region Certified HR Assessment Centre Analyst Life Member - Association of Professional Psychologists Fellow
                    Member - Academy of Psychotherapists, Psychologists & Psychometricians Life Member - Counsellors Council of India
                </p>


            </div>

            <div class="team-lead-para">
                <p>Having around 20 Years in the field of Teaching and 5 years in Research Field…Handled various curriculum and trained students of more than ten countries…Passionate in Research of Psychometric Concepts and to develop the same more user
                    friendly concepts for betterment in the Personality of any individual….. </p>
            </div>
        </div>
    </section>

    <section class="team-lead-intro">
        <div class="container">

            <h2>TITLE</h2>

            <div class="team-lead-intro-img">
                <img src="bee2.png" width="200px" height="200px" alt="">
            </div>
            <div class="team-lead-intro-para">
                <p>BUMBLE BEE'S WEIGHT AND WINGS ARE NOT IN A MATHEMATICAL PROPORTION AND STILL BUMBLE IS FLYING ANYWAY WITH SELF POTENTIAL. NATURES (ALMIGHTY'S) GIFT IS AN IMMEAURABLE, BIG QUESTION TO SCIENCE AND ENGINEERING ? ? <br> <br>
                    <span style="color: green;">NEVER LIMITS YOURSELF, BELIEVE THE SELF ON YOU AND FLY UP.</span>

                </p>
            </div>
            <div class="team-lead-intro-images">
                <div class="img1">
                    <img src="bee.png" width="250px" height="250px" alt="">
                </div>
                <div class="img2">
                    <img src="download.jpg" width="250px" height="250px" alt="">
                </div>
                <div class="img3">
                    <img src="Team-leader.png" width="250px" height="250px" alt="">
                </div>
            </div>
            <div class="team-lead-intro-para2">
                <p>You Are not designed to be a part of a tail instead you designed to be a head. <span>BIBLE -
                        28:14</span> </p>
            </div>
            <div class="team-lead-intro-footer">
                <p><span>Dr. BALASUBRAMANIAN</span> Mobile Number : +91-96298 69927 +91-73391 23552</p> <br>
                <p>EMAIL: TESTTOTRANSFORM@GMAIL.COM</p>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="analysis-intro">
                <h2>EMPLOYABILITY ANALYSIS INTRO</h2>

                <div class="analysis-intro-para">
                    <p>EMPLOYABILITY ANALYSIS of any individual shall help any Individual or any Employer to understand his / her Skill Level and act according to the Job demands / Responsibilities suitably.
                    </p>
                    <span>"RIGHT PERSON IN THE RIGHT PLACE ” is the prime
                        motto of this Analysis.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="good-luck">
        <div class="container">
            <div>

                <h2>GOOD LUCK</h2>

                <div class="good-luck-div">
                    <p>Our mission and vision is to motivate each and every one by knowing the SELF. This Analysis helps every individual by</p>

                    <ul>
                        <li>* Increasing their Sense of Self,</li>
                        <li>* Raise in the Self Esteem</li>
                        <li>* Need to be Feel Fulfilment & Positive Mind</li>
                        <li>* Feel a Renewed Sense of Hope</li>
                        <li>* Feel Empowered to be more Assertive in their Life</li>
                        <li>* Finally have a Self Trust that “I can be Successful,</li>
                        <li> "I will be Successful & I am SUCCESSFUL”</li>
                    </ul>

                    <div class="good-luck-footer">
                        <p>Let Darkness & Ignorance shall be removed with Lights of Introspection Tests & Wisdom
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="chapters-section">
        <div class="container chapter">
            <div>
                <h2>CHAPTERS</h2>

                <div class="chapters-div">
                    <p>Psychometric Analysis- Introspection Overview</p>

                    <ul>
                        <li>EIGHT MULTIPLE INTELLIGENCE ( 8 - Sub Topics) </li>
                        <li>QUOTIENTS IQ - E Q - AQ - CQ - BQ </li>
                        <li>BRAIN - LEFT - RIGHT -DOMINANCE </li>
                        <li>V A K - LEARNING MODALITY</li>
                        <li>Dr HOLLAND - R I A S E C - CAREER ( 6 -Sub Topics)</li>
                        <li>Dr .MckINSZKY - 3 DOMAINS - </li>
                        <li>Dr. CARL JUNG - * INTROVERT *EXTROVERT SCALE</li>
                        <li>BIRD - LEADERSHIP TEST - D-I-S-C MODEL</li>
                        <li>SUBJECT /DOMAINS TO CHOOOSE </li>
                        <li>RECOMENDATIONS TO DO OTHER TESTS - AN IDEA - </li>
                    </ul>
                </div>
            </div>
            <h2>PSYCHOMETRIC INTROSPECTION</h2>

            <img src="psycho.png" alt="">
        </div>
    </section>

    <section class="interpretaion-section">
        <div class="container">
            <h2>INTERPRETATION TIP</h2>
            <div class="interpretation-div">
                <p>Here we are discussing several topics, and the discussion goes like chapters, sub topics and each (sub) topics with small introduction , table calculations , all scores mostly in percentage , follows with chart and ranks ,some ranks may
                    be repeated and some may missing due to repetitions. <br> <br> We advise you to focus on first top 30 or 40 % and never on the bottom 30 % ranks , which highlights like green colour (good) , red colour (not good, weakest area and should
                    focus more to improve) some with leading notable persons, name , subject domain and intelligence or working category belongs. Perhaps many subjects are there and for more explanation, we advice to read from our website too or from
                    others .</p>
            </div>
        </div>
    </section>


    <!------------------  PAGE 11 NEW --------------------------------->

    <section class="multiple-intelligent">
        <div class="container">
            <h2>MULTIPLE INTELLIGENT</h2>
            <div class="p11">
                <h3>Chapter I </h3>
                <span>Multiple Intelligence: (8 domains of intelligence)</span>
                <p>

                    Dr .Howard Gardner discusses about 8 intelligence and one has to choose the subject /diploma/degree course in dominant , first 2 or 3 intelligences which are stronger in nature or by interest than the others and can keep in mind to improve and weakest
                    2 or 3 intelligence and if not in the long run , they cannot improve , brain neuro plasticity rate shall be poor in weak domain , and dislike those areas and very big challenge to develop in the later stages. <br>                    <br> Top Ranks were highlighted with Green colour and the weakest in red colour.
                    <br> <br> Please be not in hurry and read slowly and note everything, scores, percentages, charts and so on. <br> <br> Keep separate paper, pen pencils and note down if you have any questions <br>
                </p>
            </div>
            <div class="p11-table">

                <h2>TABLE MI RELATIVE PERCENTAGE</h2>
                <table class="table table-striped table-bordered" id="myTable1" style="width:100%">
                    <thead>
                    <colgroup>
                        <col style="background-color:gray;">
                        <col style="background-color:darkgray;">
                        <col style="background-color: yellow;">
                        <col style="background-color: rgb(184, 159, 159);">
                        <col style="background-color: rgb(163, 129, 67);">
                    </colgroup>
                        
                        <?php 

$ran[] = 0;

?>
                        <tr style="background-color: violet;">
                            <th scope="col" class="text-center">S.No</th>
                            <th scope="col" class="text-center">INTELLEGENCE</th>

                            <th scope="col" class="text-center">Percentage (%)</th>
                            <th scope="col" class="text-center">Rank</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center">1-Log</th>
                            <th class="text-center">Logical-Mathematical 1	</th>
                            <th class="text-center">
                                <?php 
$s = "SELECT sum(answer) as cat1 FROM answers WHERE testid = '$testid' AND category = 'CAT-1'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_array($q);

$tot1 = $r['cat1']/50*100;

$ran[]=$tot1;
$total1=number_format($tot1);
echo $tot1;

$averagelogical =  $r['cat1']/50*100;
?>
                            </th>
                            <th class="text-center">
                                <?php 
                                 echo  $rank[$total1]; 
                                    $logicalrank = $rank[$total1];
                                 ?>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">2-Mus</th>
                            <th class="text-center">Musical</th>
                            <th class="text-center">
                                <?php 
$s = "SELECT sum(answer) as cat2 FROM answers WHERE testid = '$testid' AND category = 'CAT-2'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_array($q);

$tot2 = $r['cat2']/50*100;
$ran[]=$tot2;
$total1=number_format($tot2);
echo $tot2;

$averagemusical =  $r['cat2']/50*100;
?>
                            </th>
                            <th class="text-center">
                                <?php 
                                 echo  $rank[$total1];
                                 $musicalrank = $rank[$total1];
                                 ?>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">3-Nat</th>
                            <th class="text-center">Naturalist</th>
                            <th class="text-center">
                                <?php 
$s = "SELECT sum(answer) as cat3 FROM answers WHERE testid = '$testid' AND category = 'CAT-3'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_array($q);

$tot3= $r['cat3']/50*100;
$ran[]=$tot3;
$total1=number_format($tot3);
echo $tot3;
$averagenatural =  $r['cat3']/50*100;
?>
                            </th>
                            <th class="text-center">
                                <?php  
                                
                                echo  $rank[$total1]; 
                                $naturalrank = $rank[$total1];
                                ?>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">4-V-Ling</th>
                            <th class="text-center">Verbal Linguistic</th>
                            <th class="text-center">
                                <?php 
$s = "SELECT sum(answer) as cat4 FROM answers WHERE testid = '$testid' AND category = 'CAT-4'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_array($q);

$tot4 = $r['cat4']/50*100;
$ran[]=$tot4;
$total1=number_format($tot4);
echo $tot4;

$averageverbal =  $r['cat4']/50*100;
?>
                            </th>
                            <th class="text-center">
                                <?php  
                                echo  $rank[$total1]; 
                                $verbalrank = $rank[$total1];
                                ?>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">5-Inter</th>
                            <th class="text-center">Interpersonal</th>
                            <th class="text-center">
                                <?php 
$s = "SELECT sum(answer) as cat5 FROM answers WHERE testid = '$testid' AND category = 'CAT-5'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_array($q);

$tot5 = $r['cat5']/50*100;
$ran[]=$tot5;
$total1=number_format($tot5);
echo $tot5;

$averageinterpersonal =  $r['cat5']/50*100;
?>
                            </th>
                            <th class="text-center">
                                <?php  
                                    echo  $rank[$total1];
                                    $interpersonalrank =  $rank[$total1];
                                ?>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">6-Kine	</th>
                            <th class="text-center">Kinethetic -Bodily-Kinesthetic	</th>
                            <th class="text-center">
                                <?php 
$s = "SELECT sum(answer) as cat6 FROM answers WHERE testid = '$testid' AND category = 'CAT-6'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_array($q);

$tot6 = $r['cat6']/50*100;
$ran[]=$tot6;
$total1=number_format($tot6);
echo $tot6;

$averagebody =  $r['cat6']/50*100;
?>
                            </th>
                            <th class="text-center">
                                <?php 
                                 echo  $rank[$total1]; 
                                 $bodyrank =  $rank[$total1];
                                 ?>
                            </th>
                        </tr>
                        </tr>
                        <tr>
                            <th class="text-center">7-Visu	</th>
                            <th class="text-center">Spatial-Visual</th>
                            <th class="text-center">
                                <?php 
$s = "SELECT sum(answer) as cat7 FROM answers WHERE testid = '$testid' AND category = 'CAT-7'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_array($q);

$tot7 = $r['cat7']/50*100;
$ran[]=$tot7;
$total1=number_format($tot7);
echo $tot7;

$averagevisual =  $r['cat7']/50*100;
?>
                            </th>
                            <th class="text-center">
                                <?php 
                                 echo  $rank[$total1]; 
                                 $visualrank =  $rank[$total1];
                                 ?>
                            </th>
                        </tr>
                        <tr>
                            <th class="text-center">8-Intral</th>
                            <th class="text-center">Intrapersonal</th>
                            <th class="text-center">
                                <?php 
$s = "SELECT sum(answer) as cat8 FROM answers WHERE testid = '$testid' AND category = 'CAT-8'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_array($q);

$tot8 = $r['cat8']/50*100;
$ran[]=$tot8;
$total1=number_format($tot8);
echo $tot8;

$averageintra =  $r['cat8']/50*100;

?>
                            </th>
                            <th class="text-center">
                                <?php 
                                 echo  $rank[$total1];
                                 $intrarank =  $rank[$total1];
                                 ?>
                            </th>
                        </tr>

                    </tbody>
                </table>
                <!--  -->
            </div>
            <?php
 
 $dataPoints = array( 
     array("y" => $logicalrank, "label" => "1-Log" ),
     array("y" => $musicalrank, "label" => "2-Mus" ),
     array("y" => $naturalrank, "label" => "3-Nat" ),
     array("y" => $verbalrank, "label" => "4-V-ling" ),
     array("y" => $interpersonalrank, "label" => "5-Inter" ),
     array("y" => $bodyrank, "label" => "6-Kine" ),
     array("y" => $visualrank, "label" => "7-Visu" ),
     array("y" => $intrarank, "label" => "8-Intra" )
 );
  
 ?>
            <div>
                <h2>CHART MI GROUP PERCENTAGE</h2>
                <!-- <img src="graph3.png" style="width:100%;"> -->
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
            </div>
        </div>
    </section>
    

    <!-- Page 14 New -->

    <section class="p14">

        <div class="container">
            <div class="p11-table">
                <table>
                    <colgroup>
                        <col style="background-color:white;">
                        <col style="background-color:rgb(246, 241, 241);">


                        <col style="background-color: white;">
                        <col style="background-color: rgb(238, 207, 212);">
                    </colgroup>
                    <tr>

                        <th>
                            INTELLIGENCE
                        </th>
                        <th>

                        </th>
                        <th style="background-color: violet;">
                            GROUP
                        </th>
                        <th>
                            RANK
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Logical-Math
                        </td>
                        <td>
                            1-Log
                        </td>
                        <td>
                            <?php echo $tot1 ?>
                        </td>
                        <td>
                            <?php echo $logicalrank ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Musical
                        </td>
                        <td>2-Mus</td>
                        <td>
                        <?php echo $tot2 ?>
                        </td>
                        <td>
                        <?php echo $musicalrank ?>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            Natural
                        </td>
                        <td>3-Nat</td>
                        <td>
                        <?php echo $tot3 ?>
                        </td>

                        <td>
                        <?php echo $naturalrank ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Linguistic Verbal
                        </td>
                        <td>4-V-Ling</td>
                        <td>
                        <?php echo $tot4 ?>
                        </td>
                        <td>
                        <?php echo $verbalrank ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Interpersonal
                        </td>
                        <td>5-Inter</td>


                        <td>
                        <?php echo $tot5 ?>
                        </td>
                        <td>
                            <?php echo $interpersonalrank ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Kinethetic Motor Body
                        </td>
                        <td>6-Kine</td>
                        <td>
                        <?php echo $tot6 ?>
                        </td>
                        <td>
                        <?php echo $bodyrank ?>
                    </tr>
                    </td>

                    <tr>
                        <td>
                            Spatial-Visual
                        </td>
                        <td>7-Visu</td>
                        <td>
                        <?php echo $tot7 ?>
                        </td>
                        <td>
                            <?php echo $visualrank ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Intrapersonal
                        </td>
                        <td>8-Intral</td>

                        <td>
                        <?php echo $tot8 ?>
                        </td>
                        <td>
                        <?php echo $intrarank ?>
                        </td>
                    </tr>

                </table>
                <div class="t1">
                    <table class="table1" style="float:right; width: 37%; margin-top: 12%;">
                        <tr style="font-size: 15px;">
                            <th class="t1">

                            </th>
                            <th class="t1">
                                SCORES
                            </th>
                            <th class="t1">
                                %
                            </th>
                            <th class="t1">
                                CATEGORY
                            </th>

                        </tr>
                        <tr>
                            <td>RANK 1</td>
                            <td> </td>
                            <td>88 </td>
                            <td>1-Log</td>
                        </tr>
                        <tr>
                            <td style="border-bottom-style: 1px solid black;">RANK 2</td>
                            <td> </td>
                            <td>88 </td>
                            <td>3-Nat</td>
                        </tr>
                        <tr>
                            <td>RANK 3</td>
                            <td> </td>
                            <td>88 </td>
                            <td>5-Inter</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- page 15 start -->

            <!-- <div>
                <h2 style="clear: both;">CHART MI GROUP PERCENTAGE</h2>
                <img src="graph4.png" style="width:100%;">
            </div> -->
            <!-- page 15 end -->
        </div>
    </section>

    <!-- page 14 end -->

    <section class="table-answer1">
        <div class="container p11-table">
            <h2>TABLE ANSWER ANALYSIS PERCENTAGE</h2>
            <p>TABLE MI.TABLE 3: MULIPLE INTELLIGENCE : <br> <br> ANSWERS - ANALYSIS - PERCENTAGE <br> <br> Each Questions are given with four ranks like 1, 2, 3, 4 (like 0% - 25 % , 26- 50 % , 51 - 75 % and 75 -100 % ). In this table and chart we are discussing
                about how many answered in 1.2.3.4 ( all in percentages ) and additionally <br> <br> 1 (means strong- disagree ) ,2 (means - disagree ) , 3(means -agree ) and 4 (means strong- agree ). <br> <br> Hope you can understand the scores and follow
                the table.
            </p>
            <table class="table table-bordered table-striped" style="display:none">
                                            <thead class="bg-success text-white">
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Most Disagree</th>
                                                    <th>Disagree</th>
                                                    <th>Netrual</th>
                                                    <th>Agree</th>
                                                    <th>Most Agree</th>
                                                    <th>Most Disagree + Disagree</th>
                                                    <th>Agree + Most Agree</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>LOGICAL</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $md = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $da = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $n = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $a = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $ma = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res1 = $md+$da;
                                            echo $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a+$ma;
                                            echo $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot1 = $res1 + $res2 + $n;
                                            echo $tot1; 

                                            $logsum = $tot1/(10*5)*100;
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>MUSICAL</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $md = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $da = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $n = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $a = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $ma = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res1 = $md+$da;
                                            echo $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a+$ma;
                                            echo $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot2 = $res1 + $res2 + $n;
                                            echo $tot2; 

                                            $mussum = $tot2/(10*5)*100;
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>NATURAL</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $md = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $da = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $n = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $a = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $ma = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res1 = $md+$da;
                                            echo $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a+$ma;
                                            echo $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot3 = $res1 + $res2 + $n;
                                            echo $tot3; 

                                            $natsum = $tot3/(10*5)*100;
                                        ?>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <th>VERBAL LINGUIS</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $md = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $da = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $n = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $a = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $ma = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res1 = $md+$da;
                                            echo $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a+$ma;
                                            echo $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot4 = $res1 + $res2 + $n;
                                            echo $tot4; 
                                            $versum = $tot4/(10*5)*100;
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>INTER PERSONAL</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $md = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $da = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $n = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $a = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $ma = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res1 = $md+$da;
                                            echo $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a+$ma;
                                            echo $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot5 = $res1 + $res2 + $n;
                                            echo $tot5; 

                                            $interpersonalsum = $tot5/(10*5)*100;
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>BODY KINETHETIC </th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $md = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $da = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $n = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $a = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $ma = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res1 = $md+$da;
                                            echo $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a+$ma;
                                            echo $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot6 = $res1 + $res2 + $n;
                                            echo $tot6; 

                                            $bodyknesum = $tot6/(10*5)*100;
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>VISUAL SPATIAAL </th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $md = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $da = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $n = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $a = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $ma = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res1 = $md+$da;
                                            echo $res1;

                                            $d
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a+$ma;
                                            echo $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot7 = $res1 + $res2 + $n;
                                            echo $tot7; 

                                            $visualsum = $tot7/(10*5)*100;
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>INTRA</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $md = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $da = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $n = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $a = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            echo $r1['counts'];
                                            $ma = $r1['counts'];
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res1 = $md+$da;
                                            echo $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a+$ma;
                                            echo $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot8 = $res1 + $res2 + $n;
                                            echo $tot8; 

                                            $intrasum = $tot8/(10*5)*100;
                                        ?>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
            <table class="table table-bordered table-striped">
                                            <thead class="bg-success text-white">
                                                <tr>
                                                    <th>Category</th>
                                                    <th>MD</th>
                                                    <th>DA</th>
                                                    <th>N</th>
                                                    <th>A</th>
                                                    <th>MA</th>
                                                    <th>MD + DA</th>
                                                    <th>A + MA</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>LOGICAL</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            $r1['counts'];
                                            $md = $r1['counts'];
                                            echo number_format($md/$tot1*100,1);
                                            
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                             $da = $r1['counts'];
                                            //  echo $da*10;
                                             echo number_format($da/$tot1*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $n = $r1['counts'];
                                            // echo $n*10;
                                            echo number_format($n/$tot1*100,1);

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $a = $r1['counts'];
                                            // echo $a*10;
                                            echo number_format($a/$tot1*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-1' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $ma = $r1['counts'];
                                            // echo $ma*10;
                                            echo number_format($ma/$tot1*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                          $res1 = $md/$tot1*100+$da/$tot1*100;
                                        echo number_format($res1,1);

                                         $disagreeloical = $res1;

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a/$tot1*100+$ma/$tot1*100;
                                            echo number_format($res2,1);

                                            $agreeloical = $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot = $res1 + $res2 + $n*10;
                                            echo number_format($tot,1); 
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>MUSICAL</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            $r1['counts'];
                                            $md = $r1['counts'];
                                            echo number_format($md/$tot2*100,1);
                                            
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                             $da = $r1['counts'];
                                            //  echo $da*10;
                                             echo number_format($da/$tot2*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $n = $r1['counts'];
                                            // echo $n*10;
                                            echo number_format($n/$tot2*100,1);

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $a = $r1['counts'];
                                            // echo $a*10;
                                            echo number_format($a/$tot2*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-2' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $ma = $r1['counts'];
                                            // echo $ma*10;
                                            echo number_format($ma/$tot2*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                          $res1 = $md/$tot2*100+$da/$tot2*100;
                                        echo number_format($res1,1);

                                        $disagreemusical = $res1;

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a/$tot2*100+$ma/$tot2*100;
                                            echo number_format($res2,1);

                                            $agreemusical = $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot = $res1 + $res2 + $n*10;
                                            echo number_format($tot,1); 
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>NATURAL</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            $r1['counts'];
                                            $md = $r1['counts'];
                                            echo number_format($md/$tot3*100,1);
                                            
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                             $da = $r1['counts'];
                                            //  echo $da*10;
                                             echo number_format($da/$tot3*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $n = $r1['counts'];
                                            // echo $n*10;
                                            echo number_format($n/$tot3*100,1);

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $a = $r1['counts'];
                                            // echo $a*10;
                                            echo number_format($a/$tot3*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-3' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $ma = $r1['counts'];
                                            // echo $ma*10;
                                            echo number_format($ma/$tot3*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                          $res1 = $md/$tot3*100+$da/$tot3*100;
                                        echo number_format($res1,1);

                                        $disagreenatural = $res1;

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a/$tot3*100+$ma/$tot3*100;
                                            echo number_format($res2,1);

                                            $agreenatural = $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot = $res1 + $res2 + $n*10;
                                            echo number_format($tot,1); 
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>VERBAL LINGUIS</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            $r1['counts'];
                                            $md = $r1['counts'];
                                            echo number_format($md/$tot4*100,1);
                                            
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                             $da = $r1['counts'];
                                            //  echo $da*10;
                                             echo number_format($da/$tot4*100);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $n = $r1['counts'];
                                            // echo $n*10;
                                            echo number_format($n/$tot4*100,1);

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $a = $r1['counts'];
                                            // echo $a*10;
                                            echo number_format($a/$tot4*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-4' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $ma = $r1['counts'];
                                            // echo $ma*10;
                                            echo number_format($ma/$tot4*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                          $res1 = $md/$tot4*100+$da/$tot4*100;
                                        echo number_format($res1,1);
                                        $disagreeverbal = $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a/$tot4*100+$ma/$tot4*100;
                                            echo number_format($res2,1);
                                            $agreeverbal = $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot = $res1 + $res2 + $n*10;
                                            echo number_format($tot,1); 
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>INTER PERSONAL</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            $r1['counts'];
                                            $md = $r1['counts'];
                                            echo number_format($md/$tot5*100,1);
                                            
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                             $da = $r1['counts'];
                                            //  echo $da*10;
                                             echo number_format($da/$tot5*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $n = $r1['counts'];
                                            // echo $n*10;
                                            echo number_format($n/$tot5*100,1);

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $a = $r1['counts'];
                                            // echo $a*10;
                                            echo number_format($a/$tot5*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-5' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $ma = $r1['counts'];
                                            // echo $ma*10;
                                            echo number_format($ma/$tot5*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                          $res1 = $md/$tot5*100+$da/$tot5*100;
                                        echo number_format($res1,1);

                                        $disagreeinterpersonal = $res1;

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a/$tot5*100+$ma/$tot5*100;
                                            echo number_format($res2,1);

                                            $agreeinterpersonal = $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot = $res1 + $res2 + $n*10;
                                            echo number_format($tot,1); 
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>BODY KINETHETIC </th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            $r1['counts'];
                                            $md = $r1['counts'];
                                            echo number_format($md/$tot6*100,1);
                                            
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                             $da = $r1['counts'];
                                            //  echo $da*10;
                                             echo number_format($da/$tot6*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $n = $r1['counts'];
                                            // echo $n*10;
                                            echo number_format($n/$tot6*100,1);

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $a = $r1['counts'];
                                            // echo $a*10;
                                            echo number_format($a/$tot6*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-6' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $ma = $r1['counts'];
                                            // echo $ma*10;
                                            echo number_format($ma/$tot6*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                          $res1 = $md/$tot6*100+$da/$tot6*100;
                                        echo number_format($res1,1);

                                        $disagreebody = $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a/$tot6*100+$ma/$tot6*100;
                                            echo number_format($res2,1);

                                            $agreebody = $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot = $res1 + $res2 + $n*10;
                                            echo number_format($tot,1); 
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>VISUAL SPATIAAL </th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            $r1['counts'];
                                            $md = $r1['counts'];
                                            echo number_format($md/$tot7*100,1);
                                            
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                             $da = $r1['counts'];
                                            //  echo $da*10;
                                             echo number_format($da/$tot7*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $n = $r1['counts'];
                                            // echo $n*10;
                                            echo number_format($n/$tot7*100,1);

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $a = $r1['counts'];
                                            // echo $a*10;
                                            echo number_format($a/$tot7*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-7' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $ma = $r1['counts'];
                                            // echo $ma*10;
                                            echo number_format($ma/$tot7*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                          $res1 = $md/$tot7*100+$da/$tot7*100;
                                        echo number_format($res1,1);
                                        $disagreevisual = $res1;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a/$tot7*100+$ma/$tot7*100;
                                            echo number_format($res2,1);

                                            $agreevisual = $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot = $res1 + $res2 + $n*10;
                                            echo number_format($tot,1); 
                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>INTRA</th>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '1'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            $r1['counts'];
                                            $md = $r1['counts'];
                                            echo number_format($md/$tot8*100,1);
                                            
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '2'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                             $da = $r1['counts'];
                                            //  echo $da*10;
                                             echo number_format($da/$tot8*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '3'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $n = $r1['counts'];
                                            // echo $n*10;
                                            echo number_format($n/$tot8*100,1);

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '4'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $a = $r1['counts'];
                                            // echo $a*10;
                                            echo number_format($a/$tot8*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $s1 = "SELECT count(*)  as counts FROM answers WHERE testid = '$testid' AND category = 'CAT-8' and answer = '5'";
                                            $q1 = mysqli_query($con,$s1);
                                            $r1 = mysqli_fetch_array($q1);
                                            
                                            $ma = $r1['counts'];
                                            // echo $ma*10;
                                            echo number_format($ma/$tot8*100,1);
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                          $res1 = $md/$tot8*100+$da/$tot8*100;
                                        echo number_format($res1,2);

                                        $intradisagree = $res1;

                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $res2 = $a/$tot8*100+$ma/$tot8*100;
                                            echo number_format($res2,2);

                                            $intraagree = $res2;
                                        ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?php 
                                            $tot = $res1 + $res2 + $n*10;
                                            echo number_format($tot,1); 
                                        ?>
                                                    </td>
                                                </tr>
                                            </tbody>

                                        </table>
            <!-- page 17 start -->

            <table style="width: 100%;">
                <colgroup>
                    <col style="background-color:rgb(238, 224, 224);">
                    <col style="background-color:rgb(235, 174, 62);">
                    <col style="background-color: rgb(235, 174, 62);">
                    <col style="background-color: rgb(238, 224, 224);">
                    <col style="background-color: rgb(238, 224, 224);">
                </colgroup>
                <tr>
                    <th style="background-color: gray; border-right-style: 1px solid black;">

                    </th>
                    <th style="background-color: rgb(245, 243, 165); border-right-style: 1px solid black;">
                        DAG STR.
                    </th>
                    <th style="background-color: rgb(245, 243, 165);">
                        DAG
                    </th>
                    <th style="background-color: rgb(245, 243, 165);">
                        AG
                    </th>
                    <th style="background-color: rgb(245, 243, 165);">
                        AG STR
                    </th>
                </tr>
                <tr>
                    <td>1-Log</td>
                    <td>
                        0
                    </td>
                    <td>
                        10
                    </td>
                    <td>
                        30
                    </td>
                    <td>
                        60
                    </td>
                </tr>

                <tr>
                    <td>2-Mus</td>
                    <td>
                        10
                    </td>
                    <td>
                        30
                    </td>
                    <td>
                        40
                    </td>
                    <td>
                        20
                    </td>
                </tr>


                <tr>
                    <td>3-Nat</td>
                    <td>
                        0
                    </td>
                    <td>
                        10
                    </td>
                    <td>
                        30
                    </td>
                    <td>
                        60
                    </td>
                </tr>

                <tr>
                    <td>4-V-Ling</td>
                    <td>
                        40
                    </td>
                    <td>20
                    </td>
                    <td>
                        30
                    </td>
                    <td>
                        10
                    </td>
                </tr>

                <tr>
                    <td>5-Inter</td>
                    <td>
                        10
                    </td>
                    <td>
                        0
                    </td>
                    <td>
                        60
                    </td>
                    <td>
                        30
                    </td>
                </tr>

                <tr>
                    <td>6-Kine</td>
                    <td>
                        0
                    </td>
                    <td>
                        20
                    </td>
                    <td>
                        50
                    </td>
                    <td>
                        30
                    </td>
                </tr>

                <tr>
                    <td>7-Visu</td>
                    <td>
                        10
                    </td>
                    <td>
                        10
                    </td>
                    <td>
                        50
                    </td>
                    <td>
                        30
                    </td>
                </tr>

                <tr>
                    <td>8-Intral</td>
                    <td>
                        20
                    </td>
                    <td>
                        0
                    </td>
                    <td>
                        40
                    </td>
                    <td>
                        40
                    </td>
                </tr>
            </table>
            <!-- page 17 end -->

            <!-- page 18 start -->

            <table style="width: 100%;" class="table">
                <colgroup>
                    <col style="background-color:rgb(243, 241, 241);">
                    <col style="background-color:rgb(241, 195, 203);">
                    <col style="background-color: rgb(243, 241, 241);">
                    <col style="background-color: rgb(125, 190, 125);">

                </colgroup>
                <tr>
                    <th style="background-color: rgb(255, 255, 255); border-right-style: 1px solid black;">

                    </th>
                    <th>
                        DISAGREE
                    </th>
                    <th>
                        AGREE
                    </th>
                    <th>
                        A - D %
                    </th>
                </tr>
                <tr>
                    <td>1-Log</td>
                    <td>
                        10
                    </td>
                    <td>
                        90
                    </td>
                    <td>
                        80
                    </td>

                </tr>

                <tr>
                    <td>2-Mus</td>
                    <td>
                        100
                    </td>
                    <td>
                        60
                    </td>

                    <td>
                        20
                    </td>
                </tr>


                <tr>
                    <td>3-Nat</td>
                    <td>
                        10
                    </td>
                    <td>
                        90
                    </td>
                    <td>
                        80
                    </td>

                </tr>

                <tr>
                    <td>4-V-Ling</td>
                    <td>
                        60
                    </td>
                    <td>40
                    </td>
                    <td>
                        -20
                    </td>
                </tr>

                <tr>
                    <td>5-Inter</td>
                    <td>
                        10
                    </td>
                    <td>
                        90
                    </td>
                    <td>
                        80
                    </td>
                </tr>

                <tr>
                    <td>6-Kine</td>

                    <td>
                        20
                    </td>
                    <td>
                        80
                    </td>
                    <td>
                        60
                    </td>
                </tr>

                <tr>
                    <td>7-Visu</td>
                    <td>
                        20
                    </td>
                    <td>
                        80
                    </td>
                    <td>
                        60
                    </td>
                </tr>

                <tr>
                    <td>8-Intral</td>
                    <td>
                        20
                    </td>
                    <td>
                        80
                    </td>
                    <td>
                        60
                    </td>
                </tr>
            </table>
            <!-- page 18 end -->
        </div>
    </section>

    <section class="multiple-intelligence-section">
        <div class="container">
            <h2>MULTIPLE INTELLIGENCE</h2>

            <div class="multiple-intel-para">
                <span>TABLE MI.TABLE 3: MULIPLE INTELLIGENCE : ANSWERS -ANALYSIS - PERCENTAGE Each Questions are given
                    with four ranks like 1, 2, 3, 4 (like 0% - 25 % , 26- 50 % , 51 - 75 % and 75 -100 % ). In this
                    table and chart we are discussing about how
                    many answered in 1.2.3.4 ( all in percentages ) and additionally 1 (means strong- disagree ) ,2
                    (means - disagree ) , 3(means -agree ) and 4 (means strong- agree ) . Hope you can understand the
                    scores and follow the table.
                </span>

                <p>Multiple intelligence theory asserts that individuals with a high level of aptitude in a particular type of intelligence do not necessarily have a similar aptitude in any other type of intelligence. In 1983, Harvard University (USA) professor
                    Dr. Howard Gardner started writing his book Frames of Mind: the Theory of Multiple Intelligences with some simple and very powerful questions, viz., Are talented chess players, violinists, and athletes 'intelligent' in their respective
                    disciplines? Why these and other abilities are not accounted for on traditional IQ tests? Why is the term intelligence limited to such a narrow range of human endeavors of Mathematical, Logical & Linguistic talents? So, According to
                    this theory human intelligences can be broadly divided into eight (8) categories. </p>
            </div>

        </div>
    </section>

    <!----------  LOGICAL INTELLIGENCE  ------------->

    <section class="body-intel-section">
        <div class="container">
            <h2>LOGICAL INTELLIGENCE</h2>
            <div class="body-intel1">

                <table class="t1">
                    <tr>
                        <td>1. Intelligence type Logical-Mathematical-Reasoning</td>
                        <td>Preferred Learning Style, Numbers and Logic
                        </td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Intelligence Description</td>
                        <td>logical thinking, detecting patterns, scientific reasoning and deduction; analyze problems, perform, mathematical calculations, Understands relationshipbetween cause and effect towards a tangible outcome or result.</td>
                    </tr>
                    <tr>
                        <td>Related tasks, activities</td>
                        <td>Perform a mental arithmetic calculation; create a process to measure something difficult, analyze how a machine works, create a process; devise a strategy to achieve an aim, assess the value of a business or a proposition.</td>
                    </tr>
                    <tr>
                        <td>Typical Roles, Preferences, Pontential</td>
                        <td>Scientists, engineer, computer experts, accountants, statisticians, researchers, analysts, traders, bankers bookmakers, insurance brokers, negotiators, deal makers, trouble-shooters, directors</td>
                    </tr>
                </table>
            </div>

            <div class="body-intel2">
                <table>

                    <tr>
                        <td style="color: red;">Average %</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">1 LOGIC</td>
                        <td>87.5</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Rank</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Disagree %</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Agree %</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td style="color: red;">A-D %</td>
                        <td>80</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="table-images1">
        <div class="container">
            <div class="table-list">
                <ol>
                    <li>Domain Intelligence</li>
                    <li>Name </li>
                    <li>Subject Category</li>
                    <li>Picture</li>
                </ol>
            </div>

            <div class="table-img">
                <table>
                    <tr>

                        <td>Log Mus</td>
                        <td>Log Nat</td>
                        <td>Log Ling</td>
                        <td>Log Inter</td>
                        <td>Log-Kines</td>
                        <td>Log Visu</td>
                        <td>Log Intra</td>
                    </tr>
                    <tr>
                        <td>Christian Doppler</td>
                        <td>Charles darwin</td>
                        <td>Bhaskara </td>
                        <td>Dr S Radha krishnan</td>
                        <td>Tiger Woods</td>
                        <td>Leonardo Da Vinci</td>
                        <td>Dr. Abdul Kalam</td>
                    </tr>
                    <tr>
                        <td>Scientist - Sound</td>
                        <td>Scientist - Bio Animals</td>
                        <td>Author - Mathematics</td>
                        <td>Philosopher - Author - Teacher</td>
                        <td>Golf Player Sportsman</td>
                        <td>Scientist - Physics-Artist</td>
                        <td>Scientist - Author - Theist - Pious</td>
                    </tr>
                    <tr style="text-align: center;">

                        <td> <img src="Table-img1/doppler.jpg" width="100px" height="100px" alt=""></td>
                        <td> <img src="Table-img1/charles.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img1/bhaskara.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img1/radhakrish.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img1/woods.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img1/davinci.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img1/kalam.jpg" width="100px" height="100px" alt=""></td>
                    </tr>
                </table>
            </div>

            <div class="table-graph">
                <img src="graph1.png" width="1000px" height="500px" alt="">
            </div>
        </div>
    </section>


    <!-------------- MUSICAL INTELLIGENCE   ---------------------->

    <section class="body-intel-section">
        <div class="container">
            <h2>MUSICAL INTELLIGENCE</h2>
            <div class="body-intel1">

                <table class="t1">
                    <tr>
                        <td>2. Intelligence type Musical Intelligence</td>
                        <td>Preferred Learning Style, Music, Sound, Rhythm
                        </td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Intelligence Description</td>
                        <td>Music ability, awareness, Appreciation and use of sound; recognition of tonal and rhythmic patterns, understands relation between sound and feeling</td>
                    </tr>
                    <tr>
                        <td>Related Tasks, Activities</td>
                        <td>Perform a musical piece; sing a song; review a musical work; coach someone to play a musical instrument; specify mood music for telephone systems and receptions.</td>
                    </tr>
                    <tr>
                        <td>Typical Roles, Preferences, Pontential</td>
                        <td>Musicians, singer, composers, DJ'S, Music Producers, Piano tuners, acoustic engineers, entertainers, party planners, environment and noise advisors, voice coaches.</td>
                    </tr>
                </table>
            </div>

            <div class="body-intel2-mus">
                <table>

                    <tr>
                        <td style="color: red;">Average %</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">2 MUSIC</td>
                        <td>67.5</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Rank</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Disagree %</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Agree %</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td style="color: red;">A-D %</td>
                        <td>0</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="table-images1">
        <div class="container">
            <div class="table-list">
                <ol>
                    <li>Domain Intelligence</li>
                    <li>Name </li>
                    <li>Subject Category</li>
                    <li>Picture</li>
                </ol>
            </div>

            <div class="table-img">
                <table>
                    <tr>
                        <td>Mus Log</td>

                        <td>Mus Nat</td>
                        <td>Mus Ling</td>
                        <td>Mus Inter</td>
                        <td>Mus Kin</td>
                        <td>Mus Vis</td>
                        <td>Mus Intra</td>
                    </tr>
                    <tr>
                        <td>Ananth Vaidyanathan</td>
                        <td>Charles Darwin</td>
                        <td>Bob Dylan</td>
                        <td>Benjamin Franklin</td>
                        <td>Martin Garrix</td>
                        <td>Alan Silvestri</td>
                        <td>Beethoven</td>
                    </tr>
                    <tr>
                        <td>Musician - Voice Expert</td>
                        <td>Scientist Animals</td>
                        <td>Musician Lyricist</td>
                        <td>Philosopher - Politician -Musician </td>
                        <td>DJ - Musician</td>
                        <td>Composer - Background Music</td>
                        <td>Deaf and Dumb Musician</td>
                    </tr>
                    <tr style="text-align: center;">

                        <td> <img src="Table-img2/ananth.jpg" width="100px" height="100px" alt=""></td>
                        <td> <img src="Table-img1/charles.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img2/bob.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img2/benjamin.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img2/martin.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img2/alan.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img2/beethoven.jpg" width="100px" height="100px" alt=""></td>
                    </tr>
                </table>
            </div>

            <div class="table-graph">
                <img src="graph1.png" width="1000px" height="500px" alt="">
            </div>
        </div>
    </section>

    <!----------  NATURAL INTELLIGENCE  ------------->

    <section class="body-intel-section">
        <div class="container">
            <h2>NATURAL INTELLIGENCE</h2>
            <div class="body-intel1">

                <table class="t1">
                    <tr>
                        <td>3. Intelligence type NATURAL INTELLIGENCE</td>
                        <td>Preferred Learning Style, Plants, Observation birds, Animals, star nature so on.
                        </td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Intelligence Description</td>
                        <td>Exploring nature, making collections of objects, studying them, and grouping them, have been sensory skill-sight, sound, smell, taste and touch, makes keen observations about natural changes, interconnections and patterns.</td>
                    </tr>
                    <tr>
                        <td>Related Tasks, Activities</td>
                        <td>Trainers, Zoo Keepers, Horticulturists, Botanists, Florists, Scientists Biological and Physical words, Bird Researchers, Veterinarians, Famers, Outdoor Activities Instructor Planner, Meteorologists And Conservationists. Astronomers,
                            Oceanography
                        </td>
                    </tr>
                    <tr>
                        <td>Typical Roles, Preferences, Pontential</td>
                        <td>Plants Scholar, Animal Scholar, Artchaeologist, Designer, Weather Rearcher, Environment Researcher, Animals Protection Activist, Forest Rangers, Nature Guides, Landscape Designers, Animal Lover.</td>
                    </tr>
                </table>
            </div>

            <div class="body-intel2-nat">
                <table>

                    <tr>
                        <td style="color: red;">Average %</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">3 NAT</td>
                        <td>87.5</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Rank</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Disagree %</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Agree %</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td style="color: red;">A-D %</td>
                        <td>90</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="table-images1">
        <div class="container">
            <div class="table-list">
                <ol>
                    <li>Domain Intelligence</li>
                    <li>Name </li>
                    <li>Subject Category</li>
                    <li>Picture</li>
                </ol>
            </div>

            <div class="table-img">
                <table>
                    <tr>
                        <td>Nat Log</td>
                        <td>Nat Nat</td>
                        <td>Nat Ling</td>
                        <td>Nat Inter</td>
                        <td>Nat Kin</td>
                        <td>Nat Vis</td>
                        <td>Nat Intra</td>
                    </tr>
                    <tr>
                        <td>Carl Linnaeus</td>
                        <td>Heinrich Stoelzel</td>
                        <td>Jim Corbett</td>
                        <td>David Attenborough</td>
                        <td>Damoo Dhatre</td>
                        <td>Rathika Ramasamy</td>
                        <td>Swami Vivekanandha</td>
                    </tr>
                    <tr>
                        <td>Scientist - Plants, Evolution</td>
                        <td>Instrument inventor</td>
                        <td>Author - Nature books</td>
                        <td>Philosopher - Nature</td>
                        <td>Animal Tamer- Circus Legend</td>
                        <td>Photographer - Nature</td>
                        <td>Philosopher - Monk</td>
                    </tr>
                    <tr style="text-align: center;">

                        <td> <img src="Table-img3/carl.jpg" width="100px" height="100px" alt=""></td>
                        <td> <img src="Table-img3/heinrich.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img3/jim.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img3/david.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img3/damoo.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img3/rathika.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img3/vivekanantha.jpg" width="100px" height="100px" alt=""></td>
                    </tr>
                </table>
            </div>

            <div class="table-graph">
                <img src="graph1.png" width="1000px" height="500px" alt="">
            </div>
        </div>
    </section>


    <!--------VERBAL LINGUISTIC INTELLIGENCE---------------->

    <section class="body-intel-section">
        <div class="container">
            <h2>VERBAL LINGUISTIC INTELLIGENCE INTELLIGENCE</h2>
            <div class="body-intel1">

                <table class="t1">
                    <tr>
                        <td>4. Intelligence type VERBAL - LINGUISTIC</td>
                        <td>Preferred Learning Style, Word, Languages, Communication.
                        </td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Intelligence Description</td>
                        <td>Words, Language, Written and spoken; interpretation and explanation of ideas and information via language, understands relationship between communication and meaning.</td>
                    </tr>
                    <tr>
                        <td>Related Tasks, Activities</td>
                        <td>Write a set of instructions; speak on a subject; edit a written piece or work; write a speech; commentate on an event; Article, story, book writing.</td>
                    </tr>
                    <tr>
                        <td>Typical Roles, Preferences, Pontential</td>
                        <td>Writers, Lawyers, Journalists, Speakers, Trainers, Copy - Writers, English teachers, Poets, Editor, Linguists, Translators, PR consultants, Media Consultants, TV and radio presenters, voice - over artistes.</td>
                    </tr>
                </table>
            </div>

            <div class="body-intel2">
                <table>

                    <tr>
                        <td style="color: red;">Average %</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">4 V LIN</td>
                        <td>52.5</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Rank</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Disagree %</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Agree %</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td style="color: red;">A-D %</td>
                        <td>-20</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="table-images1">
        <div class="container">
            <div class="table-list">
                <ol>
                    <li>Domain Intelligence</li>
                    <li>Name </li>
                    <li>Subject Category</li>
                    <li>Picture</li>
                </ol>
            </div>

            <div class="table-img">
                <table>
                    <tr>
                        <td>Verb - Log</td>

                        <td>Verb - Nat</td>
                        <td>Verb - Ling</td>
                        <td>Verb - Inter</td>
                        <td>Verb - Kin</td>
                        <td>Verb - Vis</td>
                        <td>Verb - Intra</td>
                    </tr>
                    <tr>
                        <td>Noam Chomsky</td>
                        <td>Rabindranath Tagore</td>
                        <td>Romila Thapar</td>
                        <td>Thiruvalluvar</td>
                        <td>Amitabh Bachan</td>
                        <td>Jack Kirby</td>
                        <td>Malcoim Gladwell</td>
                    </tr>
                    <tr>
                        <td>Linguist - Language</td>
                        <td>Poet - Music Composer</td>
                        <td>Historian - Author</td>
                        <td>Philosopher - Author</td>
                        <td>Actor</td>
                        <td>Comic book Artist - writer</td>
                        <td>Author - Psychologist</td>
                    </tr>
                    <tr style="text-align: center;">

                        <td> <img src="Table-img4/noam.jpg" width="100px" height="100px" alt=""></td>
                        <td> <img src="Table-img4/Tagore.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img4/romila.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img4/thiru.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img4/amitabh.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img4/jack.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img4/malcoim.jpg" width="100px" height="100px" alt=""></td>
                    </tr>
                </table>
            </div>

            <div class="table-graph">
                <img src="graph1.png" width="1000px" height="500px" alt="">
            </div>
        </div>
    </section>


    <!--------INTERPERSONAL INTELLIGENCE---------------->

    <section class="body-intel-section">
        <div class="container">
            <h2>INTERPERSONAL INTELLIGENCE</h2>
            <div class="body-intel1">

                <table class="t1">
                    <tr>
                        <td>5. Intelligence type INTERPERSONAL INTELLIGENCE</td>
                        <td>Preferred Learning Style, Teamwork, HR, Human contacts
                        </td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Intelligence Description</td>
                        <td>Peoples's feeling; Ability to relate to others; inter[retation of behaviour and communications; understands the relationships between people and their situations, felling others.</td>
                    </tr>
                    <tr>
                        <td>Related Tasks, Activities</td>
                        <td>Inter moods from facial expressions; demonstrate feeling through body language; affect the feeling of others in a planned way; coach or counsel another person.</td>
                    </tr>
                    <tr>
                        <td>Typical Roles, Preferences, Pontential</td>
                        <td>Therapists, HR professionals, mediators, leaders, counselors, politicians, educators, sales-people, clergy, psychologist, teachers, doctors, healers, careers, advertising profeessionals, coaches and mentors; (there is clear association
                            between this type of intelligence.)</td>
                    </tr>
                </table>
            </div>

            <div class="body-intel2">
                <table>

                    <tr>
                        <td style="color: red;">Average %</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">5 INTER</td>
                        <td>77.5</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Rank</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Disagree %</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Agree %</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td style="color: red;">A-D %</td>
                        <td>80</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="table-images1">
        <div class="container">
            <div class="table-list">
                <ol>
                    <li>Domain Intelligence</li>
                    <li>Name </li>
                    <li>Subject Category</li>
                    <li>Picture</li>
                </ol>
            </div>

            <div class="table-img">
                <table>
                    <tr>
                        <td>Inter Log</td>
                        <td>Inter Mus</td>
                        <td>Inter Nat</td>
                        <td>Inter Ling</td>
                        <td>Inter Inter</td>
                        <td>Inter Vis</td>
                        <td>Inter Intra</td>
                    </tr>
                    <tr>
                        <td>Steve Jobs</td>
                        <td>Benny Dayal</td>
                        <td>Jane Goodall</td>
                        <td>Shiv Khera</td>
                        <td>Madhuri Dixit</td>
                        <td>Bob Ross</td>
                        <td>Ramana Maharishi</td>
                    </tr>
                    <tr>
                        <td>Industrial Designer - Influencer</td>
                        <td>Professional Singer - Performer</td>
                        <td>Nature Activist - Author</td>
                        <td>Professional speaker - Author</td>
                        <td>Professional Dancer - films - Actress</td>
                        <td>Painter - Television Host</td>
                        <td>Sage - Yogi Philosopher</td>
                    </tr>
                    <tr style="text-align: center;">

                        <td> <img src="Table-img5/steve.jpg" width="100px" height="100px" alt=""></td>
                        <td> <img src="Table-img5/benny.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img5/jane.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img5/shiv.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img5/madhuri.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img5/bob.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img5/ramana.jpg" width="100px" height="100px" alt=""></td>
                    </tr>
                </table>
            </div>

            <div class="table-graph">
                <img src="graph1.png" width="1000px" height="500px" alt="">
            </div>
        </div>
    </section>


    <!--------BODY KINESTHIC INTELLIGENCE---------------->

    <section class="body-intel-section">
        <div class="container">
            <h2>BODY KINESTHIC INTELLIGENCE</h2>
            <div class="body-intel1">

                <table class="t1">
                    <tr>
                        <td>6. Intelligence type KINESTHIC INTELLIGENCE</td>
                        <td>Preferred Learning Style, Physical Experience, Body and Movement, Touch and Feel Senses.
                        </td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Intelligence Description</td>
                        <td>Body movement control, manual dexterity, physical agility and balance; eye and body coordination.</td>
                    </tr>
                    <tr>
                        <td>Related Tasks, Activities</td>
                        <td>Games, sports, flip a beer - mat; play in garden, sea side, kite flying; coach workplace posture, assess work - station ergonomics, Nurses.</td>
                    </tr>
                    <tr>
                        <td>Typical Roles, Preferences, Pontential</td>
                        <td>Dancers, Actors, Athletes, divers, sports - people, soldiers, fire - fighters, performance artistes; ergonomists, Nurses osteopaths fishermen, drivers, crafts - people; gardeners, chefs, acupuncturists, Body massagers.</td>
                    </tr>
                </table>
            </div>

            <div class="body-intel2">
                <table>

                    <tr>
                        <td style="color: red;">Average %</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">6 VIS</td>
                        <td>77.5</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Rank</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Disagree %</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Agree %</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td style="color: red;">A-D %</td>
                        <td>60</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="table-images1">
        <div class="container">
            <div class="table-list">
                <ol>
                    <li>Domain Intelligence</li>
                    <li>Name </li>
                    <li>Subject Category</li>
                    <li>Picture</li>
                </ol>
            </div>

            <div class="table-img">
                <table>
                    <tr>
                        <td>Kin Log</td>

                        <td>Kin Nat</td>
                        <td>Kin Ling</td>
                        <td>Kin Inter</td>
                        <td>Kin Kin</td>
                        <td>Kin Vis</td>
                        <td>Kin Intra</td>
                    </tr>
                    <tr>
                        <td>Lewis Hamilton</td>
                        <td>Michael Jackson</td>
                        <td>Bear Grylls</td>
                        <td>Steve Redgrave</td>
                        <td>Sourav Ganguly</td>
                        <td>Renzo Piano</td>
                        <td>Bruce Lee</td>
                    </tr>
                    <tr>
                        <td>Racing Driver</td>
                        <td>Dance - Singer - Songwriter</td>
                        <td>Nature Adventurer - Survival Expert</td>
                        <td>Professional Rower - Author</td>
                        <td>cricketer - Leader</td>
                        <td>Architech - Engineer</td>
                        <td>Martial Artist - Philosopher</td>
                    </tr>
                    <tr style="text-align: center;">

                        <td> <img src="Table-img6/lewis.jpg" width="100px" height="100px" alt=""></td>
                        <td> <img src="Table-img6/jackson.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img6/bear.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img6/steve.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img6/ganguly.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img6/renzo.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img6/lee.jpg" width="100px" height="100px" alt=""></td>
                    </tr>
                </table>
            </div>

            <div class="table-graph">
                <img src="graph1.png" width="1000px" height="500px" alt="">
            </div>
        </div>
    </section>

    <!--------------------SPATIAL VISUAL INTELLIGENCE Section----------------------------->

    <section class="spatial-intel-section">
        <div class="container">
            <h2>SPATIAL VISUAL INTELLIGENCE</h2>
            <div class="spatial-intel1">

                <table class="t1">
                    <tr>
                        <td>7. Intelligence type SPATIAL INTELLIGENCE</td>
                        <td>Preferred Learning Style, Picture, Shape, Images, 3D Space</td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Intelligence Description</td>
                        <td>Spatial perception and cration of visual images; pictoriak imgination and expression; understands relationship between images and meanings, and between space and effect.</td>
                    </tr>
                    <tr>
                        <td>Related Tasks, Activities</td>
                        <td>Design a costume; interpret a painting; create a room layout; create a corporate logo; design a building; pack a suitcase or the boot of a car.</td>
                    </tr>
                    <tr>
                        <td>Typical Roles, Preferences, Pontential</td>
                        <td>Artists, designers, cartoonists, story - boarders, architects, photographers, Sculptors, town planners, visionaries, inventors, engineers, beauty & cosmetics technicians.</td>
                    </tr>
                </table>
            </div>

            <div class="spatial-intel2">
                <table>

                    <tr>
                        <td style="color: red;">Average %</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">7 VIS</td>
                        <td>75.0</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Rank</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Disagree %</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Agree %</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td style="color: red;">A-D %</td>
                        <td>60</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="table-images1">
        <div class="container">
            <div class="table-list">
                <ol>
                    <li>Domain Intelligence</li>
                    <li>Name </li>
                    <li>Subject Category</li>
                    <li>Picture</li>
                </ol>
            </div>

            <div class="table-img">
                <table>
                    <tr>
                        <td>Vis Log</td>
                        <td>Vis Mus</td>
                        <td>Vis Nat</td>
                        <td>Vis Ling</td>
                        <td>Vis Inter</td>
                        <td>Vis Kin</td>
                        <td>Vis Intra</td>
                    </tr>
                    <tr>
                        <td>Kalpana Chawla</td>
                        <td>Walt Disney</td>
                        <td>Sacajawea</td>
                        <td>William Burroughs</td>
                        <td>Martha Stewart</td>
                        <td>Amelia Earhart</td>
                        <td>Pablo Picasso</td>
                    </tr>
                    <tr>
                        <td>Astronaut - Engineer - Space</td>
                        <td>Writer - Flimmaker - Animator</td>
                        <td>Explorer - Science</td>
                        <td>Visual Artist - Writer</td>
                        <td>Enterpreneur TV Presenter</td>
                        <td>Aviation - Space Pioneer - Pilot</td>
                        <td>Artist - Painter - Sculptor</td>
                    </tr>
                    <tr style="text-align: center;">

                        <td style="padding: 10px;"> <img src="Table-img7/kalpana.jpg" width="100px" height="100px" alt=""></td>
                        <td> <img src="Table-img7/disney.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img7/saca.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img7/william.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img7/martha.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img7/amelia.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img7/picasso.jpg" width="100px" height="100px" alt=""></td>
                    </tr>
                </table>
            </div>

            <div class="table-graph">
                <img src="graph1.png" width="1000px" height="500px" alt="">
            </div>
        </div>
    </section>


    <!--------------------INTRA PERSONEL INTELLIGENCE Section----------------------------->

    <section class="intra-intel-section">
        <div class="container">
            <h2>INTRA PERSONEL INTELLIGENCE</h2>
            <div class="intra-intel1">

                <table class="t1">
                    <tr>
                        <td>8. Intelligence type INTRA PERSONEL INTELLIGENCE</td>
                        <td>Preferred Learning Style, Self Reflection - Self Discovery</td>

                    </tr>
                </table>

                <table>
                    <tr>
                        <td>Intelligence Description</td>
                        <td>Self - awareness, personal cognizance, personal objectivity, understand oneself, one's relationship to others and the world, and one's own need for, and reation to change, more on self introspection.</td>
                    </tr>
                    <tr>
                        <td>Related Tasks, Activities</td>
                        <td>Consider and decide one's own aims and personal changes,require to achive self, help others, decide options for development; consider and decide one's own position in relation to the Emotional Intelligence model.</td>
                    </tr>
                    <tr>
                        <td>Typical Roles, Preferences, Pontential</td>
                        <td>Thinking and guiding for personal thoughts, beliefs and behaviour in relation to their situation, other people, their purpose and aims - in this respect there is a similarity to Maslow's Self - Actuation level, and again there
                            is clear association between this type of intelligence and what is now termed 'Emotional intelligence' or EQ</td>
                    </tr>
                </table>
            </div>

            <div class="intra-intel2">
                <table>

                    <tr>
                        <td style="color: red;">Average %</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">8 INTRA</td>
                        <td>75.0</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Rank</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Disagree %</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td style="color: red;">Agree %</td>
                        <td>80%</td>
                    </tr>
                    <tr>
                        <td style="color: red;">A-D %</td>
                        <td>60</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <section class="table-images1">
        <div class="container">
            <div class="table-list">
                <ol>
                    <li>Domain Intelligence</li>
                    <li>Name </li>
                    <li>Subject Category</li>
                    <li>Picture</li>
                </ol>
            </div>

            <div class="table-img">
                <table>
                    <tr>
                        <td>intra Log</td>
                        <td>intra Mus</td>
                        <td>intra Nat</td>
                        <td>intra Ling</td>
                        <td>intra Inter</td>
                        <td>intra Kin</td>
                        <td>intra Vis</td>
                    </tr>
                    <tr>
                        <td>Sigmand Freud</td>
                        <td>Mozart</td>
                        <td>Salim Ali</td>
                        <td>Socrates</td>
                        <td>Mahatma Gandhi</td>
                        <td>Ravi Shastri</td>
                        <td>Vethathiri Mahahrishi</td>
                    </tr>
                    <tr>
                        <td>Scientist - Psychologist</td>
                        <td>Composer - Musician</td>
                        <td>Natualist - Activist</td>
                        <td>Visinary - Philosopher</td>
                        <td>Leader - Philosopher - Ethicist</td>
                        <td>Cricketer - Coach</td>
                        <td>Peace activist - Philosopher</td>
                    </tr>
                    <tr style="text-align: center;">

                        <td style="padding: 10px;"> <img src="Table-img8/sigmand.jpg" width="140px" height="100px" alt=""></td>
                        <td> <img src="Table-img8/mozart.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img8/salim.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img8/socrates.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img8/gandhi.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img8/shastri.jpg" width="100px" height="100px" alt=""></td>
                        <td><img src="Table-img8/maharishi.jpg" width="100px" height="100px" alt=""></td>
                    </tr>
                </table>
            </div>

            <div class="table-graph">
                <img src="graph1.png" width="1000px" height="500px" alt="">
            </div>
        </div>
    </section>

    <!-------------- QUOTIENTS SECTION--------------------->

    <section class="quotients-section">
        <div class="container">
            <h2>QUOTIENTS - IQ-EQ-CQ-AQ-BQ</h2>

            <div class="quotients-div">
                <div class="side">
                    <h1>IQ</h1>
                </div>
                <div class="left-side">
                    <ul>
                        <li>* Ability to Reason and think</li>
                        <li>* Predictor of academic performance</li>
                        <li>* Ability to mange numbers</li>
                        <li>* Ability to analyze</li>
                        <li>* Ability to apply logic, language and grammer</li>
                        <li>* High IQ doesn't mean more intelligent/visa-versa</li>
                    </ul>
                </div>

                <div class="right-side">
                    <span> INTELLIGENT QUOTIENT</span>
                    <p>Rich in logic Reserch , Science, Mostly use Right Brain, Mostly introverts, Senior Level, Decision Plociy makers</p>

                    <ol>
                        <li>Srinivasa Ramanujam</li>
                        <li>SIR. C V Ramam</li>
                        <li>Dr. Abdul Kalam</li>
                        <li>Viswanathan Anand</li>
                        <li>G D Naidu</li>
                    </ol>
                </div>
            </div>

            <div class="quotients-div">
                <div class="side">
                    <h1>EQ</h1>
                </div>
                <div class="left-side-eq">
                    <ul>
                        <li>* Ability to understand and manage self's & others emotions</li>
                        <li>* High EQ make you a man of management</li>
                        <li>* Predictor of your Emotion Management</li>
                        <li>* Diresctly Proportional to your managerial skills</li>

                    </ul>
                </div>

                <div class="right-side">
                    <span>EMOTINAL QUOTIENT</span>
                    <p>Rich in Emotional , taking care of self , Taking care of others services like a Doctor, Nurse , Teacher , Politicians , Public service providers like Police , Lwyers so on .</p>

                    <ol>
                        <li>Yogi. Ramana maharishi</li>
                        <li>Vethathiri Maharishi </li>
                        <li>Dr. Dinakaran </li>
                        <li>Mother Theresa</li>
                        <li>Sadguru </li>
                        <li>Jawaharlal Nehru </li>
                        <li>Lord. Budhha</li>
                        <li>J JAYALAITHA </li>
                        <li>Vallabai patel </li>
                    </ol>
                </div>
            </div>
            <div class="quotients-div">
                <div class="side">
                    <h1>CQ</h1>
                </div>
                <div class="left-side-cq">
                    <ul>
                        <li>* Ability to understand music & art</li>
                        <li>* Predictor of your creativity</li>
                        <li>* High CQ makes you a man of Painting & Dance</li>
                        <li>* Out of the box thinking</li>
                        <li>* Doing something different better & new</li>

                    </ul>
                </div>

                <div class="right-side">
                    <span>CREATIVITY QUOTIENT</span>
                    <p>Rich competency in Imagination , creativity in Artisitc skills , like actor, actress, dancer , game players , carttonist , Fashion designing , script writing , video graphy …. </p>

                    <ol>
                        <li>DIRECTOR BALACHANDAR </li>
                        <li>A R RAHMAN </li>
                        <li>KAMAL KHASAN ,</li>
                        <li>SUDHA CHANDRAN</li>
                        <li>TIGER WOOD</li>
                        <li>WALT DISNEY</li>
                        <li>RAVI VARMA</li>


                    </ol>
                </div>
            </div>

            <div class="quotients-div">
                <div class="side">
                    <h1>AQ</h1>
                </div>
                <div class="left-side-aq">
                    <ul>
                        <li>* Ability to handle tough situations</li>
                        <li>* Pain taking capacity</li>
                        <li>* Mentally strong people</li>
                        <li>* Tough mind set</li>
                        <li>* Never give up attitude</li>
                        <li>* situation finger</li>
                        <li>* High energy level</li>
                    </ul>
                </div>

                <div class="right-side">
                    <span> ADVERSITY QUOTIENT  </span>
                    <p>Rich competency in problem solving High in tactile , Fire fighting , ambulance drivers, safety and first aid staffs, staff in emergencey department in hospital , rescue staffs so on </p>

                    <ol>
                        <li>Abhi Nandhan
                        </li>
                        <p>And all army , navy , military official .</p>
                    </ol>
                </div>
            </div>
            <div class="quotients-div">
                <div class="side">
                    <h1>BQ</h1>
                </div>
                <div class="left-side-bq">
                    <ul>
                        <li>* Ability to take risk</li>
                        <li>* More on intuition</li>
                        <li>* More visual </li>
                        <li>* Reverse thinking </li>
                        <li>* Authoritative</li>
                        <li>* Highly self - responsible </li>
                        <li>captainship behavior</li>
                    </ul>
                </div>

                <div class="right-side">
                    <span> BUSINESS ( ENTERPRISEING) QUOTIENT</span>
                    <p> Risk taking * captainship * Responsibility * highly unconventional * Activist * Quick decision taker * seeker*</p>

                    <ol>
                        <p>All top most personalities ,entrepreneurs ,business top heads
                        </p>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <!-----------------  QUOTIENTS - ANALYSIS ------------------------->

    <section>
        <div class="container">
            <h2>QUOTIENTS - ANALYSIS</h2>
            <div class="quotients-analysis">
                <div class="quotient-table">
                    <table>
                        <tr>
                            <th></th>
                            <th>%</th>
                            <th>RANK</th>
                        </tr>
                        <tr>
                            <td>IQ</td>
                            <td>77.5</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>EQ</td>
                            <td>75</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>AQ</td>
                            <td>77.5</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>CQ</td>
                            <td>67.5</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>BQ</td>
                            <td>76.25</td>
                            <td>3</td>
                        </tr>
                    </table>
                </div>
                <div class="quotient-graph">
                    <img src="graph2.png" width="600px" height="460px" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-----------------BRAIN DOMINANCE------------------------->

    <section class="brain-dominance">
        <div class="container">
            <h2>BRAIN DOMINANCE</h2>

            <div class="brain-para">
                <p> <strong>Neuropsychologist Dr. Roger W. Sperry </strong> devleped the brain sub divisions - left brain theory in 1960. He believed that the human brain is right or left side dominant and that each side of the brain controls or supervises,
                    several types of commands. Operations and various thinking activities in no times with perfect networks. Later Dr. sperry reduces to many reason and few of them are DNA, Genes, food, Neuro, regular activities physically and mentally
                    and lastly age factor. Many individuals use both sides of their brains equally, like 50:50. think in a homogeneous way and only a few with dominance in right or left brain makes a history. The majority of the populations belong to
                    left brain dominant. Although the typical school environment in modern times tends to conventional left brain users with expections of logical thought, systematic. regular and practical action.
                </p>
            </div>

            <div class="brain-para">
                <p> <strong>Right Brain</strong> thinkers were little less in populations, who belongs to be more imaginative and brand them as "outside the box thinkers" and highly spontaneous, Interestingly, right brain dominant people are often left -
                    handed, (since each hemisphere controls the others side's hand) which is coincidence with right brain dominant people being less common and no need to be vice - versa. Exploring and understanding the right brai - left brain theory
                    helps to understand yourself better, It improves your ability to study, learn and process information. It also helps us to know about the reasons why one is preferring certain activities, cetain interests certain thinking patterns.</p>
            </div>

            <div class="brain-img-para">
                <div class="brain-img">
                    <img src="brain.jpg" alt="">
                </div>

                <div class="brain-para2">
                    <p>Dr. Roger Sperry, Nobel awardee in 1981, orginated the concept of left and right brain when studying about eplilepsy and neuro science, neuro plasticity. <br> <br> He suggested that languge and algebra in mathematics was controlled
                        by the left brain, technically many conventional tasks, organising and the right brain controls activities like, logic, imagination, colors, math geometry, visual, spatial and music. <br><br> For example if you want to travel from
                        place A to place B. Left brain users calculates about the distance and cost, where as the right brain users discusses the route for travelling, natural scens and music of travelling.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--------------- Brain Analysis Section --------------------->

    <section class="brain-analysis">
        <div class="container">
            <h2>BRAIN DOMINANCE - ANALYSIS</h2>


            <div class="brain-analysis-table">
                <table>
                    <tr style="background: lightblue; color: red;">
                        <td>BRAIN ANALYSIS</td>
                        <td>PER</td>
                    </tr>
                    <tbody style="background: yellow;">
                        <tr>
                            <td>LEFT BRAIN</td>
                            <td>49.6%</td>
                        </tr>
                        <tr>
                            <td>RIGHT BRAIN </td>
                            <td>50.4%</td>
                        </tr>
                    </tbody>
                </table>
                <img src="brain-analysis.png" height="250px" alt="">
            </div>

            <div class="brain-analysis-para">
                <p> <strong>Left Hemisphere </strong> (logical thought and language skills) controls the right side body area and right hemisphere controls the left side body area. <br> <br>
                    <strong>Right hemisphere</strong> (abstract thought, Random thoughts, imagination and spatial orientation control the left side of your body.) </p>
            </div>
        </div>
    </section>

    <!----------------MODALITY VISUAL---------------------->

    <section class="modality-visual">
        <div class="container">
            <h2>LEARNING MODALITY - VISUAL</h2>

            <div class="modality-para">
                <p>Visual Learners uses strong with visual associations. They often use lists to organize life, activities and thoughts. When spelling, they recognize words by how the size, what the colors, even letters or fonts how they look. <br> <br>                    They can remember faces, body shape, color and not good in remembering names. They can learn best by associating pictures with the words or color concepts being used. <br> <br> They benefit when visual are used as a part of lecture
                    (whiteboard, transparencies, power-point, films, videos, maps, charts, posters, graphs etc.</p>
            </div>
        </div>
    </section>

    <!----------------MODALITY AUDITORY---------------------->

    <section class="modality-visual">
        <div class="container">
            <h2>LEARNING MODALITY - AUDITORY</h2>

            <div class="modality-para">
                <p>Auditory Learners, learn by listening by verbal instructions, remember all lecturers, phone conversations well , like lectures methods,listening lessons by radio , interest in sounds or who words rthymically, like music.
                    <br> <br> They find it easy to remember names, sounds , rymes and not faces and may find love in reading aloud instead of reading silently, talking to yourself or repeating instructions to make sure you understand them.</p>
            </div>
        </div>
    </section>

    <!----------------MODALITY KINESTHETIC-------------------->

    <section class="modality-visual">
        <div class="container">
            <h2>LEARNING MODALITY - KINESTHETIC</h2>

            <div class="modality-para">
                <p>They like to Learn by becoming physical involvement and actually doing something with what's being learned. They like "Hands-on" activity, like Montessori methods in basic schooling , playing with mud, balls, biology lab dissection , physics
                    lab experiments , is needed to grasp the learning by using hands to have a touch and feeling.

                    <br> <br> They like role play, dramas, Laboratories, field trips, trial-error assignments and field work, visit to zoo, visit to park visit to temple, more outdoors , outside the classroom promote more interest.</p>
            </div>
        </div>
    </section>

    <!----------------MODALITY ANALYSIS-------------------->

    <section class="modality-analysis">
        <div class="container">
            <h2>LEARNING MODALITY - ANALYSIS</h2>
            <div class="modality-table">
                <div class="modality-t1">

                    <table>
                        <tr>
                            <th></th>
                            <th>%</th>
                            <th>RANK</th>
                        </tr>
                        <tr>
                            <td>V</td>
                            <td>35.3</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>28.2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>K</td>
                            <td>36.5</td>
                            <td>1</td>
                        </tr>

                    </table>

                </div>

                <div class="modality-t2">
                    <table>
                        <tr>
                            <th></th>
                            <th>V</th>
                            <th>A</th>
                            <th>K</th>
                        </tr>
                        <tr>
                            <td>V</td>
                            <td>***</td>
                            <td>V A</td>
                            <td>V K</td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td>A V</td>
                            <td>***</td>
                            <td>A K</td>
                        </tr>
                        <tr>
                            <td>K</td>
                            <td>K V</td>
                            <td>K A</td>
                            <td>***</td>
                        </tr>

                    </table>
                </div>
            </div>

            <div class="modality-analysis-img">
                <img src="graph5.png" width="600px" height="400px" alt="">
            </div>
        </div>
    </section>

    <!--------------- DR. JOHN HOLLAND - RIASEC ANALYSIS -------------------->

    <section class="john-holland-analysis">
        <div class="container">
            <h2>DR. JOHN HOLLAND - RIASEC ANALYSIS </h2>
            <div class="john-holland-analysis-img">
                <img src="chart.png" alt="">
            </div>
        </div>
    </section>

    <!--------------- DR. JOHN HOLLAND - RIASEC INTRO-------------------->

    <section class="john-holland-intro">
        <div class="container">
            <h2>DR. JOHN HOLLAND - RIASEC INTRO</h2>
            <div class="john-holland-intro-para">
                <p>Dr. Holland's descibe his theory in his Holland Book (1997) from his long reserch about how job/career can be classified in six domains. <br><br> In any job domains, most persons can be categorized as one of the six types majorly (and
                    combinations with others too) <br> <br>1. Realistic, 2. investigative, 3. Artistic, 4. Social, 5. Enterprises, 6. Conventional and some time combinations of two or three categories, We will discuss later. <br><br> People search jobs
                    or careers, so that want to exercise their skills and talents, express with ethics, values with to exercise thier skills and talents, express with ethics, values with inborn talents to feel better in a agreeable ways, do a positive
                    mental attitude. <br><br> Behavior's is determined by an interaction between mental personality and the demanding environment, given job description, one should feel exact mapping to smooth, easy with our self and to the management
                    or to the society.

                </p>
            </div>
            <div class="john-holland-intro-para2">
                <p>Dr. Holland's usually referred to by their first letter, taken together - RIASEC: Realistic, Investigative, Artistic, Social, Enterprising and Conventional. The six dimensions of this RIASEC model are actually derived from evaluation by
                    questionnaire methods. Recognizing your main interests should enable you to better understand your aspiration and professional potential. We shall see the brief explanation and same time job domains and each job shall repeated, it
                    can cover 2 or 3 more category too, and not to worry for that. Some sample pictures can cover more than one domains, perhaps.</p>
            </div>
        </div>
    </section>

    <!---------------  RIASEC ANALYSIS-------------------->

    <section class="riasec-analysis">
        <div class="container">
            <h2>RIASEC ANALYSIS</h2>

            <div class="riasec-analysis-table">
                <table>
                    <tr>
                        <th></th>
                        <th>%</th>
                        <th>RANK</th>
                    </tr>
                    <tr>
                        <td>R</td>
                        <td>82.5</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>I</td>
                        <td>78.8</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>79.2</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>82.5</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>E</td>
                        <td>80.8</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>81.3</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>AVERAGE</td>
                        <td>80.8</td>
                        <td></td>
                    </tr>
                </table>
            </div>

            <div class="riasec-analysis-img">
                <img src="graph6.png" width="500px" height="380px" alt="">
            </div>
        </div>
    </section>

    <section style="clear: both; margin-bottom: 80px; margin-top: 80px;">
        <div class="container">
            <!-- page 54 start -->
            <h2>RIASEC ANALYSIS - REALISTIC</h2>
            <div class="p11-table">
                <table class="table" style="float: left; width: 30%; font-size: 30px; margin-top: 55px; height: 580px;">
                    <colgroup>
                        <col style="background-color: rgb(246, 208, 215);">
                    </colgroup>
                    <tr>
                        <th style="background-color: white;"> </th>
                        <th> % </th>
                    </tr>
                    <tr>
                        <td>Avg%</td>
                        <td>80.8</td>
                    </tr>
                    <tr>
                        <td>Realistic</td>
                        <td>82.5</td>
                    </tr>
                    <tr>
                        <td>Rank</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Dis Agree</td>
                        <td>15.0</td>
                    </tr>
                    <tr>
                        <td>Agree</td>
                        <td>85.0</td>
                    </tr>
                    <tr>
                        <td>A-D</td>
                        <td>70.0</td>
                    </tr>
                </table>
            </div>
            <div class="p11-table">
                <div class="t2">
                    <table class="table2" style="float: right; width: 67%; margin-bottom: 80px;">
                        <tr>
                            <th colspan="3" style="font-size: 33px;"><strong>REALISTIC:</strong>Hands-on knowledge,Building,Physical activity,Practical Mechnically,Stable Concrete Reserved ,Self-controlled,Independent, Ambitious,Systematic, Straightforword and Frank,Liberal Realistic.
                            </th>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Personality</span></td>
                            <td style="font-size: 20px; ">"Realistic" types like actions,soft body movements,,<br> natural and highly practical than hypothetical.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Values</span></td>
                            <td style="font-size: 20px; ">Common sense, Openness,right efforts.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Potential aptitudes</span>
                            </td>
                            <td style="font-size: 20px; ">Comfortable with technical tasks,mechanical <br> intelligence and good physical stamina,Usage of tools <br> and motors.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Learning Style</span>
                            </td>
                            <td style="font-size: 20px; ">Learn through a concrete and practical approach by <br> applying exams,visual skills.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Environment</span>
                            </td>
                            <td style="font-size: 20px; ">Realistic types are most comfortable in environments <br> which allow them to obtain concrtete,results,to use <br> technical equipment or to work on site,they tend to <br> dislike being confined to an office.</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- page 54 end -->

            <!-- page 55 start -->

            <div>
                <div>
                    <img src="graph55.png" style="width: 70%; margin-top: 30px; float: left;">
                    <div style="float: right; font-size: 40px;  margin-top: 40px; width: 28%; color: rgb(55, 169, 214);">
                        <ul>
                            <li>TECHNICIAN – <br> FITTING LAB <br> RESEARCHER </li>
                            <li>ARACHEOLOGIST <br> GEOLOGY </li>
                            <li>DESIGNER</li>
                        </ul>
                    </div>
                </div>
                <div style="float: left; margin-bottom: 80px;">
                    <img src="flightmanu.jpg" style="width: 24%; height: 220px; margin-top: 30px; ">
                    <img src="scientist.jpg" style="width: 24%; height: 220px; margin-top: 30px; ">


                    <img src="archaeologist.jpg" style="width: 25%; height: 220px; margin-top: 30px; ">


                    <img src="art.png" style="width: 25%; height: 220px; margin-top: 30px; float:right;">

                </div>

            </div>

            <!-- page 55 end -->
        </div>
    </section>


    <section style="clear: both;">
        <div class="container">
            <h2>RIASEC ANALYSIS - INVESTIGATIVE
            </h2>
            <!-- page 56 start -->

            <div class="p11-table">
                <table style="float: left; width: 30%; font-size: 30px; margin-top: 65px; height: 600px;">
                    <colgroup>
                        <col style="background-color: rgb(246, 208, 215);">
                    </colgroup>
                    <tr>
                        <th style="background-color: white;"> </th>
                        <th> % </th>
                    </tr>
                    <tr>
                        <td>Avg%</td>
                        <td>80.8</td>
                    </tr>
                    <tr>
                        <td>Investigative</td>
                        <td>78.8</td>
                    </tr>
                    <tr>
                        <td>Rank</td>
                        <td>6</td>
                    </tr>
                    <tr>
                        <td>Dis Agree</td>
                        <td>17.5</td>
                    </tr>
                    <tr>
                        <td>Agree</td>
                        <td>82.5</td>
                    </tr>
                    <tr>
                        <td>A-D</td>
                        <td>65.0</td>
                    </tr>
                </table>
                <div>
                    <table class="table2" style="float: right; width: 67%; margin-top: 60px; margin-bottom: 80px;">
                        <tr>
                            <th colspan="3" style="font-size: 33px;"><strong>INVESTIGATEIVE:</strong>People who like to observe ,self-learn,investigate,analyze,problem solving,research,science and technology,thicking skills, analytical scientific observant ,precise scholarly,Cautions intellectually
                                self-confidient, independent , logical complex,curious quest
                            </th>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Personality</span></td>
                            <td style="font-size: 20px; ">Curious about everything scientifically, constantly seeking to learn about and understand and explore science or engineering,nature,precies,intellectgual and have scientific, research mindset.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Values</span></td>
                            <td style="font-size: 20px; ">Curiosity,critical thicking and logic.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Potential aptitudes</span>
                            </td>
                            <td style="font-size: 20px; ">Research,logical reasoning,learning and analytical capabilities.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Learning Style</span>
                            </td>
                            <td style="font-size: 20px; ">Learn by theory and systematic research.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Environment</span>
                            </td>
                            <td style="font-size: 20px; ">Investigate types are most comfortable in changing and thought-orientated environments that favor expertise over productivity.</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- page 56 end -->
            <!-- page 57 start -->

            <div>
                <div style="float: left; margin-bottom: 80px;">
                    <img src="graph57.png" style="width: 70%; margin-top: 30px; ">



                    <img src="mathsteacher.jpg" style="width: 35%; height: 270px; margin-top: 30px; ">
                    <img src="patient.jpg" style="width: 33%; height: 270px; margin-top: 30px;">


                    <p style="float: right; font-size: 40px; margin-top: -300px; color: rgb(51, 152, 192);">
                        *MASTER/ <br> RESEARCH <br> PROGRAMS <br> ENGINEERING <br> INVESTIGATION & <br> ANALYSIS <br> PLANT <br> RESEARCHER
                    </p>
                </div>


                <!-- page 57 end -->
            </div>
    </section>

    <section style="clear: both;">
        <div class="container">
            <h2>RIASEC ANALYSIS - ARTISTIC</h2>
            <!-- page 58 start -->

            <div class="p11-table">
                <table style="float: left; width: 30%; font-size: 30px; margin-top: 65px; height: 535px;">
                    <colgroup>
                        <col style="background-color: rgb(246, 208, 215);">
                    </colgroup>
                    <tr>
                        <th style="background-color: white;"> </th>
                        <th> % </th>
                    </tr>
                    <tr>
                        <td>Avg%</td>
                        <td>80.8</td>
                    </tr>
                    <tr>
                        <td>Artistic</td>
                        <td>79.2</td>
                    </tr>
                    <tr>
                        <td>Rank</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Dis Agree</td>
                        <td>16.7</td>
                    </tr>
                    <tr>
                        <td>Agree</td>
                        <td>83.3</td>
                    </tr>
                    <tr>
                        <td>A-D</td>
                        <td>66.6</td>
                    </tr>
                </table>
                <div>
                    <table class="table2" style="float: right; width: 67%; margin-top: 60px;">
                        <tr>
                            <th colspan="3" style="font-size: 33px;"><strong>ARTISTIC:</strong>Research in unconventional subjects, More intuitional skills/abilities ,creativity Learning,,highly sensitive ,Earth & space Science - Technology,courageous, idealistic,introspective,emotional independent
                            </th>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Personality</span>
                            </td>
                            <td style="font-size: 20px;">Creative ,aesthetics. Idealistic , introverts.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Values</span></td>
                            <td style="font-size: 20px; ">Loves beauty and arts, natural, originality, imagination, visual, freedom, independent.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Potential
                                    aptitudes</span>
                            </td>
                            <td style="font-size: 20px; ">Visual,creativity,imagination.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Learning Style</span>
                            </td>
                            <td style="font-size: 20px; ">Learn by intuition,experimenting new,fancy thinking and fancy thinking and fancy dance , actions, unconventional ,different thoughts.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Environment</span>
                            </td>
                            <td style="font-size: 20px; ">Informal communication, innovation.</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- page 58 end -->
            <!-- page 59 start -->


            <div class="">

                <img src="graph59.png" style="width: 100%; margin-top: 30px;">

                <img src="painter.jpeg" style="width: 24%; height: 220px; margin-top: 30px; ">
                <img src="bharatham.jpg" style="width: 24%; height: 220px; margin-top: 30px; ">


                <img src="sirpi.jpg" style="width: 24%; height: 220px; margin-top: 30px; ">
                <h4 style="float:right; margin-top: 32px;padding-bottom: 20px; font-size: 32px;">
                    <div class="colrs">
                        DRAWING &
                        <br> PAINTER <br> BHARATHAM

                        <br> DANCER <br> STONE SCUPLTOR<br>

                    </div>
                </h4>
            </div>
            <!-- page 59 end -->
        </div>
    </section>

    <section style="margin-top: 80px;">
        <div class="container">
            <h2>RIASEC ANALYSIS - SOCIAL</h2>
            <!-- page 60 start -->

            <div class="p11-table">
                <table style="float: left; width: 30%; font-size: 30px;  height: 450px;">
                    <colgroup>
                        <col style="background-color: rgb(246, 208, 215);">
                    </colgroup>
                    <tr>
                        <th style="background-color: white;"> </th>
                        <th> % </th>
                    </tr>
                    <tr>
                        <td>Avg%</td>
                        <td>80.8</td>
                    </tr>
                    <tr>
                        <td>Social</td>
                        <td>82.5</td>
                    </tr>
                    <tr>
                        <td>Rank</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Dis Agree</td>
                        <td>10.0</td>
                    </tr>
                    <tr>
                        <td>Agree</td>
                        <td>90.0</td>
                    </tr>
                    <tr>
                        <td>A-D</td>
                        <td>80.0</td>
                    </tr>
                </table>
                <div>
                    <table class="table2" style="float: right; width: 67%; ">
                        <tr>
                            <th colspan="3" style="font-size: 33px;"><strong>SOCIAL:</strong>Social Research, public relations, learning social skills , understanding others.
                            </th>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Personality</span>
                            </td>
                            <td style="font-size: 20px; ">"Generally patience ,understanding others,listening and attentive to others, to be kind ,warm and welcoming relationship with others ,helping others.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Values</span></td>
                            <td style="font-size: 20px; ">Friendly,co-operation and generosity.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Potential
                                    aptitudes</span>
                            </td>
                            <td style="font-size: 20px; ">Empathy ,listening and communication.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Learning Style</span>
                            </td>
                            <td style="font-size: 20px; ">Learn by sharing with others,by working as a team.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Environment</span>
                            </td>
                            <td style="font-size: 20px; ">Social types are comfortable in social environments which encourage personal contact,collabration and communication.</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- page 60 end -->

            <!-- page 61 start -->


            <div class="">

                <img src="graph3.png" style="width: 100%; margin-top: 30px;">

                <img src="teacher.jpg" style="width: 15%; height: 220px; margin-top: 30px; ">
                <img src="dentist.jfif" style="width: 14%; height: 220px; margin-top: 30px; ">


                <img src="listenstudent.jpg" style="width: 14%; height: 220px; margin-top: 30px; ">


                <img src="laywer.jpg" style="width: 15%; height: 220px; margin-top: 30px; ">


                <img src="postoffice.jpg" style="width: 15%; height: 220px; margin-top: 30px; ">
                <h4 style="float:right; margin-top: 32px;padding-bottom: 20px; font-size: 26px;">
                    LAWYER <br> JUDGE <br>
                    <div class="colrs">
                        SCHOOL TEACHERS <br> DRIVERS <br> NURSES LAB WORK <br> COMPUTER DATA JOB <br>
                    </div>
                </h4>
            </div>
            <!-- page 61 end -->
        </div>
    </section>

    <section style="margin-top: 80px;">
        <div class="container">
            <h2>RIASEC ANALYSIS - ENTERPRISE</h2>
            <!-- page 62 start -->

            <div class="p11-table">
                <table style="float: left; width: 30%; font-size: 30px;  height: 490px;">
                    <colgroup>
                        <col style="background-color: rgb(246, 208, 215);">
                    </colgroup>
                    <tr>
                        <th style="background-color: white;"> </th>
                        <th> % </th>
                    </tr>
                    <tr>
                        <td>Avg%</td>
                        <td>80.8</td>
                    </tr>
                    <tr>
                        <td>Enterprise</td>
                        <td>80.8</td>
                    </tr>
                    <tr>
                        <td>Rank</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>Dis Agree</td>
                        <td>13.3</td>
                    </tr>
                    <tr>
                        <td>Agree</td>
                        <td>86.7</td>
                    </tr>
                    <tr>
                        <td>A-D</td>
                        <td>73.4</td>
                    </tr>
                </table>
                <div>
                    <table style="float: right; width: 67%; ">
                        <tr>
                            <th colspan="3" style="font-size: 33px;"><strong>ENTERPRISING:</strong>Taking Action,Undertaking Leading, <br> Projects,Managing taking risk,influencing & Persuading
                            </th>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Personality</span>
                            </td>
                            <td style="font-size: 20px; ">"Enterprising" types tend to be open and take risk,new actions
                                <br> dynamic,assertive and enterpreneurial.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Values</span></td>
                            <td style="font-size: 20px; ">Accuracy, stability and efficiency.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Potential
                                    aptitudes</span>
                            </td>
                            <td style="font-size: 20px; ">Data analysis, attention to detail and ability to work with numbers.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Learning Style</span>
                            </td>
                            <td style="font-size: 20px; ">Learn by doing and by putting themselves in the action.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Environment</span>
                            </td>
                            <td style="font-size: 20px; ">Conventional types feel at home in structured and hierarchical environments where rules and procedures are clearly defined.</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- page 62 end -->

            <!-- page 63 start -->


            <div style="margin-bottom: 80px;">

                <img src="graph63.png" style="width: 100%; margin-top: 30px;">

                <img src="cake maker.jpg" style="width: 17%; height: 260px; margin-top: 30px; ">
                <img src="psycological.jpg" style="width: 17%; height: 260px; margin-top: 30px; ">


                <img src="programmer.jpg" style="width: 17%; height: 260px; margin-top: 30px; ">


                <img src="sirpi.jpg" style="width: 17%; height: 260px; margin-top: 30px; ">
                <h4 style="float:right; margin-top: 32px;padding-bottom: 20px; font-size: 26px;">
                    <div class="colrs">
                        CAKE DESIGNER<br> PSYCHOLOGICAL &<br> LEGAL COUNSELLOR <br> COMPUTER PROGRAMER <br> & ANALYST <br> SHOPPING MALL <br> &BUSINESS <br> ENTERPRISES <br>
                    </div>
                </h4>
            </div>
            <!-- page 63 end -->
        </div>
    </section>

    <section style="clear: both;">
        <div class="container">
            <h2>RIASEC ANALYSIS - CONVENTIONAL
            </h2>
            <!-- page 64 start -->

            <div class="p11-table">
                <table style="float: left; width: 30%; font-size: 30px;  height: 430px;">
                    <colgroup>
                        <col style="background-color: rgb(246, 208, 215);">
                    </colgroup>
                    <tr>
                        <th style="background-color: white;"> </th>
                        <th> % </th>
                    </tr>
                    <tr>
                        <td>Avg%</td>
                        <td>80.8</td>
                    </tr>
                    <tr>
                        <td>Conventional</td>
                        <td>81.3</td>
                    </tr>
                    <tr>
                        <td>Rank</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Dis Agree</td>
                        <td>15.0</td>
                    </tr>
                    <tr>
                        <td>Agree</td>
                        <td>85.0</td>
                    </tr>
                    <tr>
                        <td>A-D</td>
                        <td>70.0</td>
                    </tr>
                </table>
                <div>
                    <table style="float: right; width: 67%; ">
                        <tr>
                            <th colspan="3" style="font-size: 33px;"><strong>CONVENTIONAL:</strong> Planning, Structuring, Processing data, figures, following instructions, obeying orders.
                            </th>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Personality</span>
                            </td>
                            <td style="font-size: 20px; ">“Conventional” types tend to be meticulous, perfectionist, conformist and rather introverted.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Values</span></td>
                            <td style="font-size: 20px; ">Accuracy, stability and efficiency.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Potential
                                    aptitudes</span>
                            </td>
                            <td style="font-size: 20px; ">Data analysis, attention to detail and ability to work with numbers.
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Learning Style</span>
                            </td>
                            <td style="font-size: 20px; ">Learn by doing and by putting themselves in the action.</td>
                        </tr>
                        <tr>
                            <td style="font-size: 35px; "><span style="background-color: yellow;">Environment</span>
                            </td>
                            <td style="font-size: 20px; ">Conventional types feel at home in structured and hierarchical environments where rules and procedures are clearly defined.</td>
                        </tr>

                    </table>
                </div>
            </div>
            <!-- page 64 end -->
            <!-- page 65 start -->


            <div class="">

                <img src="graph65.png" style="width: 100%; margin-top: 30px;">

                <img src="modig.jpg" style="width: 55%; height: 300px; margin-top: 30px; ">

                <div class="colrs" style=" margin-top: 40px; margin-right: 100px; padding-bottom: 20px; font-size: 26px; float: right;">
                    <h4>
                        CONVNETIONAL –<br>
                        <br> MILITARY- AIRFORCE STAFF
                    </h4>
                </div>

            </div>
            <!-- page 65 end -->
        </div>
    </section>

    <!--------------------RIASEC ANALYSIS - MATRIX------------------------->

    <section class="riasec-matrix">
        <div class="container">
            <h2>RIASEC ANALYSIS - MATRIX</h2>

            <div class="riasec-matrix-table">
                <h3>RIASEC 2 X 2 MATRIX CODES</h3>

                <table>
                    <tr>
                        <th></th>
                        <th>R</th>
                        <th>I</th>
                        <th>A</th>
                        <th>S</th>
                        <th>E</th>
                        <th>C</th>
                    </tr>
                    <tr>
                        <th>R</th>
                        <td>**</td>
                        <td>RI</td>
                        <td>RA</td>
                        <td>RS</td>
                        <td>RE</td>
                        <td>RC</td>
                    </tr>
                    <tr>
                        <th>I</th>
                        <td>IR</td>
                        <td>**</td>
                        <td>IA</td>
                        <td>IS</td>
                        <td>IE</td>
                        <td>IC</td>
                    </tr>
                    <tr>
                        <th>A</th>
                        <td>AR</td>
                        <td>AI</td>
                        <td>**</td>
                        <td>AS</td>
                        <td>AE</td>
                        <td>AC</td>
                    </tr>
                    <tr>
                        <th>S</th>
                        <td>SR</td>
                        <td>SI</td>
                        <td>SA</td>
                        <td>**</td>
                        <td>SE</td>
                        <td>SC</td>
                    </tr>
                    <tr>
                        <th>E</th>
                        <td>ER</td>
                        <td>EI</td>
                        <td>EA</td>
                        <td>ES</td>
                        <td>**</td>
                        <td>EC</td>
                    </tr>
                    <tr>
                        <th>C</th>
                        <td>CR</td>
                        <td>CI</td>
                        <td>CA</td>
                        <td>CS</td>
                        <td>CS</td>
                        <td>**</td>
                    </tr>
                </table>
            </div>
            <div class="riasec-matrix-para">
                <p>There are 2 * * letter job codes and three letter job codes, 4 letter job codes going on as per highest ramks. There are about 14,000 jobs and cannot list all codes. Kindly spend some more time on different combinatoions with intelligence,
                    various scale factors and choose the subjects to learn and keep in mind for the future jobs, careers and for further studies.</p>
            </div>

            <div class="riasec-matrix-table2">
                <table>
                    <tr>
                        <th>DOMAIN</th>
                        <th>PERCENTAGE</th>
                        <th>RANKS</th>
                        <th>CODES</th>
                    </tr>
                    <tr>
                        <td>R</td>
                        <td>82.5</td>
                        <td>1</td>
                        <td>R</td>
                    </tr>
                    <tr>
                        <td>I</td>
                        <td>78.8</td>
                        <td>6</td>
                        <td>RAEI -- SAEI</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>79.2</td>
                        <td>5</td>
                        <td>RA -- SA</td>
                    </tr>
                    <tr>
                        <td>S</td>
                        <td>82.5</td>
                        <td>1</td>
                        <td>s</td>
                    </tr>
                    <tr>
                        <td>E</td>
                        <td>80.8</td>
                        <td>4</td>
                        <td>RAE -- SAE</td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>81.3</td>
                        <td>3</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>AVERAGE</td>
                        <td>80.8</td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!-------------- MCKNSY ANALYSIS ------------------>

    <section class="mcknsy-analysis">
        <div class="container">
            <h2>MCKNSY ANALYSIS</h2>
            <div class="mcknsy-analysis-para">
                <h3>Dr. MckINSZKY TABLE - ANALYSIS</h3>
                <p>Dr Walter Mckenzie, Educationist, Psychologist categorizes the 8 multiple intelligences in three different domains (groups), serves easy to organize by three group, how the combiantions are endless, like cooking with eight different vegetables,
                    permutations and combinations help to choose differentgroup names.</p>
            </div>
        </div>
    </section>

    <section class="mcknsy-analysis-table">
        <div class="container">
            <div class="mcknsy-left">
                <div class="mcknsy-img">
                    <img src="graph7.png" width="500px" height="400px" alt="">
                </div>
                <div class="mcknsy-table">
                    <table>
                        <tr>
                            <th></th>
                            <th>%</th>
                            <th>RANK</th>
                        </tr>
                        <tr>
                            <td>Analytic</td>
                            <td>40.4</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Interactive</td>
                            <td>34.6</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Interospective</td>
                            <td>25</td>
                            <td>3</td>
                        </tr>

                    </table>
                </div>
            </div>
            <div class="mcknsy-right">
                <table>
                    <tr>
                        <td> <strong> The Analytical domain </strong> consists of the logical, musical and naturalist intelligence. These are the intelligence that promote the processes of analyzing and incorporating data accumulating Knowledge.</td>
                    </tr>
                    <tr>
                        <td> <strong> The Interactive domain </strong> consists of the verbal,interpersonal and kinesthetic intelligence. These are the intelligences that learns typically employ to express them and explore their environment.</td>
                    </tr>
                    <tr>
                        <td> <strong> The introspective domain </strong> consists of the interpersonal and visual intelligences. These are the intelligences that promote learning through own experiences and beliefs</td>
                    </tr>
                </table>
            </div>
        </div>
    </section>

    <!--------------------------CARL JUNG INTROVERT EXTROVERT ANALYSIS------------------------------->
    <section class="carl-jung-section">
        <div class="container">
            <h2>CARL JUNG INTROVERT EXTROVERT ANALYSIS</h2>

            <div class="carl-jung-para">
                <p class="text-center">
                    Extroverts are characterized by a preference to focus on the outside world than the self. Extroverts are energized by social gatherings, parties and group activities. They are usually enthusiastic, gregarious and animated. Their communication style is
                    mostly verbal. Although people who can perform and work even in large crowds without pressure are usually extroverts, exceptions like footballer Lionel Messi and legendary Indian cricketer Sachin Tendulkar are primarily introverts.
                </p>
            </div>

            <div class="carl-jung-table">
                <table>
                    <tr>
                        <td>
                            <ul>
                                <li>Assertive</li>
                                <li>Talkative * Sociable</li>
                                <li>Larger Friend Group</li>
                                <li>Energized by Interactions</li>
                                <li>Gregarious</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Energetic</li>
                                <li>Expressive</li>
                                <li>Volunteering</li>
                                <li>Easy to approach</li>
                                <li>Just opposite to introvert <br> behaviours</li>
                            </ul>
                        </td>
                    </tr>
                </table>
                <div class="data">
                    <table>
                        <tr>
                            <th></th>
                            <th>INTROVERT</th>
                            <th>EXTROVERT</th>
                        </tr>
                        <tr>
                            <td>PERCENTAGE</td>
                            <td>51.3</td>
                            <td>48.7</td>
                        </tr>
                    </table>
                </div>
            </div>




            <div class="carl-jung-para2">
                <p>
                    Introverts are characterized by a preference to focus on the inside world, inside thoughts. Introverts are energized by spending time alone or with small groups. They are usually uncomfortable in large groups and gatherings. They seek depth in relationships,
                    and are more in connection with their sub conscious mind. Introverts process information internally and are great listeners, thinkers, programmers, philosophers, researchers,Athelets, Like chess / carrom players.
                </p>
            </div>


            <div class="carl-jung-table2">
                <div class="chart">
                    <img src="chart2.png" width="550px" height="380px">
                </div>
                <table>
                    <tr>
                        <td>
                            <ul>
                                <li>Internally aware</li>
                                <li>Calm*Not talkative</li>
                                <li>Enjoys Solitude</li>
                                <li>Indoor game players</li>
                                <li>Just opposite with extrovert</li>
                                <li class="list">ideas</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Quiet</li>
                                <li>Smaller Friend Group</li>
                                <li>Independent</li>
                                <li>Think before express</li>
                                <li>More private</li>
                                <li>Deliberate</li>
                            </ul>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </section>

    <!-------------- BIRD TEST INTRO-------------------->

    <section class="bird-test-intro">
        <div class="container">
            <h2>BIRD TEST INTRO</h2>
            <div class="bird-test-intro-para">
                <strong>CHART:BIRD:</strong>
                <p>
                    Dr. William Moulton Marston (May 9, 1893 – May 2, 1947), was a psychologist and an anthropologer also known Charles Moulton, was an American psychologist, inventor and comic book writer who created the character Wonder Woman.,who after studying thousands
                    of human behaviors and their personalities, developed the concept of DISC profile. <br> <br> After his many years of research he submitted his thesis in late 1920's which divides the human personalities into 4 categories
                    i.e. D for Dominant, I for Influential, S for Steady and C for Compliant (or DISC for short). DISC profile has been in use for many years for multiple purposes like sales, marketing, management, HR, alliances etc. from 1930’S. Later
                    on another scientist, Dr. Gary Couture added bird profiling to the same theory - Eagle, Peacock, Dove and Owl and it became very popular worldwide.
                </p>

            </div>
            <div class="bird-test-intro-table">
                <table>
                    <tr>
                        <th class="clr"></th>
                        <th class="clr">BIRD</th>
                        <th class="clr">%</th>
                        <th class="clr">RANK</th>
                    </tr>
                    <tr>
                        <td class="cler">S</td>
                        <td class="cor">DOVE</td>
                        <td class="rose">24.2</td>
                        <td class="ran">3</td>
                    </tr>
                    <tr>
                        <td class="cler">C</td>
                        <td class="cor">OWL</td>
                        <td class="blue">24.6</td>
                        <td class="rank">2</td>
                    </tr>
                    <tr>
                        <td class="cler">I</td>
                        <td class="cor">PEACOCK</td>
                        <td class="blue">27.5</td>
                        <td class="rnk">1</td>
                    </tr>
                    <tr>
                        <td class="cler">D</td>
                        <td class="cor">EAGLE</td>
                        <td class="rose">23.8</td>
                        <td class="ank">4</td>
                    </tr>
                </table>

                <div class="bird-test-intro-img">
                    <img src="graph8.png" width="600px" height=" 500px" alt="">
                </div>
            </div>

        </div>
    </section>


    <section>
        <div class="container">
            <h2>EMPLOYABILITY INDEX</h2>
            <div class="p11-table">
                <table class="table" style="width: 100%; padding: 10px; font-size: 30px;">
                    <tr>
                        <td>1</td>
                        <td>ACCOUNTING ,OFFICE MANAGEMENT </td>
                        <td style="background-color:rgb(246, 158, 173); color: rgb(255, 23, 35);">75.3</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> AERONAUTICAL ENGG, COM-PILOT &AVIATION AERONAUTICAL ENGG, COM-PILOT &AVIATION </td>
                        <td style="background-color: rgb(209, 241, 209); color: rgb(18, 87, 0);">77.6</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> AGRICULTURE ,PLANT / HERBAL SCIENCE , FLOWER MEDICINE </td>
                        <td style="background-color:rgb(246, 158, 173); color: rgb(163, 1, 28);">76.1</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>ARTS, LANGUAGE <span style="background-color: yellow;"> ,LITERATURE </span> </td>
                        <td style="background-color:rgb(246, 158, 173); color: rgb(187, 3, 34);">76.1</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>BUSINESS, COMMERCE,TRADE SHARE MARKET</td>
                        <td style="background-color:rgb(246, 158, 173); color: rgb(177, 3, 32);">76.0</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>BANKING,FINANCE . ACTURAY SCIENCE, DATA SCIENCE
                        </td>
                        <td>76.7</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td> DEFENCE, MILITARY ,ARMY NDA. ,FIRE & SAFETY
                        </td>
                        <td>76.2</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>EDUCATION , TRAINING , COACHING </td>
                        <td style="background-color:rgb(246, 158, 173); color: rgb(139, 3, 26);"> 76.5</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>ENGINEERING & TECHNOLOGY</td>
                        <td>76.5</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>FOREIGN LANGUAGE , TRANSLATOR,</td>
                        <td>76.2</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>FISHERY SCIENCE/ENGGINEERING </td>
                        <td>77.2</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>FORESTRY SCIENCE/ENGG/OFFICER </td>
                        <td>77.2</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>GEO SCIENCE/GEOLOGY/</td>
                        <td>77.2</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>LAW & LEGAL SERVICES </td>
                        <td>76.8</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>MANAGEMENT</td>
                        <td>76.1</td>
                    </tr>
                    <tr>
                        <td>16</td>
                        <td>MUSIC -FILM-FASHION-MULTIMEDIA</td>
                        <td>77.2</td>
                    </tr>
                    <tr>
                        <td>17</td>
                        <td>MATHS , STATISTICS, DATA ANALYST</td>
                        <td>76.1</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>MEDICAL SCIECNE/MEDICINE </td>
                        <td>76.8</td>
                    </tr>
                    <tr>
                        <td>19</td>
                        <td>PARA MEDICAL SCIENCES &PHARMACY , ALTERNATIVE</td>
                        <td>77.7</td>
                    </tr>
                    <tr>
                        <td>20</td>
                        <td>PSYCHOLOGY & SOCIOLOGY& COUNSELLING</td>
                        <td>76.7</td>
                    </tr>
                    <tr>
                        <td>21</td>
                        <td>PHILOSOPHY & RELIGION STUDIES</td>
                        <td>76.4</td>
                    </tr>
                    <tr>
                        <td>22</td>
                        <td>SPORTS & GAMES &VOCATIONAL JOBS</td>
                        <td>77.0</td>
                    </tr>
                    <tr>
                        <td>23</td>
                        <td>SCIENCE </td>
                        <td>76.1</td>
                    </tr>
                    <tr>
                        <td>24</td>
                        <td>TOURISM & HOSPITALITY </td>
                        <td>76.6</td>
                    </tr>
                    <tr>
                        <td>25</td>
                        <td>TEMPLE SCIECNE,HISTORY,MUSEUM,ARCHEOLOGY</td>
                        <td>75.9</td>
                    </tr>
                    <tr>
                        <td>26</td>
                        <td>VERTINARY SCIENCES & PETS -ANIMALS PHARMACY</td>
                        <td>76.6</td>
                    </tr>
                </table>

            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <h2>SELF ANAYSIS - SHEET</h2>
            <!-- page 77 start -->
            <div class="p11-table">
                <table class="table" style="width: 100%; padding: 10px; font-size: 25px;">
                    <tr>
                        <th><span style="color: red;">Category</span></th>
                        <th>RANK 1</th>
                        <th>RANK 2</th>
                        <th>RANK 3</th>
                        <th>RANK 4-RANK 5</th>
                    </tr>
                    <tr>
                        <td><span style="background-color: yellow; color: red;">CLASS 10</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                    </tr>
                    <tr>
                        <td><span style="background-color: yellow; color: red;">CLASS 11</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: yellow; color: red;">CLASS 12</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: yellow; color: red;">SKILLS/TALENTS</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">1 8MI</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">2 QUOTIENTS</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>

                        <td><span style="background-color: rgb(177, 223, 241); color: red;">3 BRAIN L-R</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">4 V A K</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">5 HOLLAND R I A S E C
                                CODE</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">6 DR MCKINZKY</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">7 JUNG IN-EX</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">8 BIRD</span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">9 COURSE SUBJECT TO CHOOSE
                            </span></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><span style="background-color: rgb(177, 223, 241); color: red;">10 FINAL CONCLUSION</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
            <!-- page 77 end -->
        </div>
    </section>

    <section>
        <div class="container">
            <h2>BEST WISHES</h2>
            <!-- page 78 start -->
            <div class="p78">
                <p>
                    <span style="color: red;">PLANING AND ACTION AND PLANNING 80:20 OR 20:80</span>
                    <span style="color: rgb(4, 112, 4);">
                        IF YOU SPEND 80% OF THE TIME FOR IN ANALYSIS FOR DECISION
                        MAKING PURPOSE, LATER ONLY 20% CHALLENGES OR ISSUES TO FACE ,IF NOT ,NOW ONLY SPENDING 20% TIME
                        FOR
                        DECISION MAKING ANALYSIS ,LATER REMAINING 80% OF THE TIME TO FACE THE CHALLENGES AND NMEW CRISIS
                        ,LIFE IS YOUR CHOICE ,IF YOU NOT THINK NOW ,TIME WILL TEACH THE LESSON <br>
                    </span>
                </p>
                <p style="text-align: center; color: rgb(4, 112, 4);">DR <span style="color: red;">BALASUBRAMANIAN</span> ,SMART GLOBAL EXIM.
                </p>
            </div>
            <!-- page 78 end -->

            <!-- page 79 start -->

            <h2>FOR MORE INFO</h2>
            <div class="p79">
                <p class="para79">
                    <span style="color: indigo;"> Dr.M. Balasubramanian <br>
                        Mob: +91 73391 23552 </span> <br>
                    <br>
                    <br>
                    <span style="color: brown;"> TURN RIGHT HUMAN RELATION ASSESMENT <br>
                        AND SOLUTIONS PRIVATE LIMITED <br></span>
                    <span style="color: orangered;"> COIMBATORE - 641 035 <br>
                        TAMILNADU, INDIA <br></span>
                </p>

            </div>

            <!-- page 79 end -->
        </div>
    </section>

</body>

</html>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: ""
	},
	axisY: {
		title: "Ranks"
	},
	data: [{
		type: "column",
		yValueFormatString: "10 Ranks",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
