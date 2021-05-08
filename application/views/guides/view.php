<div class="guide-bg-small " >

</div>


<div class="container mt-5"  >
	<div class="row mb-5 animate__fadeInUp animate__animated" >
		<div class="col-xl-3 col-lg-5  col-md-12 ">
			<img  src="<?php echo site_url('assets/img/guide/'.$guide['photo'])?>" class="guide-img">
		</div>
		<div class="col-xl-9 col-lg-7 col-md-12">
			<h1><?php echo $guide['name']?></h1>
			<h3><b><?php echo $guide['city']?></b></h3>
			<p ><b >telefon:</b>
				<a href=""  class="col-foo " >+381 <?php echo $guide['number']?></a>

				<b>e-mail:</b>
				<a href=""  class="col-foo" ><?php echo $guide['mail']?></a></p>
			<hr>
			<h5><?php echo $guide['bio']?></h5>
			<hr>
		</div>
		<!--			<div class="col-md-3">-->
		<!--				-->
		<!--			</div>-->

	</div>

	<?php $i = 0?>
	<h1 class="text-center display-3 animate__fadeInUp animate__animated">Sve avanture</h1>

		<div style="align-content: center" class="animate__fadeInUp animate__animated">
			<table class="my-table" style="width:100%">
				<tr>
					<th>datum</th>
					<th>avantura</th>
					<th>vodič</th>
					<th>napor*</th>
				</tr>
		<?php foreach ($travels as $travel) :?>

				<tr id="<?php echo $travel['id']?>" class="clickable-row" data-href="<?php echo site_url('/calendars/'.$travel['id'])?>"	>
					<td  style="font-family: 'Lato', sans-serif;letter-spacing: 2px; text-align: center"> <?php echo substr($travel['date'], -5)?></td>
					<td style="width: 60%;transition: 0.2s linear;"> <?php echo $travel['heading']?>

					<td><?php echo $guide['name']; $i++?></td>
					<td><img src="<?php echo site_url('assets/img/difficulty/'.$travel['difficulty'].'_level.png')?>" style="max-height: 40px"></td>
				</tr>



		<?php endforeach;?>
			</table>

	</div>
	<h5 class="mt-5"><b>napor*</b></h5>
	<div class="row">
		<p class="p-3">nizak nivo napora - <img src="<?php echo site_url('assets/img/difficulty/1_level.png')?>" style="max-height: 20px">
		</p>
		<p class="p-3">srednji nivo napora - <img src="<?php echo site_url('assets/img/difficulty/2_level.png')?>" style="max-height: 20px">
		</p>
		<p class="p-3">visok nivo napora - <img src="<?php echo site_url('assets/img/difficulty/3_level.png')?>" style="max-height: 20px">
		</p>
</div>

</div>


