<?php include('condb.php');
$menu = "index";

$sql_total ="SELECT SUM(o_total) AS total        
FROM order_head
WHERE o_status IN(3)";
$rs_total = mysqli_query($conn,$sql_total);
$count_total = mysqli_fetch_array($rs_total);

$sql_confirm ="SELECT * FROM order_head 
WHERE o_status=2";
$rs_confirm = mysqli_query($conn,$sql_confirm);
$count_confirm=mysqli_num_rows($rs_confirm);


?>

<title>หน้าแรก</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<br><br>
<!-- Main content -->
<section class="content">



    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><i class="fas fa-database"></i> Dasborad</h3>
        </div>
        <br>
        <div class="card-body p-1">

            <div class="row">
                <div class="col-md-4">
                    <div class="small-box bg-primary">
                        <div class="inner">
                        <h1 class="text-white"><?php echo number_format($count_total['total']);  ?>  บาท</h1>
                            <p>ยอดขายรายเดือน</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-info">
                        <div class="inner">
                        <h1 class="text-white"><?php echo $count_confirm;  ?>  รายการ</h1>
                            <p>รอยืนยันชำระเงิน</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="small-box bg-Warning">
                        <div class="inner">
                            <h3>ข้อมูลการขาย</h3>
                            <p>ประจำเดือน</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <a href="#" class="small-box-footer">
                            More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </div>
                </div>
            </div>




        </div>

    </div>







    </div>
    <!-- /.col -->
    </div>



</section>
<!-- /.content -->

<?php include('footer.php'); ?>

<script>
$(function() {
    $(".datatable").DataTable();
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    // http://fordev22.com/
    // });
});
</script>

</body>

</html>