<?php
require_once("../connect.php");
if (isset($_REQUEST["submit"])) {
	 $oldPwd = $_REQUEST["oldPwd"];
	 $newPwd = $_REQUEST["newPwd"];
	 $cfmPwd = $_REQUEST["cfmPwd"];
	 $encryptPwd = md5(sha1($oldPwd));

	 $getCookie = $_COOKIE["USr"];

	 $selectdata = "SELECT * FROM users WHERE auth='$getCookie'";
	 $runSelectData = mysqli_query($conn,$selectdata);
	 if ($runSelectData==true) {
	 	while ($data = mysqli_fetch_array($runSelectData)) {
	 		$incpwd = $data["usr_pwd"];
	 		$email = $data["email_addr"];
	 		$auth = $data["auth"];
	 		$id = $data["id"];
	 	}
	 }
	 if ($encryptPwd==$incpwd && $newPwd==$cfmPwd) {
	 	$haspwd = md5(sha1($cfmPwd));
	 	$encryptAuthMaking = md5(sha1($email.$cfmPwd));
	  $updatePwd = "UPDATE users SET auth='$encryptAuthMaking', usr_pwd='$haspwd' WHERE id='$id'";
	  $runUpdate = mysqli_query($conn,$updatePwd);
	  header("location:../log_out.php");
	 }else{
	 	header("location:../change_pwd.php?don't_match");
	 }

}




?>