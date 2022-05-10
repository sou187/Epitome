<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
?>
<?php include "header.php"?>
<main class="page-content">
<div class="page-content-div1">
    <h1 class="text-center">Dashboard</h1>
</div>
<div class="container p-5">
    <div class="row">
        <div class="col-md-4">
            <div class="dashboard-div text-center">
                <?php include "connect.php";
                        $sql="SELECT count(*) as a,sum(	member_count) as member FROM `registrationnew`";
                        $confirm=$conn->query($sql);
                        $out=$confirm->fetch_assoc();
                        $total_reg = $out['a'];
                        $total_members=$out['member'];
                        ?>
                <h4>Total Registration</h4>
                <h1><?php echo $total_reg?></h1>
                <a href="registration.php" class="btn btn-success">View More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-div text-center">
                <h4>Total Members</h4>
                <h1><?php echo $total_members?></h1>
                <a href="registration.php" class="btn btn-success">View More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dashboard-div text-center">
                <?php include "connect.php";
                        $sql="SELECT sum(amount) as amount FROM `donation`";
                        $confirm=$conn->query($sql);
                        $out=$confirm->fetch_assoc();
                        $amount = $out['amount'];
                ?>
                <h4>Donation Amount</h4>
                <h1><?php echo $amount?></h1>
                <a href="donation.php" class="btn btn-success">View More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
    
<?php include "footer.php"?>