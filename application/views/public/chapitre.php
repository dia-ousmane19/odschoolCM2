<?php $this->load->view('public/header'); ?>
<div class="container" style="margin-top: 130px;margin-bottom: 120px">
	<?php if (!empty($breadcrumbs)) :?>
		<div class="container " style="margin-top: 10px">
			<?php echo $breadcrumbs; ?>
		</div>
	<?php endif; ?>
	<h3 class="od_domaine"><?= $AllInfoMatiere['matiere']  ?></h3>
	<div class="container">
		<h2>Présentation</h2>
		<p><?= $AllInfopresentation['presentation']  ?></p>
	</div>
	<h3 class="py-4">Les chapitres</h3>
	<?php foreach ($AllInfoChapitre as  $AllChapitre) : ?>
		<div class="container od_contenu">
			<a href="<?= base_url("cours/").$AllChapitre['link_chapitre'] ?>" class="d-flex py-4 flex-row justify-content-between ">
				<span ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mr-2">
					<path id="ic_library_books_24px" d="M20,2H8A2.006,2.006,0,0,0,6,4V16a2.006,2.006,0,0,0,2,2H20a2.006,2.006,0,0,0,2-2V4A2.006,2.006,0,0,0,20,2Zm-1,9H9V9H19Zm-4,4H9V13h6Zm4-8H9V5H19Z" transform="translate(-6 -2)" fill="#37383b"/>
				</svg> <?= $AllChapitre['titre_chapitre']  ?> </span>
				<i class='fas fa-arrow-right' style='font-size:24px;'></i>
			</a>
		</div>
	<?php endforeach; ?>
</div>

<?php $this->load->view('public/footer'); ?>

