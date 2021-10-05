<?php  include('condb.php');

$fiction_id =$_GET['fiction_id'];

$sql5="SELECT fc.*,c.*,ff.file_pdf,ft.fg_address FROM fiction as fc
LEFT JOIN category as c ON fc.category_id=c.category_id
LEFT JOIN  file_fiction as ff ON fc.fiction_id=ff.fiction_id
LEFT JOIN figure_fiction as ft ON fc.fiction_id=ft.fiction_id
WHERE fc.fiction_id='$fiction_id'
ORDER BY fc.fiction_id ASC";
$result5 = mysqli_query($conn, $sql5);
$rows = mysqli_fetch_array($result5);

?>

<?php  include("header.php");   ?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 mt-3 mb-5">
                <img src="assets/image/figure_fiction/<?php echo $rows['fg_address'];  ?>" width="100%" height="400px" alt="">
            </div>
            <div class="col-md-8 mt-3 mb-5">
                <p>
                <h5><?php echo $rows['name_fiction'];  ?></h5>
                </p>
                <p>
                <h5>ชื่อผู้แต่ง: <?php echo $rows['author'];  ?></h5>
                </p>
                <p>
                <h5>หมวดหมู่: <?php echo $rows['name_category'] ;?></h5>
                </p>
                <div class=" col-3 p-2" style="background-color:#FFD54C;">
                <h5><i class="fas fa-shopping-basket"></i> ราคา : <?php echo $rows['price_fiction'];  ?> ฿</h5>
                </div>
                <br>
               <div class="mt-5">
               <a href="index.php" class="btn btn-danger btn-flat col-2">กลับ</a>
               </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                    เรื่องย่อ
                    </div>
                </div>
                <div class="card-body">
                    <p><?php echo $rows['synopsis'];  ?></p>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-md-12">
        <div class="card">
                <div class="card-header">
                    <div class="card-title">
                    ข้อมูลติดต่อซื้อกับผู้ขายโดยตรง
                    </div>
                </div>
                <div class="card-body">
            <p>ชื่อ <?php echo $rows['name'];  ?></p>
            <p>เบอร์โทร <?php echo $rows['phone'];  ?></p>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
    </div>
</section>
s
<?php  include("footer.php");   ?>