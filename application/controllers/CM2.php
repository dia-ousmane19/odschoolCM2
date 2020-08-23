<?php 
/**
 * 
 */
class CM2 extends CI_controller
{
	public $data=[];
	function domaine($link_domaine){
		        // le fil d'adriane
		$this->load->model('public/Home_model');
		$data['domaine']=$this->Home_model->getTitreDomaine($link_domaine);
		$data['id_domaine']=$this->Home_model->getID($data['domaine']['domaine']);
		$id=$data['id_domaine'];
				// le fil d'adriane
		$this->mybreadcrumb->add('Accueil', base_url());
		$this->mybreadcrumb->add($data['domaine']['domaine'], base_url());
		$data['breadcrumbs']=$this->mybreadcrumb->render();
		$data['matieres']=$this->Home_model->getMatiere($id['id_domaine']);
		$this->load->view('public/activite',$data);
	}
	function chapitre($matiereC){
		$this->load->model('public/Home_model');
		$data['AllInfoMatiere']=$this->Home_model->getAllMatiere($matiereC);
		$idC=$this->Home_model->getAllMatiere($matiereC);
		$data['AllInfopresentation']=$this->Home_model->getPresentation($idC['id_matiere']);
		$data['AllInfoChapitre']=$this->Home_model->getAllChapitre($idC['id_matiere']);
		$data['IDdomaine']=$this->Home_model->getIDdomaine($idC['id_matiere']);
		$data['domaine']=$this->Home_model->getdomaineFDA($data['IDdomaine']['domaine_id_domaine']);
		// le fil d'adriane
		$this->mybreadcrumb->add('Accueil', base_url());
		$this->mybreadcrumb->add($data['domaine']['domaine'], base_url('CM2/').$data['domaine']['url']);
		$this->mybreadcrumb->add($data['AllInfoMatiere']['matiere'], base_url());
		$data['breadcrumbs']=$this->mybreadcrumb->render();
		$this->load->view('public/chapitre',$data);
	}
	function profil($url_nom_complet){
		$this->load->model('public/Home_model');
		$data['info_profil']=$this->Home_model->getProfil($url_nom_complet);
		$this->load->view('public/profil',$data);
	 }

}



