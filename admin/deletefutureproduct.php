<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
?>
<?php

    include('../connect.php');
    if(isset($_GET['fproduct_id']))
      {
        $fproduct_id=$_GET['fproduct_id'];
        $query="DELETE FROM `future_product` WHERE `fproduct_id`=$fproduct_id";
        $query1=$conn->query($query);
        if($query1==TRUE)
          {
            echo "<script>location='futureproduct.php'</script>";
          }
      }
?>