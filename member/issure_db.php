<meta charset="UTF-8">
<?php 

include('condb.php');

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit(); 



$problem_id =  $_POST["problem_id"];
$email =  $_POST["email"];
$id =  $_POST["id"];



	
	$sql = "INSERT INTO problem_reporting (id,email,problem_id) VALUES('$id','$email','$problem_id')";

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error($conn). "<br>$sql");

	mysqli_close($conn);
	
    if($result){
        echo "<script type='text/javascript'>";
        echo "alert('สำเร็จ');";
        echo "window.location = 'issure.php'; ";
        echo "</script>";
        }
        else{
        echo "<script type='text/javascript'>";
        echo "alert('ไม่สำเร็จ');";
        echo "window.location = 'issure.php'; ";
        echo "</script>";
      }
?>