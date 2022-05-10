<?php
session_start();
$a=$_SESSION['username'];
if($a!="admin"){
    echo "<script>location='index.php'</script>";
}
?>
<?php

    include('connect.php');
    if(isset($_GET['reg_id']))
      {
        $id=$_GET['reg_id'];
        $query="DELETE FROM `registrationnew` WHERE `reg_id`=$id";
        $query1=$conn->query($query);
        if($query1=$conn->query($query)==TRUE)
          {
            echo "<script>location='registration.php'</script>";
          }
      }
?>