<?php include "header.php" ?>
<style>
  .table {
    border-collapse: separate;
  }

  .tr,
  td {
    border: solid 1px;
    margin: 10px;
  }

  .table p {
    color: black;
    font-size: 15px;
    font-weight: 500;
  }
</style>

<section style="margin-top:150px !important" id="about" class="about pb-5">
  <div class="container" data-aos="fade-up">
    <h1 class="main-heading mb-5 text-center">About Us</h1><br/>
    <div class="row">
    <?php
                    include "connect.php";
                            $i = 1;
                            $sql2 = "SELECT * FROM `about_us` WHERE `section_type`='section-1'";
                            $result1 = $conn->query($sql2);
                            while ($row = $result1->fetch_assoc()) {
                            ?>
      <div class="col-md-6">
        <img src="<?php echo $row['About_Image']?>"class="img-fluid" />
      </div>
      <div class="col-md-6">
        <p> <?php echo $row['paragraph1']?></p>
        <p> <?php echo $row['paragraph2']?></p>
        <p> <?php echo $row['paragraph3']?></p>
        <a><button class="btn btn-lg">Contact Now</button></a>
      </div>
      <?php 
      }
      ?>
    </div>
  </div>
</section>
<section  class="pt-5 pb-5" style="background-color:#F5F5F5">
  <div class="container">
    <h1 class="main-heading mb-5 text-center">Our Mission & Vision</h1>
    <div class="row">
   
      <div class="col-md-4">
      <?php
                    include "connect.php";
                            $i = 1;
                            $sql2 = "SELECT * FROM `about_us` WHERE `section_type`='section-2'";
                            $result1 = $conn->query($sql2);
                            while ($row = $result1->fetch_assoc()) {
                            ?>
        <div class="text-center mission-div">
          <img src="<?php echo $row['About_Image']?>" class="img-fluid" />
          <div style="z-index:9" class="mission-icon-div mx-auto">
            <i class="fa fa-3x fa-eye" aria-hidden="true"></i>
          </div>
          <br /><br /><br />
          <h2>Our Vision</h2>
          <p> <?php echo $row['paragraph1']?></p><br/>
        </div>
        <?php 
        }
        ?>
      </div>

      <div class="col-md-8">
      <?php
                    include "connect.php";
                            $i = 1;
                            $sql2 = "SELECT * FROM `about_us` WHERE `section_type`='section-3'";
                            $result1 = $conn->query($sql2);
                            $row = $result1->fetch_assoc(); 
                            $ddd=json_decode($row['Mission_points']);
                                
                            ?>
        <div class="text-center mission-div">
          <img style="height:140px;width:100%" src="<?php echo $row['About_Image']?>" class="img-fluid" />
          <div style="z-index:8;left:43%" class="mission-icon-div mx-auto">
            <i class="fa fa-3x fa-area-chart" aria-hidden="true"></i>
          </div>
          <br/><br/><br/>
          <h2>Our Mission</h2>
          <p><?php echo $row['paragraph1']?></p>
          <ul>
          <?php foreach($ddd as $list){?>
            <li style="text-align:left"><?php echo $list?></li>
                    <?php
         } 
         ?>
            
            
          </ul>
        </div>
    
      </div>
    </div>
  </div>
</section>

<!-------------------------- Bussiness Info ---------------------------->

