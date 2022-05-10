<?php include "../connect.php" ?>
<?php
session_start();
$a = $_SESSION['username'];
if ($a != "Epitome") {
    echo "<script>location='index.php'</script>";
}
$slider_id = '';
$slider_title = '';
$slider_img = '';
$src='images/upload/avatar.png';
if (isset($_GET['slider_id'])) {
    $slider_id = $_GET['slider_id'];
    $query = "SELECT * FROM `slider` WHERE `slider_id`=$slider_id";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $slider_title = $row['slider_title'];
    $slider_img = $row['slider_img'];
    $src=$row['slider_img'];
}
if (isset($_POST['slider_submit'])) {
    $slider_title = $_POST['slider_title'];
    $pro_img_name = $_FILES["slider_img"]["name"];
    $pro_temp_name = $_FILES["slider_img"]["tmp_name"];
    $slider_img1 = "../images/upload/" . $pro_img_name;
    $slider_img = "images/upload/" . $pro_img_name;
    move_uploaded_file($pro_temp_name, $slider_img1);
    if ($pro_img_name == '') {
        $slider_img = $row['slider_img'];
    }
    if ($slider_id > 0) {
        $sql = "UPDATE `slider` SET `slider_title`='$slider_title',`slider_img`='$slider_img' WHERE `slider_id`=$slider_id";
    } else {
        $sql = "INSERT INTO `slider`(`slider_id`, `slider_title`, `slider_img`) VALUES ('','$slider_title','$slider_img')";
    }
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "<script>alert('Data Added successfully')</script>";
        echo "<script>location='slidercontent.php'</script>";

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
                        <label>Slider Title</label>
                        <input type="text" value="<?php echo $slider_title ?>" placeholder="Title" class="form-control" name="slider_title" />
                        <label>Slider Image</label>
                        <input type="file" onchange="previewFile(this);" class="form-control" name="slider_img" /><br />
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
                            <th>Title</th>
                            <th>Slider Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql2 = "SELECT * FROM `slider`";
                        $result1 = $conn->query($sql2);
                        while ($row = $result1->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['slider_title']; ?></td>
                                <td><img width="100px" height="100px" src="../<?php echo $row['slider_img']; ?>" class="img-fluid" /></td>
                                <td><a href="slidercontent.php?slider_id=<?php echo $row['slider_id'] ?>" class="action-icon btn btn-sm btn-outline-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp <a  onClick="javascript: return confirm('Please confirm deletion');"  href="deleteslidercontent.php?slider_id=<?php echo $row['slider_id'] ?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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