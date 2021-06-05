<html>
<head>
	<title>Planinarsko drustvo</title>
	<!--        <link rel="stylesheet" href="--><?php //site_url()?><!--assets/css/bootswatch.css">-->
	<link rel="stylesheet" href="<?php echo site_url()?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo site_url()?>assets/css/media-query.css">
	<link rel="stylesheet" href="<?php echo site_url()?>assets/css/bootstrap.css"  >
	<link rel="stylesheet" href="<?php echo site_url()?>assets/css/animate.css"  >

	<!--	Google fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

	<!--	Font-awsome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url()?>assets/img/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo site_url()?>assets/img/fav/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo site_url()?>assets/img/fav/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo site_url()?>assets/img/fav/manifest.json">


</head>
<body >

<nav class="navbar navbar-expand-lg navbar-dark my-navbar " id="navbar"  >
	<div class="container">

		<a href="<?php echo site_url()?>">
			<img id="logo" src="<?php echo site_url();?>/assets/img/logo/logo1.png" class="img img-responsive pr-3" >
		</a>

		<button onclick="navClick(this)" class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse " id="navbarSupportedContent" >
			<ul class="navbar-nav  ml-auto" style="    font-family: 'Poppins', sans-serif;text-transform: capitalize;font-weight: 300;letter-spacing: 1px" >
				<li class="nav-item my-item" id="savez">
					<a class="nav-link" href="<?php echo site_url()?>">savez</a>
				</li>
				<li class="nav-item my-item" id="calendar">
					<a class="nav-link" href="<?php echo site_url()?>calendar">akcije <i class="fas fa-map-signs"></i></a>
				</li>
				<li class="nav-item my-item" id="guide">
					<a class="nav-link" href="<?php echo site_url()?>guide">vodiči</a>
				</li>
				<li class="nav-item my-item" id="gear">
					<a class="nav-link" href="<?php echo site_url()?>gear">oprema</a>
				</li>
				<li class="nav-item my-item" id="gallery">
					<a class="nav-link" href="<?php echo site_url()?>gallery">galerija</a>
				</li>
				<li class="nav-item my-item" id="contact">
					<a class="nav-link" href="<?php echo site_url()?>contact">kontakt</a>
				</li>
<!--				<li class="nav-item my-item dropdown">-->
<!--					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Članstvo</a>-->
<!--					<div class="dropdown-menu dropdown-menu-right">-->
<!--						<a class="dropdown-item" href="#">Action</a>-->
<!--						<a class="dropdown-item" href="#">Another action</a>-->
<!--						<a class="dropdown-item" href="#">Something else here</a>-->
<!--						<div class="dropdown-divider"></div>-->
<!--						<a class="dropdown-item" href="#">Separated link</a>-->
<!--					</div>-->
<!--				</li>-->
			</ul>
		</div>
	</div>
</nav>
<span id="section1"></span>
