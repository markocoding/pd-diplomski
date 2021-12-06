<div class="calendar-bg-small " >

</div>
<?php
$nivoi = array(1 =>'nizak nivo napora',
	2 =>'srednji nivo napora',
	3 =>'visok nivo napora ');

?>
<div class="container mt-5 animate__animated animate__fadeInUp">
	<h1 class="display-4"> <?php echo $travels['heading'] ?></h1>
	<div class="row">
		
		<div class="col-md-6 mt-5 text-center" >
			<h5 class="text-left mb-5" > <?php echo $travels['body'] ?></h5>
			<h5><a href="<?php echo site_url()?>contact" class="new-guide-btn">Prijavi se</a></h5>

			<!-- <a href="<?php echo site_url()?>contact">
			<button type="button" class="btn btn-my-btn" style="padding-left: 5rem; padding-right: 5rem;font-family: 'Poppins', sans-serif;"><h5>Prijavi se</h5></button>
			</a> -->
		</div>

		<div class="col-md-6 mt-5">
			<img  src="<?php echo site_url('/assets/img/travels/') . $travels['travel_image'] ?>" style="max-width: 100%">

			<h5 class="mt-3"><b>Datum polaska: </b><?php echo $travels['date'] ?></h5>
			<h5><b>Nivo napora: </b><?php
				foreach ($nivoi as $nivo){
					if ($travels['difficulty'] == array_search($nivo, $nivoi)){
						echo  $nivo;
					}
				}
				?></h5>
			<h5><b>Vodič: </b><a href="<?php echo site_url('/guides/'.$guide['slug']);?>"><?php echo $guide['name'] ?></a></h5>
		</div>
	</div>





</div>

