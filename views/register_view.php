<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tenant1 || Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/custom.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.css'); ?>" />
</head>
<body>
	<div class="container" id="header">
		<img src="<?php echo base_url('assets/images/Tenant1Logo.png'); ?>" alt="responsive image" class="img-responsive pull-left" width="120px"/>
		<h1 id="adj"><b>DENTAL </b>CLINIC</h1>				
		<small>
		<ul class="nav navbar-nav navbar-right">
			<li><a href="<?php echo site_url('tenant1controller/register_view'); ?>"><span class="glyphicon glyphicon-user"></span> <b>SIGN UP</b></a></li>
			<li><a href="<?php echo site_url('tenant1controller/login_view'); ?>"><span class="glyphicon glyphicon-log-in"></span> <b>LOGIN</b></a></li>
    	</ul>	
		</small>	
	</div>
	
	<div class="container">
		<nav>
			<ul class="nav navbar-nav">
			    <li><a id="nvclr" href="<?php echo site_url('tenant1controller'); ?>"><b>HOME</b></a></li>
			    <li><a id="nvclr" href=""><b>APPOINTMENT</b></a></li>
			    <li><a id="nvclr" href=""><b>ABOUT US</b></a></li>
	      		<li><a id="nvclr" href=""><b>DENTISTS</b></a></li>
	      		<li><a id="nvclr" href=""><b>LOCATION</b></a></li>
	      		<li><a id="nvclr" href=""><b>SERVICES</b></a></li>
	      		<li><a id="nvclr" href=""><b>UPDATES</b></a></li>
			</ul>
		</nav>
	</div>
	<div class="container" style="margin-top:50px; margin-bottom:50px">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div style="background-color:#18b2e7">
					<div class="panel-heading">
						<h3 class="panel-title" style="color:white">Registration</h3>
					</div>
					<div class="panel-body">
						<?php
							$error_msg = $this->session->flashdata('error_msg');
							if ($error_msg) {
								echo $error_msg;
							}
						?>
						<form role="form" method="post" action="<?php echo site_url('tenant1controller/register_user'); ?>">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="First name" name="UserFirstName" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Middle name" name="UserMiddleName" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Last name" name="UserLastName" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Email" name="UserEmail" type="email">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="UserPass" type="Password">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="YYYY-DD-MM" name="UserBirthdate" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Mobile no." name="UserContact" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Gender" name="UserGender" type="text">
								</div>
								<input class="btn btn-lg btn-success btn-block" type="submit" name="register" value="Register">
							</fieldset>
						</form>
						<br>
						<center><b>Already registered ?</b> <br><a style="color:white" href="<?php echo site_url('tenant1controller/login_view'); ?>">Login here</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container" id="footer">
		<div class="col-md-12">
			ToothFairy &copy; 2018, All Right Reserved
		</div>
	</div>
</body>
</html>