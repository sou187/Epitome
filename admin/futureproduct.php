<?php include "../connect.php" ?>
<?php
session_start();
$a = $_SESSION['username'];
if ($a != "Epitome") {
    echo "<script>location='index.php'</script>";
}
$fproduct_id = '';
$product_name = '';
$product_img = '';
$description='';
$src='images/upload/avatar.png';
if (isset($_GET['fproduct_id'])) {
    $fproduct_id = $_GET['fproduct_id'];
    $query = "SELECT * FROM `future_product` WHERE `fproduct_id`=$fproduct_id";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $product_name = $row['product_name'];
    $product_img = $row['product_img'];
    $description=$row['description'];
    $src=$row['product_img'];
}
if (isset($_POST['product_submit'])) {
    $product_name = $_POST['product_name'];
    $description=$_POST['description'];
    $pro_img_name = $_FILES["product_img"]["name"];
    $pro_temp_name = $_FILES["product_img"]["tmp_name"];
    $product_img1 = "../images/upload/" . $pro_img_name;
    $product_img = "images/upload/" . $pro_img_name;
    move_uploaded_file($pro_temp_name, $product_img1);
    if ($pro_img_name == '') {
        $product_img = $row['product_img'];
    }
    if ($fproduct_id > 0) {
        $sql = "UPDATE `future_product` SET `product_name`='$product_name',`description`='$description',`product_img`='$product_img' WHERE `fproduct_id`=$fproduct_id";
    } else {
        $sql = "INSERT INTO `future_product`(`fproduct_id`, `product_name`, `description`, `product_img`) VALUES ('','$product_name','$description','$product_img')";
    }
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "<script>alert('Data Added successfully')</script>";
    }
}
?>
<?php include "header.php" ?>

<main class="page-content">
    <div class="page-content-div1">
        <h1 class="text-center">Contact Us</h1>
    </div>
    <div class="container-fluid">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-3">
                    <img id="previewImg" style="border:1px solid grey;height:200px;width:100%" src="../<?php echo $src?>" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <form method="post" action="" enctype="multipart/form-data">
                        <label>Product Name</label>
                        <input type="text" value="<?php echo $product_name?>" placeholder="Product Name" class="form-control" name="product_name" />
                        <label>Slider Image</label>
                        <input type="file" onchange="previewFile(this);" class="form-control" name="product_img" />
                        <label>Description</label>
                        <textarea class="form-control"placeholder="Description" name="description"><?php echo $description?></textarea><br/>
                        <button type="submit" name="product_submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div><br/>

            <div class="table-responsive">
                <table id="contactus" class="table table-bordered">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Sl.No</th>
                            <th>Product Name</th>
                            <th>Description</th>
                            <th>Slider Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql2 = "SELECT * FROM `future_product`";
                        $result1 = $conn->query($sql2);
                        while ($row = $result1->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['description']?></td>
                                <td><img width="100px" height="100px" src="../<?php echo $row['product_img']; ?>" class="img-fluid" /></td>
                                <td><a href="futureproduct.php?fproduct_id=<?php echo $row['fproduct_id'] ?>" class="action-icon btn btn-sm btn-outline-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp <a  onClick="javascript: return confirm('Please confirm deletion');"  href="deletefutureproduct.php?fproduct_id=<?php echo $row['fproduct_id'] ?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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