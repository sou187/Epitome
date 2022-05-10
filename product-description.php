<?php include "header.php" ?>
<style>
    /* Style the tab */
    .tab {
        float: left;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
        width: 10%;
        height: 80vh;
        overflow: scroll;
    }

    /* Style the buttons that are used to open the tab content */
    .tab button {
        display: block;
        background-color: inherit;
        color: black;
        padding: 22px 16px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;
        border: 1px solid #ccc;
        width: 90%;
        border-left: none;
        height: 80vh;
        display: none;
        padding: 10px 10px;
    }
</style>
<style>
    /* styles unrelated to zoom */
    /* * { border:0; margin:0; padding:0; }
		p { position:absolute; top:3px; right:28px; color:#555; font:bold 13px/1 sans-serif;} */

    /* these styles are for the demo, but are not required for the plugin */
    .zoom {
        display: inline-block;
        position: relative;
    }

    /* magnifying glass icon */
    .zoom:after {
        content: '';
        display: block;
        width: 33px;
        height: 33px;
        position: absolute;
        top: 0;
        right: 0;
        background: url(icon.png);
    }

    .zoom img {
        display: block;
    }

    .zoom img::selection {
        background-color: transparent;
    }

    /* #ex2 img:hover { cursor: url(grab.cur), default; }
		#ex2 img:active { cursor: url(grabbed.cur), default; } */
</style>
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script src='assets/js/jquery.zoom.js'></script>
<script>
    $(document).ready(function() {
        $('#ex1').zoom();
        $('#ex2').zoom();
        // $('#ex2').zoom({ on:'grab' });
        // $('#ex3').zoom({ on:'click' });			 
        // $('#ex4').zoom({ on:'toggle' });
    });
</script>
<section style="margin-top:100px" class="pt-5 pb-5">
    <h1 class="text-center">Product Description</h1>
    <div class="container-fluid mt-5">
        <div class="tab">
            <button id="London1" class="tablinks" onmouseover="openCity(event, 'tab1')">
                <img src="assets/img/general-ton-jacks/double-acting-threaded-ram-lock.jpg" class="img-fluid" />
            </button>
            <button class="tablinks" onmouseover="openCity(event, 'Paris')">
                <img src="assets/img/general-ton-jacks/500-ton-jack1.jpg" class="img-fluid" />
            </button>
            <button class="tablinks" onmouseover="openCity(event, 'Tokyo1')">
                <img src="assets/img/general-ton-jacks/500-ton-jack1.jpg" class="img-fluid" />
            </button>
            <button class="tablinks" onmouseover="openCity(event, 'Tokyo2')">
                <img src="assets/img/gallery/slide7.jpg" class="img-fluid" />
            </button>
            <button class="tablinks" onmouseover="openCity(event, 'Tokyo3')">
                <img src="assets/img/gallery/slide7.jpg" class="img-fluid" />
            </button>
            <button class="tablinks" onmouseover="openCity(event, 'Tokyo3')">
                <img src="assets/img/gallery/slide7.jpg" class="img-fluid" />
            </button>
            <button class="tablinks" onmouseover="openCity(event, 'Tokyo3')">
                <img src="assets/img/gallery/slide7.jpg" class="img-fluid" />
            </button>
        </div>
        <div id="tab1" style="background-color:#F7F7F7" class="tabcontent p-3">
            <div class="row">
                <div style="background-color:#000;" class="col-md-5 pt-2">
                    <h3>Double Acting Lock</h3><br />
                    <!-- <img src="assets/img/general-ton-jacks/double-acting-threaded-ram-lock.jpg" class="img-fluid"/> -->
                    <span class='zoom' id='ex1'>
                        <img src='assets/img/general-ton-jacks/double-acting-threaded-ram-lock.jpg' class="img-fluid" alt='Daisy on the Ohoopee' />
                    </span>
                </div>
                <div style="border-left:2px solid #EBE645;background-color:#000" class="col-md-7 pt-2">
                    <!-- <img class="img-fluid" src="assets/img/general-ton-jacks/0014.jpg" /> -->
                    <span class='zoom' id='ex2'>
                        <img src='assets/img/general-ton-jacks/0014.jpg' class="img-fluid" alt='sketch' />
                    </span>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quasi beatae aperiam sunt dolorem possimus repellends
                        pariatur ex illo nulla asperiores ipsa dolor.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quasi beatae aperiam sunt dolorem possimus repellends
                        pariatur ex illo nulla asperiores ipsa dolor.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quasi beatae aperiam sunt dolorem possimus repellends
                        pariatur ex illo nulla asperiores ipsa dolor.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quasi beatae aperiam sunt dolorem possimus repellends
                        pariatur ex illo nulla asperiores ipsa dolor.</p>
                </div>
            </div>
        </div>

        <div id="Paris" class="tabcontent">
            <div class="row">
                <div class="col-md-7">
                    <img src="assets/img/general-ton-jacks/0019.jpg" class="img-fluid" />
                </div>
                <div style="border-left:2px solid #000957;" class="col-md-5">
                    <h3 class="text-center">Double Acting Center Hole</h3>
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <img src="assets/img/gallery/0014.jpg" class="img-fluid" />

                        </div>
                        <div class="col-md-3"></div>
                    </div>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>Rated Capacity : 100(TDN)</li>
                        <li>Capacity @ 700 Bar : 1126(KN)</li>
                        <li>Stroke : 300 MM</li>
                        <li>Model Code : MTTS 100-300</li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="Tokyo1" class="tabcontent">
            <h3>Double Acting Center Hole</h3>
        </div>
        <div id="Tokyo2" class="tabcontent">
            <h3>Double Acting Plain Ram</h3>
        </div>
        <div id="Tokyo3" class="tabcontent">
            <h3>Single Acting Plain Ram</h3>
        </div>
    </div>
</section>
<?php include "footer.php" ?>
<script>
    openCity1('tab1');

    function openCity1(cityName) {
        // alert('hii');
        // Declare all variables
        var i, tabcontent, tablinks;
        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(cityName).style.display = "block";
        document.getElementsById('tab1').classList.add(" active");
    }

    function openCity(evt, cityName) {
        // alert(evt);
        // Declare all variables
        var i, tabcontent, tablinks;
        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        // Show the current tab, and add an "active" class to the link that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>