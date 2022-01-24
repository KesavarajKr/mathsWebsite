<?php

require_once('../modal/db.php');

//   require_once('includes/navbar.php');

?>

<?php

    

    if(isset($_POST['name']))

    {

        $name = $_POST['name'];



        $sql = "SELECT * FROM subcategory WHERE catid = '$name'";

        $query = mysqli_query($con,$sql);

        while($row = mysqli_fetch_array($query))
        
        {

          

          ?>
           
          <option value="<?php echo $row['subcategoryid'] ?>"><?php echo $row['subcatname'] ?></option>

          <?php

          

        }





    }

?>