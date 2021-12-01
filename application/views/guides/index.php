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
	<div class="row justify-content-center">
		<?php $i=0 ?>
		<?php foreach ($guides as $guide):?>

		
			<div class="col-xl-3 col-lg-7 col-md-7 col-xs-12 ">

				<div class="card " >
					<img src="<?php echo site_url('assets/img/guide/'.$guide['photo']) .'_wide.jpg' ?>" class="card-img-top img-fluid neki" alt="">
					<div class="card-body guide-card-bg pt-3" >
						<?php $nameAndSurname = explode(" ", $guide['name']);
								// print_r($nameAndSurname)
						?>
						<h1 class="card-title name-offset"><b><span ><?php echo $nameAndSurname[0]?></span></b><br> <span style="font-weight:100;"><?php echo $nameAndSurname[1]?></span></h1>
						<hr>
						
						<h6 class="small-title">Pozicija</h6>
						<h5 class="pl-2"><b><?php echo ucfirst( $guide['position'])?></b></h5>

						<h6 class="small-title">Lokacija</h6>
						<h5 class="pl-2"><b><?php echo $guide['city']?></b></h5>

						<div class="hr-style"></div>

						<p class="card-text"><?php echo character_limiter($guide['bio'], 100) ?></p>

						<p style="text-align: end;	margin-top: 3em; "><a href="<?php echo site_url('/guides/'.$guide['slug'])?>" class="new-guide-btn"> Upoznaj vodiča</a></p>
					</div>
				</div>

			</div>
			
			<?php if($i == 2 ):?>
				<!-- Force next columns to break to new line -->
				    <div class="w-100 d-none d-md-block"></div>
			<?php endif;?>
			

			<?php $i++ ?>
		<?php endforeach;?>
	</div>
</div>

