<?php 
	require_once('navbar.php');
	require_once('../modal/db.php');
?>
<main class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">User Details</div>
					
					
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
										<th>Name</th>
										<th>E-mail ID</th>
										<th>Mobile NO</th>
										<th>City</th>
										<th>State & Country</th>
										<th>User Type</th>
										<th>Status</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									 <?php
                                            $sql = "SELECT * FROM user_details";
                                            $query = mysqli_query($con,$sql);
                                            while($row = mysqli_fetch_array($query))
                                            {
                                                ?>
									<tr>
										<td><?php echo $row['id'] ?></td>
										<td><?php echo $row['name'] ?></td>
										<td><?php echo $row['email'] ?></td>
										<td><?php echo $row['mobile_no'] ?></td>
										<td><?php echo $row['city'] ?></td>
										<td><?php echo $row['state'] ?> & <?php echo $row['country'] ?></td>
										<td><?php echo $row['user_type'] ?></td>
										<td><button class="btn btn-success"><i class="bi bi-eye-fill" style="margin-left:0px"></i></button></td>
										
										<td><a class="btn btn-danger" href="../controller/delete_user.php?delete=<?php echo $row['id'] ?>"><i class="bi bi-trash-fill" style="margin-left:0px"></i></a></td>
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