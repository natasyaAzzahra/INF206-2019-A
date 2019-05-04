<!doctype html>
<html lang="en">

<head>
	<title><?= $data ?></title>
	<!--     Fonts and icons     -->
	<!-- <link rel="icon" href=""> -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- Material Kit CSS -->
	<link href="<?= base_url(); ?>assets/css/material-kit.css?v=2.0.5" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-transparent bg-dark navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100">
		<div class=" container">
			<div class="navbar-translate">
				<a class="navbar-brand" href="<?= base_url(); ?>Home">Nelayan Belajar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
						<input type="text" class="form-control place" placeholder="Cari" style="color: grey;">
					</div>
					<!-- <button type="submit" class="btn bg-transparent btn-just-icon btn-round" style="color: grey;">
                        <i class="material-icons">search</i>
                    </button> -->
				</form>

				<div class="btn-group nav-item navbar-nav">
					<?php if (!isset($user['namalengkap'])) : ?>
						<a href="<?= base_url(); ?>Login">
							<button class="btn bg-transparent btn-round" style="border:thick; color: grey;">Masuk</button>
						</a>
					<?php else : ?>
						<button type="button" class="btn bg-transparent btn-just-icon btn-round" style="border:thick; color: grey; border-radius:50%;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">account_circle</i>
						</button>
						<div class="dropdown-menu">
							<label class="dropdown-item"><?= $user['namalengkap'] ?></label>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Edit Profil</a>
							<a class="dropdown-item" href="#">Konten Saya</a>
							<a class="dropdown-item" href="<?= base_url(); ?>Login/logout">Keluar</a>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</nav>
	<!-- end of navbar -->