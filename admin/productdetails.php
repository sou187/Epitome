<?php include "../connect.php" ?>
<?php
session_start();
$a = $_SESSION['username'];
if ($a != "Epitome") {
    echo "<script>location='index.php'</script>";
}
$product_id = '';
$product_name = '';
$product_img = '';
$product_pdf = '';
$category='';
$product_img1='';
$product_sketch='';
$product_pdf1='';
$description='';
$row='';
$src='images/upload/avatar.png';
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $query = "SELECT * FROM `productdetails` WHERE `product_id`=$product_id";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $description = $row['description'];
    $product_name = $row['product_name'];
    $category = $row['cat_id'];
    $product_img = $row['product_img'];
    $product_sketch1 = $row['product_sketch1'];
    $product_pdf = $row['product_pdf'];
    $src=$row['product_img'];
}
if (isset($_POST['slider_submit'])) {
    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
   
    $pro_img_name = $_FILES["product_img"]["name"];
    $pro_temp_name = $_FILES["product_img"]["tmp_name"];
    $product_img1 = "../images/upload/" . $pro_img_name;
    $product_img = "images/upload/" . $pro_img_name;
    move_uploaded_file($pro_temp_name, $product_img1);
    if ($pro_img_name == '') {
        $product_img = $row['product_img'];
    }
    $pro_sketch_name = $_FILES["product_sketch1"]["name"];
    $pro_temp_name2 = $_FILES["product_sketch1"]["tmp_name"];
    $product_sketch = "../images/upload/" . $pro_sketch_name;
    $product_sketch1 = "images/upload/" . $pro_sketch_name;
    move_uploaded_file($pro_temp_name2, $product_sketch);
    if ($pro_sketch_name == '') {
        $product_sketch1 = $row['product_sketch'];
    }

    $pro_img_name1 = $_FILES["product_pdf"]["name"];
    $pro_temp_name1 = $_FILES["product_pdf"]["tmp_name"];
    $product_pdf1 = "../images/upload/" . $pro_img_name1;
    $product_pdf = "images/upload/" . $pro_img_name1;
    move_uploaded_file($pro_temp_name1, $product_pdf1);
    if ($pro_img_name1 == '') {
        $product_pdf = $row['product_pdf'];
    }

    if ($product_id > 0) {
        $sql = "UPDATE `productdetails` SET `cat_id`='$category',`product_name`='$product_name',`description`='$description',`product_pdf`='$product_pdf',`product_img`='$product_img',`product_sketch1`='$product_sketch1' WHERE `product_id`=$product_id";
    } else {
        $sql = "INSERT INTO `productdetails`(`product_id`, `cat_id`, `product_name`, `description`, `product_pdf`, `product_img`, `product_sketch1`) VALUES ('','$category','$product_name','$description','$product_pdf','$product_img','$product_sketch1')";
    }
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "<script>alert('Data Added successfully')</script>";
        echo "<script>location='productdetails.php'</script>";

    }
}
?>
<?php include "header.php" ?>

<main class="page-content">
    <div class="page-content-div1">
        <h1 class="text-center">Slider Content</h1>
    </div>
    <div class="container-fluid">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-3">
                    <img id="previewImg" style="border:1px solid grey;height:200px;width:100%" src="../<?php echo $src?>" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <form method="post" action="" enctype="multipart/form-data">
                        <select class="form-control" name="category">
                            <option>--select--</option>
                            <?php 
                                $sql="SELECT * FROM `product_category`";
                                $result=$conn->query($sql);
                                while($row=$result->fetch_assoc()){?>
                                    <option <?php if($row['category_id']==$category){ echo 'selected'; } else{ echo '';}?> value="<?php echo $row['category_id'] ?>"><?php echo $row['categories'] ?></option>
                            <?php
                                }
                            ?>
                           
                        </select>

                        <label>Product Name</label>
                        <input type="text" value="<?php echo $product_name ?>" placeholder="Title" class="form-control" name="product_name"/>
                        <label>Descrption</label>
                        <textarea placeholder="Title" class="form-control" name="description"><?php echo $description ?></textarea>
                        <label>product Image</label>
                        <input type="file" onchange="previewFile(this);" class="form-control" name="product_img"/><br />
                        <label>product Sketch</label>
                        <input type="file" class="form-control" name="product_sketch1"/><br/>
                        <label>product PDF</label>
                        <input type="file" class="form-control" name="product_pdf"/><br />
                        <button type="submit" name="slider_submit" class="btn btn-success">Submit</button>
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
                            <th>Category</th>
                            <th>Description</th>
                            <th>Product Image</th>
                            <th>Product Sketch</th>
                            <th>PDF</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql2 = "SELECT * FROM `productdetails`";
                        $result1 = $conn->query($sql2);
                        while ($row = $result1->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['product_name']; ?></td>
                                <td><?php echo $row['cat_id']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><img width="100px" height="100px" src="../<?php echo $row['product_img']; ?>" class="img-fluid" /></td>
                                <td><img width="100px" height="100px" src="../<?php echo $row['product_sketch1']; ?>" class="img-fluid" /></td>
                                <td><a href="../<?php echo $row['product_pdf']; ?>"><button class="btn btn-info">View PDF</button></td></a>
                                <td><a href="productdetails.php?product_id=<?php echo $row['product_id'] ?>" class="action-icon btn btn-sm btn-outline-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp <a  onClick="javascript: return confirm('Please confirm deletion');"  href="deleteproductdetail.php?product_id=<?php echo $row['product_id'] ?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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