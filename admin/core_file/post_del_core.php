<?php 
require_once('../connect.php');

if (isset($_REQUEST['id'])) {
	 $id = $_REQUEST['id'];

	 $delData = "DELETE FROM post WHERE id = '$id'";

   $runQuery = mysqli_query($conn,$delData);
   if ($runQuery==true) {
   	header("location:../post.php?postdel");
   }

}




?>