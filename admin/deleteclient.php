<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
?>
<?php
    include('connect.php');
    if(isset($_GET['client_id']))
      {
        $client_id=$_GET['client_id'];
        $query="DELETE FROM `client` WHERE `client_id`=$client_id";
        $query1=$conn->query($query);
        if($query1==TRUE)
          {
            echo "<script>location='client.php'</script>";
          }
      }
?>