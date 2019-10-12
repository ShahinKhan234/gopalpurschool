<?php 

require_once("../connect.php");

if (isset($_REQUEST['submit'])) {
	if (empty($_REQUEST['title'])) {
		header('location:../post.php?trequire');
	}else{

		 $title = htmlentities($_REQUEST['title']);
		 $status = htmlentities($_REQUEST['status']);
		 $imagesName = $_FILES['image'] ['name'];
		 $imgtmpName = $_FILES['image'] ['tmp_name'];
		 $Flocation = '../../images/';
		 move_uploaded_file($imgtmpName,$Flocation.$imagesName);


     	 
    

$insertPost = "INSERT INTO post (title, post_data, img) VALUES ('$title', '$status', '$imagesName')";

$runInsert = mysqli_query($conn,$insertPost);
if ($runInsert==true) {
	
	header("location:../post.php?inserted");

}else{
	echo "Data Not Inserted!";
}

	}
		

}

?>