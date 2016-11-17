<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register User</title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

	<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery_3_1_1.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

	<style>
	.panel-info > .panel-heading {
		background-color: #5cb85c;
		color: white;
	}
	#signinlink {
		color: white;
	}
	</style>
</head>
<body>
	<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
							<div class="panel panel-info">
									<div class="panel-heading">
											<div class="panel-title">Sign Up</div>
											<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="<?php echo base_url('index.php/Login'); ?>">Sign In</a></div>
									</div>
									<div class="panel-body" >
										<?php echo validation_errors(); ?>
											<form id="signupform" class="form-horizontal" role="form"  method="POST" action="<?php echo base_url("index.php/RegisterUser"); ?>" >
													<div id="signupalert" style="display:none" class="alert alert-danger">
															<p>Error:</p>
															<span></span>
													</div>
													<div class="form-group">
															<label for="email" class="col-md-3 control-label">Email</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>">
															</div>
													</div>
													<div class="form-group">
															<label for="username" class="col-md-3 control-label">Username</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
															</div>
													</div>
													<div class="form-group">
															<label for="firstname" class="col-md-3 control-label">First Name</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo set_value('firstname'); ?>">
															</div>
													</div>
													<div class="form-group">
															<label for="lastname" class="col-md-3 control-label">Last Name</label>
															<div class="col-md-9">
																	<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo set_value('lastname'); ?>">
															</div>
													</div>
													<div class="form-group">
															<label for="password" class="col-md-3 control-label">Password</label>
															<div class="col-md-9">
																	<input type="password" class="form-control" name="passwd" placeholder="Password" value="<?php echo set_value('passwd'); ?>">
															</div>
													</div>
													<div class="form-group">
															<label for="password" class="col-md-3 control-label">Confirm Password</label>
															<div class="col-md-9">
																	<input type="password" class="form-control" name="cpasswd" placeholder="Confirm Password" value="<?php echo set_value('cpasswd'); ?>">
															</div>
													</div>
													<div class="form-group">
															<div class="col-md-offset-3 col-md-9">
																	<button id="btn-signup" type="submit" class="btn btn-success"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
															</div>
													</div>
												</form>
									 </div>
							</div>
	 </div>
</body>
</html>
