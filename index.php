  
  <?php require_once('admin/connect.php');?>
	<?php require_once("inc/top.php") ?>
    <?php require_once("inc/nav.php") ?>

   
      <div class="latest"> 
    <div class="container marqueeCon">
        <div class="row">
            <marquee behavior="scroll" scrollamount="2" direction="left" onmouseover="this.stop();" onmouseout="this.start();"><h1>ওয়েবসাইটের কাজ চলছে....তাই সম্পূর্ন সেবা পেতে অপেক্ষা করুন</h1></marquee>
        </div>
    </div>
    </div> 

<section class="sliderSec">
   
</section>



   <section>
      <div class="container">
          <div class="row">
              <div class="col-md-3">

                 <div class="container fixtOption">
                  <div class="headAdvice borderTopBottom">
                      <h2>প্রধান শিক্ষকের বাণী</h2>
                      <h5>Gopalpur Hamidia High School.</h5>
                      <p>বিশ্বায়নের এই যুগে তথ্য ও প্রযুক্তি জ্ঞান সমৃদ্ধ জাতির কোন বিকল্প নেই। বর্তমান সরকারের ভবিষ্যত  <a href="headadvice.php">আরো পড়ুন...</a></p>
                     
                  </div>

                  <div class="importantLink borderTopBottom">
                      <h4 class="text-center">Quick Link</h4>
                      
                      <ul class="linkImport">
                        <li><a href="404.php">Head Master Corner</a></li>
                         <li><a href="404.php">Student Corner</a></li>
                          <li><a href="teachers.php">Teachers Corner</a></li>
                          <li><a href="form.php">Form Download</a></li>
                          
                          
                         

                      </ul>
                     
                  </div>

                  
                </div>
                 <div class="importantLink borderTopBottom">
                      <h4 class="text-center">খবরের কাগজ</h4>
                      <ul>
                        <li><a href="https://www.kalerkantho.com/">কালের কন্ঠ</a></li>
                         <li><a href="https://www.prothomalo.com/">দৈনিক প্রথম আলো</a></li>
                          <li><a href="http://www.dailyjanakantha.com/">দৈনিক জনকণ্ঠ</a></li>
                          <li><a href="http://www.bangladesh.gov.bd"></a>নিউজ 24</li>
                          <li><a href="https://pmo.gov.bd">দৈনিক নয়া দিগন্ত</a></li>
                          <li><a href="https://moedu.gov.bd">দৈনিক ইত্তেফাক</a></li>
                          <li><a href="http://www.jaijaidin.com/">দৈনিক যায়যায় দিন</a></li>

                      </ul>
                  </div>
    
                  
              </div>

              <div class="col-md-6">
                
                
                  


<?php 

$selectPost = "SELECT * FROM post WHERE status='publish' ORDER BY id DESC";
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
<div class="post" style="border: 1px solid #2179106b; padding: 15px; background: #fefefe">

  <h2 style="color: #fefefe; background-image: linear-gradient(#1f9122, #08680b 60%, #245e26);
background-repeat: no-repeat; padding: 10px; margin: 0px"><?php echo $auther; ?></h2>

  <h4 style="color: green; display: inline-block; margin-top: 18px; margin-bottom: 0px;"><?php echo $title; ?></h4>
  <p style="text-align: end"><?php echo $date; ?></p>
  <hr>
 
  <p class="postContent">
    
<p><?php echo $post_data; ?></p>


  </p>
  <br>
  <img width="100%" height="100%" alt="No Picture" src="images/<?php echo $images?>">
</div>
<br>



<?php



  }
  
}else{
  echo "<center><h3>No Post Available!</h3></center>";
}

 ?>










          


              </div>

              <div class="col-md-3 ">



                <div class="widget">
                  
<p id="date" class="borderTopBottom"></p>
<div id="clock">
  <span class="unit" id="hours"></span>
  <span class="unit" id="minutes"></span>
  <span class="unit" id="seconds"></span>
  <span class="unit" id="ampm"></span>
</div>


    </div>
               

                <div class="routine borderTopBottom">
                <h3>ক্লাস রুটিন</h3>
                      <ul>
                          <li><a href="">ষষ্ঠ শ্রেণির ক্লাস রুটিন</a></li>
                          <li><a href="">সপ্তম শ্রেণির ক্লাস রুটিন</a></li>
                          <li><a href="">অষ্টম শ্রেণির ক্লাস রুটিন</a></li>
                          <li><a href="">নবম শ্রেণির ক্লাস রুটিন</a></li>
                          <li><a href="">দশম শ্রেণির ক্লাস রুটিন</a></li>

                      </ul>
                  </div>


                  <div class="importantLink borderTopBottom">
                      <h4 class="text-center">প্রয়োজনীয় ওয়েবসাইট</h4>
                      <ul>
                        <li><a href="http://www.dainikshiksha.com">দৈনিক শিক্ষা</a></li>
                         <li><a href="https://www.teachers.gov.bd">শিক্ষক বাতায়ন</a></li>
                          <li><a href="http://www.educationboard.gov.bd">Bangladesh Education Board</a></li>
                          <li><a href="http://www.bangladesh.gov.bd">বাংলাদেশ সরকার/বাংলাদেশ</a></li>
                          <li><a href="https://pmo.gov.bd">প্রধানমন্ত্রীর কার্যালয়</a></li>
                          <li><a href="https://moedu.gov.bd">শিক্ষা মন্ত্রণালয়</a></li>
                          <li><a href="http://www.cga.gov.bd">সিজিএ ওয়েব সাইট-বিভিন্ন ফরম</a></li>

                      </ul>
                  </div>

                  


              </div>

          </div>
      </div> 

   </section>


                <script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

 <?php require_once("inc/footer.php") ?>
  <?php require_once("inc/bottom.php") ?>