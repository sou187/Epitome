<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
    include "../connect.php";
    if(isset($_GET['slider_id'])){
         
        $slider_id=$_GET['slider_id'];
        // echo $enquery_id;
        $sql="DELETE FROM `slider` WHERE `slider_id`=$slider_id";
        $result=$conn->query($sql);
        if($result==TRUE){
            echo "<script>location='slidercontent.php'</script>";
        }
    }
?>
