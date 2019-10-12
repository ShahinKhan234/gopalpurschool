<?php

$dbUser = "Shahin";
$dbPwd = "1234";


$userName = htmlentities($_REQUEST['uName']);
$userPwd = htmlentities($_REQUEST['uPwd']);


if ($dbUser==$userName && $dbPwd==$userPwd) {
	echo "You are successfully logged!";
}else{
	echo "User name or password wrong!";
}






?>