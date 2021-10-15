<br>
<br>

<style>
    body{
        background-image: url("assets/image/bk2.jpg") ;
    }
    .card{
        opacity: 0.9;
    }
</style>

<div class="container">
    <div class="row ">
        <div class="offset-md-3 col-md-6 mt-5">
            <div class="card">
            <h5 class="card-header text-center">สมัครสมาชิก</h5>
                <div class="card-body">
                   <form  name="register" action="register.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input  name="name" type="text" required class="form-control" id="m_name" placeholder="" />
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-calendar-alt"></i></i></div>
                                </div>
                                 <input  name="date" type="date" required class="form-control" id="m_date" placeholder="" />
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                                </div>
                                 <input  name="email" type="email" class="form-control" id="m_email" required  placeholder=""/>
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input  name="username" type="text" required class="form-control" /> 
                            </div>

                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-key"></i></div>
                                </div>
                                 <input  name="password" type="password" required class="form-control" id="m_pass"/>
                            </div>

                            <!-- <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-users-cog"></i></div>
                                </div>
                               <input  name="member_lavel" type="password" required class="form-control" id="m_lavel"/>
                            </div> -->
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                </div>
                                <input type="hidden" name="member_lavel" value="member">
                             <button type="submit" class="btn btn-primary btn-block mb-2" id="btn"><span class="glyphicon glyphicon-saved"></span> สมัครสมาชิก  
                             </button> <a href="index.php" type="button" class="btn btn-danger btn-block mb-2" id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก  </a>
                            </div>
 
                        <!-- <button type="submit" class="btn btn-primary btn-block mb-2" id="btn"><span class="glyphicon glyphicon-saved"></span> สมัครสมาชิก  
                        </button> <a href="index.php" type="button" class="btn btn-danger btn-block mb-2" id="btn"><span class="glyphicon glyphicon-saved"></span> ยกเลิก  </a> -->

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

