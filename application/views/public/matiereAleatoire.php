<?php $this->load->view('public/header') ?>
<section class="container-fluid od_header">
	<div class="container  od_titre_contenu">
		<div class="text-center p-4">
			<h2 style="opacity: 0.7"><?= $AllChapitre['titre_chapitre'] ?></h2>
		</div>
	</div>
</section>
<?php if (!empty($breadcrumbs)) :?>
		<div class="container " style="margin-top: 10px">
			<?php echo $breadcrumbs; ?>
		</div>
	<?php endif; ?>
<main class="container-fluid pb-4 od_main">
	<div class="container-fluid p-4 row">
		<section class=" col-xs-12 col-sm-12 col-md-8 col-lg-8">
			
			<div class="container p-4">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link btn btn-outline-info" href="#"><i class='fas fa-angle-left'></i> Chapitre précédent </a>
					</li>
					<span class="od_separator"></span>
					<li class="nav-item">
						<a class="nav-link btn btn-outline-info" href="#">Chapitre suivant <i class='fas fa-angle-right'></i></a>
					</li>
				</ul>
			</div>
			<!-- le chapitre en entier -->
			<div class="container">
				<p><?= $AllChapitre['contenu_chapitre'] ?></p>
			</div>
			<div class="container p-4">
				<ul class="nav">
					<li class="nav-item">
						<a class="nav-link btn btn-outline-info" href="#"><i class='fas fa-angle-left'></i> Chapitre précédent </a>
					</li>
					<span class="od_separator"></span>
					<li class="nav-item">
						<a class="nav-link btn btn-outline-info" href="#">Chapitre suivant <i class='fas fa-angle-right'></i></a>
					</li>
				</ul>
			</div>
		</section>
		<section class=" m-2 col-xs-12 col-sm-12 col-md-3 col-lg-3 od_sidebar">
			<ol class="p-4 od_sidebar_ul">
				<li class="py-2" ><a style="color: #fff" class="btn btn-danger od_buton_EEE" href="<?= base_url('login')  ?>">Je fais mes exercices</a></li>
				<li class="py-2" ><a style="color: #fff" class="btn btn-danger od_buton_EEE" href="<?= base_url('login')  ?>">Mes évaluations</a></li>
				<li class="py-2"><a style="color: #fff" class="btn btn-danger od_buton_EEE" href="<?= base_url('login')  ?>">Je consultes mes examens</a></li>
			</ol>
		</section>
	</div>
	<div class="container d-flex flex-row flex-wrap justify-content-between od_profil">
		<div>
			<h5>Le professeur</h5>
			<a  href="<?= base_url('profil/').$url_profil['url_nom_complet'] ?>">
				<img class="od_profil_img" src="<?= base_url('assets/images/').$url_profil['photo'];  ?>">
				<?= $url_profil['nom_complet'] ?>
			</a>
		</div>
		<div class="p-4">
			<a class="btn btn-outline-info" href="">Devenez mentor chez od-school</a>
		</div>
	</div>
</main>
<?php $this->load->view('public/header') ?>
