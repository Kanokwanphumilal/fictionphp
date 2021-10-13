<?php  include('condb.php');

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// exit;



$sql5="SELECT pr.*,pp.* FROM problem_reporting as pr
INNER JOIN problemtopic as pp ON pr.problem_id=pp.problem_id
";
$result55 = mysqli_query($conn, $sql5);

$i=1;


?>

<table class="table table-bordered table-striped datatable  border" align="center">
    <thead>
        <tr class="info">
            <th scope="col">#</th>
            <th class="text-nowrap"scope="col">รหัสหัวข้อปัญหา</th>
            <th class="text-nowrap"scope="col">เมลผู้รายงานปัญหา</th>
            <th class="text-nowrap"scope="col">หัวข้อปัญหา</th>
        </tr>
    </thead>
    <?php foreach($result55 as $row_p) { ?>
    <tr>
        <th scope="row"><?php echo $i++ ?></th>
        <td><?php echo $row_p['problem_id']; ?></td>
        <td><?php echo $row_p['email']; ?></td>
        <td><?php echo $row_p['problem_name']; ?></td>
    </tr>
    <?php }  ?>


</table>