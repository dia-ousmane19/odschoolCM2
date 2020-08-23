<!DOCTYPE html>
<html>
<head>
	<title>od-school</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/images/favicon.ico') ?>">


	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?> ">

	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>
<body>
	<!-- le header -->
	<header>
		<!-- menu de navigation -->
		<nav class="navbar fixed-top navbar-expand-lg border-bottom navbar-light bg-light">
			<a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url('assets/images/logo.png') ?>"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="od_menu_mobile">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse ml-5 navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-23">
					 <!-- <li class="nav-item od_element_1">
						<a class="nav-link " href="#">Documentation</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Formation</a>
					</li> -->
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li> 
					
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('a-propos') ?>">A propos</a>
					</li>
					<span class="border-left mr-2 od_element_2"></span>
					<li class="nav-item">
						<a class="nav-link btn mb-2  btn-light od_inscription" href="<?= base_url('login') ?>">Connexion</a>
					</li>
					<li class="nav-item">
						<a class="nav-link ml-2 btn btn-primary od_inscription" href="<?= base_url('sign-up') ?>">inscription</a>
					</li>
				</ul>
			</div>
		</nav>
	</nav>
</header>
	<!--la fin du header -->