<?php  
session_start();
include('includes/header.php');  
?>

<body class="bg-gradient-primary" style="background-image: url('img/subheader-dark.jpg');" >

  <div class="container py-5">

  <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block" style="background: url('img/o-register-bg.jpg');background-position: center;background-size: cover;" ></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Register as Organizer!</h1>
                            </div>
                            <form action="class.php" class="user" method="POST" enctype="multipart/form-data">

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-4 mb-sm-0">
                                        <input type="text" name="username" class="form-control form-control-user" id="username" placeholder="username">
                                    </div>
                                    <div class="col-sm-6 mb-4 mb-sm-0">
                                        <input type="text" name="fullName" class="form-control form-control-user" id="fullName" placeholder="Enter Full Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email_id" class="form-control form-control-user" id="email_id" placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control form-control-user" id="password" placeholder="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="cpassword" class="form-control form-control-user" id="cpassword" placeholder="Repeat Password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-4 mb-sm-0">
                                    <label for="">Upload Profile Photo</label>
                                  <input type="file" name="o_profilePhoto" class="btn btn-primary btn-user "></input>
                                  </div>
                                </div>

                                <button type="submit" name="organizers_register" class="btn btn-primary btn-user btn-block">Register Account</button>
                                <hr>
                                <h1 class="h4 text-gray-900 mb-4" style="text-align:center;" >OR</h1>
                                <button class="btn btn-primary btn-user btn-block">Log in</button>
                
                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="">Forgot Password?</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



  </div>

</body>









<?php  
include('includes/scripts.php');  

?>