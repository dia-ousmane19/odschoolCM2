<?php 
/**
 *  cette classe va afficher tous les cours
 */
class Cours extends CI_controller
{
	public $data=[];
	function index($matiereC){
		$this->load->model('public/Home_model');
		$data['AllInfoChapitre']=$this->Home_model->getAllchapitres($matiereC);
		$data['AllChapitre']=$this->Home_model->getChapitre($matiereC);
		// le fil d'adriane
		$data['IDdomaine']=$this->Home_model->getIDdomaine($data['AllChapitre']['matiere_id_matiere']);
		$data['domaine']=$this->Home_model->getdomaineFDA($data['IDdomaine']['domaine_id_domaine']);
		$data['matiere']=$this->Home_model->getmatiereFDA($data['AllChapitre']['matiere_id_matiere']);
		$this->mybreadcrumb->add('Accueil', base_url());
		$this->mybreadcrumb->add($data['domaine']['domaine'], base_url('CM2/').$data['domaine']['url']);
        $this->mybreadcrumb->add($data['matiere']['matiere'], base_url('activite/').$data['matiere']['link_matiere']);
		$this->mybreadcrumb->add($data['AllChapitre']['titre_chapitre'], base_url());
		$data['breadcrumbs']=$this->mybreadcrumb->render();
		$data['id_chapitre']=$this->Home_model->getProfilByIdChapitre($data['AllChapitre']['id_chapitre']);
		$data['url_profil']=$this->Home_model->getProfilUrl($data['id_chapitre']['profil_id_profil']);
		$this->load->view('public/matiereAleatoire',$data);
	}

}