<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
.mySlides {
  display: none;
}
.cursor {
  cursor: pointer;
}
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}
.active,
.demo:hover {
  opacity: 1;
}
</style>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class="column">
                <img style="width:100%" class="demo cursor img-fluid" src="https://media.istockphoto.com/photos/hydraulic-cylinders-picture-id981097104?k=20&m=981097104&s=612x612&w=0&h=EAATgKeCx6NE0l0I1Bn63zFAe24wgPmPe85_ta8Rmzk=" onclick="currentSlide(1)" alt="The Woods">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://4.imimg.com/data4/PX/XG/ANDROID-58624139/product-500x500.jpeg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://www.thespruce.com/thmb/0Bp2KJiGOihWmmTL39LZp98KlSI=/3000x1999/filters:fill(auto,1)/what-is-hydraulic-cement-uses-and-how-to-apply-845076_FINAL-a074c1320bdb44d0a190384cdefe3777.png" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://www.thespruce.com/thmb/0Bp2KJiGOihWmmTL39LZp98KlSI=/3000x1999/filters:fill(auto,1)/what-is-hydraulic-cement-uses-and-how-to-apply-845076_FINAL-a074c1320bdb44d0a190384cdefe3777.png" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://thumbs.dreamstime.com/b/hydraulic-pressure-gauge-27918775.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
            </div>
            <div class="column">
                <img class="demo cursor" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE-eiGETGx_teY62ThrFcz3dQmX2yUnLOjKA&usqp=CAU" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
            </div>
        </div>
        <div class="col-md-10">
            <div class="container mx-5">
                <div class="mySlides">
                    <div class="numbertext">1 / 6</div>
                    <img class="img-fluid" src="https://media.istockphoto.com/photos/hydraulic-cylinders-picture-id981097104?k=20&m=981097104&s=612x612&w=0&h=EAATgKeCx6NE0l0I1Bn63zFAe24wgPmPe85_ta8Rmzk=" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">2 / 6</div>
                    <img src="https://4.imimg.com/data4/PX/XG/ANDROID-58624139/product-500x500.jpeg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">3 / 6</div>
                    <img src="https://www.thespruce.com/thmb/0Bp2KJiGOihWmmTL39LZp98KlSI=/3000x1999/filters:fill(auto,1)/what-is-hydraulic-cement-uses-and-how-to-apply-845076_FINAL-a074c1320bdb44d0a190384cdefe3777.png" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">4 / 6</div>
                    <img src="https://www.thespruce.com/thmb/0Bp2KJiGOihWmmTL39LZp98KlSI=/3000x1999/filters:fill(auto,1)/what-is-hydraulic-cement-uses-and-how-to-apply-845076_FINAL-a074c1320bdb44d0a190384cdefe3777.png" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">5 / 6</div>
                    <img src="https://thumbs.dreamstime.com/b/hydraulic-pressure-gauge-27918775.jpg" style="width:100%">
                </div>
                <div class="mySlides">
                    <div class="numbertext">6 / 6</div>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTE-eiGETGx_teY62ThrFcz3dQmX2yUnLOjKA&usqp=CAU" style="width:100%">
                </div>
                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>
                <div class="caption-container">
                    <p id="caption"></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
</body>

</html>