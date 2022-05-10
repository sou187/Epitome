<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
    include('../connect.php');
    if(isset($_GET['photogal_id']))
      {
        $photogal_id=$_GET['photogal_id'];
        $query="DELETE FROM `productgallery` WHERE `photogal_id`=$photogal_id";
        $query1=$conn->query($query);
        if($query1==TRUE)
          {
            echo "<script>location='productgallery.php'</script>";
          }
      }
?>