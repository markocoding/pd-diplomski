<div class="calendar-bg animate__animated animate__fadeInRight" >
	<h2 class="display-1 " >planiraj</h2>
	<h1 class="display-2 " >avanture  </h1>
	<h3 class="display-2 " >tokom cele godine!</h3>
</div>

<div class="container">
	<div id="carouselExampleControls" class="carousel slide mt-5 animate__animated animate__fadeInUp" data-ride="carousel" data-interval="0">
<?php $i = 0;?>
		<div class="carousel-inner">
			<?php $meseci = array(
				'01' =>'januar',
				'02' =>'februar',
				'03' =>'mart',
				'04' =>'april',
				'05'=>'maj',
				'06' =>'jun',
				'07' =>'jul',
				'08' =>'avgust',
				'09' =>'septembar',
				'10' =>'oktobar',
				'11' =>'novembar',
				'12'=>'decembar'
			);

			foreach ($meseci as $mesec):?>

				<div class="carousel-item <?php if (array_search($mesec, $meseci) === date("m")){echo 'active';}?>">
					<div class="row align-items-start h-25 " >

						<div class="col align-self-center text-center">
							<a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true">
							<h1 class="m-0 p-0"><i class="fas fa-chevron-left " style="color: var(--my-link-color); padding: 40px; padding-top: 100%; padding-bottom: 100%;"></i></h1>
							</span>
								<span class="sr-only">Previous</span>
							</a>
						</div>
						<div class="col align-self-center text-center">
							<h1 class="display-1 h-25 p-0 m-0" style="color: black" >
								<b><?php echo $mesec ?></b>
							</h1>
						</div>
						<div class="col align-self-center text-center " >
							<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-prev-icon" aria-hidden="true">
							<h1 class="m-0 p-0"><i class="fas fa-chevron-right " style="color: var(--my-link-color); padding: 40px; padding-top: 100%; padding-bottom: 100%;"></i></h1>
							</span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>

					<div class="table-responsive-md" style="align-content: center">
						<table class="my-table" style="width:100%">
							<tr>
								<th>datum</th>
								<th>avantura</th>
								<th>vodič</th>
								<th>napor*</th>

							</tr>
							<?php foreach ($travels as $travel) :?>
							<?php if (substr($travel['date'], -5,2) === array_search($mesec, $meseci)):?>

										<tr id="<?php echo $travel['id']?>" class="clickable-row" data-href="<?php echo site_url('/calendars/'.$travel['id'])?>"  >

											<td  style="font-family: 'Lato', sans-serif;letter-spacing: 2px; text-align: center"><?php echo substr($travel['date'], -5)?></td>
											<td style="width: 60%;transition: 0.2s linear;"> <?php echo $travel['heading']?></a>
											</td>
											<td><?php echo $travel['name']?></td>
											<td><img src="<?php echo site_url('assets/img/difficulty/'.$travel['difficulty'].'_level.png')?>" style="max-height: 40px"></td>

										</tr>

							<?php endif; $i++?>
							<?php endforeach;?>

						</table>
					</div>


				</div>
			<?php endforeach;?>



		</div>

	</div>
	<h5 class="mt-5"><b>napor*</b></h5>
	<div class="row">
		<p class="px-3">nizak nivo napora - <img src="<?php echo site_url('assets/img/difficulty/1_level.png')?>" style="max-height: 20px">
		</p>
		<p class="px-3">srednji nivo napora - <img src="<?php echo site_url('assets/img/difficulty/2_level.png')?>" style="max-height: 20px">
		</p>
		<p class="px-3">visok nivo napora - <img src="<?php echo site_url('assets/img/difficulty/3_level.png')?>" style="max-height: 20px">
		</p>
	</div>
	</div>
</div>
