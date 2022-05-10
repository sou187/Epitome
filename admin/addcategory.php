<?php include "../connect.php" ?>
<?php
session_start();
$a = $_SESSION['username'];
if ($a != "Epitome") {
    echo "<script>location='index.php'</script>";
}
$category_id = '';
$categories = '';
$cat_img = '';
$cat_img1='';
$src='images/upload/avatar.png';
if (isset($_GET['cat_id'])) {
    $category_id = $_GET['cat_id'];
    $query = "SELECT * FROM `product_category` WHERE `category_id`=$category_id";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $categories = $row['categories'];
    $src=$row['cat_img'];
}
if (isset($_POST['slider_submit'])) {
    $categories = $_POST['categories'];
    $pro_img_name = $_FILES["cat_img"]["name"];
    $pro_temp_name = $_FILES["cat_img"]["tmp_name"];
    $cat_img1 = "../images/upload/" . $pro_img_name;
    $cat_img = "images/upload/" . $pro_img_name;
    move_uploaded_file($pro_temp_name, $cat_img1);
    if ($pro_img_name == '') {
        $cat_img = $row['cat_img'];
    }

    if ($category_id > 0) {
        $sql = "UPDATE `product_category` SET `categories`='$categories',`cat_img`='$cat_img' WHERE `category_id`=$category_id";
    } else {
        $sql = "INSERT INTO `product_category`(`category_id`, `categories`, `cat_img`) VALUES ('',' $categories','$cat_img')";
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
                        
                        <label>Category Name</label>
                        <input type="text" value="<?php echo $categories ?>" placeholder="Title" class="form-control" name="categories" />
                      
                        <label>Category Image</label>
                        <input type="file" onchange="previewFile(this);" class="form-control" name="cat_img" /><br />
                      
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
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql2 = "SELECT * FROM `product_category`";
                        $result1 = $conn->query($sql2);
                        while ($row = $result1->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['categories']; ?></td>
                                <td><img width="100px" height="100px" src="../<?php echo $row['cat_img']; ?>" class="img-fluid" /></td>
                                <td><a href="addcategory.php?cat_id=<?php echo $row['category_id'] ?>" class="action-icon btn btn-sm btn-outline-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp <a onClick="javascript: return confirm('Please confirm deletion');" href="deletecategory.php?cat_id=<?php echo $row['category_id']?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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