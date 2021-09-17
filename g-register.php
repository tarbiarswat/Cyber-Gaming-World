<!DOCTYPE html>
<html lang="en">

<?php  include('includes/header.php')  ?>

<div class="no-bottom no-top" id="content">
    <div id="top"></div>

        <section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/subheader-dark.jpg) top">
            <div class="overlay-gradient t50">
                <div class="center-y relative">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-5 text-light">
                            <div class="spacer-10"></div>
                            <h1>Join us & win real prizes</h1>
                        </div>
                            
                            <div class="col-lg-5 offset-lg-1">
                                <div class="box-rounded padding30" data-bgcolor="#21273e">
                                    <h3 class="mb10">Register here</h3>
                                    <p>Already a member? Login <a href="g-login.php">here<span></span></a>.</p>
                                    <form action='class.php' class="form-border" method="post" enctype="multipart/form-data" >


                                        <div class="field-set">
                                        <label>Username</label>
                                        <input type='text' name='username' id='username' class="form-control" placeholder="Username" >
                                        </div>
                                    
                                        <div class="field-set">
                                        <label>Full Name</label>
                                        <input type='text' name='fullname' id='fullname' class="form-control" placeholder="Full Name" >
                                        </div>
                                       

                                        <div class="field-set">
                                        <label>Email</label>
                                        <input type='text' name='email_id' id='email_id' class="form-control" placeholder="Email address">
                                        </div>


                                        <div class="field-set">
                                        <label>Password</label>
                                        <input type='password' name='password' id='password' class="form-control" placeholder="password">
                                        </div>
                                        <div class="field-set">
                                        <label>Re-Type Password</label>
                                        <input type='password' name='cpassword' id='cpassword' class="form-control" placeholder="Confirm password">
                                        </div>

                                        <div class="field-set">
                                        <label>Profile Photo</label>
                                        <input type='file' name='user_profilePhoto' id='user_profilePhoto' class="btn btn-main btn-fullwidth color-2 " >
                                        </div>
                                        <div class="spacer-single"></div>
                                        
                                        <div class="field-set" >
                                        <input type='submit' name="gamers_register" id='gamer_register' value='Register' class="btn btn-main btn-fullwidth color-2"> &nbsp;&nbsp;&nbsp;&nbsp;
                                        
                                        </div>
                                        
                                        <div class="clearfix"></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>		
    </div>
</div>

<?php  include('includes/footer.php')  ?>

<?php  include('includes/scripts.php')  ?>

</body>

</html>