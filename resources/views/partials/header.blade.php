
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>PULAGU</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Wander Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			// window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->

	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<!-- single page -->

	<link href="css/custom.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->

	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Aleo:300,300i,400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>
	<!-- home -->
	<div id="home">
		<!-- banner -->
		<div class="banner_w3lspvt">
			<!-- nav -->
			<div class="nav_w3ls pt-4 pb-3 text-center">
				<nav>
					<label for="drop" class="toggle">Menu</label>
					<input type="checkbox" id="drop" />
					<ul class="menu">
						<li><a href="{{ url('/') }}" class="active">Home</a></li>
						<li><a href="{{ url('/') }}#desti">Destination</a></li>
						<li>
							<!-- First Tier Drop Down -->
							<label for="drop-2" class="toggle toogle-2">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
							</label>
							<a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2" />
							<ul class="text-left">
								<li><a href="#about" class="drop-text">About Us</a></li>
								<li><a href="#what" class="drop-text">What We Do?</a></li>
								<li><a href="#blog" class="drop-text">Blog</a></li>
								<li><a href="{{ url('blogDetail') }}" class="drop-text">Blog Details</a></li>
							</ul>
						</li>
						<li><a href="{{ url('gallery') }}">Gallery</a></li>
						<li><a href="{{ url('contact') }}">Contact Us</a></li>
					</ul>
				</nav>
			</div>
			<!-- //nav -->
			<div class="banner-text text-right">
				<div class="banner-bot">
					<h1><a href="index.html" class="logo text-wh">
						<img src="images/logo_transparent.png" alt="news image" class="img-logo-big"></a></h1>
					<p class="text-bl text-li mt-3 border-bottom pb-4">
						une expertise tout près de chez vous,<br/>
						l’expérience fait la différence,<br/>
						la qualité notre priorité.
					</p>
					<div class="social-icons mt-4">
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<span class="fa fa-facebook"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-twitter"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-google-plus"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-instagram"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-pinterest-p"></span>
								</a>
							</li>
						</ul>
					</div>
					<a href="contact.html" class="btn button-style">Hire Us</a>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
    <!-- //home -->
    
