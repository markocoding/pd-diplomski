<div class="calendar-bg animate__animated animate__fadeInRight" >
	<h2 class="display-1 " >planiraj</h2>
	<h1 class="display-2 " >avanture  </h1>
	<h3 class="display-2 " >tokom cele godine!</h3>
</div>
<?php
$nivoi = array(1 =>'nizak nivo napora',
	2 =>'srednji nivo napora',
	3 =>'visok nivo napora ');

?>
<div class="container mt-5">
	<h1 class="display-4"> <?php echo $travels['heading'] ?></h1>
	<div class="row">
		<div class="col-md-6 mt-5">
			<h5 class=""> <?php echo $travels['body'] ?></h5>
		</div>
		<div class="col-md-6 mt-5">
			<h5><b>Datum polaska: </b><?php echo $travels['date'] ?></h5>
			<h5><b>Nivo napora: </b><?php
				foreach ($nivoi as $nivo){
					if ($travels['difficulty'] == array_search($nivo, $nivoi)){
						echo  $nivo;
					}
				}
				?></h5>
			<h5><b>Vodič: </b><a href="<?php echo site_url('/guides/'.$guide['slug']);?>"><?php echo $guide['name'] ?></a></h5>
			<img class="mt-5" src="<?php echo site_url('/assets/img/travels/') . $travels['travel_image'] ?>" style="max-width: 100%">

		</div>
	</div>





</div>

