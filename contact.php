<?php include "header.php" ?>
<!-- ======= Contact Section ======= -->
<section class="contact">
  <div class="container mt-5">
    <div class="section-title">
      <h2>Contact US</h2>
      <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
    </div>
  </div>
  <div>
    <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
  </div>
  <div class="container pt-5 pb-5">
    <div class="row mt-5">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-md-12">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>327, RAJARAM NAGAR INDUSTRIAL ESTATE , UDYAMBAGH<br>
                BELGAUM KARNATAKA 590008, INDIA</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>sudhir.epitome@gmail.com<br>sudhir.epitome@gmail.com</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box mt-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 7353717475<br>+91 7353717475</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <form action="" method="post" role="form" class="contact-form">
          <div class="row">
            <div class="col form-group mt-3">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
          </div>
          <div class="row">
            <div class="col form-group mt-3">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col form-group mt-3">
              <input type="text" class="form-control" name="mobile_no" id="mobile_no" placeholder="Your Mobile No" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div><br/>
          <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
        </form>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

<?php include "footer.php" ?>
<?php
include "connect.php";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile_no = $_POST['mobile_no'];
  $message = $_POST['message'];
  $sql = "INSERT INTO `contact`(`contact_id`, `name`, `email`, `mobile_no`, `message`) VALUES ('','$name','$email','$mobile_no','$message')";
  $result = $conn->query($sql);
  if ($result == TRUE) {
    echo "<script>alert('Query Sent successfully')</script>";
  }
}
?>