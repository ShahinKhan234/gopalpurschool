
<?php require_once('inc/top.php') ?>
<?php require_once('inc/nav.php') ?>





<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form enctype="multipart/form-data" method="POST" action="core_file/post_data_core.php">
  <?php 
	if (isset($_GET['inserted'])) {
	echo '<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Post has been successfully added.</div>';
	}elseif (isset($_GET['updated'])) {
		echo '<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Post has been successfully updated.</div>';
	}

	?>

  <div class="form-group">
    <label >Title</label>
    <?php 
	if (isset($_GET['trequire'])) {
	echo "<p style='color:red;'>Title is required*</p>";
	}

	?>
    <input type="text" class="form-control" name="title" placeholder="Title">
  </div>
  <div class="form-group">
  	   <label>Status</label>
    <textarea  class="form-control" cols="30" rows="10" name="status" placeholder="What's On Your Mind......."></textarea>
</div>

 <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>

    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Post</button>

 
</form>
		</div>
		<div class="col-md-6">
			 <?php 
	if (isset($_GET['postdel'])) {
	echo '<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Post has been successfully delete.</div>';
	}

	?>
			 <table class="table">
			 	 <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Date</th>
                                <th>Post Title</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
			 		<?php

			$selectPost = "SELECT * FROM post ORDER BY id DESC";
			$runPost = mysqli_query($conn,$selectPost);
			if (mysqli_num_rows($runPost) >0 ) {

		   while ($row = mysqli_fetch_array($runPost)) {
				  $id = $row['id'];
				  $date = $row['date'];
				  $title = $row['title'];
				  $auther  = $row['auther'];
				  $images = $row['img'];
				  $post_data = $row['post_data'];
				  $status = $row['status'];


				  ?>
				    <tbody>
                            <tr>
                                <td>1</td>
                                <td><?php echo $date; ?></td>
                                <td><?php echo $title; ?></td>
                                <td><center><a href="editpost.php?editId=<?php echo $id; ?>"><i class="fas fa-edit"></i></a></center></td>
                                <td><center><a onclick="return confirm('are you sure?')" href="core_file/post_del_core.php?id=<?php echo $id; ?>"><i class="fas fa-trash"></i></a></center></td>
                            </tr>
                            
                        </tbody>
				  <?php

				}
			}

			 ?>

                       
                      
                    </table>
			

		</div>
	</div>
</div>



		



<?php require_once('inc/footer.php') ?>
<?php require_once('inc/bottom.php') ?>