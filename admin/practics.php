<!DOCTYPE html>
<html>
<head>
	<title>Ajax Tutorial</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>


<form action="" onsubmit="return false;" method="POST">

<input type="tex" name="username" id="usrnm">
<input type="password" name="password" id="pwd">
<input type="submit" name="submitButton" value="Log In" id="submitButtonId">
<input type="readonly" id="readonlyId" name="">
</form>

<div id="spinner">
	
</div>



<script type="text/javascript">

$(document).ready(function(){


	$("#submitButtonId").on("click",function(){

		var userName = $("input#usrnm").val();
		var userPwd = $("input#pwd").val();
		$("#spinner").html('<img src="img/spinner.gif">');

		setTimeout(function(){

			$.post("login_verification_ajax_core.php",{uName: userName, uPwd: userPwd},function(mydata){

			$("#readonlyId").val("You are successfully logged.");
			$("#spinner img").remove();
			
		});
		},3000);

	});

});

</script>





</body>
</html>


