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
							
							<div class="col-lg-4 offset-lg-2">
								<div class="box-rounded padding40">
									<h3 class="mb10">Sign In</h3>
									<p>Login using an existing account or create a new account <a href="register.php">here<span></span></a>.</p>
									<form name="contactForm" id='contact_form' class="form-border" method="post" action='blank.php'>

										<div class="field-set">
											<input type='text' name='email' id='email' class="form-control" placeholder="username">
										</div>
										
											<div class="field-set">
											<input type='password' name='password' id='password' class="form-control" placeholder="password">
										</div>
										
										<div class="field-set">
											<input type='submit' id='send_message' value='Submit' class="btn btn-main btn-fullwidth color-2">
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