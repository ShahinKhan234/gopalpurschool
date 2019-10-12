<?php require_once('inc/top.php') ?>
<?php require_once('inc/nav.php') ?>
<?php require_once('connect.php') ?>


<?php

if (isset($_REQUEST['editId'])) {
	
	$editId = $_REQUEST['editId'];

	$selectData = "SELECT * FROM post WHERE id= $editId";
	$runQuery = mysqli_query($conn,$selectData);
	while ($row = mysqli_fetch_array($runQuery)) {
				  $id = $row['id'];
				  $date = $row['date'];
				  $title = $row['title'];
				  $auther  = $row['auther'];
				  $images = $row['img'];
				  $post_data = $row['post_data'];
				  $status = $row['status'];
	}

}


?>

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
				<form enctype="multipart/form-data" method="POST" action="core_file/post_edit_core.php">


  <div class="form-group">
    <label >Title</label>
  
    <input type="text" class="form-control" name="title" value="<?php echo $title ?>" placeholder="Title">
  </div>
  <div class="form-group">
  	   <label>Status</label>
    <input type="text" class="form-control" name="status" value="<?php echo $post_data ?>" placeholder="status">
</div>
<div class="form-group">
  	   
    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" placeholder="status">
</div>

 <!-- <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>

    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
  </div> -->
  <button type="submit" name="updatePost" class="btn btn-primary">Update</button>

 
</form>

		</div>
		<div class="col-md-3"></div>
	</div>
</div>











<?php require_once('inc/footer.php') ?>
<?php require_once('inc/bottom.php') ?>