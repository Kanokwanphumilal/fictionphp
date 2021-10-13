<?php 
$menu = "index"

?>
<title>หน้าแรก</title>

<?php  

include('condb.php');

$id = $_SESSION['id'];

 $sql= "SELECT d.*,f.*,h.*,ff.fg_address,m.*,fc.file_pdf
 FROM order_detail as d
 INNER JOIN fiction as f ON d.fiction_id=f.fiction_id
 INNER JOIN figure_fiction as ff ON f.fiction_id=ff.fiction_id
 INNER JOIN file_fiction as fc ON f.fiction_id=fc.fiction_id
 INNER JOIN order_head as h ON d.o_id=h.o_id
 INNER JOIN member as m ON h.id=m.id
 WHERE m.id='$id' AND h.o_status=3";
 $rsdetail	= mysqli_query($conn, $sql);
//  $rowdetail	= mysqli_fetch_array($rsdetail);
 $total=0;
 $i=1;

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// exit;


?>

<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="text-center">
            <h4 style="margin-top:70px;">นิยายของฉัน</h4><br>
        </div>
        <table width="100%  align="center" class="table table-bordered table-hover ">
            <tr>
                <th bgcolor="#F7F7ED">#</th>
                <th width="20%" bgcolor="#F7F7ED">ภาพ</th>
                <th bgcolor="#F7F7ED">นิยาย</th>
                <th bgcolor="#F7F7ED">อ่าน</th>
            </tr>
          <tbody>
        <?php foreach($rsdetail as $rowdetail) { ?>
              <tr>
                  <td><?php echo $i++;  ?></td>
                  <td><img src="../assets/image/figure_fiction/<?php echo $rowdetail['fg_address'];  ?>" width="100%" alt=""></td>
                  <td><?php echo $rowdetail['name_fiction'];  ?></td>
                  <td> <a target="_blank" class="btn btn-flat btn-success " href="../assets/PDF/pfd_file/<?php echo $rowdetail['file_pdf'];  ?>">อ่านนิยาย</a> </td>
              </tr>
        <?php  } ?>
          </tbody>
        </table>
    </div>
</section>
<br>
<br>
<!-- /.content -->