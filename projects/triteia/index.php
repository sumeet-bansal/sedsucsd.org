<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Triteia | SEDS UCSD</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<meta name="author" content="Albert Lin">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="shortcut icon" href="https://sedsucsd.org/assets/images/misc/icon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/style.css">
	<link rel="stylesheet" href="../../assets/css/style-responsive.css">
	<link rel="stylesheet" href="../../assets/css/animate.min.css">
	<link rel="stylesheet" href="../../assets/css/vertical-rhythm.min.css">
	<link rel="stylesheet" href="../../assets/css/owl.carousel.css">
	<link rel="stylesheet" href="../../assets/css/magnific-popup.css">
	<link rel="stylesheet" href="../../assets/css/margin-padding-text.css">

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64987797-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments)};
		gtag('js', new Date());
		gtag('config', 'UA-64987797-1');
	</script>

</head>
<body class="appear-animate">

	<!-- Page Loader -->
	<div class="page-loader">
		<div class="loader">Loading...</div>
	</div>
	<!-- End Page Loader -->

	<!-- Page Wrap -->
	<div class="page" id="top">

		<!-- Navigation panel -->
		<?php include '../../assets/blocks/navbar.php'?>
		<!-- End Navigation panel -->

		<!-- Home -->
		<section class="home-section bg-dark-alfa-50 parallax-2 fixed-height-small" data-background="../../assets/images/projects/triteia/moon.gif" id="home">
			<div class="js-height-parent container">

				<!-- Hero Content -->
				<div class="home-content">
					<div class="home-text">
						<h2 class="hs-line-14 font-alt mb-50 mb-xs-30">Triteia</h2>
						<h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">The SEDS UCSD CubeSat</h1>
					</div>
				</div>
				<!-- End Hero Content -->
			</div>
		</section>
		<!-- End Home Section -->

		<!-- Section -->
		<section class="page-section" id="about_cubesat">
			<div class="container relative">
				<div class="row">
					<h1 class="font-condensed align-left mt-10 mb-20 mb-sm-20">About Triteia</h1>
				</div>

				<div class="section-text">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<img src="../../assets/images/projects/triteia/cubesat_front_opened.jpg" alt="engine">
						</div>
						<div class="col-md-8 col-sm-8 mb-sm-100 mb-xs-60">
							Triteia was a semi-autonomous chemically propelled 6U CubeSat competing in NASA's CubeQuest Competition. Triteia was one of the first CubeSats to venture into deep space, paving the way for future low-cost space missions. With the incorporation of an additively manufactured thruster and 450 m/s of Delta-V, Triteia was able to reach its target in days instead of months using low-thrust propulsion.
							<br><br>
							Triteia represented a new agile approach to space mission design. The incorporation of the CHREC space processor allowed for complex
							autonomous functions and data processing in a radiation rich environment. The average satellite used out-dated high-heritage processors,
							thousands of time slower than a consumer PC, and Triteia paved the way for the incorporation of modern high-level software development
							for future space missions.
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Section -->

		<!-- Divider -->
		<hr class="mt-0 mb-0 "/>

		<!-- Services Section -->
		<section class="page-section" id="services">
			<div class="container relative">

				<h1 class="font-condensed align-left mt-10 mb-20 mb-sm-20">Technologies</h1>

				<!-- Nav tabs -->
				<ul class="nav nav-tabs tpl-alt-tabs font-alt pt-30 pt-sm-0 pb-30 pb-sm-0">

					<li class="active ml-20 mr-20">
						<a href="#technologies-engine" data-toggle="tab">
							<div class="alt-tabs-icon">
								<i class="fa fa-fire"></i>
							</div>
							Propulsion
						</a>
					</li>
					<li class="ml-20 mr-20">
						<a href="#technologies-avionics" data-toggle="tab">
							<div class="alt-tabs-icon">
								<i class="fa fa-location-arrow"></i>
							</div>
							Avionics
						</a>
					</li>
					<li class="ml-20 mr-20">
						<a href="#technologies-communication" data-toggle="tab">
							<div class="alt-tabs-icon">
								<i class="fa fa-signal"></i>
							</div>
							Communication
						</a>
					</li>
					<li class="ml-20 mr-20">
						<a href="#technologies-structure" data-toggle="tab">
							<div class="alt-tabs-icon">
								<i class="fa fa-th"></i>
							</div>
							Structure
						</a>
					</li>
					<li class="ml-20 mr-20">
						<a href="#technologies-power" data-toggle="tab">
							<div class="alt-tabs-icon">
								<i class="fa fa-bolt"></i>
							</div>
							Power
						</a>
					</li>
					<li class="ml-20 mr-20">
						<a href="#technologies-astro" data-toggle="tab">
							<div class="alt-tabs-icon">
								<i class="fa fa-star"></i>
							</div>
							Astrodynamics
						</a>
					</li>
				</ul>
				<!-- End Nav tabs -->

				<!-- Tab panes -->
				<div class="tab-content tpl-tabs-cont">

					<!-- Technologies Item -->
					<div class="tab-pane fade in active" id="technologies-engine">
						<div class="section-text">
							<div class="row">
								<div class="col-md-4 mb-md-40 mb-xs-30">
									<img src="../../assets/images/projects/triteia/engine.jpg" alt="engine">
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									Triteia was powered by a hydrogen peroxide blowdown system. By utilizing a monopropellant and a blowdown feed system, we minimized volume, mass, and complexity.
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									Like the Vulcan-I engine Callan, the thruster powering Triteia, was additively manufactured through DMLS using Inconel 718. Inconel 718 was chosen for its high durability and proven reliability in Vulcan-I tests.
								</div>
							</div>
						</div>
					</div>
					<!-- End Technologies Item -->

					<!-- Technologies Item -->
					<div class="tab-pane fade" id="technologies-avionics">
						<div class="section-text">
							<div class="row">
								<div class="col-md-4 mb-md-40 mb-xs-30">
									<img src="../../assets/images/projects/triteia/technologies_avionics.jpg" alt="avionics">
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									To control all of the functions onboard the system, Triteia used Spacemicro’s CHREC space processor (CSP), made with Radiation Hardened Components and featuring high performance computing abilities with a fault-tolerant architecture. It contained a Xilinx Zynq-7000 All Programmable SoC (AP SoC) that was coded to process incoming data and deliver commands to the system.
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									The processor performed different operations based on the data received from sensors and commands received from the ground station, as well as the timeline of the mission. The processor featureed a custom lightweight version of Linux.
								</div>
							</div>
						</div>
					</div>
					<!-- End Technologies Item -->

					<!-- Technologies Item -->
					<div class="tab-pane fade" id="technologies-communication">
						<div class="section-text">
							<div class="row">
								<div class="col-md-4 mb-md-40 mb-xs-30">
									<img src="../../assets/images/projects/triteia/technologies_comm.jpg" alt="comm">
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									Communication with Earth occured solely over the S-Band using a transceiver manufactured by Innoflight. In addition, two patch antennas on opposite ends of the satellite aided in maintaining a stable connection.
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									While Mission Control was located at UCSD, the antenna responsible for sending and receiving information was located at Morehead State University in Kentucky. This antenna was selected based on cost, accessibility, and reliability with handling S-Band signals.
								</div>
							</div>
						</div>
					</div>
					<!-- End Technologies Item -->

					<!-- Technologies Item -->
					<div class="tab-pane fade" id="technologies-structure">
						<div class="section-text">
							<div class="row">
								<div class="col-md-4 mb-md-40 mb-xs-30">
									<img src="../../assets/images/projects/triteia/technologies_structure.png" alt="structure">
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									The chassis of Triteia was composed of six 7075 T6 aluminum sheets, selected for its high strength and light weight. While its
									design was optimized to maximize volume and minimize mass, it was also responsible for safely and reliably housing all internal and
									external components.
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									It was able to survive the immense launch accelerations, random vibrations, and extreme temperatures of space.
								</div>
							</div>
						</div>
					</div>
					<!-- End Technologies Item -->

					<!-- Technologies Item -->
					<div class="tab-pane fade" id="technologies-power">
						<div class="section-text">
							<div class="row">
								<div class="col-md-4 mb-md-40 mb-xs-30">
									<img src="../../assets/images/projects/triteia/technologies_power.jpg" alt="power">
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									Power was provided by five solar panels designed and manufactured by SEDS UCSD with solar cells provided by Solaero. The panels tracked the sun around each orbit and was capable of generating more than 30W of energy. When in eclipse, or oriented away from the sun, eight Panasonic lithium-ion batteries provided 100 Wh of energy.
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									To achieve the required mission lifetime, the battery depth of discharge during orbit did not exceed 40% of full charge. This limited the amount of time the spacecraft can transmit information during communication phases.
								</div>
							</div>
						</div>
					</div>
					<!-- End Technologies Item -->

					<!-- Technologies Item -->
					<div class="tab-pane fade" id="technologies-astro">
						<div class="section-text">
							<div class="row">
								<div class="col-md-4 mb-md-40 mb-xs-30">
									<img src="../../assets/images/projects/triteia/technologies_astro.jpg" alt="astro">
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									Triteia's trajectory was determined using NASA's GMAT. Its journey to the moon required two maneuvers, one to change inclination and one to enter lunar orbit, for a total delta-v budget of 396 m/s. Disposal occured passively within one and a half years, though the mission may be extended if enough propellant remains.
								</div>
								<div class="col-md-4 col-sm-6 mb-sm-50 mb-xs-30">
									GMAT was also used to analyze various geometric properties of the mission, such as eclipse and contact times.
								</div>
							</div>
						</div>
					</div>
					<!-- End Technologies Item -->
				</div>
				<!-- End Tab panes -->

			</div>
		</section>
		<!-- End Services Section -->

		<!-- Diagram Section -->
		<section class="page-section" style="background-color: rgb(0,0,0); padding-top: 40px; padding-bottom: 40px;">
			<div class="container relative">
				<div class="row">
					<img src="../../assets/images/projects/triteia/cubesat-diagram.png" alt="diagram">
				</div>
			</div>
		</section>
		<!-- End diagram section -->

		<!-- Animaton Section for Mobile-->
		<section class="page-section hidden-md hidden-lg hidden-xl" style="padding-top: 20px; padding-bottom: 20px;">
			<div class="container relative">
				<div class="row">
					<img src="../../assets/images/projects/triteia/cubesat_animation.gif" alt="diagram">
				</div>
			</div>
		</section>
		<!-- End diagram section -->

		<!-- Animation Section -->
		<section class="page-section hidden-sm hidden-xs pt-40 pb-40">
			<div class="container relative">
				<div class="row">
					<div class="col-md-10 col-sm-12" id="mySpriteSpin">
						&nbsp;
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-sm-12" style="text-align: center;">
						Drag cursor from left to right over image to disassemble
					</div>
				</div>
			</div>
		</section>
		<!-- End animation section -->

		<!-- Orbit Phase Section -->
		<section class="page-section pb-20" style="background-color: black;">
			<div class="container relative">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 col-sm-12">
						<img src="../../assets/images/projects/triteia/orbit_phase.png" alt="orbit" class="animated fadeIn">
					</div>
				</div>
			</div>
		</section>
		<!-- End Section -->

		<!-- About Section -->
		<section class="page-section" id="about_cubequest">
			<div class="container relative">

				<h1 class="font-condensed align-left mt-10 mb-20 mb-sm-20">About the NASA CubeQuest Challenge</h1>
				<div class="section-text mb-50 mb-sm-20">
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<img src="https://www.nasa.gov/sites/default/files/styles/side_image/public/thumbnails/image/cubequest_challenge_moon_in_front.jpeg?itok=B52Ewg3B" alt="cubequest">
						</div>
						<div class="col-md-8 col-sm-8 mb-sm-50 mb-xs-30">
							The Cube Quest Challenge, sponsored by NASA’s Space Technology Mission Directorate Centennial Challenge Program, offered a total of $5 million to teams that meet the challenge objectives of designing, building and delivering flight-qualified, small satellites capable of advanced operations near and beyond the moon.
							<br><br>
							For more information, visit the <a href="http://www.nasa.gov/cubequest/details" target="blank">NASA CubeQuest page.</a>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- End About Section -->

		<!-- Call Action Section -->
		<section class="small-section bg-dark pt-20 pb-40" style="background-color: #0E76BC;">
			<div class="container relative">
				<div class="align-center">
					<h3>Questions, concerns, or just curious?</h3>
					<div>
						<a href="https://sedsucsd.org/about/contact" class="btn btn-mod btn-w btn-medium btn-round">Contact Us</a>
					</div>
				</div>
			</div>
		</section>
		<!-- End Call Action Section -->

		<footer class="page-section bg-dark footer pb-60">
			<div class="container">
				<!-- Social Links -->
				<div class="footer mb-40 mb-xs-30">
					<a class="footer-social animate" href="http://www.facebook.com/sedsucsd" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
					<a class="footer-social animate" href="http://instagram.com/seds_ucsd" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
					<a class="footer-social animate" href="http://twitter.com/SEDS_UCSD" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
					<a class="footer-social animate" href="https://www.linkedin.com/company/seds-ucsd" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>
					<p class="font-s-14">Stay connected for the latest updates</p>
				</div>
				<!-- End Social Links -->
				<!-- Footer Text -->
				<div class="footer-text">
					<!-- Copyright -->
					<div class="footer-copy font-alt">
						&copy; 2018 SEDS UC San Diego
					</div>
					<!-- End Copyright -->
					<div class="muted">
						Designed by Albert Lin.
					</div>
				</div>
				<!-- End Footer Text -->
			</div>
		</footer>
	</div>
	<!-- End Page Wrap -->


	<!-- JS -->
	<script type="text/javascript" src="../../assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="../../assets/js/SmoothScroll.js"></script>-->
	<script type="text/javascript" src="../../assets/js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.localScroll.min.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.viewport.mini.js"></script>
	<!--<script type="text/javascript" src="../../assets/js/jquery.countTo.js"></script>-->
	<script type="text/javascript" src="../../assets/js/jquery.appear.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="../../assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="../../assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="../../assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="../../assets/js/jquery.magnific-popup.min.js"></script>
	<!--<script type="text/javascript" src="../../assets/js/gmap3.min.js"></script>
	<script type="text/javascript" src="../../assets/js/wow.min.js"></script>-->
	<script type="text/javascript" src="../../assets/js/masonry.pkgd.min.js"></script>
	<!--<script type="text/javascript" src="../../assets/js/jquery.simple-text-rotator.min.js"></script>-->
	<script type="text/javascript" src="../../assets/js/all.js"></script>
	<!--<script type="text/javascript" src="../../assets/js/contact-form.js"></script>-->
	<!--<script type="text/javascript" src="../../assets/js/jquery.ajaxchimp.min.js"></script>-->
	<script type="text/javascript" src="../../assets/js/jquery.mb.YTPlayer.js"></script>
	<!--[if lt IE 10]><script type="text/javascript" src="../../assets/js/placeholder.js"></script><![endif]-->
	<script type="text/javascript" src="../../assets/js/spritespin/spritespin.js"></script>


	<script type="text/javascript">
		$("#mySpriteSpin").spritespin({
			// path to the source images.
			source: [
				"../../assets/images/projects/triteia/animation/1.jpg",
				"../../assets/images/projects/triteia/animation/2.jpg",
				"../../assets/images/projects/triteia/animation/3.jpg",
				"../../assets/images/projects/triteia/animation/4.jpg",
				"../../assets/images/projects/triteia/animation/5.jpg",
				"../../assets/images/projects/triteia/animation/6.jpg",
				"../../assets/images/projects/triteia/animation/7.jpg",
				"../../assets/images/projects/triteia/animation/8.jpg",
				"../../assets/images/projects/triteia/animation/9.jpg",
				"../../assets/images/projects/triteia/animation/10.jpg",
				"../../assets/images/projects/triteia/animation/11.jpg",
				"../../assets/images/projects/triteia/animation/12.jpg",
				"../../assets/images/projects/triteia/animation/13.jpg",
				"../../assets/images/projects/triteia/animation/14.jpg",
				"../../assets/images/projects/triteia/animation/15.jpg",
				"../../assets/images/projects/triteia/animation/16.jpg",
				"../../assets/images/projects/triteia/animation/17.jpg",
				"../../assets/images/projects/triteia/animation/18.jpg",
				"../../assets/images/projects/triteia/animation/19.jpg",
				"../../assets/images/projects/triteia/animation/20.jpg",
				"../../assets/images/projects/triteia/animation/21.jpg",
				"../../assets/images/projects/triteia/animation/22.jpg",
				"../../assets/images/projects/triteia/animation/23.jpg",
				"../../assets/images/projects/triteia/animation/24.jpg",
				"../../assets/images/projects/triteia/animation/25.jpg",
				"../../assets/images/projects/triteia/animation/26.jpg",
				"../../assets/images/projects/triteia/animation/27.jpg",
				"../../assets/images/projects/triteia/animation/28.jpg",
				"../../assets/images/projects/triteia/animation/29.jpg",
				"../../assets/images/projects/triteia/animation/30.jpg",
				"../../assets/images/projects/triteia/animation/31.jpg",
				"../../assets/images/projects/triteia/animation/32.jpg",
				"../../assets/images/projects/triteia/animation/33.jpg",
				"../../assets/images/projects/triteia/animation/34.jpg",
				"../../assets/images/projects/triteia/animation/35.jpg",
				"../../assets/images/projects/triteia/animation/36.jpg",
				"../../assets/images/projects/triteia/animation/37.jpg",
				"../../assets/images/projects/triteia/animation/38.jpg",
				"../../assets/images/projects/triteia/animation/39.jpg",
				"../../assets/images/projects/triteia/animation/40.jpg",
				"../../assets/images/projects/triteia/animation/41.jpg",
				"../../assets/images/projects/triteia/animation/42.jpg",
				"../../assets/images/projects/triteia/animation/43.jpg"
			],
			width   : $('.row').innerWidth(),  // width in pixels of the window/frame
			height  : 520,  // height in pixels of the window/frame
			});
	</script>

</body>
</html>
