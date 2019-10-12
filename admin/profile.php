<?php require_once('inc/top.php') ?>
<?php require_once('inc/nav.php') ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
       <?php
              if (isset($_COOKIE["USr"])) {
                            $cookieName = $_COOKIE["USr"];
                            $selectName = "SELECT * FROM users WHERE auth='$cookieName'";
                            $runName = mysqli_query($conn,$selectName);
                            while ($incData = mysqli_fetch_array($runName)) {
                            $fname = $incData["fname"];
                            $lname = $incData["lname"];
                            $email = $incData["email_addr"];

                          }
                        }
                        ?>
			<div class="proImg" style="text-align: center;">
					<img src="img/avatar.png" style="width: 150px;
border: 3px solid #35a6e8;
border-radius: 73px;
padding: 3px;">
		</div>
         <div class="proTitle" style="text-align: center;">
			<h1 class="titleName">Mr. <?php echo $fname.' '.$lname; ?></h1>
			<table class="table tableh-over table-striped">
                                <tbody>
                                 
                            <tr>
                                
                                <td>Full Name :</td>
                                <td><?php echo $fname.' '.$lname; ?> <a href="core_file/edit_name_core.php">Edit</a></td>
                                
                            </tr>
                            <tr>
                                
                                <td>E-Mail :</td>
                                <td><?php echo $email; ?><a href="core_file/edit_email_core.php">Edit</a></td>
                                
                            </tr>
                             <tr>
                                
                                <td>Password :</td>
                                <td><a href="change_pwd.php">Change Password</a></td>
                                
                            </tr>
                            
                        </tbody>
                    </table>
		</div>
		 </div>
		
	</div>
</div>

<?php require_once('inc/footer.php') ?>
<?php require_once('inc/bottom.php') ?>