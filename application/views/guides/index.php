<div class="guide-bg animate__animated animate__fadeInRight" >
	<h2 class="display-1 " >Upoznajte se </h2>
	<h1 class="display-2 " >sa našim </h1>
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

		<div class="row mt-5 " data-animate="off" data-animate-type="animate__fadeInUp">
			<div class="col-xl-3 col-lg-5  col-md-12 ">
				<img  src="<?php echo site_url('assets/img/guide/'.$guide['photo'])?>" style="max-width: 100%;  border-right: rgb(250, 183, 33) solid 20px ">
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
				<br><br>
				<a href="<?php echo site_url('/guides/'.$guide['slug'])?>">TODO: LINK KA SVIM TURAMA</a>
			</div>
<!--			<div class="col-md-3">-->
<!--				-->
<!--			</div>-->
		</div>

	<?php endforeach;?>

</div>

