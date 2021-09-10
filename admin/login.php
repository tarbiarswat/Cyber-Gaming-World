<?php  
session_start();
include('includes/header.php');  
?>

<body class="bg-gradient-primary">

  <div class="container py-5">

    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                  <img class="img-profile" src="img/icons8-lock-40.png">
                  
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    
 
                  </div>
                  <form class="user" action="#" method="POST">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user"  placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user"  placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" name= "login_btn"  class="btn btn-primary btn-user btn-block">  Login</button>
                
                
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#">Forgot Password?</a>
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