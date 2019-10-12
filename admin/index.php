
<?php require_once('inc/top.php');?>




    <div id="wrapper">
        
<?php require_once('inc/nav.php') ?>
        <div class="container-fluid body-section">
            <div class="row">
              <?php require_once("inc/sidemenu.php"); ?>
                <div class="col-md-9">
                    <h1><i class="fas fa-tachometer-alt"></i> Dashboard <small>Statistics Overview</small></h1><hr>
                    <h2>Welcome,<a href="profile.php" style="text-decoration: none;">
                        <?php
                        if (isset($_COOKIE["USr"])) {
                            $cookieName = $_COOKIE["USr"];
                            $selectName = "SELECT * FROM users WHERE auth='$cookieName'";
                            $runName = mysqli_query($conn,$selectName);
                            while ($incData = mysqli_fetch_array($runName)) {
                               echo $fname = $incData["fname"]." ".$incData["lname"];
                            }
                        }
                        ?>
                    </a></h2>
                    <ol class="breadcrumb">
                      <li class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                    </ol>

                    <div class="row tag-boxes">
                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-comments fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">11</div>
                                            <div class="text-right">Notice</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="notice.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All Notice</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file-text fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge"><?php echo mysqli_num_rows($runPost)?></div>
                                            <div class="text-right">All Posts</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="post.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All Posts</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-users fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">30</div>
                                            <div class="text-right">All Users</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="users.php">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All Users</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-folder-open fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="text-right huge">9</div>
                                            <div class="text-right">All Categories</div>
                                        </div>
                                </div>
                                </div>
                                <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View All Categories</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><hr>

                    <h3>New Users</h3>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Date</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>28 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>babar786</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>28 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>babar786</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>28 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>babar786</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>28 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>babar786</td>
                                <td>Admin</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>28 Jan 2016</td>
                                <td>Muhammad Babar</td>
                                <td>babar786</td>
                                <td>Admin</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="users.php" class="btn btn-primary">View All Users</a><hr>
                    <h3>New Posts</h3>
        
             <table class="table">
                 <thead>
                            <tr>
                                <th>Sr #</th>
                                <th>Date</th>
                                <th>Post Title</th>
                                
                            </tr>
                        </thead>
                    <?php

            $selectPost = "SELECT * FROM post ORDER BY id DESC";
            $runPost = mysqli_query($conn,$selectPost);
            if (mysqli_num_rows($runPost) >0 ) {

           while ($row = mysqli_fetch_array($runPost)) {
                  $id = $row['id'];
                  $date = $row['date'];
                  $title = $row['title'];
                  $auther  = $row['auther'];
                  $images = $row['img'];
                  $post_data = $row['post_data'];
                  $status = $row['status'];


                  ?>
                    <tbody>
                            <tr>
                                <td>1</td>
                                <td><?php echo $date; ?></td>
                                <td><?php echo $title; ?></td>
                                
                            </tr>
                            
                        </tbody>
                  <?php

                }
            }

             ?>

                       
                      
                    </table>
                    <a href="post.php" class="btn btn-primary">View All Posts</a>
                </div>
            </div>
        </div>

       
<?php require_once('inc/footer.php') ?>


    </div>

  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
<?php require_once('inc/bottom.php') ?>