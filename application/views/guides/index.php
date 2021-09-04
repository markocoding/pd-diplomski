<div class="guide-bg animate__animated animate__fadeInLeft" >
	<h2 class="display-1 " >Upoznajte  </h2>
	<h1 class="display-2 " >se sa našim </h1>
	<h3 class="display-2 " >licenciranim vodičima!</h3>
</div>

<div class="container "  >
	<div class="my-5 animate__animated animate__fadeInUp" style="text-align: center; max-width: 1000px;margin-left: auto; margin-right: auto">
		<h2>Vodiči našeg Društva su planinari sa dugogodušnjim iskustvom u vođenju akcija.

		Bezbednost učesnika  za nas je najvažniji deo svakog  planinarskog izleta.
		Svaki naš voduč ima Licencu za vođenje PS Srbije i  Dozvolu za rad.
		</h2>
		<br><br>
		<h3><b>Molimo Vas da nam svojom saradnjom pomognete da to i ostvarimo.</b></h3>
	</div>

	<?php foreach ($guides as $guide):?>

		<!--		<div class="row mt-5 " data-animate="off" data-animate-type="animate__fadeInUp">-->
		<!--			<div class="col-xl-3 col-lg-5  col-md-12 ">-->
		<!--				<img  src="--><?php //echo site_url('assets/img/guide/'.$guide['photo'])?><!--" class="guide-img" >-->
		<!--			</div>-->
		<!--			<div class="col-xl-9 col-lg-7 col-md-12">-->
		<!--				<h1>--><?php //echo $guide['name']?><!--</h1>-->
		<!--				<h3><b>--><?php //echo $guide['city']?><!--</b></h3>-->
		<!--				<p ><b >telefon:</b>-->
		<!--				<a href=""  class="col-foo " >+381 --><?php //echo $guide['number']?><!--</a>-->
		<!--					<b>e-mail:</b>-->
		<!--				<a href=""  class="col-foo" >--><?php //echo $guide['mail']?><!--</a></p>-->
		<!--				<hr>-->
		<!--				<h5>--><?php //echo word_limiter($guide['bio'], 1000)?><!--</h5>-->
		<!---->
		<!--				<h5 class=" mt-5">-->
		<!--					<a href="--><?php //echo site_url('/guides/'.$guide['slug'])?><!--" class="my-btn">pogledaj sve ture </a>-->
		<!--				</h5>-->
		<!--			</div>-->
		<!--		</div>-->

		<div class="row " data-animate="off" data-animate-type="animate__fadeInUp" style="margin-bottom: 5rem;box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;" >
			<div class="col-xl-4 col-lg-5  col-md-12 p-0" style="max-height: 462px; overflow: hidden" >
				<a class="guide-img-link" href="<?php echo site_url('/guides/'.$guide['slug'])?>">
					<img  src="<?php echo site_url('assets/img/guide/'.$guide['photo'].'.jpg')?>" class="guide-img guide-card-img" >
				</a>
			</div>
			<div class="col-xl-8 col-lg-7 col-md-12 guide-card" style="color: white; background-color: var(--my-main-color); border-left: 1px solid white">
				<h1 class="display-2 " style=" border-bottom: 1px solid white;"><a class="guide-card-link" href="<?php echo site_url('/guides/'.$guide['slug'])?>"><?php echo $guide['name']?></a></h1>
				<div class="row"  >
					<div class="col-md-6" style="border-right: 1px solid white ">
						<h3 >
							<b >Pozicija  </b><br>
							<i class="fas fa-pen-alt"></i><span class="pl-4"><?php echo $guide['position']?></span>
						</h3>
						<h3 class="mt-5">
							<b >Mesto  </b><br>
							<i class="fas fa-map-marker-alt"></i><span class="pl-4"><?php echo $guide['city']?></span>
						</h3>
						<h3 class="mt-5 text-center">
							<!--							<a class=" my-btn-guide"  href="--><?php //echo site_url('/guides/'.$guide['slug'])?><!--">pogledaj sve ture </a>-->
							<div class="button1" id="button-5">
								<div id="translate"></div>
								<a href="<?php echo site_url('/guides/'.$guide['slug'])?>">detaljnije <i class="fas fa-chevron-right" style="font-size: 20"></i></a>
							</div>
						</h3>
					</div>
					<div class="col-md-6">
						<h3 >
							<b >telefon:</b><br>
							<span class="pl-4 ">+381 <?php echo $guide['number']?></span>
						</h3>
						<h3  class="mt-5">
							<b>e-mail:</b><br>
							<span class="pl-4"><?php echo $guide['mail']?></span>
						</h3>
						<h3  class="mt-5 text-right" >
							<a href="https://www.facebook.com/" target="_blank" style="color: white"><i class="social fab fa-facebook-f facebook"></i></a>
							<a href="https://www.instagram.com/" target="_blank" style="color: white"><i class="social fab fa-instagram instagram"></i></a>
							<a href="https://www.twitter.com/" target="_blank" style="color: white"><i class="social fab fa-twitter twitter"></i></a>
						</h3>


					</div>
				</div>

			</div>
		</div>

	<?php endforeach;?>

</div>

