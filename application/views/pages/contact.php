<div class="contact-bg animate__animated animate__fadeInRight" >
	<div class="container">
		<div  style="color: white">
			<h2 class="display-1 " style="font-weight: 400;">Uspon je </h2>
			<h1 class="display-2 pl-2 pb-2 " style="margin-left: 200px; letter-spacing: 2px;">svuda gde su</h1>
			<h3 class="display-2 " style=";font-weight: 400;color: white; letter-spacing: 2px;  background-color:var(--my-main-color)"> naši članovi!</h3>
		</div>
	</div>
</div>
<div class="container mt-5">
<div class="row animate__fadeInUp animate__animated" >

		

		<div class="col-md-6">
			<h1>Učlanjenje</h1>
		<h5 style="line-height: 1.4"  >
		Prvo treba popuniti formular “Evidencioni karton člana” koji možete preuzeti ovde:
		 <a href="<?php echo site_url('assets/download/Evidencioni-list-clana-2021.docx')?>" download="Evidencioni-list-clana-2021.docx"> 
		 	<i class="far fa-file-alt my-download"></i>
		 </a><br><br>
		Popunjen formular “Evidencioni karton člana” možete dostaviti elektronskim putem preko emaila Društva (pduspon2021@gmail.com), ili ga predati na sastanku Društva (utorkom od 17 do 19 časova).  Pored ovoga, potrebno je da izvršite uplatu od 900 dinara (800 dinara za članarinu i 100 dinara za člansku karticu koja važi 5 godina). Ovu uplatu možete izvršiti na sastanku Društva, ili na račun Društva.</h5>


			<hr>

			<?php foreach($guides as $guide):?>
				<?php if($guide['position'] === "predsednica društva" || $guide['position'] === "načelnik društva"):?>

					<h4><b><?php echo $guide['position'] ?>:</b></h4>
					<h5>
						<?php echo $guide['name'] ?><br>
						Telefon:         <span class="pl-5">+381(0) <?php echo $guide['number']?></span><br>
						Email:            <span class="pl-5"><?php echo $guide['mail']?></span>
					</h5><br>

				<?php endif;?>
			<?php endforeach;?>


			<h4><b>PD Uspon:</b></h4>
			<h5 >
				Vojvode Stepe 283<br>
				Voždovac<br>
				Beograd 11000</h5>
			<br>
			<h5>
				Matični broj:  28706570<br>
				PIB:               110122845<br>
				Broj računa:   885-249638-31 (Komercijalna banka)<br>
				Email:            pduspon2021@uspon.rs<br>
				Website:         pduspon.org.rs<br>
			</h5>
			<hr>

			<h2 >
			Ukoliko imate neko pitanje, sugestiju ili primedbu </h2>
			<h2 class="p-2" style=";font-weight: 400;color: white; letter-spacing: 1px;  background-color:var(--my-main-color)">kontaktirajte nas elektronskom poštom.</h2>
			<br>
			<br>
			<form>
				<h5>
				 <div class="form-group">
			    <label for="exampleFormControlInput0">Vaše ime</label>
			    <input type="email" class="form-control" id="exampleFormControlInput0" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlInput1">Vaša email adresa</label>
			    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			  </div>
				<div class="form-group">
			    <label for="exampleFormControlInput2">Tema poruke</label>
			    <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="">
			  </div>
			  <div class="form-group">
			    <label for="exampleFormControlTextarea1">Sadržaj poruke</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
			  </div>
			  <h5 class=" mt-5">
					<a href="" class="my-btn">pošalji </a>
				</h5>
			</form>
			</h5>
			
		</div>
		<div class="col-md-6">
			<div class="sticky-top position-sticky "  style="padding-top: 5rem;padding-bottom: 5rem">
				<h3 class="display-4">Mapa </h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11330.453012488197!2d20.4800159!3d44.7683016!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd12e2aad5590e385!2sThe%20School%20of%20Electrical%20and%20Computer%20Engineering%20of%20Applied%20Studies!5e0!3m2!1sen!2srs!4v1619890299284!5m2!1sen!2srs"
					style="border:0;width: 100%;height: 500px" allowfullscreen="" loading="lazy"></iframe>
			</div>

	
	</div>
</div>

		
		
		
</div>
