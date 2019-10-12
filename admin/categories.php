<?php require_once('inc/top.php') ?>

    <div id="wrapper">
       <?php require_once('inc/nav.php') ?>

        <div class="container-fluid body-section">
            <div class="row">
              <?php require_once("inc/sidemenu.php"); ?>
                <div class="col-md-9">
                    <h1><i class="fa fa-folder-open"></i> Categories <small>Different Categories</small></h1><hr>
                    <ol class="breadcrumb">
                        <li><a href="index.php"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                      <li class="active"><i class="fa fa-folder-open"></i> Categories</li>
                    </ol>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <form action="">
                                <div class="form-group">
                                    <label for="category">Category Name:</label>
                                    <input type="text" placeholder="Category Name" class="form-control">
                                </div>
                                <input type="submit" value="Add Category" name="submit" class="btn btn-primary">
                            </form>
                        </div>
                        <div class="col-md-6"><br>
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sr #</th>
                                        <th>Category Name</th>
                                        <th>Posts</th>
                                        <th>Edit</th>
                                        <th>Del</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Video Tutorials</td>
                                        <td>12</td>
                                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        <td><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Video Tutorials</td>
                                        <td>12</td>
                                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        <td><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Video Tutorials</td>
                                        <td>12</td>
                                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        <td><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Video Tutorials</td>
                                        <td>12</td>
                                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        <td><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Video Tutorials</td>
                                        <td>12</td>
                                        <td><a href="#"><i class="fa fa-pencil"></i></a></td>
                                        <td><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

           <?php require_once('inc/footer.php') ?>
<?php require_once('inc/bottom.php') ?>
    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>