<?php
session_start();
$a=$_SESSION['username'];
if($a!="Epitome"){
    echo "<script>location='index.php'</script>";
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php include "header.php" ?>
<?php include "../connect.php" ?>
<main class="page-content">
    <div class="page-content-div1">
        <h1 class="text-center">InvestMent </h1>
    </div>
    <div class="container-fluid">
        <div class="container p-3">
            <div class="table-responsive">
                <table id="blogsregistration" class="table table-bordered">
                    <thead>
                        <tr class="bg-dark text-white">
                            <th>Sl.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Description</th>
                            <th>Product</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        $sql2 = "SELECT * FROM `enquery`";
                        // $sql2 = "select *,(CHAR_LENGTH(family_members) - CHAR_LENGTH(REPLACE(family_members, ',', '')) + 1) as total from registration r,state s,parlimentory_constituency p,assembly_segment a where r.state=s.state_id and r.parlimentory_assembly=p.pc_id and r.assembly_constitancy=a.assembly_id";
                        $result1 = $conn->query($sql2);
                        while ($row = $result1->fetch_assoc()) {
                            // $data=json_decode($row['family_member']);
                        ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td>
                                    <?php echo $row['email']; ?>
                                </td>
                                <td>
                                    <?php echo $row['mobile_no']; ?>
                                </td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['product']; ?></td>
                                <td><a onClick="javascript: return confirm('Please confirm deletion');" href="deleteenquery.php?enquery_id=<?php echo $row['enquery_id']?>" class="action-icon1 btn btn-sm btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
        <?php include "footer.php" ?>