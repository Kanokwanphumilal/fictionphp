<?php 
$menu = "order";

include('condb.php');

?>

<title>รายงาน</title>
<?php include("header.php"); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
<div class="container">
        <div class="">
            <h3 class="text-center">รายงานยอดขายประจำเดือน</h3><br>
        </div>
        <br>
        <?php
           
           include('report_mount.php'); 
           
        ?>
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