<?php $this->load->view('public/header'); ?>

<div class="container od_profil_bg">
	<div class="p-4 od_profil_titre">
		<h3 class="text-center">A propos du professeur</h3>
	</div>
</div>
<div class="container mt-4 mb-4 d-flex flex-row flex-wrap justify-content-between od_profil">
	<div>
		<h5>Le professeur</h5>
		<img class="od_profil_img" src="<?= base_url('assets/images/').$info_profil['photo']  ?>">
	</div>
	<div class="p-4">
		<h4>Information</h4>
		<p><?= $info_profil['a_propos'] ?></p>
		<h4>Contact</h4>
		<p><i class='fas fa-phone-square-alt'></i> <?= $info_profil['tel'] ?> &nbsp;  <i class='fas fa-envelope'></i> <?= $info_profil['email'] ?></p>
	</div>
</div>

<?php $this->load->view('public/footer'); ?>
