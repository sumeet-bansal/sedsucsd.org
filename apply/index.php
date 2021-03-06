<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Apply | SEDS UC San Diego</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<meta name="author" content="Albert Lin">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<link rel="shortcut icon" href="https://sedsucsd.org/assets/images/misc/icon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/style.css">
	<link rel="stylesheet" href="../assets/css/style-responsive.css">
	<link rel="stylesheet" href="../assets/css/animate.min.css">
	<link rel="stylesheet" href="../assets/css/vertical-rhythm.min.css">
	<link rel="stylesheet" href="../assets/css/owl.carousel.css">
	<link rel="stylesheet" href="../assets/css/magnific-popup.css">
	<link rel="stylesheet" href="../assets/css/margin-padding-text.css">

	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-64987797-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments)};
		gtag('js', new Date());
		gtag('config', 'UA-64987797-1');
	</script>

	<script>

		function changeSubmit() {
			if (document.getElementById('ensure').checked) {
				document.getElementById('submit-button').style.display = "block";
			}
			else {
				document.getElementById('submit-button').style.display = "none";
			}
		}

		function checkFile() {

			var  sel_files  = document.getElementById('upload').files;
			var len = sel_files.length;

			for (var i = 0; i < len; i++) {

				var file = sel_files[i];

				var filesize = document.getElementById('upload').files[0].size;
				var filesizeMB = filesize/1024/1024;
				console.log(filesizeMB);

				if (!(file.type==='application/pdf')) {
					document.getElementById('submit-button').disabled = true;
					document.getElementById('error-block').style.display = "block";
					if( filesizeMB > 4) {
						document.getElementById('error-message').innerHTML = "File must be less than 4MB. <br> File must be a pdf.";
					}
					else {
						document.getElementById('error-message').innerHTML = "File must be a pdf.";
					}
				}
				else {
					if (filesizeMB > 4) {
						document.getElementById('submit-button').disabled = true;
						document.getElementById('error-block').style.display = "block";
						document.getElementById('error-message').innerHTML = "File must be less than 4MB.";
					}
					else {
						document.getElementById('error-block').style.display = "none";
						document.getElementById('submit-button').disabled = false;
					}
				}
			}

		};
	</script>

	<style type="text/css">
	input				{ color: black; padding-left: 3px; }
	label				{ font-weight: 300; }
	.event-row			{ border-bottom: 1px solid rgba(255,255,255,0.6); margin-left: 1px; }
	#submit-button		{ display: none; }
	#error-block		{ display: none; }
	</style>

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
	  <?php include '../assets/blocks/navbar.php'?>
		<!-- End Navigation panel -->

		<!-- Head Section -->
		<section class="page-section bg-dark bg-dark-alfa-70" style="background: url('header.jpg'); background-position: center; background-size: cover;">
			<div class="divider"> &nbsp; </div>
			<div class="relative container align-left">
				<div class="row">
					<div class="col-md-6">
						<h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Apply</h1>
						<div class="hs-line-4 font-alt"><br>Winter 2020 Recruitment<br></div>
					</div>
					<div class="col-md-2 mt-15">
						&nbsp;
					</div>
				</div>
			</div>
		</section>
		<!-- End Head Section -->

		<!-- Head Section -->
		<section class="page-section bg-alfa-70 pt-20">
			<div class="relative container align-left">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<!-- h1>Applications for Winter 2020 have closed.<br><br>Please check back later.</h1 -->
						<h4>If you are experiencing any errors, please email your resume to <a href="mailto:sedsucsd@gmail.com">seds.ucsd@gmail.com</a>.</h4>
						<h4>You must be a student at UC San Diego to apply. View our available positions <a href="https://docs.google.com/document/d/1BI6iHIvxAAokzvHhbrX1mfqvn3O-F6uY_CU2Hpri4To">here</a>.</h4>
						<br>
						<h4><i>Mixer: Thursday, January 9th, 7-10 PM in EBU-II Room 105</i></h4>
						<h4><i>Engineers on the Green: January 13th, 1-5 PM in Warren Mall</i></h4>
					</div>
				</div>

				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h3>Apply for a position</h3>
						<form class="font-s-16" action="https://artemis.sedsucsd.org/assets/operations/application/apply.php" method="POST" enctype="multipart/form-data">
							<<div class="row">
								<div class="col-sm-6">
									<label for="first">First Name:</label><br>
									<input type="text" name="first" class="fit-width" placeholder="First" required>
								</div>
								<div class="col-sm-6">
									<label for="last">Last Name:</label><br>
									<input type="text" name="last" class="fit-width" placeholder="Last" required>
								</div>
							</div>

							<div class="row mt-20">
								<div class="col-sm-6">
									<label for="email">Email:</label><br>
									<input type="text" name="email" class="fit-width" placeholder="email@domain.com" required>
								</div>
								<div class="col-sm-6 pt-20">
									This should be an email you check frequently.
								</div>
							</div>

							<div class="row mt-20">
								<div class="col-sm-6">
									<label for="resume">Upload your resume (.pdf)</label><br>
									<input required type="file" onchange="checkFile();" name="resume" id="upload" style="margin-top: 2px;">
								</div>
							</div>

							<div class="row" id="error-block">
								<div class="col-sm-12">
									<div class="fit-width font-s-16 mt-10" style="background-color: rgba(255,0,0,0.25); padding-left: 6px; border-radius: 4px;" id="error-message"></div>
								</div>
							</div>

							<div class="row mt-20">
								<div class="col-sm-6">
									<label for="email">Team you're interested in joining:</label><br>
									<select required class="fit-width" name="preferred">
										<option value="Business">Business</option>
										<option value="Colossus">Propulsion</option>
									</select>
								</div>

								<div class="col-sm-6">
									<label for="email">Choose a backup:</label><br>
									<select required class="fit-width" name="backup">
										<option value="Business">Business</option>
										<option value="Colossus">Propulsion</option>
									</select>
								</div>
							</div>

							<div class="row mt-20">
								<div class="col-sm-6">
									<label for="reason">How did you hear about SEDS?</label><br>
									<input type="text" name="reason" class="fit-width" placeholder="Heard from (person)." required>
								</div>

								<div class="col-sm-6">
									<label for="comments">Anything you think we should know?</label><br>
									<input type="text" name="comments" class="fit-width" placeholder="I really like fire" required>
								</div>
							</div>

							<div class="row mt-20">
								<div class="col-sm-12">
									<input type="checkbox" onclick="changeSubmit();" id="ensure" name="ensure" value="1" class="" style="width: 15px; height: 15px;" required>
									I understand that I will not be able to change my information later. Any resume not in <strong>.pdf</strong> format will not be considered.
								</div>
							</div>

							<div class="row mt-20">
								<div class="col-sm-4 col-sm-offset-4">
									<input disabled type="submit" name="submit" class="fit-width" value="Submit" id="submit-button">
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End Head Section -->

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
	<script type="text/javascript" src="../assets/js/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
	<!--<script type="text/javascript" src="../assets/js/SmoothScroll.js"></script>-->
	<script type="text/javascript" src="../assets/js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.localScroll.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.viewport.mini.js"></script>
	<!--<script type="text/javascript" src="../assets/js/jquery.countTo.js"></script>-->
	<script type="text/javascript" src="../assets/js/jquery.appear.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.parallax-1.1.3.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="../assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="../assets/js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/imagesloaded.pkgd.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="../assets/js/wow.min.js"></script>
	<script type="text/javascript" src="../assets/js/masonry.pkgd.min.js"></script>
	<!--<script type="text/javascript" src="../assets/js/jquery.simple-text-rotator.min.js"></script>-->
	<script type="text/javascript" src="../assets/js/all.js"></script>
	<!--<script type="text/javascript" src="../assets/js/jquery.ajaxchimp.min.js"></script>-->
	<!--<script type="text/javascript" src="../assets/js/jquery.mb.YTPlayer.js"></script>-->
	<!--[if lt IE 10]><script type="text/javascript" src="../assets/js/placeholder.js"></script><![endif]-->

</body>
</html>
