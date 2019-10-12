  <?php require_once("inc/top.php") ?>
    <?php require_once("inc/nav.php") ?>


<div class="container formContainer">
<div class="row">
  <div class="col-md-4">
    <div class="address borderTopBottom">
      <?php require_once("inc/type.php") ?>
   </div>

   
  </div>


  <div class="col-md-4 contactFrom borderTopBottom">
    <div class="form-area">  
        <form role="form">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary">Sent Message</button>
        </form>
    </div>
</div>

  <div class="col-md-4">
    <div class="address borderTopBottom">
      <p>স্কুলের নামঃ- গোপালপুর হামিদিয়া উচ্চ বিদ্যালয় ।</p>
      <p>ঠিকানাঃ- শাল্টিগোপালপুর, চৌপতিবাজার, মিঠাপুকুর, রংপুর ।</p>
      <p>ফোন নম্বরঃ- ০১৭০৪২১০৩৪৫</p>
      <p>ই-মেইলঃ- freelancershahin34@gmail.com</p>
    </div>
  </div>

<div class="container">
  
        <div class="contactMap">
        <h3>যেভাবে আসবেন</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.6480459086392!2d89.20519631461175!3d25.532668983741296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjXCsDMxJzU3LjYiTiA4OcKwMTInMjYuNiJF!5e1!3m2!1sen!2sbd!4v1566053246435!5m2!1sen!2sbd" width="100%" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
     
    </div>

</div>

</div>
<?php require_once("inc/footer.php") ?>
  <?php require_once("inc/bottom.php") ?>

