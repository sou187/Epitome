<?php include "../connect.php" ?>
<?php
session_start();
$a = $_SESSION['username'];
if ($a != "Epitome") {
    echo "<script>location='index.php'</script>";
}

$about_id="";
$section_type="";
$src='images/upload/avatar.png';
if (isset($_GET['about_id'])) {
    $about_id = $_GET['about_id'];
    $query = "SELECT * FROM `about_us` WHERE `about_id`=$about_id";
    $res = $conn->query($query);
    $row = $res->fetch_assoc();
    $section_type = $row['section_type'];
    $About_Image = $row['About_Image'];
    $paragraph1 = $row['paragraph1'];
    $paragraph2 = $row['paragraph2'];
    $paragraph3 = $row['paragraph3'];
    $Mission_points=$row['Mission_points'];
    
}
if (isset($_POST['slider_submit'])) {
    $section_type = $_POST['section_type'];
    if(isset($_POST['paragraph1'])){
    $paragraph1 = $_POST['paragraph1'];
    }else{
        $paragraph1='';
    }
    if(isset($_POST['paragraph2'])){
        $paragraph2 = $_POST['paragraph2'];
        }else{
            $paragraph2='';
        }
        if(isset($_POST['paragraph3'])){
            $paragraph3 = $_POST['paragraph3'];
            }else{
                $paragraph3='';
            }
    $array=[];
    if(isset($_POST['mission_points'])){
       $Mission_points=json_encode($_POST['mission_points']);
        
    }
    else{
        $Mission_points='';
    }
    if(isset($_FILES["About_Image"]["name"])){
        $pro_img_name = $_FILES["About_Image"]["name"];
        echo $pro_img_name;
        $pro_temp_name = $_FILES["About_Image"]["tmp_name"];
        $product_img1 = "../images/upload/" . $pro_img_name;
        $product_img = "images/upload/" . $pro_img_name;
        move_uploaded_file($pro_temp_name, $product_img1);
    }else{
        $product_img='';
    }

if ($about_id > 0) {
        $sql = "UPDATE `about_us` SET `section_type`='$section_type',`About_Image`='$product_img',`paragraph1`=' $paragraph1',`paragraph2`='$paragraph2',`paragraph3`='$paragraph3',`Mission_points`='$Mission_points' WHERE `about_id`=$about_id";
    } else {
        $sql = "INSERT INTO `about_us`(`about_id`, `section_type`, `About_Image`, `paragraph1`, `paragraph2`, `paragraph3`, `Mission_points`) VALUES ('','$section_type','$product_img','$paragraph1','$paragraph2','$paragraph3','$Mission_points')";
    }
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "<script>alert('Data Added successfully')</script>";
        echo "<script>location='aboutusContent.php'</script>";
    }
}
?>
<?php include "header.php" ?>

