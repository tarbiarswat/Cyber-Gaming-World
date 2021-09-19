<?php   
include('includes/header.php');  
?>

<body class="bg-gradient-primary" style="background-image: url('img/subheader-dark.jpg');" >

  <div class="container py-5">

      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block " style="background: url('img/o-register-bg.jpg');background-position: center;background-size: cover;"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                <form action="class.php" class="user" method="POST">
                                    <div class="form-group">
                                        <input type="email" name="email_id" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <button name="organizer_login" class="btn btn-primary btn-user btn-block">Login</button>
                                   
                                    
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="register.php">Create an Account!</a>
                                </div>
                                <div class="text-left">
                                <a class="small" href="../index.php"> <i class="fas fa-arrow-left"></i> Back To Home </a>
                                </div>
                            </div>
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