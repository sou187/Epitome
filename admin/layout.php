<?php
session_start();
$a=$_SESSION['username'];
if($a!="admin"){
    echo "<script>location='index.php'</script>";
}
?>
<?php include "header.php"?>
<?php include "connect.php"?>
  <main class="page-content">
    <div class="page-content-div1">
        <h1 class="text-center">Contact Us</h1>
    </div>
    <div class="container-fluid">
      <div class="container p-3">
        <div class="table-responsive">
          <table id="contactus" class="table table-bordered">
            <thead>
                <tr class="bg-dark text-white">
                    <th>Sl.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
               
                <?php 
                    $i=1;
                    $sql2 = "SELECT * FROM `contactus`";
                    $result1 = $conn->query($sql2);
                    while($row=$result1->fetch_assoc()){
                ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['mobileno'];?></td>
                    <td><?php echo $row['message'];?></td>
                    <!-- <td><a href="editcontact.php?id=<?php echo $row['id']?>" class="action-icon btn btn-sm btn-outline-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp <a href="deletecontact.php?id=<?php echo $row['id']?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
                    <td><a onClick="javascript: return confirm('Please confirm deletion');" href="deletecontact.php?id=<?php echo $row['id']?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
                  <?php $i++;
                  } ?>
            </tbody>
          </table>
      </div>
    </div>
  <hr>
<script>
$(document).ready(function() {
    $('#contactus').DataTable();
} );
</script>
<?php include "footer.php"?>

      