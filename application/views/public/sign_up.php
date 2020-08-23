
<?php $this->load->view('public/header'); ?>
<div class="container p-4 od_signup">
	<h3 class="text-center">Créer votre compte</h3>
	 <?php if (!empty($this->session->userdata('MessageErreur'))) :?>
      <div class="alert alert-danger">
        <?= $this->session->userdata('MessageErreur') ?>
      </div>
    <?php endif; ?>
	<form method="post" action="<?= base_url('sign-up')  ?>">
		<img class="mb-4 offset-md-5 offset-xs-9" src="<?= base_url("assets/images/logo.png") ?>">
		<div class="form-row">
			<div class="form-group col-md-6">
				<input type="text" class="form-control" id="tel_email" name="tel_email" value="<?= set_value('tel_email')  ?>" placeholder="Votre email ou votre numéro de téléphone">
				<?= form_error('tel_email') ?>
			</div>
			<div class="form-group col-md-6">
				<input type="password" class="form-control" id="password"  name="password" placeholder="Votre mot de passe">
				<?= form_error('password') ?>
			</div>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="nom_complet" value="<?= set_value('nom_complet')  ?>" name="nom_complet" placeholder="prénom et nom">
				<?= form_error('nom_complet') ?>
		</div>
		<div class="form-group">
			<input type="text" class="form-control" id="niveau" value="<?= set_value('niveau')  ?>" name="niveau" placeholder="Votre niveau d'étude">
			<?= form_error('niveau') ?>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<select id="civilite" name="civilite" class="form-control">
					<option selected>Civilité</option>
					<option value="homme">Homme</option>
					<option value="femme">Femme</option>
				</select>
			</div>
			<div class="form-group col-md-6">
				<select id="statut" name="statut" class="form-control">
					<option selected>êtes-vous :</option>
					<option value="professeur">Professeur</option>
					<option value="etudiant">étudiant</option>
					<option value="eleve">élève</option>
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-outline-info">M'inscrire</button>
	</form>
	Vous possédez déjà un compte <a href="<?= base_url('login') ?>">Cliquez-ici</a>


<?php $this->load->view('public/footer'); ?>
