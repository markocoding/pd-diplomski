<html>
    <head>
        <title>Planinarsko drustvo</title>
<!--        <link rel="stylesheet" href="--><?php //site_url()?><!--assets/css/bootswatch.css">-->
		<link rel="stylesheet" href="<?php site_url()?>assets/css/style.css">
		<link rel="stylesheet" href="<?php site_url()?>assets/css/media-query.css">
		<link rel="stylesheet" href="<?php site_url()?>assets/css/bootstrap.css"  >
		<link rel="stylesheet" href="<?php site_url()?>assets/css/animate.css"  >
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital@1&display=swap" rel="stylesheet">

		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php site_url()?>assets/img/fav/apple-icon-180x180.png">
		<link rel="icon" type="image/png" href="<?php site_url()?>assets/img/fav/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php site_url()?>assets/img/fav/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php site_url()?>assets/img/fav/manifest.json">


	</head>
    <body >
    <nav class="navbar navbar-expand-lg navbar-dark my-navbar " id="navbar"  >

      <a href="<?php echo site_url()?>">
        <img id="logo" src="<?php echo site_url();?>/assets/img/logo/logo1.png" class="img img-responsive pr-3" >
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="" >
        <ul class="navbar-nav  ml-auto" >
            <li class="nav-item my-item" id="savez">
            <a class="nav-link" href="<?php echo site_url()?>">Savez</a>
          </li>
          <li class="nav-item my-item" id="guide">
            <a class="nav-link" href="<?php echo site_url()?>guide">Vodiči</a>
          </li>
          <li class="nav-item my-item" id="calendar">
            <a class="nav-link" href="<?php echo site_url()?>calendar">Kalendar aktivnosti</a>
          </li>
          <li class="nav-item my-item" id="contact">
              <a class="nav-link" href="<?php echo site_url()?>contact">Kontakt</a>
          </li>
          <li class="nav-item my-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Članstvo</a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
        </ul>
      </div>

    </nav>
		<span id="section1"></span>