<main class="page-content">
    <div class="page-content-div1">
        <h1 class="text-center">About Us Content</h1>
    </div>
    <div class="container-fluid">
        <div class="container p-3">
            <div class="row">
                <div class="col-md-3">
                    <img id="previewImg" style="border:1px solid grey;height:200px;width:100%"
                        src="../<?php echo $src?>" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" value="<?php echo $paragraph1?>" class="form-control" name="edit_paragraph" id="edit_paragraph"/>
                        <input type="hidden" value="<?php echo $paragraph2?>" class="form-control" name="edit_paragraph2" id="edit_paragraph2"/>
                        <input type="hidden" value="<?php echo $paragraph3?>" class="form-control" name="edit_paragraph3" id="edit_paragraph3"/>
                        <input type="hidden" value="<?php echo $About_Image?>" class="form-control" name="edit_paragraph4" id="edit_paragraph4"/>
                        
                        <?php 
                        if(!empty($Mission_points)){
                            $ddd=json_decode($Mission_points);
                            foreach($ddd as $x =>$list){
                        ?>
                        <input type="hidden" value="<?php echo $list?>" class="form-control" name="editmission_points" id="editmission_points_<?php echo $x?>"/>
                        <?php 
                    }
                    }
                    ?>
                        <select class="form-control" id="section-type" name="section_type">
                            <option>--select--</option>
                            <option value="section-1"<?php if($section_type=='section-1'){ echo 'selected'; } else{ echo '';}?>>section-1</option>
                            <option value="section-2"<?php if($section_type=='section-2'){ echo 'selected'; } else{ echo '';}?>>section-2</option>
                            <option value="section-3"<?php if($section_type=='section-3'){ echo 'selected'; } else{ echo '';}?>>section-3</option>
                            <option value="section-4"<?php if($section_type=='section-4'){ echo 'selected'; } else{ echo '';}?>>section-4</option>
                        </select>
                       
                        <?php
                        //  if($section_type=='section-3'){ echo 'selected'; } else{ echo '';}
                         ?>
                       <div id="form-content">
                        </div>
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
                            <th>About Image</th>
                            <th>paragraph1</th>
                            <th>paragraph2</th>
                            <th>Paragraph3</th>
                            <th>Mission points</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql2 = "SELECT * FROM `about_us`";
                        $result1 = $conn->query($sql2);
                        while ($row = $result1->fetch_assoc()) {    
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><img width="100px" height="100px" src="../<?php echo $row['About_Image']; ?>" class="img-fluid" /></td>
                                <td><?php echo $row['paragraph1'];?></td>
                                <td><?php echo $row['paragraph2'];?></td>
                                <td><?php echo $row['paragraph3'];?></td>
                                <td><?php echo $row['Mission_points'];?></td>
                                <td><a href="aboutusContent.php?about_id=<?php echo $row['about_id'] ?>" class="action-icon btn btn-sm btn-outline-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>&nbsp <a onClick="javascript: return confirm('Please confirm deletion');" href="deleteaboutcontent.php?about_id=<?php echo $row['about_id'] ?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                <!-- <td><a onClick="javascript: return confirm('Please confirm deletion');" href="deletecontact.php?contact_id=<?php echo $row['contact_id'] ?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td> -->
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        

        <script>

        
            $(document).on('change','#section-type',function(){
                var ss=$('#section-type').val();
                if(ss=='section-1'){
                    $('#form-content').empty();
                    var html = '<label>About Image</label><input type="file" class="form-control" name="About_Image" /><label>paragraph1</label><textarea placeholder="paragraph1" class="form-control" name="paragraph1"></textarea> <label>paragraph2</label><textarea placeholder="paragraph2" class="form-control" name="paragraph2"></textarea> <label>paragraph3</label><textarea placeholder="paragraph3" class="form-control" name="paragraph3"></textarea>';
                    $('#form-content').append(html);
                }
                if(ss=='section-2'){
                    $('#form-content').empty();
                    var html ='<label>About Image</label><input type="file" class="form-control" name="About_Image" /><label>paragraph</label><textarea placeholder="paragraph1" class="form-control" name="paragraph1"></textarea>';
                    $('#form-content').append(html);
                }
                if(ss=='section-3'){
                    $('#form-content').empty();
                    var html='<label>About Image</label><input type="file" class="form-control" name="About_Image" /><label>paragraph1</label><textarea placeholder="paragraph1" class="form-control" name="paragraph1"></textarea><label>Points</label><input type="text" name="mission_points[]" class="form-control"/><input type="text" class="form-control" name="mission_points[]"/><input type="text" name="mission_points[]" class="form-control"/><br/>';
                    $('#form-content').append(html);
                }
                if(ss=='section-4'){
                   $('#form-content').empty();
                    var html='<label>Points</label><input type="text" name="mission_points[]" class="form-control"/><input type="text" class="form-control" name="mission_points[]"/><input type="text" name="mission_points[]" class="form-control"/><input type="text" name="mission_points[]" class="form-control"/><input type="text" name="mission_points[]" class="form-control"/><br/>';
                    $('#form-content').append(html);
                }

            });
        
            $(document).ready(function(){
                var dd=$('#section-type').val();
                var edit_paragraph4=$('#edit_paragraph4').val();
                var edit_paragraph=$('#edit_paragraph').val();
                var edit_paragraph2=$('#edit_paragraph2').val();
                var edit_paragraph3=$('#edit_paragraph3').val();
               if(dd=='section-1'){
                    $('#form-content').empty();
                    var maya = '<label>About Image</label><input type="file" class="form-control" name="About_Image" /><img class="img-fluid" src="../'+edit_paragraph4+'"></input><label>paragraph1</label><textarea placeholder="paragraph1" class="form-control" name="paragraph1">'+edit_paragraph+'</textarea> <label>paragraph2</label><textarea placeholder="paragraph2" class="form-control" name="paragraph2">'+edit_paragraph2+'</textarea> <label>paragraph3</label><textarea placeholder="paragraph3" class="form-control" name="paragraph3">'+edit_paragraph3+'</textarea>';
                    $('#form-content').append(maya);
                }
                var edit_paragraph4=$('#edit_paragraph4').val();
                var edit_paragraph=$('#edit_paragraph').val();
                 if(dd=='section-2'){
                    $('#form-content').empty();
                    var maya ='<label>About Image</label><input type="file" class="form-control" name="About_Image" /><img class="img-fluid" src="../'+edit_paragraph4+'"></input><label>paragraph</label><textarea placeholder="paragraph1" class="form-control" name="paragraph1">'+edit_paragraph+'</textarea>';                   
                     $('#form-content').append(maya);
                }
                var edit_paragraph=$('#edit_paragraph').val();
                var editmission_points_0=$('#editmission_points_0').val();
                var editmission_points_1=$('#editmission_points_1').val();
                var editmission_points_2=$('#editmission_points_2').val();
               
                if(dd=='section-3'){
                    // alert(editmission_points_1);
                    $('#form-content').empty();
                    var maya='<label>About Image</label><input type="file" class="form-control" name="About_Image" /><img name="About_Image"class="img-fluid" src="../'+edit_paragraph4+'"></input><label>paragraph1</label><textarea placeholder="paragraph1" class="form-control" name="paragraph1">'+edit_paragraph+'</textarea><label>Points</label><input type="text" name="mission_points[]" value="'+editmission_points_0+'" class="form-control"/><input type="text" class="form-control" name="mission_points[]" value="'+editmission_points_1+'"/><input type="text" name="mission_points[]" class="form-control" value="'+editmission_points_2+'"/><br/>';
                    $('#form-content').append(maya);
                }
                var editmission_points_0=$('#editmission_points_0').val();
                var editmission_points_1=$('#editmission_points_1').val();
                var editmission_points_2=$('#editmission_points_2').val();
                var editmission_points_3=$('#editmission_points_3').val();
                var editmission_points_4=$('#editmission_points_4').val();

             if(dd=='section-4'){

                    $('#form-content').empty();
                    var maya='<label>Points</label><input type="text" name="mission_points[]" value="'+editmission_points_0+'" class="form-control"/><input type="text" class="form-control" name="mission_points[]" value="'+editmission_points_1+'"/><input type="text" name="mission_points[]" value="'+editmission_points_2+'" class="form-control"/><input type="text" name="mission_points[]" value="'+editmission_points_3+'" class="form-control"/><input type="text" name="mission_points[]" value="'+editmission_points_4+'" class="form-control"/><br/>';
                    $('#form-content').append(maya);
                }
              });
        </script>

        


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