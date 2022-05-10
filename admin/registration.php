<?php
session_start();
$a=$_SESSION['username'];
if($a!="admin"){
    echo "<script>location='index.php'</script>";
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php include "header.php"?>
<?php include "connect.php"?>
<main class="page-content">
    <div class="page-content-div1">
        <h1 class="text-center">Registered People</h1>
    </div>
    <div class="container-fluid">
        <div class="container p-3">
            <div class="table-responsive">
                <table id="blogsregistration" class="table table-bordered">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Sl.No</th>
                            <th>Account No</th>
                            <th>Personal_Details</th>
                            <th>Family_Details</th>
                            <th>Reference Person Mobile No</th>
                            <th>No_Of_Family Members</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                    $i=1;
                    $sql2="select * from registrationnew";
                    // $sql2 = "select *,(CHAR_LENGTH(family_members) - CHAR_LENGTH(REPLACE(family_members, ',', '')) + 1) as total from registration r,state s,parlimentory_constituency p,assembly_segment a where r.state=s.state_id and r.parlimentory_assembly=p.pc_id and r.assembly_constitancy=a.assembly_id";
                    $result1 = $conn->query($sql2);
                    while($row=$result1->fetch_assoc()){
                    $data=json_decode($row['family_member']);
                    
                    ?>
                        <tr>
                            <td><?php echo $i;?></td>
                            <td><?php echo $row['reg_id'];?></td>
                            <td>
                                <p>Mobile No : <?php echo $row['mobile_no'];?></p>
                                <p>Pincode : <?php echo $row['pincode'];?></p>
                                <p>Village : <?php echo $row['village'];?></p>
                            </td>
                            <td>
                                <p><?php echo $row['family_member'];?></p>
                            </td>
                            <td><?php echo $row['ref_person_no'];?></td>
                            <td><?php echo $row['member_count'];?></td>
                            <td><a href="editregistration.php?reg_id=<?php echo $row['reg_id']?>"
                                    class="btn btn-sm btn-outline-info"><i class="fa fa-edit"
                                        aria-hidden="true"></i></a><a
                                    onClick="javascript: return confirm('Please confirm deletion');"
                                    href="deleteregistration.php?reg_id=<?php echo $row['reg_id']?>"
                                    class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash"
                                        aria-hidden="true"></i></a></td>
                        </tr>
                        <?php $i++;
                }
                ?>
                    </tbody>
                </table>
            </div>
        </div>
        <hr>
        <script>
        $(document).ready(function() {
            $('#blogsregistration').DataTable({
                dom: 'lBfrtip',
                buttons: [{
                        extend: 'excel',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        },
                        customize: function(xlsx) {
                            var sheet = xlsx.xl.worksheets['sheet1.xml'];
                            var col = $('col', sheet);
                            var width_details = [];
                            $('tr:nth-child(1) > td').each(function() {
                                width_details.push($(this).width());
                            });
                            var q = 0;
                            col.each(function() {
                                $(this).attr('width', width_details[q]);
                                q++;
                            });
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: 'th:not(:last-child)'
                        }
                    },

                ],
                
                processing: true,

            });
        });
        </script>
        <?php include "footer.php"?>