<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bistalk - Business Talk</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/icon" href="assets/images/logo.jpg" />
	<!-- Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<!-- Slick slider -->
	<link href="assets/css/slick.css" rel="stylesheet">
	<!-- Theme color -->
	<link id="switcher" href="assets/css/theme-color/orange-theme.css" rel="stylesheet">

	<!-- Main Style -->
	<link href="style.css" rel="stylesheet">
	<!-- AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<!-- animate css  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- owlcarousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.theme.default.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

	<!-- Fonts -->
	<!-- Open Sans for body font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800" rel="stylesheet">
	<!-- Montserrat for title -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<style>
		.fotoss {
			display: none;
		}

		@media (min-width: 768px) {
			.buttonss {
				display: none;
			}

			.fotoss {
				display: block;
			}
		}

		.hero-waves {
			margin-bottom: -320px;
			position: relative;
			top: -300px;
			z-index: -9;
			transition: 1s;
		}

		.hero-waves svg .layer1 {
			animation: movewave 5s infinite alternate ease-in-out;
		}

		.hero-waves svg .layer2 {
			animation: movewave 13s infinite alternate-reverse ease-in-out;
		}

		.hero-waves svg .layer3 {
			animation: movewave 11s infinite alternate ease-in-out;
		}

		.hero-waves svg .layer4 {
			animation: movewave 7s infinite alternate-reverse ease-in-out;
		}

		.hero-waves svg .layer5 {
			animation: movewave 3s infinite alternate ease-in-out;
		}

		@keyframes movewave {
			from {
				transform: translate(15%, 0);
			}

			to {
				transform: translate(-15%, 0);
			}
		}

		@media (max-width: 1000px) {
			.hero-waves {
				display: none;
			}
		}

		.owl-carousel .owl-item .item {
			padding: 10px;
		}

		.owl-carousel .owl-item img {
			object-fit: contain;
			height: 150px !important;
		}
	</style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- Start Header -->
	<header id="mu-hero" class="" role="banner">
		<!-- Start menu  -->
		<nav class="navbar navbar-fixed-top navbar-default mu-navbar" style="border-bottom: 2px solid #c7c7c7;">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nalev">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<!-- Logo -->
					<img src="assets/images/logo.jpg" alt="">
					<a class="navbar-brand" href="index.php">Business Talk</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav mu-menu navbar-right">
						<li><a href="#mu-hero">Home</a></li>
						<li><a href="#mu-about">About</a></li>
						<li><a href="#mu-schedule">Timeline</a></li>
						<li><a href="#mu-speakers">Speakers</a></li>
						<!-- <li><a href="#mu-pricing">Price</a></li> -->
						<li><a href="#mu-register">Register</a></li>
						<li><a href="#mu-sponsors">Sponsors</a></li>
						<!-- <li><a href="#mu-contact">Contact</a></li> -->
						<!-- <li><a href="#mu-organizers">Organizers</a></li> -->
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<!-- End menu -->

		<div class="mu-hero-overlay">
			<div class="container">
				<div class="mu-hero-area">

					<!-- Start hero featured area -->
					<div class="mu-hero-featured-area">
						<!-- Start center Logo -->
						<div class="mu-logo-area">
							<!-- text based logo -->
							<a class="mu-logo" href="#" style="border-radius: 30px;">Business Talk</a>
							<!-- image based logo -->
							<!-- <a class="mu-logo" href="#"><img src="assets/images/text-bistalk-noedit.png" alt="logo img"></a> -->
						</div>
						<!-- End center Logo -->

						<div class="mu-hero-featured-content">

							<h1 class="animate__bounceIn">HELLO! WELCOME TO BUSINESS TALK</h1>
							<h2 class="animate__bounceIn">"Scale Up Your Business with Digital Marketing"</h2>
							<hr>
							<p class="mu-event-date-line"> <u></u> 26 February 2022, 08.30 - 11.45 WIB via Zoom</p>

							<div class="mu-event-counter-area">
								<div id="mu-event-counter">
									<div class="fotoss">
										<span class="mu-event-counter-block hovert">
											<img src="assets/images/aidil.jpg" style="border-radius: 50%;">
											<p style="font-size:14px; margin-top: 10px;">Aidil Wicaksono Juniarto</p>
										</span>

										<span class="mu-event-counter-block hovert">
											<img src="assets/images/sp2.jpeg" style="border-radius: 50%;">
											<p style="font-size:14px; margin-top: 10px;">Mutiara Aulia Wibowo</p>
										</span>

										<span class="mu-event-counter-block hovert">
											<img src="assets/images/s1.jpg" style="border-radius: 50%;">
											<p style="font-size:14px; margin-top: 10px;">Marsel Tansil Tungka</p>
										</span>
									</div>
									<div class="buttonss">
										<div class="row">
											<div class="col-4 justify-content-between">
												<a href="#mu-speakers" class="btn-lg" style="background :#f49320; font-weight:600; border-radius:5px; padding:10px 25px; color:#fff; margin-right:10px"">Speakers</a>
											<a href=" #mu-register" class="btn-lg" style="background :#00b4d7; font-weight:600; border-radius:5px; padding:10px 25px; color:#fff; margin-left:10px">Register</a>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
					<!-- End hero featured area -->

				</div>
			</div>
			<div class="hero-waves">
				<svg id="svg2" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 30" version="1.1" preserveAspectRatio="none" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/">
					<path id="path6" d="m-100 1.041s61.625-4.5064 99.75 5.2333 70.594 15.391 124.5 16.312c55.25 0.9437 75.75-8.8513 75.75-8.8513v16.266h-300v-28.959z" style="fill:#fff;fill-opacity:.2" class="layer5" />
					<path id="path8" d="m-100 30h300v-6.6791s-16.526 2.7112-62.25 2.3702c-58.5-0.436-97.875-12.245-153.75-15.599-55.875-3.3549-84-0.2745-84-0.2745v20.182z" style="fill:#fff;fill-opacity:.2" class="layer4" />
					<path id="path10" d="m200 16.232s-24.625-5.6378-84.5-3.7495c-59.875 1.8882-74.962 15.943-144 16.562-50.75 0.455-71.5-3.7697-71.5-3.7697v4.7252h300v-13.768z" style="fill:#fff;fill-opacity:.2" class="layer3" />
					<path id="path12" d="m200 1.041s-61.625-4.5064-99.75 5.2333-70.594 15.391-124.5 16.311c-55.25 0.9437-75.75-8.8513-75.75-8.8513v16.266h300v-28.959z" style="fill:#fff;fill-opacity:.2" class="layer2" />
					<path id="path14" d="m-1300 17.511s29.006-2.6495 75-0.6876c60.25 2.5701 81.25 11.545 150.25 11.912 55.721 0.2965 74.75-5.6414 74.75-5.6414v6.906h-300v-12.489z" style="fill:#fff" class="layer1" />
				</svg>
			</div>

		</div>
	</header>
	<!-- End Header -->

	<!-- Start main content -->
	<main role="main">
		<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left" data-aos="fade-right" data-aos-offset="300" data-aos-duration="1500">
										<br>
										<br>
										<img class="" src="assets/images/testpap.png" alt="Men Speaker">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right" data-aos="fade-left" data-aos-offset="300" data-aos-duration="1500">
										<h2>About BISTALK</h2>
										<p>
											Bisnis adalah salah satu bentuk kreativitas yang jika dikembangkan dengan
											baik dan benar akan memperoleh keuntungan bagi
											yang mengusahakan atau berkepentingan dalam terjadinya aktivitas tersebut.
											Bisnis juga merupakan bidang yang sangat luas
											sehingga membutuhkan ruang agar bisa berkembang dengan baik serta perlu
											ditelusuri lebih merinci. Terlebih untuk Mahasiswa,
											dengan membuka pandangan mereka tentang berbisnis, maka diharapkan dapat
											menggerakkan pribadi mereka dalam hal berbisnis.
										</p>
										<p>
											Oleh karena itu, Biro Bisnis dan Kemitraan BEM FIKTI UG
											Periode 2021/2022 akan mengadakan webinar dengan nama Business
											Talk (BISTALK) 2022. Webinar ini bertujuan untuk menciptakan
											sumber daya manusia yang siap bersaing dalam mengembangkan bisnis
											pada era digital 4.0.
										</p>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Start Video -->
		<section id="mu-video">
			<div class="mu-video-overlay">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mu-video-area">
								<!-- <h2>Watch Previous Event Video</h2>
								<a class="mu-video-play-btn" href="#"><i class="fa fa-play" aria-hidden="true"></i></a> -->
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Start Video content -->
			<div class="mu-video-content">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
					<iframe width="854" height="480" src="https://www.youtube.com/embed/n9AVEl9764s" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
			<!-- End Video content -->

		</section>
		<!-- End Video -->

		<!-- Start Schedule  -->
		<section id="mu-schedule" style="margin-bottom: -10px;">
			<div class="container">
				<div class="row">
					<div class="colo-md-12">
						<div class="mu-schedule-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Timeline</h2>
								<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis unde, ut sapiente et voluptatum facilis consectetur incidunt provident asperiores at necessitatibus nulla sequi voluptas libero quasi explicabo veritatis minima porro.</p> -->
							</div>

							<div class="mu-schedule-content-area">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs mu-schedule-menu" role="tablist" data-aos="flip-up">
									<li role="presentation" class="active"><a href="#" aria-controls="first-day" role="tab" data-toggle="tab">26 February</a></li>
									<!-- <li role="presentation"><a href="#second-day" aria-controls="second-day" role="tab" data-toggle="tab">2 Day / 20 Feb</a></li>
								    <li role="presentation"><a href="#third-day" aria-controls="third-day" role="tab" data-toggle="tab">3 Day / 21 Feb</a></li> -->
								</ul>

								<!-- Tab panes -->
								<div class="tab-content mu-schedule-content">
									<div role="tabpanel" class="tab-pane fade mu-event-timeline in active" id="first-day" data-aos="fade-down">
										<ul>
											<li>
												<div class="mu-single-event" data-aos="fade-right">
													<p class="mu-event-time">8.30 - 9.00 AM</p>
													<h3>Registration of Participants</h3>
												</div>
											</li>
											<li>
												<div class="mu-single-event" data-aos="fade-left">
													<img src="assets/images/aidil.jpg" alt="event speaker">
													<p class="mu-event-time">9.30 AM</p>
													<h3>"Ilmu Tentang Dunia Entrepreneurship"</h3>
													<span>By Aidil Wicaksono J., SE., MM.,</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event" data-aos="fade-right">
													<img src="assets/images/sp2.jpeg" style="border-radius: 50%;" alt="event speaker">
													<p class="mu-event-time">10.00 AM</p>
													<h3>"Memulai karir dalam dunia digital marketing"</h3>
													<span>By Mutiara Aulia Wibowo</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event" data-aos="fade-left">
													<img src="assets/images/s1.jpg" style="border-radius: 50%;" alt="event speaker">
													<p class="mu-event-time">10.30 AM</p>
													<h3>"Mengembangkan Bisnis dengan Digital Marketing"</h3>
													<span>By Marsel Tansil Tungka</span>
												</div>
											</li>
											<li>
												<div class="mu-single-event" data-aos="fade-right">
													<p class="mu-event-time">11.45 AM</p>
													<h3>Closing</h3>
												</div>
											</li>
										</ul>

									</div>

								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- <svg class="wave" style="margin-top: -300px; margin-bottom:-20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="#0099ff" fill-opacity="0.6" 
					d="M0,224L48,192C96,160,192,96,288,106.7C384,117,480,203,576,202.7C672,203,768,117,864,112C960,107,1056,181,1152,202.7C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
				</svg>
			<svg style="margin-top: -300px; margin-bottom:-20px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="#0099ff" fill-opacity="0.8" 
					d="M0,256L48,234.7C96,213,192,171,288,160C384,149,480,171,576,197.3C672,224,768,256,864,245.3C960,235,1056,181,1152,165.3C1248,149,1344,171,1392,181.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
			</svg>
			<svg style="margin-top: -300px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
				<path fill="#0099ff" fill-opacity="1"
					d="M0,128L30,144C60,160,120,192,180,202.7C240,213,300,203,360,176C420,149,480,107,540,117.3C600,128,660,192,720,229.3C780,267,840,277,900,240C960,203,1020,117,1080,96C1140,75,1200,117,1260,160C1320,203,1380,245,1410,266.7L1440,288L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z">
				</path>
			</svg> -->
		</section>
		<!-- End Schedule -->

		<!-- Start Speakers -->
		<section id="mu-speakers">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-speakers-area">

							<div class="mu-title-area" style="margin-bottom: 60px;">
								<h2 class="mu-title">Our Speakers</h2>
								<p>"Scale Up Your Business with Digital Marketing"</p>
							</div>

							<!-- Start Speakers Content -->
							<div class="row">
								<!-- slider cuma diilangin  -->
								<div class="text-center">
									<!-- Start single speaker -->
									<div class="col-sm-4">
										<img src="assets/images/aidil.jpg" style="border-radius: 50%;" alt="speaker img" width="275">
										<div class="mu-single-speakers-info">
											<h3>Aidil Wicaksono J., SE., MM.,</h3>
											<p>Dosen Universitas Gunadarma</p>
											<!-- <ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul> -->
										</div>
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="col-sm-4">
										<img src="assets/images/sp2.jpeg" style="border-radius: 50%;" alt="speaker img" width="275">
										<div class="mu-single-speakers-info">
											<h3>Mutiara Aulia Wibowo</h3>
											<p>Senior CRM & Email Marketing Specialist Mekari</p>
											<!-- <ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul> -->
										</div>
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<!-- <div class="mu-single-speakers">
										<img src="assets/images/speaker-2.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Naufal Muhammad A.R.</h3>
											<p>Burger Chill Owner</p> -->
									<!-- <ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul> -->
									<!-- </div>
									</div> -->
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<div class="col-sm-4">
										<img src="assets/images/s1.jpg" style="border-radius: 50%;" alt="speaker img" width="275">
										<div class="mu-single-speakers-info">
											<h3>Marsel Tansil Tungka</h3>
											<p>CEO yumm.it.</p>
											<!-- <ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul> -->
										</div>
									</div>

									<div class="mu-title-area" style="margin-top: 60px; margin-bottom: 40px;">
										<h2 class="mu-title">MC & Moderator</h2>
									</div>

									<div class="col-sm-6">
										<img src="assets/images/mc.png" style="border-radius: 50%;" alt="speaker img" width="275">
										<div class="mu-single-speakers-info">
											<h3>Annisa Mahartika</h3>
											<p>Staff BEM FIKTI UG 2021/2022</p>
											<!-- <ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul> -->
										</div>
									</div>
									<div class="col-sm-6">
										<img src="assets/images/arielnoah.png" style="border-radius: 50%;" alt="speaker img" width="275">
										<div class="mu-single-speakers-info">
											<h3>Ariel Setyawan</h3>
											<p>Staff BEM FIKTI UG 2021/2022</p>
											<!-- <ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul> -->
										</div>
									</div>
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<!-- <div class="mu-single-speakers">
										<img src="assets/images/speaker-4.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Michaela Lehr </h3>
											<p>Digital Marketer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div> -->
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<!-- <div class="mu-single-speakers">
										<img src="assets/images/speaker-1.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Karl Groves</h3>
											<p>Digital Artist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div> -->
									<!-- End single speaker -->

									<!-- Start single speaker -->
									<!-- <div class="mu-single-speakers">
										<img src="assets/images/speaker-2.png" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Sarah Dransner</h3>
											<p>Business Consultant</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div> -->
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<!-- <div class="mu-single-speakers">
										<img src="assets/images/speaker-3.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Ned Stark</h3>
											<p>UI/UX Specialist</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div> -->
									<!-- End single speaker -->


									<!-- Start single speaker -->
									<!-- <div class="mu-single-speakers">
										<img src="assets/images/speaker-4.jpg" alt="speaker img">
										<div class="mu-single-speakers-info">
											<h3>Michaela Lehr </h3>
											<p>Digital Marketer</p>
											<ul class="mu-single-speakers-social">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div> -->
									<!-- End single speaker -->
								</div>
							</div>
							<!-- End Speakers Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Speakers -->

		<!-- Start Register  -->
		<section id="mu-register">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-register-area">

							<div class="mu-title-area">
								<h2 class="mu-title">Register Form</h2>
								<p>Webinar Bistalk (Business Talk) dilaksanakan pada hari sabtu tanggal 26 Februari
									2022, pukul 08.30 - selesai. <strong>FREE HTM</strong>.<br>
									Contact Person: <strong>085888459674</strong> (Fathiati via WhatsApp),
									<strong>syiffapm</strong> (Syiffa via LINE).
								</p><br><br>

							</div>

							<div class="mu-register-content">
								<form class="mu-register-form">


									<a href="./registration" class="mu-reg-submit-btn">REGIST</a>

								</form>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Register -->

		<!-- Nyoba-nyoba -->
		<!-- <div class="mu-register-content"> -->
		<form class="mu-register-form">
			<a color="black" href="./registration" style="visibility: hidden">REGIST</a>
		</form>
		<!-- </div> -->

		<!-- End FAQ -->

		<!-- Start Sponsors -->
		<section id="mu-sponsors">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<br><br><br><br>
						<h2>Sponsored by</h2>
						<!-- <h4 class="section-subheading">(Dibuka Untuk Umum)</h4> -->
					</div>
				</div>
				<br>



				<div class="row justify-content-center"><br>

					<div class="col-sm-6">
						<div class="team-sponsor">
							<img src="assets/images/dicoding-logo-full.png" alt="">
						</div>
					</div>

					<div class="col-sm-6">
						<div class="team-sponsor">
							<img src="assets/images/inez.png" alt="">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- End Sponsors -->

		<!-- Start Sponsors -->
		<section id="mu-partners">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<br><br><br><br>
						<h2>Partners by</h2>
						<!-- <h4 class="section-subheading">(Dibuka Untuk Umum)</h4> -->
					</div>
				</div>
				<br>
				<br>
				<div class="row owl-carousel owl-theme" style="margin-left: 2px;">

					<?php
					include "koneksi.php";

					// $gambar = "Select * from `partner`";
					// $tampil = $conn->query($gambar);
					$tampil = mysqli_query($conn, "SELECT * FROM `partner`");

					while ($file = mysqli_fetch_assoc($tampil)) {
					?>

						<div class="item">
							<img src="<?= "admin/config/file/" . $file['file']; ?>" style="object-fit: contain; height:100px;" class="img-fluid">
						</div>

					<?php } ?>

				</div>

			</div>
		</section>
		<!-- End Sponsors -->

		<!-- Start Organizers -->
		<section id="mu-organizers">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<br><br><br>
						<h2>Organized by</h2>
						<!-- <h4 class="section-subheading">(Dibuka Untuk Umum)</h4> -->
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm-4">
						<div class="team-member">
							<img src="assets/images/bem.png" alt="">
							<h4>BEM Fakultas Ilmu Komputer dan Teknologi Informasi</h4>
							<!-- <p class="text-muted">IT Support at Watsons Indonesia</p> -->
						</div>
					</div>

					<div class="col-sm-4">
						<div class="team-member">
							<img src="assets/images/sakti.png" alt="" style="transform: scale(.8);">
							<h4>Kabinet SAKTI</h4>
						</div>
					</div>

					<div class="col-sm-4">
						<div class="team-member">
							<img src="assets/images/logo-bismit.png" alt="">
							<h4>Biro Bisnis dan Kemitraan</h4>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Organizers -->

	</main>

	<!-- End main content -->


	<!-- Start footer -->
	<footer id="mu-footer" role="contentinfo" style="background-color: #F49320;">
		<div class="container">
			<div class="mu-footer-area">
				<div class="mu-footer-top">
					<!-- <div class="mu-social-media">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div> -->
				</div>
				<div class="mu-footer-bottom">
					<p class="mu-copy-right">Maintained by <a rel="nofollow" href="https://www.instagram.com/p/CVXvVKOhhlJ/" target="_blank" class="hovera">Biro PTI
							2021/2022</a></p>
					<h1 style="display: none;" id="count">0</h1>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<!-- Bootstrap -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- Slick slider -->
	<script type="text/javascript" src="assets/js/slick.min.js"></script>
	<!-- Event Counter -->
	<script type="text/javascript" src="assets/js/jquery.countdown.min.js"></script>
	<!-- Ajax contact form  -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<!-- aos -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
	<!-- Custom js -->
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<script>
		AOS.init({
			once: true,
		});

		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			dots: false,
			autoplay: true,
			autoplayHoverPause: true,
			autoplayTimeout: 5000,
			nav: false,
			smartSpeed: 2000,
			// autoWidth: true,
			responsive: {
				0: {
					items: 3
				},
				600: {
					items: 6
				}
			}
		})

		const countEl = document.getElementById('count');

		updateVisitCount();

		function updateVisitCount() {
			fetch('https://api.countapi.xyz/update/bistalk-duadua/lanpage?amount=1')
				.then(res => res.json())
				.then(res => {
					countEl.innerHTML = res.value;
				})
		}
	</script>

</body>

</html>