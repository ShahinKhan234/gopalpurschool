<?php
	require_once("connect.php");
if (isset($_REQUEST["submit"])) {
	$username = $_REQUEST["username"];
	$pwd = $_REQUEST["pwd"];
	$encryptCode = md5(sha1($username.$pwd));
	$selectData = "SELECT * FROM users WHERE auth='$encryptCode'";
	$runSelectQuery = mysqli_query($conn,$selectData);
	if (mysqli_num_rows($runSelectQuery)==1) {
		setcookie("USr",$encryptCode,time() + (86400 * 7));
		header("location:index.php");
	}else{
		header("location:login.php?wrong_info");
	}

}




?>