<section id="about2" class="pt-5 pb-5">
  <div class="profile text-center" data-aos="fade-up">
    <h1 class="main-heading mb-3 text-center">BUSINESS PROFILE </h1>
  </div>
  <div>
    <div class="table-responsive">
      <table cellspacing="10" class="container table table-striped text-center business pt-5" data-aos="fade-down">
        </thead>
        <tbody>
          <tr data-aos="fade-left">
            <td>
              <h5>Business Trade Name : </h5>
            </td>
            <td>
              <p>EPITOME</p>
            </td>
          </tr>
          <tr data-aos="fade-right">
            <td>
              <h5>Business Address : </h5>
            </td>
            <td>
              <p>327, Rajaram Nagar Industrial estate , Udyambagh</p>
            </td>
          </tr>
          <tr data-aos="fade-left">
            <td>
              <h5>Nature of Business : </h5>
            </td>
            <td>
              <p>Manufacturer</p>
            </td>
          </tr>
          <tr data-aos="fade-right">
            <td>
              <h5>Plant and Office Area : </h5>
            </td>
            <td>
              <p>Plant : 1200 sq.ft / Office : 100 sq.ft</p>
            </td>
          </tr>
          <tr data-aos="fade-left">
            <td>
              <h5>Date Established : </h5>
            </td>
            <td>
              <p>December 2010</p>
            </td>
          </tr>
          <tr data-aos="fade-right">
            <td>
              <h5>Kind of Ownership : </h5>
            </td>
            <td>
              <p>Proprietorship </p>
            </td>
          </tr>
          <tr data-aos="fade-left">
            <td>
              <h5>Contact Numbers : </h5>
            </td>
            <td>
              <p>+91 7353717475</p>
            </td>
          </tr>
          <tr data-aos="fade-right">
            <td>
              <h5>Email : </h5>
            </td>
            <td>
              <p>sudhir.epitome@gmail.com</p>
            </td>
          </tr>
          <tr data-aos="fade-left">
            <td>
              <h5>Website : </h5>
            </td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section id="about3">
  <div class="container-fluid journey-container">
    <h1 class="main-heading mb-3 text-center">Our Journey </h1><br/>
    <div class="row">
      <div class="col-md-5">
      </div>
      <div class="col-md-7">
      <?php
                    include "connect.php";
                            $i = 1;
                            $sql2 = "SELECT * FROM `about_us` WHERE `section_type`='section-4'";
                            $result1 = $conn->query($sql2);
                            $row = $result1->fetch_assoc(); 
                            $ddd=json_decode($row['Mission_points']);
                                
                            ?>
        <ul>
        <?php foreach($ddd as $list){?>
            <li style="text-align:left"><?php echo $list?></li>
                    <?php
         } 
         ?>
          <!-- <li>(2006-2007) Selected In campus for International Tractors Limited (Sonalika Tractors),
            Hoshiarpur, Punjab. Worked as Graduate Engineer Trainee (GET) in sales and service
            having experience in assembly line, development with problems faced in filed. Also
            worked in sales for appointing dealers throughout Karnataka and making understand
            use of Sonalika Tractorts. Promoted for TE (Territory Engineer) in six months for handling
            field problems and the same to resolve with R&D in plant.</li>
          <li>(2007-2008) Left Sonalika Tractors after a year completion and joined as Design
            Engineer at Servocontrols India Pvt. Ltd. Belgaum. Karnataka. Worked with hydraulic
            system design with the usage of screw in cartridge Manufactured by Hydra force, UK.
            Which is used as backbone of all automation industry</li>
          <li>(2007-2008) Left Sonalika Tractors after a year completion and joined as Design
            Engineer at Servocontrols India Pvt. Ltd. Belgaum. Karnataka. Worked with hydraulic
            system design with the usage of screw in cartridge Manufactured by Hydra force, UK.
            Which is used as backbone of all automation industry</li>
          <li>(2007-2008) Left Sonalika Tractors after a year completion and joined as Design
            Engineer at Servocontrols India Pvt. Ltd. Belgaum. Karnataka. Worked with hydraulic
            system design with the usage of screw in cartridge Manufactured by Hydra force, UK.
            Which is used as backbone of all automation industry</li>
          <li>Uniquely Worked on Design, Development and Manufacturing of following Mobile
            hydraulic valves,jacks,hydraulic cylinder</li> -->
        </ul>
        
      </div>
    </div>
  </div>
</section>
<!----------------------- End Bussiness Info ------------------------------->
<?php include "footer.php" ?>