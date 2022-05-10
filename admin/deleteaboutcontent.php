<?php
// session_start();
// $a=$_SESSION['username'];
// if($a!="Epitome"){
//     echo "<script>location='index.php'</script>";
// }
?>
<?php

    include('../connect.php');
    if(isset($_GET['about_id']))
      {
        $about_id=$_GET['about_id'];
        $query="DELETE FROM `about_us` WHERE `about_id`=$about_id";
        $query1=$conn->query($query);
        if($query1==TRUE)
          {
            echo "<script>location='aboutusContent.php'</script>";
          }
      }
?>