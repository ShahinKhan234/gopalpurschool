<?php require_once('inc/top.php') ?>
<?php require_once('inc/nav.php') ?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<br>

			<form action="core_file/signup_core.php" method="POST">
	<div class="container-fluid">
		<div class="row">
			<div class="well center-block">
				<div class="well-header">
					<h3 class="text-center text-primary"> Register Here! </h3>
					
					<hr>
					<?php
			if (isset($_REQUEST["registrationCompleted"])) {
				echo "<b style='color:green'>Registration Successfull!</b>";
				
				}elseif (isset($_REQUEST["have_email"])) {
					echo "<b style='color:red'>Email address already exists</b>";
				
			 }
			?>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<input type="text" placeholder="First Name" name="fname" class="form-control">
								
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-user"></i>
								</div>
								<input type="text" placeholder="Last Name" name="lname" class="form-control">
							</div>
						</div>
					</div>
				</div>

					<div class="row">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-envelope"></i>
								</div>
								<input type="email" class="form-control" name="email" placeholder="E-Mail">
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<div class="input-group">
								<div class="input-group-addon">
									<i class="glyphicon glyphicon-lock"></i>
								</div>
								<input type="password" minlength="4" maxlength="20" placeholder="Password" name="pwd" class="form-control">
							</div>
						</div>
					</div>
				</div>

				
				


				<div class="row widget" style="text-align: center;">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<input  type="submit" value="Sign Up" name="submit" class="btn btn-primary">
					</div>
				</div>
			</div>
		</div>
	</div>


</form>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>


<?php require_once('inc/footer.php') ?>
<?php require_once('inc/bottom.php') ?>