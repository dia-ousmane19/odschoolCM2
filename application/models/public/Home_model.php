<?php 

/**
 * 
 */
class Home_model extends CI_model
{
	function getDomaine(){
		$domaine=$this->db->get('domaine')->result_array();
		return $domaine;
	}
	function getTitreDomaine($titreDomaine){
		$this->db->select('domaine');
        $TitreDomaine=$this->db->get_where('domaine',['url'=>$titreDomaine])->row_array();
		return $TitreDomaine;
	}
	function getMatiere($id_LC){
		$matiere=$this->db->get_where('matiere',['domaine_id_domaine'=>$id_LC])->result_array();
		return $matiere;
	}
	function getID($Domaine){
		$this->db->select('id_domaine');
		$id_Domaine=$this->db->get_where('domaine',['domaine' =>$Domaine])->row_array();
		return $id_Domaine;
	}
	function getAllMatiere($link_matiere){
        $Allmatiere=$this->db->get_where('matiere',['link_matiere'=>$link_matiere])->row_array();
		return $Allmatiere;
	}
	function getPresentation($id_matiere){
		$Allpresentation=$this->db->get_where('presentation',['matiere_id_matiere'=>$id_matiere])->row_array();
		return $Allpresentation;
	}
	function getIDdomaine($id_matiere){
		$this->db->select('domaine_id_domaine');
		$IdDomaine=$this->db->get_where('matiere',['id_matiere'=>$id_matiere])->row_array();
		return $IdDomaine;
	}
	//Fil D'Adriane FDA
	function getdomaineFDA($id_domaine){
		$this->db->select('domaine,url');
		$Domaine=$this->db->get_where('domaine',['id_domaine'=>$id_domaine])->row_array();
		return $Domaine;
	}
	function getAllChapitre($id_matiere){
		$AlltitleChapitre=$this->db->get_where('chapitre',['matiere_id_matiere'=>$id_matiere])->result_array();
		return $AlltitleChapitre;
	}
	function getAllchapitres($link_chapitre){
		$AlltitleChapitre=$this->db->get_where('chapitre',['link_chapitre'=>$link_chapitre])->result_array();
		return $AlltitleChapitre;
	}
	function getChapitre($link_chapitre){
		$AllChapitre=$this->db->get_where('chapitre',['link_chapitre' =>$link_chapitre])->row_array();
		return $AllChapitre;
	}
	function getmatiereFDA($id_matiere){
		$this->db->select('matiere,link_matiere');
      $titre_matiereFDA=$this->db->get_where('matiere',['id_matiere'=>$id_matiere])->row_array();
		return $titre_matiereFDA;
	}
	function getProfilByIdChapitre($id_chapitre){
		$idProfil=$this->db->get_where('profil_chapitre',['chapitre_id_chapitre'=>$id_chapitre])->row_array();
		return $idProfil;
	}
	function getProfilUrl($id_chapiter){
		$this->db->select('url_nom_complet,nom_complet,photo');
		$Profil=$this->db->get_where('profil',['id_profil'=>$id_chapiter])->row_array();
		return $Profil;
	}
	function getProfil($url_nom_complet){
		$Profil=$this->db->get_where('profil',['url_nom_complet'=>$url_nom_complet])->row_array();
		return $Profil;
	}
}







