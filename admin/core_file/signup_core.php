<?php
require_once("../connect.php");
if (isset($_REQUEST["submit"])) {
	$fname = $_REQUEST["fname"];
	$lname = $_REQUEST["lname"];
	$email = $_REQUEST["email"];
	$pwd = $_REQUEST["pwd"];
	$encryptPwd = md5(sha1($pwd));
	$authCode = md5(sha1($email.$pwd));

	$checkedData = "SELECT * FROM users WHERE email_addr='$email'";
	$runCheckData = mysqli_query($conn,$checkedData);
	if ($runCheckData==true) {
		while ($incData = mysqli_fetch_array($runCheckData)) {
			$incEmail = $incData["email_addr"];
		}
	}
	if ($email==$incEmail) {
		header("location:../signup.php?have_email");
	}else{
		 $insertQuery = "INSERT INTO users (fname, lname, email_addr, auth, usr_pwd) VALUES ('$fname','$lname','$email','$authCode','$encryptPwd')";
	$runQuery = mysqli_query($conn,$insertQuery);
	if ($runQuery==true) {
		header("location:../signup.php?registrationCompleted");
	}
	}
	

}
?>

