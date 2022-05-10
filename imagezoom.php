<?php include "header.php" ?>
<style>
    /* body {
        margin: 12% 30%;
        height: 450px;
        overflow: scroll;
        font-family: Arial, sans-serif;
        color: #333;
        background: #f4f4f4;
    } */

    #img-zoomer-box {
        width: 500px;
        height: auto;
        position: relative;
        margin-top: 10px;
    }

    #img-1 {
        width: 100%;
        height: auto;
    }

    #img-zoomer-box:hover,
    #img-zoomer-box:active {
        cursor: zoom-in;
        display: block;
    }

    #img-zoomer-box:hover #img-2,
    #img-zoomer-box:active #img-2 {
        opacity: 1;
    }

    #img-2 {
        width: 340px;
        height: 340px;
        background: url('https://image.made-in-china.com/44f3j00iLETnNsFEzgy/Manual-Hydraulic-Shop-Press-Mandrel-Presses-50t.jpg') no-repeat #FFF;
        box-shadow: 0 5px 10px -2px rgba(0, 0, 0, 0.3);
        pointer-events: none;
        position: absolute;
        opacity: 0;
        border: 4px solid whitesmoke;
        z-index: 99;
        border-radius: 100%;
        display: block;
        transition: opacity .2s;
    }
</style>
<section>
    <div class="container">
        <div>Roll over image to zoom in</div>
        <div id="img-zoomer-box">
            <img src="https://image.made-in-china.com/44f3j00iLETnNsFEzgy/Manual-Hydraulic-Shop-Press-Mandrel-Presses-50t.jpg" id="img-1" />
            <div id="img-2"></div>
        </div>
    </div>
</section>

<?php include "footer.php" ?>
<script>
    let zoomer = function() {
        document.querySelector('#img-zoomer-box')
            .addEventListener('mousemove', function(e) {

                let original = document.querySelector('#img-1'),
                    magnified = document.querySelector('#img-2'),
                    style = magnified.style,
                    x = e.pageX - this.offsetLeft,
                    y = e.pageY - this.offsetTop,
                    imgWidth = original.offsetWidth,
                    imgHeight = original.offsetHeight,
                    xperc = ((x / imgWidth) * 100),
                    yperc = ((y / imgHeight) * 100);

                //lets user scroll past right edge of image
                if (x > (.01 * imgWidth)) {
                    xperc += (.15 * xperc);
                };

                //lets user scroll past bottom edge of image
                if (y >= (.01 * imgHeight)) {
                    yperc += (.15 * yperc);
                };

                style.backgroundPositionX = (xperc - 9) + '%';
                style.backgroundPositionY = (yperc - 9) + '%';

                style.left = (x - 180) + 'px';
                style.top = (y - 180) + 'px';

            }, false);
    }();
</script>