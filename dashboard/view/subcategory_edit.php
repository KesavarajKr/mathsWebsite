<?php 
	require_once('navbar.php');
  require_once('../modal/db.php');
  $id=$_GET['edit'];
                                            
                                            $sql = "SELECT * FROM subcategory where id='$id'";
                                            $query = mysqli_query($con,$sql);
                                            $row = mysqli_fetch_array($query);                                           
                                            
                                                ?>

<?php 

    if(isset($_POST['update']))
    {
        
$catname=$_POST['category'];
$subcatname = $_POST['subcatname'];
$id = $_POST['id'];

echo $sql = "UPDATE subcategory SET subcatname = '$subcatname',catid = '$catname' WHERE id = '$id'";
$q = mysqli_query($con,$sql);

if($q)
{
    echo "<script>alert('Update Successfully')</script>";
    echo "<script>window.location='qnsubcategory.php'</script>";
}

    }
?>
 <main class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
              <div class="breadcrumb-title pe-3"></div>
              <div class="ps-3">
                <!-- <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Property</li>
                  </ol>
                </nav> -->
              </div>
              
            </div>
            <!--end breadcrumb-->

              <div class="row">
                 <div class="col-lg-12 mx-auto">
                  <div class="card">
                    <div class="card-header py-3 bg-transparent"> 
                      <div class="d-sm-flex align-items-center">
                        <h5 class="mb-2 mb-sm-0">Edit SubCategory Details</h5>
                        <!-- <div class="ms-auto">
                          <button type="button" class="btn btn-secondary">Save to Draft</button>
                          <button type="button" class="btn btn-primary">Publish Now</button>
                        </div> -->
                      </div>
                     </div>
                    <div class="card-body">
                       <div class="row g-3">
                         <div class="col-12 col-lg-12">
                            <div class="card shadow-none bg-light border">
                              <div class="card-body">
                                <form class="row g-3" method="POST" action="subcategory_edit.php">
                                  <div class="col-6">
                                    <input type="text" name="id" value="<?php echo $row['id'] ?>">
                                    <label class="form-label">SubCategory ID</label>
                                    <input type="text" class="form-control" placeholder="Package title" name="catid" value="<?php echo $row['subcategoryid'] ?>" readonly>
                                  </div>
                                  <div class="col-12 col-lg-6">
                                    <label class="form-label">SubCategory Name</label>
                                    <input type="text" class="form-control" placeholder=" Price" name="subcatname" value="<?php echo $row['subcatname'] ?>">
                                  </div>
                                  <div class="form-group">

                    

<label for="exampleFormControlFile2">Category Name</label>

 <?php 

    $category_data = "SELECT * FROM catergory";

    $category_result = mysqli_query($con,$category_data);

  ?>

  <select class="form-control" name="category" id="category_name">

     <option value="Please select" disabled >-- Please Select Category --</option>

          <?php while($rows = mysqli_fetch_array($category_result))

          {

            $selected='';

            if($row['catid']==$rows['categoryid'])

              { 

                $selected='selected';

              }

          ?>

             <option value="<?php echo $rows['categoryid'];?>" <?php echo $selected;?>><?php echo $rows['name']; ?></option> 

        <?php } ?>

       </select>

</div>
                                  
                                   <div class="col-12 col-lg-4">                   
                                <button type="submit" class="btn btn-success" name="update">Update</button>
                              </div>
                               </form>
                              </div>
                            </div>
                         </div>                  
                         
                       </div><!--end row-->
                     </div>
                    </div>
                 </div>
              </div><!--end row-->

          </main>
<?php 
	require_once('footer.php');
?>
<script>
	$(document).ready(function(){
    
       var html = '<tr><td><input class="form-control" type="file"></td><td><button class="btn btn-danger remove">X</button></td></tr>'; 
    	$("#addProduct").click(function(){
    		$('tbody').append(html);
    });
    
    $(document).on('click','.remove',function(){
        $(this).parents('tr').remove();
    });
});
	</script>