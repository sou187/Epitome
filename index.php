<?php 
include "header.php";
include "connect.php";
?>
<!-- ======= Hero-Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="1200" class="carousel slide carousel-fade mt-2" data-bs-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
        <?php 
            $i=0;
             $class_array=['active'];
            $sql = "SELECT * FROM `slider`";
             $res = $conn->query($sql);
            while ($row = $res->fetch_assoc()) {
            ?>
         <div class="carousel-item <?php echo $class_array[$i] ?>" style="background-image:url('<?php echo $row['slider_img']?>')" class="img-fluid">
                <div class="container">
                    <h2><?php echo $row['slider_title']?></h2>
                    <!-- <a href="#" class="btn-get-started scrollto">Read More</a> -->
                </div>
            </div> 
            <?php $i++;
        } 
        ?>
            
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
    </div>
</section><!-- End Hero -->
<div class="container text-center pt-5 pb-5">
    <h1 class="main-heading">Company History and its Operation</h1>
    <p>Popularly know by Epitome founded in December 2012 by an enthusiased
        mechanical engineer Mr. Sudhir Patil. It is known for its abilities in Designing,
        Manufacturing of complex Hydraulic Valves, Systems and Hydraulic Cylinders.</p>
    <p>We are an engineering company with qualified professionals with experience in
        design, manufacturing, installation. We work closely with customers to understand the
        Company History and its Operation
        design, manufacturing, installation. We work closely with customers to understand the
        pain areas, define, design, and erect hydraulic systems.</p>
