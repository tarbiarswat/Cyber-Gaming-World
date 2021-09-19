<!DOCTYPE html>
<html lang="en">

<?php  include('includes/header.php')  ?>

<div class="no-bottom no-top" id="content">
    <div id="top"></div>
			
		<section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/subheader-dark.jpg) top">
			<div class="overlay-gradient t50">
				<div class="center-y relative">
					<div class="container">
					<div class="row">
                        <div class="col-lg-11">
                            <div class="text-center">
                                <h2>Welcome Back Cyber Gaming World's Troops!</h2>
                                <div class="small-border bg-color-2 text-left"></div>
                            </div>
                        </div>

						<div class="col-lg-4 col-md-6 mb-sm-30">
                            <div onclick="location.href='organizers/login.php';" style="cursor: pointer;" class="feature-box f-boxed style-2">
                                <i class=" bg-color-2 i-boxed icon_wallet"></i>
                                <div class="text">
                                    <h4>Login as Organizer</h4>
                                </div>
                            </div>
							<div class="spacer-single"></div>
							<div onclick="location.href='admin/login.php';" style="cursor: pointer;" class="feature-box f-boxed style-2">
                                <i class=" bg-color-2 i-boxed icon_wallet"></i>
                                <div class="text">
                                    <h4>Login as Admin</h4>
                                </div>
                            </div>
                        </div>

						

						
							
								<div class="col-lg-5 offset-lg-3" >
									<div class="box-rounded padding40" data-bgcolor="#21273e">
										<h3 class="mb10">Login as Gamer</h3>
										<p>Login using an existing account or create a new account <a href="g-register.php">here<span></span></a>.</p>
										<form action='class.php' class="form-border" method="post" >

                                            <div class="field-set">
                                                <input type='text' name='email_id' id='email_id' class="form-control" placeholder="Enter your email">
                                            </div>
											
											 <div class="field-set">
                                                <input type='password' name='password' id='password' class="form-control" placeholder="password">
                                            </div>
											
											<div class="field-set">
												<input type='submit' name="gamers_login" id='gamers_login' value='Submit' class="btn btn-main btn-fullwidth color-2">
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