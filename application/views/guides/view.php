<div class="guide-bg-small " >

</div>


<div class="container "  >
	<div class="row mb-5 animate__fadeInUp animate__animated"  >
		<div class=" col-lg-3 col-md-12  ">

			<div class="sticky-top position-sticky" style="top: 15rem;transform: translate3d(0px, -10rem, 0px); margin-bottom: 5rem;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px; " >
				
			<!-- <img  src="<?php echo site_url('assets/img/guide/'.$guide['photo']. '_sq.jpg')?>" class="guide-img " >
				<h3  class="mt-5 text-right" style="transform: translate3d(0px, -10rem, 0px); position: absolute; right: 0; bottom: 13rem" >
					<a href="https://www.facebook.com/" target="_blank" style="color: white"><i class="social fab fa-facebook-f facebook"></i></a>
					<a href="https://www.instagram.com/" target="_blank" style="color: white"><i class="social fab fa-instagram instagram"></i></a>
					<a href="https://www.twitter.com/" target="_blank" style="color: white"><i class="social fab fa-twitter twitter"></i></a>
				</h3>
				<div class="p-4 guide-card" style="color: white; background-color: var(--my-main-color); ">

					<h1><?php echo $guide['position']?></h1>
					<h3 ><?php echo $guide['city']?></h3>
					<hr style="background-color: white">
					<h3 >
						<b >telefon:</b><br>
						<span class="pl-4 ">+381 <?php echo $guide['number']?></span>
					</h3>
					<h3  class="mt-2">
						<b>e-mail:</b><br>
						<span class="pl-4"><?php echo $guide['mail']?></span>
					</h3>
				</div> -->

				<div class="card " >
					<img src="<?php echo site_url('assets/img/guide/'.$guide['photo']) .'_sq.jpg' ?>" class="card-img-top img-fluid neki" alt="">
					<div class="card-body guide-card-bg pt-3 pb-4" >
					
						
						<h6 class="small-title">Pozicija</h6>
						<h5 class="pl-2"><b><?php echo ucfirst( $guide['position'])?></b></h5>

						<h6 class="small-title">Lokacija</h6>
						<h5 class="pl-2"><b><?php echo $guide['city']?></b></h5>

						<div class="hr-style"></div>

						<h6 class="small-title">Kontakt</h6>
						<h5 class="pl-2">telefon: <b><?php echo $guide['mail']?></b></h5>
						<h5 class="pl-2">e-mail: <b>+381 <?php echo $guide['number']?></b></h5>
					
						
			

						<h3  class="mt-5 text-right" >
							<a href="https://www.facebook.com/" target="_blank" style="color: black"><i class="social fab fa-facebook-f facebook"></i></a>
							<a href="https://www.instagram.com/" target="_blank" style="color: black"><i class="social fab fa-instagram instagram"></i></a>
							<a href="https://www.twitter.com/" target="_blank" style="color: black"><i class="social fab fa-twitter twitter"></i></a>
						</h3>
					</div>
				</div>



			</div>

		</div>
		<div class=" col-lg-9  col-md-12">
			<h1 class="display-1 mb-5"><?php echo $guide['name']?></h1>

			<h5><?php echo $guide['bio']?></h5>
			<hr>

			<?php $i = 0?>
			<h1 class="mb-5 display-3 animate__fadeInUp animate__animated">Sve avanture</h1>

			<div style="align-content: center" class="table-responsive-md animate__fadeInUp animate__animated">
				<table class="my-table" style="width:100%">
					<tr>
						<th>datum</th>
						<th>avantura</th>
<!--						<th>vodič</th>-->
						<th>napor*</th>
					</tr>
					<?php foreach ($travels as $travel) :?>

						<tr id="<?php echo $travel['id']?>" class="clickable-row" data-href="<?php echo site_url('/calendars/'.$travel['id'])?>"	>
							<td  style="font-family: 'Lato', sans-serif;letter-spacing: 2px; text-align: center"> <?php echo substr($travel['date'], -5)?></td>
							<td style="width: 60%;transition: 0.2s linear;"> <?php echo $travel['heading']?>

<!--							<td>--><?php //echo $guide['name']; $i++?><!--</td>-->
							<td><img src="<?php echo site_url('assets/img/difficulty/'.$travel['difficulty'].'_level.png')?>" style="max-height: 40px"></td>
						</tr>



					<?php endforeach;?>
				</table>

			</div>
			<h5 class="mt-5"><b>napor*</b></h5>
			<div class="row">
				<p class="px-3"><img src="<?php echo site_url('assets/img/difficulty/1_level.png')?>" style="max-height: 20px"> - nizak nivo napora</p>
				<p class="px-3"><img src="<?php echo site_url('assets/img/difficulty/2_level.png')?>" style="max-height: 20px"> - srednji nivo napora</p>
				<p class="px-3"><img src="<?php echo site_url('assets/img/difficulty/3_level.png')?>" style="max-height: 20px"> - visok nivo napora</p>
			</div>
		</div>

	</div>


</div>