</div>
<main id="main">
    <!-- ======= Services Section ======= -->
    <div class="container-fluid product-container mb-5">
        <div class="container text-center">
            <h1 class="main-heading mb-2">Products Category</h1>
            <br />
            <div class="mt-5 row">
            <?php
                $sql = "SELECT * FROM `product_category`";
                $res = $conn->query($sql);
                while($row = $res->fetch_assoc()){
                ?>
                <div class="col-md-4 my-4">
                    <div class="product-division text-center">
                        <div class="product-image">
                            <img class="img-fluid" src="<?php echo $row['cat_img']?>" />
                        </div><br />
                        <div class="product-description mx-auto">
                            <h4><?php echo $row['categories']?></h4>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!--- ======= Cta Section ======= --->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">
            <div class="text-center">
                <h3>Need help now?</h3>
                <p>If You Have Any Queries Feel Free to Contact us, </p>
                <p><span>CONTACT NO :</span> +91 7353717475
                <p>
                    <a class="cta-btn scrollto" href="enquery.php"> <span>--></span> Enquery Here</a>
            </div>
        </div>
    </section><!-- End Cta Section -->
    <!-- future plan -->


    <!-- <section> -->
    <div class="container-fluid future-plan">
        <div class="text-center">
            <h3 class="main-heading">OUR FUTURE PRODUCT</h3>
        </div>
        <div class="row py-2" data-aos="zoom-in">
            <div class="col-md-6 future-div1 text-center">
                <?php
                $sql = "SELECT * FROM `future_product` ORDER BY `fproduct_id` DESC LIMIT 1";
                $res = $conn->query($sql);
                $row = $res->fetch_assoc();
                ?>
                <h2><?php echo $row['product_name'] ?></h2>
                <p class="m-4 mb-5"><?php echo $row['description'] ?></p>
                <button class="btn btn-lg">Contact Now</button>
            </div>
            <div class="col-md-6 future-div2 text-center">
                <img style="height:500px" src="<?php echo $row['product_img'] ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <!-- </section> -->

    <!-- End future plan-->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery pt-5 pb-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3 class="main-heading">PRODUCTS GALLERY</h3>
                <p>Epitome Hydraulic product manufacturer of Hydraulic Tail Stock, Epitome is a proprietorship
                    limited company</p>
            </div>
            <div class="gallery-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <?php
                    $sql = "SELECT * FROM `productgallery`";
                    $res = $conn->query($sql);
                    while ($row = $res->fetch_assoc()) {
                    ?>
                        <div class="swiper-slide product-slider text-center">
                            <a class="gallery-lightbox" href="assets/img/gallery/slide1-removebg-preview.png">
                                <img src="<?php echo $row['photo'] ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                    <?php } ?>
                    <!-- <div class="swiper-slide product-slider">
                        <a class="gallery-lightbox" href="assets/img/gallery/slide2-removebg-preview.png"><img style="height:200px;width:200px" src="assets/img/gallery/slide2-removebg-preview.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide product-slider">
                        <a class="gallery-lightbox" href="assets/img/gallery/slide3.png"><img src="assets/img/gallery/slide3.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide product-slider">
                        <a class="gallery-lightbox" href="assets/img/gallery/slide4.png"><img style="height:200px;width:200px" src="assets/img/gallery/slide4.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide product-slider">
                        <a class="gallery-lightbox" href="assets/img/gallery/slide5.png"><img style="height:200px;width:200px" src="assets/img/gallery/slide2 (3).png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide product-slider">
                        <a class="gallery-lightbox" href="assets/img/gallery/slide6.png"><img style="height:200px;width:200px" src="assets/img/gallery/slide6.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide product-slider">
                        <a class="gallery-lightbox" href="assets/img/gallery/slide7-removebg-preview.png"><img style="height:200px;width:200px" src="assets/img/gallery/slide7-removebg-preview.png" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide product-slider">
                        <a class="gallery-lightbox" href="assets/img/gallery/slide8-removebg-preview.png"><img style="height:200px;width:200px" src="assets/img/gallery/slide8-removebg-preview.png" class="img-fluid" alt="">
                        </a>
                    </div> -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Gallery Section -->

    <!-- <section>
        <div class="stands">
            <div>
                <h1 class="text-center  section-title" data-aos="fade-up">PURPOSE, SCOPE AND APPLICABLE STANDARDS</h1>
            </div>
            <div class="container stand">
                <h4>Purpose and Scope</h4>
                <p>
                    This Integrated Quality and Environmental Management System Manual
                    documents EPITOME quality and environmental systems as a company engaged in the
                    manufacturing industry, to demonstrate the company’s commitment to consistently
                    provide products and services that meet customer and regulatory requirements,
                    prevent pollution, and continual improvement.
                    This manual establishes compliance with the standards listed in the Applicable
                    Standards section of this manual.
                </p>
            </div>
            <div class="container scope">
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h3>Applied Standards</h3>
                        <ul>
                            <li>Applied Standards</li>
                            <li>ISO 14001: 2004, Environmental Management Systems</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/img/scope.jpg" style="width:400px; height:200px;">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section>
        <div class="container-fluid purpose-section">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="color:#FFF;font-size:50px;margin-top:50px;line-height:80px" class="main-heading">PURPOSE, SCOPE AND APPLICABLE STANDARDS</h3>
                </div>
                <div class="col-md-6">
                    <div class="purpose-div">
                        <p>This Integrated Quality and Environmental Management System Manual
                            documents EPITOME quality and environmental systems as a company engaged in the
                            manufacturing industry, to demonstrate the company’s commitment to consistently
                            provide products and services that meet customer and regulatory requirements,
                            prevent pollution, and continual improvement.</p>
                        <p>This manual establishes compliance with the standards listed in the Applicable
                            Standards section of this manual.</p>
                        <h3>&#9733; Applied Standards</h3>
                        <li>ISO 9001: 2000, Quality Management System</li>
                        <li>ISO 14001: 2004, Environmental Management Systems
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials pt-5 pb-5">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 class="main-heading">MAJOR CUSTOMERS</h2>
            </div>
            <hr />
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php
                    $sql = "SELECT * FROM `client`";
                    $res = $conn->query($sql);
                    while ($row = $res->fetch_assoc()) {
                    ?>
                        <div class="swiper-slide">
                            <div class="text-center">
                                <img src="<?php echo $row['photo'] ?>" class="img-fluid" alt="">
                            </div>
                        </div><!-- End testimonial item -->
                    <?php } ?>
                    <!-- <div class="swiper-slide">
                        <div class="text-center">
                            <img src="assets/img/logo/logo2_180x150.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-center">
                            <img src="assets/img/logo/logo3_180x150.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="text-center">
                            <img src="assets/img/logo/logo4_180x150.png " class="img-fluid" alt="">
                        </div>
                    </div> -->
                </div>
                <hr />
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->
<?php include "footer.php" ?>