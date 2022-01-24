<?php

require_once('../modal/db.php');

//   require_once('includes/navbar.php');

?>

<?php

    

    if(isset($_POST['name']))

    {

        $name = $_POST['name'];



         $sql = "SELECT * FROM chapter WHERE subcatid = '$name'";

        $query = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($query);

        echo $row['chapters'];


    }

?>