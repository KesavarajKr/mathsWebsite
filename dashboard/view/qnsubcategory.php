<?php 
	require_once('navbar.php');
	require_once('../modal/db.php');
?>
<main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Sub Category</div>
					
					<div class="ms-auto">
						<a  class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">Add SubCategory</a>
					</div>
				</div>
				<!--end breadcrumb-->
				
				<!-- <hr/> -->
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>S.No</th>
                                        <th>Category ID</th>
										<th>SubCategory ID</th>
										<th>SubCategory Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
									</tr>
								</thead>
								<tbody>
									 <?php 
											$i=0;
                                            $sql = "SELECT * FROM subcategory";
                                            $query = mysqli_query($con,$sql);
                                            while($row = mysqli_fetch_array($query))
                                            {
                                            	$i=$i+1;
                                                ?>
									<tr>
										<td><?php  echo $i ?></td>
										<td><?php  echo $row['catid'] ?></td>
										<td><?php  echo $row['subcategoryid'] ?></td>
                                        <td><?php  echo $row['subcatname'] ?></td>
										<td><a class="btn btn-info" href="subcategory_edit.php?edit=<?php echo $row['id']  ?>"><i class="bi bi-pencil-fill" style="margin-left:0px"></i></a></td>
										<td><a onclick="return myConfirm();" class="btn btn-danger" href="delete_subcategory.php?delete=<?php echo $row['id']  ?>"><i class="bi bi-trash-fill" style="margin-left:0px"></i></a></td>
									</tr>
									<?php
								}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				
			</main>
<?php
	require_once('footer.php');
 ?>
 <script>

function myConfirm() {

var result = confirm("Want to delete?");

if (result==true) {

return true;

} else {

return false;

}

}

</script>
 <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Add Category</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
												<form class="row g-3" method="POST" action="save_subcategory.php">
													<div class="modal-body m-2">
								 
                                                        <div class="col-12">
                                                            <?php 
                                                                $sql = "SELECT max(id) as subcat FROM subcategory";
                                                                $qry = mysqli_query($con,$sql);
                                                                $row = mysqli_fetch_array($qry);
                                                                 
                                                            ?>
                                                            <input type="hidden" name="cid" value="">
                                                            <label class="form-label">SubCateory ID</label>
                                                            <input type="text" class="form-control" placeholder="Sub Category ID" value="SUBCAT-<?php echo $row['subcat']+1; ?>" name="subcatid" readonly >
                                                        </div>
                                                        <div class="col-12 mt-3">
                                                            <label class="form-label">Category Name</label>
                                                         <select class="form-control" name="catname">
                                                             <option>-- Choose Category --</option>
                                                            <?php 
                                                                $s = "SELECT * FROM catergory";
                                                                $q = mysqli_query($con,$s);
                                                                while($r = mysqli_fetch_array($q))
                                                                {
                                                                    ?>
                                                            <option value="<?php echo $r['categoryid'] ?>"><?php echo $r['name'] ?></option>
                                                                    <?php
                                                                }
                                                            ?>
                                                            </select>
                                                           
                                                            
                                                        </div>

                                                        <div class="col-12">
                                                            
                                                            <label class="form-label">Subcategory Name</label>
                                                            <input type="text" class="form-control" placeholder="Sub Category Name"  name="subcatname">
                                                        </div>
                                                        
                                 
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary" name="addSubCategory">Save changes</button>
													</div>
													</form>
												</div>
											</div>
										</div>