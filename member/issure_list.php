<?php  include('condb.php');

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
// exit;


$id = $_SESSION['id'];


$sql5="SELECT * FROM problemtopic ";
$result5 = mysqli_query($conn, $sql5);

$sql6="SELECT email FROM member  WHERE id ='$id'";
$result6 = mysqli_query($conn, $sql6);
$rr = mysqli_fetch_array($result6);

?>
<section class="container">
<h4 class="text-center mt-4 mb-3">รายงานปัญหา</h4>
<form action="issure_db.php" method="post">
<div class="form-group">
            <div class="col-md-12">
                <div class="form-group">
                <label for="exampleFormControlSelect1">หัวข้อรายงานปัญหา</label>
                <select class="form-control" id="exampleFormControlSelect1" name="problem_id">
            <?php foreach($result5 as $row_r) {?>
                <option value="<?php  echo $row_r['problem_id'] ; ?>"><?php  echo $row_r['problem_name'] ; ?></option>
                <?php  }?>
                </select>
            </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <label for="exampleFormControlSelect1">อีเมล</label>
               <input type="email" name="email" class="form-control" value="<?php echo $rr['email'];?>" readonly>
            </div>
            <input type="hidden"  name="id" value="<?php echo $id;?>">
            <button  class="btn btn-flat btn-success" type="submit">รายงาน</button>
            </div>
        </div>
    
</form>
</section>