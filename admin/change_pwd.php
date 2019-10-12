<?php require_once('inc/top.php') ?>
<?php require_once('inc/nav.php') ?>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<br>
			<br>

			<form action="core_file/change_pwd_core.php" method="POST">
	<div class="container-fluid">
		<div class="row">
			<div class="well center-block">
				<div class="well-header">
					
				 <?php
				  if (isset($_REQUEST["don't_match"])) {
                       echo "<strong style='color:red'>Password Don't Match!</strong>";
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
								<input type="text" placeholder="Old Password" name="oldPwd" class="form-control">
								
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
								<input type="text" placeholder="New Password" name="newPwd" class="form-control">
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
								<input type="text" class="form-control" name="cfmPwd" placeholder="Confirm Password">
							</div>
						</div>
					</div>
				</div>

			
				
				


				<div class="row widget" style="text-align: center;">
					<div class="col-md-12 col-xs-12 col-sm-12">
						<input  type="submit" value="Save Change" name="submit" class="btn btn-primary">
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