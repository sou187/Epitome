<?php
session_start();
$a=$_SESSION['username'];
if($a!="admin"){
    echo "<script>location='index.php'</script>";
}
?>
<?php 
    include "connect.php";
    $id='';
    $pincode='';
    $mobile_no='';
    $village='';
    $ref_person_no='';
    if(isset($_GET['reg_id'])){          
        $id=$_GET['reg_id'];
        $res=mysqli_query($conn,"SELECT * FROM `registrationnew` WHERE `reg_id`='$id'");
        $row=mysqli_fetch_assoc($res);
        $pincode=$row['pincode'];
        $mobile_no=$row['mobile_no'];
        $village=$row['village'];
        $ref_person_no=$row['ref_person_no'];
    }

 

    if(isset($_POST["action"]))
    {
     $data=[];
     $member_id=$_POST["member_id"];
     $member_name=$_POST["member_name"];
     $gender=$_POST['gender'];
     for ($i = 0; $i < count($member_id); $i++) {
        $data[] = [
        'member_id' => $member_id[$i],
        'member_name' => $member_name[$i],
        'gender' => $gender[$i]
        ];
    }
     $member_count=count($member_id);
     echo $member_count;
     $family_members=json_encode($data);
     $mobileno=$_POST["mobileno"];
     $village=$_POST["village"];
     $pincode=$_POST["pincode"];
     $ref_person_no=$_POST["ref_person_no"];
     $query = '';
    
    $query = "UPDATE `registrationnew` SET `mobile_no`='$mobileno',`village`='$village',`pincode`='$pincode',`family_member`='$family_members',`member_count`='$member_count',`ref_person_no`='$ref_person_no' WHERE `reg_id`='$id'";
    if($conn->query($query)==TRUE){
            echo "<script>alert('data inserted')</script>";
            echo "<script>location='registration.php'</script>";
        } 
    }
    

?>

<?php include "header.php"?>
<?php include "connect.php"?>
<main class="page-content">
    <div class="page-content-div1">
        <h1 class="text-center">Edit Registration</h1>
    </div>
    <div class="container-fluid">
        <div class="container p-3">
            <div id="dynamic_field_modal">
                <form id="add_name" method="post">
                    <div class="row pb-3">
                        <div class="col-md-6">
                            <label>Pincode</label>
                            <input type="text" value="<?php echo $pincode?>" name="pincode" id="pincode" maxlength="6"
                                pattern="^[1-9][0-9]{5}$" onkeyup="get_details()" class="form-control"
                                placeholder="Enter Pincode" required />
                        </div>
                        <div class="col-md-6">
                            <label>Village</label>
                            <input type="text" value="<?php if(@$res){echo htmlentities (@$row['village']);}?>" name="village" id="village"
                                class="form-control" placeholder="Enter Village" autocomplete="off"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Mobile Number</label>
                            <input type="text" value="<?php echo $mobile_no?>" name="mobileno" id="mobileno"
                                pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$" class="form-control"
                                placeholder="Enter Mobile No" required />
                        </div>
                        <div class="col-md-6">
                            <label>Reference Person Mobile Number</label>
                            <input type="text" value="<?php echo $ref_person_no?>" name="ref_person_no" id="ref_person_no"
                                pattern="^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$" class="form-control"
                                placeholder="Enter Mobile No" required />
                        </div>
                    </div><br/>
                    <br/>
                    <hr/>
                    <!------------------------------ Other family Details ------------------------>

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th width="15%">Member_ID</th>
                                    <th width="55%">Family_Member_Name</th>
                                    <th width="20%">Select_Gender</th>
                                    <th width="10%"><button type="button" class="btn btn-success add_more">+</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="add_moreitem">
                                <?php 

                                    $data1=json_decode($row['family_member']);
                                    // var_dump($data1);
                                    foreach($data1 as $key=>$data){
                                ?>
                                <tr>
                                    <td><input type="hidden" name="id[]" id="id" value='1'>1</td>
                                    <td>
                                        <input style="letter-spacing: 3px;" value="<?php echo $data->member_id?>" type="text" class="form-control member_id"
                                            name="member_id[]" id="member_id">
                                    </td>
                                    <td>
                                        <input type="text" value="<?php echo $data->member_name?>" class="form-control member_name" name="member_name[]"
                                            placeholder="Family Member Name" id="member_name" required
                                            pattern="[a-zA-Z\s]+">
                                    </td>
                                    <td>
                                        <select class="form-control gender" name="gender[]" id="gender" required>
                                            <option value="">select</option>
                                            <option value="male" <?php echo $data->gender=='male' ? 'selected' : ''?>>Male</option>
                                            <option value="female" <?php echo $data->gender=='female' ? 'selected' : ''?>>Female</option>
                                            <option value="other" <?php echo $data->gender=='other' ? 'selected' : ''?>>Other</option>
                                        </select>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger delete">X</button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!------------------------------ End other Family Details --------------------->

                    <div>
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="hidden" name="action" id="action" value="insert" />
                        <div class="text-center mt-5">
                            <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg"
                                value="Submit" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr />

        <?php include "footer.php"?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
        function get_details() {
            var pincode = jQuery('#pincode').val();
            if (pincode == '') {
                jQuery('#pincode').val('');
            } else {
                jQuery.ajax({
                    url: 'get.php',
                    type: 'post',
                    data: 'pincode=' + pincode,
                    success: function(data) {
                        console.log(data);
                        jQuery('#village').val(data);
                    }
                });
            }
        }
        </script>

        <script>
        $(document).ready(function() {
            // --------------------------------Other Family Details-----------------------------
            $('.add_more').on('click', function() {
                var gender = $('.gender').html();
                var numberofrow = ($('.add_moreitem tr').length - 0) + 1;
                var tr = '<tr><td>' + numberofrow +
                    '<input class="form-control id" type="hidden" name="id[]" id="id" value=' +
                    numberofrow +
                    '></td>' +
                    '<td><input style="letter-spacing: 3px;" type="text" class="form-control member_id" name="member_id[]" id="member_id" value=' +
                    <?php echo $id?> + '|' + numberofrow +'></td>' +
                    '<td><input type="text" placeholder="Family Member Name" class="form-control member_name" name="member_name[]" id="member_name" pattern="[a-zA-Z\s]+" required></td>' +
                    '<td><select class="form-control gender" name="gender[]" required>' + gender +
                    '</select></td>' +
                    '<td><button type="button" class="btn btn-danger delete"><i class="fa fa-times"></i></button></td>';
                $('.add_moreitem').append(tr);
            });
            //-------------------------------- delete row ---------------------------------------
            $(document).on('click', '.delete', function() {
                $(this).parent().parent().remove();
            });
            //-------------------------------- End Other Family Details--------------------------

        });
        </script>
       