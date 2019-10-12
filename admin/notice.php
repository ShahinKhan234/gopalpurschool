<?php


?>
<?php require_once('inc/top.php') ?>
<?php require_once('inc/nav.php') ?>



<div class="container">
	<div class="row">
		<div class="col-md-6">
      <?php
      if (isset($_REQUEST["success"])) {
        echo '<div class="alert alert-success">
  <strong>Success!</strong> Data has been successful added.
</div>';
      }

    ?>
			<form  method="POST" action="core_file/notice_core.php">
  
  <div class="form-group">
    <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Title">
  </div>
  <div class="form-group">
       <label>Status</label>
    <textarea class="form-control" cols="30" rows="10" name="status" placeholder="What's On Your Mind......."></textarea>
</div>

 
  <button type="submit" name="submit" class="btn btn-primary">Upload Notice</button>

 
</form>
		</div>
		<div  class="col-md-6">
			<div class="noticeSidebar">
        <div class="noticeList">

         
          <table class="table table-bordered">

  <thead>
    <tr>
      
      <th scope="col">তারিখ</th>
      <th scope="col">নোটিশ তালিকা</th>
      
    </tr>
  </thead>
  <tbody>
      <?php
          mysqli_set_charset($conn,"utf8");
          $selectNotice = "SELECT * FROM notice";
          $runNotice = mysqli_query($conn,$selectNotice);
          if ($runNotice==true) {
            while ($noticedata = mysqli_fetch_array($runNotice)) {
              $title = $noticedata["title"];
              $details = $noticedata["title"];
              $time = $noticedata["time"];
              $id = $noticedata["id"];


              ?>
               <tr>
      
      <td><?php echo $time; ?></td>
      <td><a href="noticedata.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></td>
     
    </tr>
   
   <?php

            }
          }
          ?>
   
  </tbody>
</table>
        </div>
      </div>
		</div>
	</div>
</div>











 <?php require_once("inc/footer.php") ?>
  <?php require_once("inc/bottom.php") ?>