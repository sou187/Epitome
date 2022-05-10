
<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
    include "../connect.php";
    if(isset($_GET['cat_id'])){
         
        $category_id=$_GET['cat_id'];
        $sql="DELETE FROM `product_category` WHERE `category_id`=$category_id";
        $result=$conn->query($sql);
        if($result==TRUE){
            echo "<script>location='addcategory.php'</script>";
        }
    }
?>
