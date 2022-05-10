

<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
    include "../connect.php";
    if(isset($_GET['product_id'])){
         
        $product_id=$_GET['product_id'];
        $sql="DELETE FROM `productdetails` WHERE `product_id`=$product_id";
        $result=$conn->query($sql);
        if($result==TRUE){
            echo "<script>location='productdetails.php'</script>";
        }
    }
?>