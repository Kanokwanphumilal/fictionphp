<?php session_start();
include('condb.php') ;

$id= $_SESSION['id'];

$sql="SELECT * FROM member WHERE id='$id' ";
$rs= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($rs);
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Novel Book</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/image/m_img/<?php echo $row['image'];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['name'];?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
         

               <li class="nav-item">
            <a href="fiction.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>จัดการข้อมูลนิยาย</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="order.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>จัดการสถานะการชำระเงิน</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>รายงานข้อมูลนิยาย</p>
            </a>
          </li>



          <li class="nav-item">
            <a href="profile.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>บัญชีผู้ใช้งาน</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="actor.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>จัดการผู้แต่ง</p>
            </a>
          </li>




          <li class="nav-item">
            <a href="report.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>รายงานการขาย</p>
            </a>
          </li>


          <li class="nav-item">
            <a href="issure.php" class="nav-link">
             <i class="far fa-circle nav-icon"></i>
              <p>รายงานปัญหา</p>
            </a>
          </li>


          <li class="nav-item mt-4">
            <a href="logout.php" class="nav-link">
            <i class="fas fa-sign-out-alt nav-icon"></i>
              <p>ออกจากระบบ</p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

