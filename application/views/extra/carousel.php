<!----------------- LOGO / NAV --------------------->

<nav class=" navbar-expand-lg navbar-dark bg-primary pt-3" style="position: absolute;top:0;width: 100%;background: transparent!important;z-index: 4">
    <div class="container" >  
        <a href="<?php echo site_url()?>"><img src="<?php echo site_url();?>/assets/img/logo/logo1.png" class="proba img img-responsive pr-3" height="60"></a>
    </div>
</nav>

<!----------------- CAROUSEL --------------------->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  style="z-index: 3000">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100 h-50" style=" background: url(<?php echo site_url()?>assets/img/slika4.jpg);background-repeat: no-repeat; background-size: 100% auto; background-position: center; " src="" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" style=" background: url(<?php echo site_url()?>assets/img/slika2.jpg);background-repeat: no-repeat; background-size: 100% auto; background-position: center; " src="" alt="">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 h-50" style=" background: url(<?php echo site_url()?>assets/img/slika3.jpg);background-repeat: no-repeat; background-size: 100% auto; background-position: center; " src="" alt="">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>