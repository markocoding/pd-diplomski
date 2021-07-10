<div class="calendar-bg animate__animated animate__fadeInLeft">
	<h2 class="display-1 ">planiraj</h2>
	<h1 class="display-2 ">avanture </h1>
	<h3 class="display-2 ">tokom cele godine!</h3>
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-3 d-none d-xl-block ">
			<div class="sticky-top position-sticky" style="padding-top: 3rem; z-index: 0">
				<div class="card " style="width: 18rem;margin-top: 3rem">
					<div class="card-body p-0" style="">
						<h4 class="card-title p-2 m-0" style="background-color: var(--my-main-color) ;color: white ; text-align: center">Izaberi idealan mesec za svoje putovanje!<hr style="background-color: white"></h4>
<!--						<h6 class="card-subtitle mb-2 p-2 text-muted">Svake nedelje po 2 avanture!</h6>-->
<!--						<p class="card-text">Some quick example text to build on the card title and make up the bulk of-->
<!--							the card's content.</p>-->
						<div style="text-align: center;background-color: white ">
							<a onclick="moView(this)" style="margin: 0" id="f-januar" class="card-link"><h4 class="moView ">Januar</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-februar" class="card-link"><h4 class="moView ">februar</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-mart" class="card-link"><h4 class="moView ">mart</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-april" class="card-link"><h4 class="moView ">april</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-maj" class="card-link"><h4 class="moView ">maj</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-jun" class="card-link"><h4 class="moView ">jun</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-jul" class="card-link"><h4 class="moView ">jul</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-avgust" class="card-link"><h4 class="moView ">avgust</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-septembar" class="card-link"><h4 class="moView ">septembar</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-oktobar" class="card-link"><h4 class="moView ">oktobar</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-novembar" class="card-link"><h4 class="moView ">novembar</h4></a>
							<a onclick="moView(this)" style="margin: 0" id="f-decembar" class="card-link"><h4 class="moView ">decembar</h4></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xl-9">
			<div id="carouselExampleControls" class="carousel slide mt-5 animate__animated animate__fadeInUp"
				 data-ride="carousel" data-interval="0">
				<?php $i = 0; ?>
				<div class="carousel-inner">
					<?php $meseci = array(
						'01' => 'januar',
						'02' => 'februar',
						'03' => 'mart',
						'04' => 'april',
						'05' => 'maj',
						'06' => 'jun',
						'07' => 'jul',
						'08' => 'avgust',
						'09' => 'septembar',
						'10' => 'oktobar',
						'11' => 'novembar',
						'12' => 'decembar'
					);

					foreach ($meseci as $mesec):?>

						<div id="<?php echo $mesec?>" class="carousel-item <?php if (array_search($mesec, $meseci) === date("m")) {echo 'active';} ?>">
							<div class="row align-items-start h-25 ">
								<div class="col align-self-center text-center">
									<a class="carousel-control-prev " href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true">
											<h1 class="m-0 p-0"><i class="fas fa-chevron-left " style="color: var(--my-link-color); padding: 40px; padding-top: 100%; padding-bottom: 100%;"></i></h1>
										</span>
										<span class="sr-only">Previous</span>
									</a>
								</div>
								<div class="col align-self-center text-center">
									<h1 class="display-1 h-25 p-0 m-0" style="color: black">
										<b><?php echo $mesec ?></b>
									</h1>
								</div>
								<div class="col align-self-center text-center ">
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
									<?php foreach ($travels as $travel) : ?>
										<?php if (substr($travel['date'], -5, 2) === array_search($mesec, $meseci)): ?>

											<tr id="<?php echo $travel['id'] ?>" class="clickable-row"	data-href="<?php echo site_url('/calendars/' . $travel['id']) ?>">
												<td style="font-family: 'Lato', sans-serif;letter-spacing: 2px; text-align: center"><?php echo substr($travel['date'], -5) ?></td>
												<td style="width: 60%;transition: 0.2s linear;"> <?php echo $travel['heading'] ?></a>
												</td>
												<td><?php echo $travel['name'] ?></td>
												<td><img src="<?php echo site_url('assets/img/difficulty/' . $travel['difficulty'] . '_level.png') ?>"	style="max-height: 40px"></td>
											</tr>

										<?php endif; $i++ ?>
									<?php endforeach; ?>

								</table>
							</div>

						</div>
					<?php endforeach; ?>
				</div>

			</div>
			<h5 class="mt-5"><b>napor*</b></h5>
			<div class="row">
				<p class="px-3"><img src="<?php echo site_url('assets/img/difficulty/1_level.png') ?>"
									 style="max-height: 20px"> - nizak nivo napora</p>
				<p class="px-3"><img src="<?php echo site_url('assets/img/difficulty/2_level.png') ?>"
									 style="max-height: 20px"> - srednji nivo napora</p>
				<p class="px-3"><img src="<?php echo site_url('assets/img/difficulty/3_level.png') ?>"
									 style="max-height: 20px"> - visok nivo napora</p>
			</div>
		</div>
	</div>
</div>
</div>
