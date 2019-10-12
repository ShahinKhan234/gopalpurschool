  <?php

   

            $selectPost = "SELECT * FROM post ORDER BY id DESC";
            $runPost = mysqli_query($conn,$selectPost);

         $row = mysqli_fetch_array($runPost);
                  $id = $row['id'];
                  $date = $row['date'];
                  $title = $row['title'];
                  $auther  = $row['auther'];
                  $images = $row['img'];
                  $post_data = $row['post_data'];
                  $status = $row['status'];





?>
  <div class="col-md-3">

                	
                    <div class="list-group">
                      <a href="index.php" class="list-group-item active">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                      </a>
                      <a href="post.php" class="list-group-item">
                          <span class="badge"><?php echo mysqli_num_rows($runPost)?></span>
                          <i class="fa fa-file-text"></i> All Posts
                      </a>
                      <a href="notice.php" class="list-group-item">
                          <span class="badge">10</span>
                          <i class="fa fa-comment"></i> Notice Board  
                      </a>
                      <a href="categories.php" class="list-group-item">
                          <span class="badge">11</span>
                          <i class="fa fa-folder-open"></i> Categories
                      </a>
                      <a href="users.php" class="list-group-item">
                          <span class="badge">9</span>
                          <i class="fa fa-users"></i> Users
                      </a>
                    </div>
                </div>