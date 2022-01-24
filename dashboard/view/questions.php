<?php 
	require_once('navbar.php');
	require_once('../modal/db.php');
?>
<main class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Add Questions</div>

        <div class="ms-auto">
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleVerticallycenteredModal">Add
                Questions</a>
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
                            <th>Cat ID</th>
                            <th>SubCategory ID</th>
                            <th>Question ID</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
											$i=0;
                                            $sql = "SELECT * FROM questions";
                                            $query = mysqli_query($con,$sql);
                                            while($row = mysqli_fetch_array($query))
                                            {
                                            	$i=$i+1;
                                                ?>
                        <tr>
                            <td><?php  echo $i ?></td>
                            <td><?php  echo $row['catid'] ?></td>
                            <td><?php  echo $row['subcatid'] ?></td>
                            <td><?php  echo $row['question_id'] ?></td>
                            <td><a class="btn btn-info" href="subcategory_edit.php?edit=<?php echo $row['id']  ?>"><i
                                        class="bi bi-pencil-fill" style="margin-left:0px"></i></a></td>
                            <td><a class="btn btn-info" href="subcategory_edit.php?edit=<?php echo $row['id']  ?>"><i
                                        class="bi bi-pencil-fill" style="margin-left:0px"></i></a></td>
                            <td><a onclick="return myConfirm();" class="btn btn-danger"
                                    href="delete_category.php?delete=<?php echo $row['id']  ?>"><i
                                        class="bi bi-trash-fill" style="margin-left:0px"></i></a></td>
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

    if (result == true) {

        return true;

    } else {

        return false;

    }

}
</script>
<div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Add Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form class="row g-3" method="POST" action="save_question.php">
                <div class="modal-body m-2">


                    <div class="col-12 mt-3">
                        <label class="form-label">Category Name</label>
                        <select class="form-control" name="category_name" id="category_name">
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
                    <div class="col-12 mt-3">
                        <label class="form-label">Subcategory Name</label>
                        <select class="form-control" name="subcatname" id="subcategory">
                                    <option value="">-- Choose --</option>
                        </select>


                    </div>

                    <div class="col-12 mt-3">
                        <label class="form-label">Chapter</label>
                        
                        <input type="text" class="form-control" name="chapter" id="chapter">
                    </div>

                    <div class="col-12">

                        <table class="table table-bordered table-scroll mt-3" id="productTable">
                            <thead>

                                <tr>
                                <th scope="col">Qn No</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Answer 1</th>
                                    <th scope="col">Answer 2</th>
                                    <th scope="col">Answer 3</th>
                                    <th scope="col">Answer 4</th>
                                    <th scope="col">Answer 5</th>
                                    <th scope="col"><button type="button" class="btn btn-primary"
                                            id="addProduct1">+</button></th>

                                </tr>
                            </thead>
                            <tbody id="app1">
                                <tr>
                                <td><textarea class="form-control" name="qnno[]"
                                            placeholder="Question No"></textarea></td>
                                    <td><textarea class="form-control" name="question[]"
                                            placeholder="Question"></textarea></td>
                                    <td><textarea class="form-control" name="question1[]"
                                            placeholder="Answer 1"></textarea></td>
                                    <td><textarea class="form-control" name="question2[]"
                                            placeholder="Answer 2"></textarea></td>
                                    <td><textarea class="form-control" name="question3[]"
                                            placeholder="Answer 3"></textarea></td>
                                    <td><textarea class="form-control" name="question4[]"
                                            placeholder="Answer 4"></textarea></td>
                                    <td><textarea class="form-control" name="question5[]"
                                            placeholder="Answer 5"></textarea></td>
                                    <td><button type="button" class="btn btn-danger">X</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="addQuestion">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    var html =
        '<tr><td><textarea class="form-control" name="qnno[]" placeholder="Question No"></textarea></td><td><textarea class="form-control" name="question[]" placeholder="Question"></textarea></td><td><textarea class="form-control" name="question1[]"></textarea></td><td><textarea class="form-control" name="question2[]"></textarea></td><td><textarea class="form-control" name="question3[]"></textarea></td><td><textarea class="form-control" name="question4[]"></textarea></td><td><textarea class="form-control" name="question5[]"></textarea></td><td><button class="btn btn-danger remove">X</button></td></tr>';
    $("#addProduct1").click(function() {

        $('#app1').append(html);
    });

    $(document).on('click', '.remove', function() {
        $(this).parents('tr').remove();
    });


});
</script>

<script>
$(document).ready(function() {

    $("#category_name").change(function() {
        var id = $(this).val();

        // alert(id);


        if (id != '')

        {

            $.ajax({

                url: "getSubcat.php",

                method: "POST",

                data: {
                    name: id
                },

                success: function(data) {

                    console.log(data);

                    $("#subcategory").html(data);

                     



                }

            });

        }

    });

});
</script>
<script>
$(document).ready(function() {

    $("#subcategory").change(function() {
        var id = $(this).val();

        // alert(id);


        if (id != '')

        {

            $.ajax({

                url: "getChapter.php",

                method: "POST",

                data: {
                    name: id
                },

                success: function(data) {

                    console.log(data);

                    // $("#subcategory").html(data);

                     $("#chapter").val(data);



                }

            });

        }

    });

});
</script>