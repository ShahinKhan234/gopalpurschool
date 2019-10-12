<?php
require_once('../connect.php');

if (isset($_REQUEST['updatePost'])) {
	 $title = $_REQUEST['title'];
	 $status = $_REQUEST['status'];
	 $id = $_REQUEST['id'];

	 $upadtePost = "UPDATE post SET title = '$title', post_data= '$status' WHERE id = '$id'";

	 $runQuery = mysqli_query($conn,$upadtePost);
	 if ($runQuery==true) {
	 	header('location:../post.php?updated');
	 }


}






?>