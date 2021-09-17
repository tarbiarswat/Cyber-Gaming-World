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
							<h1>Login.</h1>
							<p class="lead">Desc..</p>
						</div>
							
						<div class="col-lg-4 offset-lg-2 wow fadeIn" >
									<div class="box-rounded padding40" data-bgcolor="#21273e">
										<h3 class="mb10">Sign In</h3>
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