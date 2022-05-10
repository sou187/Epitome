<!-- <html>
  <head>
     Font Awesome 
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
 Google Fonts
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
MDB 
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
<div
  class="bg-image "
  data-mdb-ripple-color="light"
>
  <img src="assets/img/gallery/img6.png" class="w-100" />
  <a href="#!">
    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
  </a>
</div>
  



</body>
</html> -->

<html>
<body>

<h2>Never Create Strings as Objects</h2>
<p>Strings and objects cannot be safely compared.</p>

<p id="demo"></p>

<script>
let x = "John";        // x is a string
let y = new String("John");  // y is an object
document.getElementById("demo").innerHTML = (x===y);
</script>

</body>
</html>