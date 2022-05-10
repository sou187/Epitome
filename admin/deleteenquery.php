<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
    include "../connect.php";
    if(isset($_GET['enquery_id'])){
        $enquery_id=$_GET['enquery_id'];
        // echo $enquery_id;
        $sql="DELETE FROM `enquery` WHERE `enquery_id`=$enquery_id";
        $result=$conn->query($sql);
        if($result==TRUE){
            echo "<script>location='enquery.php'</script>";
        }
    }
?>
