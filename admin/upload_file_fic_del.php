<?php error_reporting( error_reporting() & ~E_NOTICE );
include('condb.php');



$figure_id  =  $_GET['id_file'];

$sql ="DELETE FROM file_fiction WHERE id_file='$id_file' ";
    
$result = mysqli_query($conn, $sql);


    if($result){
      echo "<script type='text/javascript'>";
      echo "alert('สำเร็จ');";
      echo "window.location = 'fiction.php' ";
      echo "</script>";
      }
      else{
      echo "<script type='text/javascript'>";
      echo "alert('Error back to delete again');";
      echo "window.location = 'fiction.php'; ";
      echo "</script>";
    }
?>  