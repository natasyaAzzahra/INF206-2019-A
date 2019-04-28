<!DOCTYPE html>
<html lang="en">

<head>

	<title>Nelayan Belajar</title>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css"
		href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
		integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- Material Kit CSS -->
	<link href="../css/material-kit.css?v=2.0.5" rel="stylesheet" />
	<link rel="stylesheet" href="style.css">

	<style>
		.place {
			color: white;
		}

		#tombol {
			margin-left: 10px;
			border-radius: 100%;
			height: 40px;
			width: 40px;
		}

		.overlay {
			position: relative;
			z-index: 1;
		}

		.overlay:after {
			background-color: rgba(0, 0, 0, 0.8);
			content: "";
			left: 0;
			position: absolute;
			top: 0;
			height: 100%;
			width: 100%;
			z-index: -1;
		}

		.section-padding {
			padding: 100px 0;
		}

		.section-title {
			font-size: 15px;
			font-weight: 300;
			margin-bottom: 80px;
		}

		.section-title h2 {
			margin-bottom: 10px;
			position: relative;
			text-transform: uppercase;
		}

		.section-title p {
			margin-top: 10px;
		}

		.section-title .title-line {
			color: #ffd000;
			position: relative;
		}

		.section-title .title-line::after {
			background-color: #333;
			content: "";
			height: 2px;
			left: -60px;
			position: absolute;
			top: 10px;
			width: 50px;
		}

		.section-title .title-line::before {
			background-color: #333;
			content: "";
			height: 2px;
			position: absolute;
			right: -60px;
			top: 10px;
			width: 50px;
		}

		.overlay .section-title h2,
		.overlay .section-title p {
			color: #fff;
		}

		.overlay .section-title .title-line::after,
		.overlay .section-title .title-line::before {
			background-color: #fff;
		}

		.scroll-top {
			bottom: 50px;
			cursor: pointer;
			display: none;
			position: fixed;
			right: 30px;
			width: 30px;
			z-index: 9999;
		}

		.login-page-content {
			-webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
			padding-bottom: 35px;
			text-align: center;
			border-radius: 3px;
		}

		.login-form {
			background-color: #ffd000;
			padding: 50px 20px 15px;
		}

		.login-form h3 {
			color: #000;
			font-size: 25px;
			font-weight: 600;
			margin-bottom: 20px;
			text-transform: uppercase;
		}

		.login-form input,
		.login-form button {
			background-color: transparent;
			border: 1px solid #555;
			color: #000;
			margin: 10px 0;
			padding: 10px 20px;
			-webkit-transition: all 0.4s ease 0s;
			transition: all 0.4s ease 0s;
			width: 100%;
		}

		.login-form input:focus {
			border-color: #fff;
		}

		.log-btn button {
			background-color: #fff;
			border-color: #fff;
			border-radius: 4px;
			-webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
			cursor: pointer;
			font-weight: 700;
		}

		.log-btn button:hover {
			background-color: #222;
			border-color: #222;
			color: #fff;
		}

		.or {
			color: #000;
			display: block;
			font-weight: 600;
			margin: 20px 0;
			position: relative;
			text-transform: uppercase;
		}

		.or::after {
			background-color: #ccc;
			content: "";
			height: 1px;
			left: 35px;
			position: absolute;
			top: 10px;
			width: 120px;
		}

		.or::before {
			background-color: #ccc;
			content: "";
			height: 1px;
			right: 35px;
			position: absolute;
			top: 10px;
			width: 120px;
		}

		.login-with-btn {
			background: -webkit-gradient(linear, left top, left bottom, from(#3b5998), to(#344e86));
			background: linear-gradient(to bottom, #3b5998, #344e86);
			border-radius: 3px;
			color: #fff;
			display: block;
			font-size: 16px;
			font-weight: 600;
			margin: 0 30px;
			-webkit-transition: 0.4s;
			transition: 0.4s;
			padding: 10px;
		}

		.login-with-btn.facebook:hover {
			background: -webkit-gradient(linear, left top, left bottom, from(#344e86), to(#3b5998));
			background: linear-gradient(to bottom, #344e86, #3b5998);
		}

		.login-with-btn.google {
			background: -webkit-gradient(linear, left top, left bottom, from(#DC4A38), to(#Dd5b21));
			background: linear-gradient(to bottom, #DC4A38, #Dd5b21);
			margin-top: 15px;
		}

		.login-with-btn.google:hover {
			background: -webkit-gradient(linear, left top, left bottom, from(#Dd5b21), to(#DC4A38));
			background: linear-gradient(to bottom, #Dd5b21, #DC4A38);
		}

		.login-with-btn:hover {
			color: #fff;
		}

		.login-with-btn .fa {
			margin-right: 10px;
		}

		.create-ac {
			color: #555;
			margin: 15px 0 10px;
		}

		.create-ac a,
		.login-menu a {
			color: #000;
			font-weight: 600;
			-webkit-transition: all 0.4s ease 0s;
			transition: all 0.4s ease 0s;
			text-transform: uppercase;
			font-size: 13px;
		}

		.create-ac a:hover,
		.login-menu a:hover {
			color: #fab702;
			text-decoration: underline;
		}

	</style>


</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-transparent bg-dark navbar-color-on-scroll fixed-top navbar-expand-lg"
		color-on-scroll="100">
		<div class=" container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="http://localhost/INF206-2019-A/">Nelayan Belajar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="nav-link">Wawasan</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Peraturan UU</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">Forum</a>
					</li>
				</ul>

				<form class="form-inline ml-auto nav-item navbar-nav">
					<div class="form-group no-border pr-4">
						<input type="text" class="form-control place" placeholder="Search" style="color: grey;">
					</div>
					<!-- <button type="submit" class="btn bg-transparent btn-just-icon btn-round" style="color: grey;">
                        <i class="material-icons">search</i>
                    </button> -->
				</form>

				<div class="btn-group nav-item navbar-nav">
					<a href="http://localhost/INF206-2019-A/assets/akun/login.php">
						<button class="btn bg-transparent btn-round" style="border:thick; color: grey;">Masuk</button>
					</a>
				</div>
			</div>
		</div>
	</nav>
	<!-- end of navbar -->

	<!-- textarea -->
	<div class="page-header header-filter" data-parallax="true"
		style="background-image: url('https://i.imgur.com/b8LbQU3.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<div class="brand text-center">
						<h1>REGISTRASI </h1>
						<h3 class="title text-center">"Miliki Sebuah Akun & Dapatkan Pengalaman Berharga"</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of textarea -->

	<!-- Content -->
	<div class="main main-raised">
		<div class="container menu">
			<!--== Login Page Content Start ==-->
			<section id="lgoin-page-wrap" class="section-padding">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-8 m-auto">
							<div class="login-page-content">
								<div class="login-form">
									<h3>Sign Up</h3>
									<form action="index.html">
										<div class="name">
											<div class="row">
												<div class="col-md-6">
													<input type="text" placeholder="Nama Depan">
												</div>
												<div class="col-md-6">
													<input type="text" placeholder="Nama Belakang">
												</div>
											</div>
										</div>
										<div class="username">
											<input type="email" placeholder="Email">
										</div>
										<div class="username">
											<input type="text" placeholder="Username">
										</div>
										<div class="password">
											<input type="password" placeholder="Password">
										</div>
										<div class="log-btn">
											<button type="submit"><i class="fa fa-check-square"></i> Daftar</button>
										</div>
									</form>
								</div>

								<!-- <div class="login-other">
                                    <span class="or">atau</span>
                                    <a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Daftar Dengan Facebook</a>
                                    <a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Daftar Dengan Google</a>
                                </div> -->
								<div class="create-ac">
									<p>Sudah Memiliki Akun ? <a href="login.php">Masuk</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--== Login Page Content End ==-->
		</div>
	</div>
	<!-- end of Content -->

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<h1 class="title">Nelayan Belajar</h1>
				</div>
				<!-- <div class="col-md-3 pt-5">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Wawasan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Peraturan UU
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Forum
                            </a>
                        </li>
                    </ul>
                </div> -->
				<div class="col-md-4 pt-5 pl-5">
					<ul class="nav">
						<li class="nav-item ">
							<a href="#" class="nav-link">
								Contact Us
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								About Us
							</a>
						</li>
						<li class="nav-item">
							<a href="#" class="nav-link">
								License
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<h3 class="title">Follow us:</h3>
					<div class="btn-wrapper profile">
						<a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple"
							data-toggle="tooltip" data-original-title="Follow us">
							<i class="fab fa-twitter"></i>
						</a>
						<a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple"
							data-toggle="tooltip" data-original-title="Like us">
							<i class="fab fa-facebook-square"></i>
						</a>
						<a target="_blank" href="#" class="btn btn-icon btn-neutral  btn-round btn-simple"
							data-toggle="tooltip" data-original-title="Follow us">
							<i class="fab fa-dribbble"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- end of footer -->

	<!--   Core JS Files   -->
	<script src="../js/core/jquery.min.js" type="text/javascript"></script>
	<script src="../js/core/popper.min.js" type="text/javascript"></script>
	<script src="../js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
	<script src="../js/plugins/moment.min.js"></script>
	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
	<script src="../js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../js/plugins/nouislider.min.js" type="text/javascript"></script>
	<!--  Google Maps Plugin  -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
	<script src="../js/material-kit.js?v=2.0.5" type="text/javascript"></script>


</body>

</html>
