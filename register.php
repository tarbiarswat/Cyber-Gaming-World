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
                                    <p>Already a member? Login <a href="login.php">here<span></span></a>.</p>
                                    <form name="contactForm" id='contact_form' class="form-border" method="post" action='blank.php'>


                                        <div class="field-set">
                                        <label>Name</label>
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Full Name" >
                                        </div>

                                        <div class="field-set">
                                        <label>Username</label>
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Username" >
                                        </div>

                                        <div class="field-set">
                                        <label>Email</label>
                                        <input type='text' name='email' id='email' class="form-control" placeholder="Email address">
                                        </div>

                                        <div class="field-set">
                                        <label>Phone</label>
                                        <input type='text' name='name' id='name' class="form-control" placeholder="01XXX-YYYYYY" >
                                        </div>

                                        <div class="field-set">
                                        <label>Password</label>
                                        <input type='password' name='password' id='password' class="form-control" placeholder="password">
                                        </div>
                                        <div class="field-set">
                                        <label>Re-Type Password</label>
                                        <input type='password' name='password' id='password' class="form-control" placeholder="Re-Type password">
                                        </div>
                                        
                                        <div class="field-set">
                                        <input type='submit' id='send_message' value='Register' class="btn btn-main btn-fullwidth color-2">
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                        
                                        <div class="spacer-single"></div>

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