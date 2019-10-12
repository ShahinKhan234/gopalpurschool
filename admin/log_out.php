<?php

if (isset($_COOKIE["USr"])) {
	setcookie("USr",$encryptCode,time() + (86400 * 7));
	header("location:login.php");
}

?>