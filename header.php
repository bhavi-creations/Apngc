<?php
	// X-Frame-Options for legacy browser support
	header("X-Frame-Options: DENY");

	// Content-Security-Policy for modern browser support
	header("Content-Security-Policy: frame-ancestors 'self'; img-src 'self'; ");

	// Prevent MIME type sniffing
	header("X-Content-Type-Options: nosniff");

	// Enable XSS protection
	header("X-XSS-Protection: 1; mode=block");

	// Strict Transport Security (HSTS)
	header("Strict-Transport-Security: max-age=63072000; includeSubDomains; preload");

	// Referrer-Policy: Control referrer information
	header("Referrer-Policy: strict-origin-when-cross-origin");

	// Permissions-Policy: Restrict API and feature usage
	header("Permissions-Policy: geolocation=(), camera=(), microphone=(), fullscreen=(self)");
?>
<header>
	<!--CITY TOP WRAP START-->
	<!-- <div class="city_top_wrap">


		 


	</div> -->

	<div class="bg-image">
		<div class="container">
			<div class="row align-items-center">
				<!-- Logo Section -->
				<div class="col-1 text-center first_div">
					<img src="images/img/aplogo.png" class="img-fluid aplogo_size" alt="AP Logo">
				</div>
				<!-- Text Section -->
				<div class="col-9 text-center">
					<p class="text_need_white    ">ANDHRA PRADESH NATIONAL GREEN CROPS</p>
					<br>
					<p class="text_need_white_small">Government Of Andhra Pradesh</p>
				</div>
				<!-- Multiple Logos Section -->
				<div class="col-1 text-center">
					<img src="images/img/cm.png" class="img-fluid aplogo_size_pp profile_pic" alt="AP Logo">
					<!-- <p class="pp_bio">Chief Minister</p> -->
				</div>
				<div class="col-1 text-center">
					<img src="images/img/dcm.jpg" class="img-fluid aplogo_size_pp2  profile_pic" alt="AP Logo">
					<!-- <p class="pp_bio2">Deputy Chief Minister</p> -->

				</div>
			</div>
		</div>
	</div>

	<!--CITY TOP WRAP END-->

	<!--CITY TOP NAVIGATION START-->
	<div class="city_top_navigation">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="navigation">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Activities</a>
								<ul class="child">
									<li><a href="wwf.php">WWF</a></li>
									<li><a href="gsp.php">GSP</a></li>
									<li><a href="gstp.php">GSTP</a></li>
									<li><a href="ngoactivities.php">NGC Activities</a></li>
								</ul>
							</li>
							<li><a href="structure.php">Structure</a></li>

							<li><a href="districtDetails.php">District Details</a></li>

							<li><a href="actionPlans.php">Action Plans</a></li>

							<li><a href="#">Media Gallery</a>

								<ul class="dropdown">

									<li><a href="photo.php">Photo Gallery</a></li>

									<li><a href="video.php">Video Gallery</a></li>
								</ul>
							</li>

							<li><a href="#">Best Presentations</a>

								<ul class="dropdown">

									<li><a href="awards.php">Awards</a></li>
									<li><a href="success_stories.php">Success Stories</a></li>
									<!-- <li><a href="media.php">Media</a></li> -->
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>

						</ul>
					</div>

				</div>

			</div>
		</div>
	</div>
	<!--CITY TOP NAVIGATION END-->

	<!--CITY TOP NAVIGATION START-->
	<div class="city_top_navigation hide">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9">
					<div class="navigation">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Activities</a>
								<ul class="child">
									<li><a href="wwf.php">WWF</a></li>
									<li><a href="gsp.php">GSP</a></li>
									<li><a href="gstp.php">GSTP</a></li>
									<li><a href="ngoactivities.php">NGC Activities</a></li>
								</ul>
							</li>
							<li><a href="structure.php">Structure</a></li>

							<li><a href="districtDetails.php">District Details</a></li>

							<li><a href="actionPlans.php">Action Plans</a></li>

							<li><a href="#">Media Gallery</a>

								<ul class="dropdown">

									<li><a href="photo.php">Photo Gallery</a></li>

									<li><a href="video.php">Video Gallery</a></li>
								</ul>
							</li>

							<li><a href="#">Best Presentations</a>

								<ul class="dropdown">

									<li><a href="awards.php">Awards</a></li>
									<li><a href="success_stories.php">Success Stories</a></li>
									<li><a href="media.php">Media</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>

						</ul>
					</div>
					<!--DL Menu Start-->
					<div id="kode-responsive-navigation1" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">

							<li><a href="index.php">Home</a></li>
							<li><a href="#">Activities</a>
								<ul class="child">
									<li><a href="wwf.php">WWF</a></li>
									<li><a href="gsp.php">GSP</a></li>
									<li><a href="gstp.php">GSTP</a></li>
									<li><a href="ngoactivities.php">NGC Activities</a></li>
								</ul>
							</li>
							<li><a href="structure.php">Structure</a></li>

							<li><a href="districtDetails.php">District Details</a></li>

							<li><a href="actionPlans.php">Action Plans</a></li>

							<li><a href="#">Media Gallery</a>

								<ul class="dropdown">

									<li><a href="photo.php">Photo Gallery</a></li>

									<li><a href="video.php">Video Gallery</a></li>
								</ul>
							</li>

							<li><a href="#">Best Presentations</a>

								<ul class="dropdown">

									<li><a href="awards.php">Awards</a></li>
									<li><a href="success_stories.php">Success Stories</a></li>
									<li><a href="media.php">Media</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contact Us</a></li>

						</ul>
					</div>
					<!--DL Menu END-->
				</div>

			</div>
		</div>
	</div>
	<!--CITY TOP NAVIGATION END-->
</header>