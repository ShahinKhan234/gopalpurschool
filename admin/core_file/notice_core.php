<?php
require_once("../connect.php");
if (isset($_REQUEST["submit"])) {
	$title = htmlentities($_REQUEST["title"]);
	$status = htmlentities($_REQUEST["status"]);

	$insertData = "INSERT INTO notice (title, details) VALUES ('$title','$status')";
	$runData = mysqli_query($conn,$insertData);
	if($runData=true){
		header("location:../notice.php?success");
	}
}

?>