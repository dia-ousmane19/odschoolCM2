<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view('public/header'); ?>

<section class="container-fluid  od_banniere">
	<div class="od_banniere_img">
		<img src="<?= base_url('assets/images/banniere.jpg') ?>">
	</div>
	
	<div class="col-xs-12 col-md-5 col-sm-6 position-relative od_description">
		<p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</section>

<main class="container-fluid p-4" style="height: auto;">
		<!-- la partie cm2 -->
	<section class="container">
		<h2 class="text-center od_gros_titre_matiere">Les domaines en Cm2</h2>
		<p class="text-center">Sélectionner la catégorie qui vous intéresse</p>
		
		<div class="container od_ensemble_icone">
			<div class="row">
				<!-- debut de la boucle -->
				<?php foreach ($domaine as $element) :?>
				<!-- debut incone matiere -->
				<div class="col-xs-6 col-sm-4 col-md-4 od_matiere">
					<div class="rounded-circle od_img_blog">
						<a href="<?= base_url().'CM2/'.$element['url']; ?>">
							<div class="od_img">
								<i class="<?= $element['classe_icone'] ?>" style='font-size:36px;color: #000'></i>
							</div>
						</a>
					</div>
					<div class="od_titre_matiere">
						<a href="<?= base_url().'CM2/'.$element['url']; ?>"><?= $element["domaine"] ?></a>
					</div>
				</div>
				<!-- fin icone matiere -->
			<?php endforeach; ?>
				<!-- fin de la boucle -->
				
			</div>
		</div>
	</section>
	<!-- la fin de la partie cm2 -->
	
	<section style="padding-top: 50px;" >
		<h2 class="text-center py-4">od-school,comment ça marche ?</h2>
		<div class="container od_ensemble_icone_guide">
			<div class="row">
				<!-- debut incone matiere -->
				<div class="col-xs-12 col-sm-12 p-2 col-md-4 od_matiere_guide">
					<div class="od_img_blog_guide">
							<div class="border-bottom  od_img_guide">
								<img src="<?= base_url('assets/images/inscription.gif') ?>">
							</div>
					</div>
					<div class="od_titre_matiere_guide">
						Inscription gratuite
					</div>
					<div style="width: 300px;padding-left: 12px; ">
					<p style="text-align: justify;color: #6c757d!important;margin-left: -12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. </p>
				</div>
				</div>
				<!-- fin icone matiere -->
				<!-- debut incone matiere -->
				<div class="col-xs-12 col-sm-12 p-2 col-md-4 od_matiere_guide">
					<div class="od_img_blog_guide">
							<div class="border-bottom  od_img_guide">
								<img src="<?= base_url('assets/images/qualité.jpeg') ?>">
							</div>
					</div>
					<div class="od_titre_matiere_guide">
						Contenus de qualité
					</div>
					<div style="width: 300px;padding-left: 12px; ">
					<p style="text-align: justify;color: #6c757d!important;margin-left: -12px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. </p>
					</div>
				</div>
				<!-- fin icone matiere -->
				<!-- debut incone matiere -->
				<div class="col-xs-12 col-sm-12 p-2 col-md-4 od_matiere_guide">
					<div class="od_img_blog_guide">
							<div class="border-bottom od_img_guide">
								<img src="<?= base_url('assets/images/home.jpeg') ?>">
							</div>
					</div>
					<div class="od_titre_matiere_guide">
						Apprendre à la maison
					</div>
					<div style="width: 300px;padding-left: 12px; ">
					<p style="text-align: justify;color: #6c757d!important;margin-left: -12px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. </p>
					</div>
					
				</div>
				<!-- fin icone matiere -->
			</div>
		</div>
	</section>
	<section>
		<div class="container od_guide">
			<h3 class="text-center py-4">Aidez vos proches en utilisant notre plateforme,od-school</h3>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-6 od_text_guide">
					<p class="text-justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 od_text_guide">
					<img src="<?= base_url('assets/images/programme.png') ?>">
				</div>
			</div>
		</div>
	</section>
</main>
<?php $this->load->view('public/footer'); ?>