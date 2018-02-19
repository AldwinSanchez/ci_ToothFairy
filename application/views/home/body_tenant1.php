<body>
	<header class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-3 header-logo">
					<br>
					<img src="assets/images/logo3.png" alt="logo" class="img-responsive logo">
				</div>
				<div class="col-md-9">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav navbar-right">
					        <li><a class="menu active" href="#home" ><small>HOME</small></a></li>
									<li><a class="menu" href="#about"><small>ABOUT US</small></a></li>
									<li><a class="menu" href="#service"><small>SERVICES</small></a></li>
									<li><a class="menu" href="#dentist"><small>DENTISTS</small></a></li>
									<li><a class="menu" href="#contact"><small>CONTACT US</small></a></li>
									<li><a class="menu" href="#setappoinment"><small>APPOINTMENT</small></a></li>
									<li role="presentation" class="divider"><a>|</a></li>
									<li><a href="<?php echo site_url('Home/login_view'); ?>"><small>Log In</small></a></li>
				          <li><a href="<?php echo site_url('Home/register_view'); ?>"><small>Sign Up</small></a></li>
					      </ul>
					    </div>
					  </div>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="assets/images/slide1.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality dental service</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="assets/images/slide2.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality dental service</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="assets/images/slide3.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality dental service</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="assets/images/slide4.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality dental service</p>
		               			<button>learn more</button>
			                </div>
			            </div>
			        </div>
			        <!-- Controls -->
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>about us</h2>
				<h4>Here at Tooth Fairy Dental Clinic, our top priority is to give you quality yet affordable dental treatment. From dental check-up to the most sophisticated dental treatment, we take time to explain your options and  answer all your questions about the procedures, your payment options and more.

We welcome you with warm smiles as you set foot at our clinic. Our modern and zen inspired treatment areas will definitely bring you a comfortable experience you won’t find anywhere else.

We are equipped with state of the art facilities and technology to handle the most rigid requirements of our patients here in the Philippines and abroad.

Our team of expert dentists have gone through several training, locally and internationally. With the support of our dental nurses, hygienist, assistants, front desk officers, we offer you unmatched personalized service.

Let us be partners for all your dental needs and we promise to bring you a lifetime of healthy smiles.</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="assets/images/genden.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>G</h1>
							</div>
							<h3>General Dentistry</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="assets/images/cosden.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>

							<h3>Cosmetic Dentistry</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="assets/images/specden.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>S</h1>
							</div>
							<h3>Specialised Dentistry</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of about section -->


	<!-- service section starts here -->
	<section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>our services</h2>
				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="assets/images/service1.png" alt="">
							</div>
						</div>
						<h3>Heart problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="assets/images/service2.png" alt="">
							</div>
						</div>
						<h3>brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="assets/images/service3.png" alt="">
							</div>
						</div>
						<h3>knee problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="assets/images/service4.png" alt="">
							</div>
						</div>
						<h3>human bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->


	<!-- dentist section -->
	<section class="dentist" id="dentist">
		<div class="container">
			<div class="row">
				<div class="dentist-heading text-center">
					<h2>Dentists</h2>
					<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="assets/images/member1.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. M. Weiner, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Danielle, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="assets/images/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="assets/images/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Caitlin, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Joseph, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="assets/images/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="assets/images/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Michael, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Hasina, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="assets/images/member6.jpg" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of dentist section -->

	<!-- map section -->
	<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , London, UK, CP 123</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>leave us a message</h3>

						<form class="form">
							<input class="name" type="text" placeholder="Name">
							<input class="email" type="email" placeholder="Email">
							<input class="phone" type="text" placeholder="Phone No:">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->
	<!-- setappointment section -->
	<section class="appointment" id="setappoinment">
		<div id="intro">
			<div class="intro-body">
				<div class="container">
					<div class="row">
						<div class="appointment-caption clearfix">
							<div class="appointment-heading text-center">
								<h2>Appointment</h2>
							</div>
							<div class="col-md-6 col-md-offset-3 appointment-form">
								<h3>Fill in the form below:</h3>
								<div class="form">
									<form role="form" action="assets/contact.php" method="post">
										<div class="form-group">
											<label for="c-form-name">
												<span class="label-text">Name</span>
												<span class="contact-error"></span>
											</label>
											<input type="text" name="name" placeholder="Name" class="c-form-name form-control" id="c-form-name">
										 </div>
										<div class="form-group">
											<label for="c-form-gender">
												<span class="label-text">Gender</span>
												<span class="contact-error"></span>
											</label>
											<select name="gender" class="c-form-profession form-control" id="c-form-profession">
												<option value="Your gender is">Choose your gender</option>
												<option value="Female">Female</option>
												<option value="Male">Male</option>
											</select>
										</div>
										<div class="form-group">
											<label for="c-form-service">
												<span class="label-text">Services</span>
												<span class="contact-error"></span>
											</label>
											<select name="gender" class="c-form-profession form-control" id="c-form-profession">
												<option value="Choose your Service...">Choose your Service</option>
												<option value="Teeth Whitening">Teeth Whitening</option>
												<option value="Fillings">Fillings</option>
												<option value="Dentures">Dentures</option>
												<option value="Root canal">Root canal</option>
												<option value="Dental Implants">Dental Implants</option>
												<option value="Braces">Braces</option>
												<option value="Others">Others</option>
											</select>
										</div>
										<div class="form-group">
											<label for="c-form-email">
												<span class="label-text">Email</span>
												<span class="contact-error"></span>
											</label>
											<input type="text" name="email" placeholder="Email" class="c-form-email form-control" id="c-form-email">
										</div>
										<div class="form-group">
											<label for="c-form-email">
												<span class="label-text">Contact Number:</span>
												<span class="contact-error"></span>
											</label>
												<input type="text" name="number" placeholder="Phone no." class="c-form-email form-control" id="c-form-number">
										</div>
										<div class="form-group">
											<label for="c-form-appointment">
												<span class="label-text">Set Appointment:</span>
												<span class="contact-error"></span>
											</label>
											<input type="date" name="appointment" max="2100-12-31" class="c-form-email form-control" id="c-form-email">
										</div>

										<div class="form-group">
											<label for="c-form-message">
												<span class="label-text">Message:</span>
												<span class="contact-error"></span>
											 </label>
											<textarea name="message" placeholder="Message" class="c-form-message form-control" id="c-form-message"></textarea>
										</div>
										<input class="submit-btn" type="submit" value="SUBMIT">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='https://andwecode.com/wp-content/uploads/2015/10/jquery.leanModal.min_.js'></script>
		<script  src="assets/js/login.js"></script>
	</div>
	</section><!-- end of appointment section -->



	<!-- script tags
	============================================================= -->
	<script src="assets/js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="assets/js/gmaps.js"></script>
	<script src="assets/js/smoothscroll.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
