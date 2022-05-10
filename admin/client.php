<?php include "../connect.php" ?>
<?php
session_start();
$a = $_SESSION['username'];
if ($a != "Epitome") {
    echo "<script>location='index.php'</script>";
}
$client_id = '';
$photo = '';
$src='images/upload/avatar.png';
if (isset($_GET['client_id'])) {
    $client_id = $_GET['client_id'];
    $query = "SELECT * FROM `client` WHERE `client_id`=$client_id";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $photo = $row['photo'];
    $src=$row['photo'];
}
if (isset($_POST['client_submit'])) {
    $pro_img_name = $_FILES["photo"]["name"];
    $pro_temp_name = $_FILES["photo"]["tmp_name"];
    $photo1 = "../images/upload/" . $pro_img_name;
    $photo = "images/upload/" . $pro_img_name;
    move_uploaded_file($pro_temp_name, $photo1);
    if ($pro_img_name == '') {
        $photo = $row['photo'];
    }
    if ($client_id > 0) {
        $sql = "UPDATE `client` SET `photo`='$photo' WHERE `client_id`=$client_id";
    } else {
        $sql = "INSERT INTO `client`(`client_id`, `photo`) VALUES ('','$photo')";
    }
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "<script>alert('Product Added successfully')</script>";
    }
}
?>
<?php include "header.php" ?>
<main class="page-content">
    <div class="page-content-div1">
        <h1 class="text-center">Add Clients</h1>
    </div>
    <div class="container-fluid">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-3">
                    <img id="previewImg" style="border:1px solid grey;height:200px;width:100%" src="../<?php echo $src?>" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <form method="post" action="" enctype="multipart/form-data">
                        <label>Image</label>
                        <input type="file" onchange="previewFile(this);" class="form-control" name="photo" /><br />
                        <button type="submit" name="client_submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div><br/>

            <div class="table-responsive">
                <table id="contactus" class="table table-bordered">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Sl.No</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql2 = "SELECT * FROM `client`";
                        $result1 = $conn->query($sql2);
                        while ($row = $result1->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><img width="100px" height="100px" src="../<?php echo $row['photo']; ?>" class="img-fluid" /></td>
                                <td><a href="client.php?client_id=<?php echo $row['client_id'] ?>" class="action-icon btn btn-sm btn-outline-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp <a  onClick="javascript: return confirm('Please confirm deletion');"  href="deleteclient.php?client_id=<?php echo $row['client_id'] ?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                <!-- <td><a onClick="javascript: return confirm('Please confirm deletion');" href="deletecontact.php?contact_id=<?php echo $row['contact_id'] ?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
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
            });
        </script>
        <?php include "footer.php" ?>
        <script>
            function previewFile(input) {
                var file = $("input[type=file]").get(0).files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function() {
                        $("#previewImg").attr("src", reader.result);
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script> 