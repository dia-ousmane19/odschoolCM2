<?php $this->load->view('public/header'); ?>
<div class="container mb-4" style="margin-top: 140px">
	<div class="alert  alert-secondary" role="alert">
		<h1>Nous contacter</h1>
	</div>
	<form>
		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
			</div>
			<div class="form-group col-md-6">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			<textarea class="form-control" id="message" name="message" placeholder="Votre Message" rows="3"></textarea>
		</div>
		<button type="submit" class="btn btn-outline-secondary">Envoyer</button>
	</form>

	
</div>


<?php $this->load->view('public/footer'); ?>