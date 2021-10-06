<?php session_start();  ?>
<nav class="navbar navbar-expand-lg navbar-light bg-warning  fixed-top">
  <a class="navbar-brand" href="index.php">NovelBook</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" href="#">หมวดหมู่</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="#">มาใหม่</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ยอดนิยม</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="ค้นหา">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ค้นหา</button>
    </form>
    <ul class="nav justify-content-center">
    <li class="nav-item">
    <a class="nav-link" href=""><?php echo $_SESSION['name'];?></a>
      </li>
      <li class="nav-item">
    <a class="nav-link" href="logout.php?act=login">ออกจากระบบ</a>
      </li>
    </ul>
  </div>
</nav>