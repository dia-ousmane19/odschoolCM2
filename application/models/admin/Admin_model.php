<?php 
/**
 * 
 */
class Admin_model extends CI_model
{
	function getAllChapitre(){
		$Allchapitre=$this->db->get('chapitre')->result_array();
		return $Allchapitre;
	}
	function getMatiere(){
		$this->db->select('id_matiere,matiere');
        $Allmatiere=$this->db->get('matiere')->result_array();
		return $Allmatiere;
	}
	function getAuteur(){
		$this->db->select('id_profil,nom_complet');
        $AllAuteur=$this->db->get('profil')->result_array();
		return $AllAuteur;
	}
	function insertChapitre($titre,$contenu,$link,$id_matiere){
		$this->db->set('titre_chapitre',$titre);
		$this->db->set('contenu_chapitre',$contenu);
		$this->db->set('link_chapitre',$link);
		$this->db->set('matiere_id_matiere',$id_matiere);
		$this->db->insert('chapitre');
	}
	function getIdDernierChapitre(){
		$this->db->select('id_chapitre');
		$this->db->order_by('id_chapitre','DESC');
		$this->db->limit(1);
        $id=$this->db->get('chapitre')->row_array();
		return $id;
	}
	function insertId($id_chap,$id_profil){
        $this->db->set('chapitre_id_chapitre',$id_chap);
	    $this->db->set('profil_id_profil',$id_profil);
	    $this->db->insert('profil_chapitre');
	}
	function insertUser($pseudo,$password,$nom,$niveau,$civilite,$statut){
		$this->db->set('pseudo',$pseudo);
		$this->db->set('password',$password);
		$this->db->set('nom_complet',$nom);
		$this->db->set('niveau',$niveau);
		$this->db->set('civilite',$civilite);
		$this->db->set('statut',$statut);
		$this->db->insert('users');
	}
	function checkPseudo($pseudo){
		$this->db->where('pseudo',$pseudo);
		$this->db->from('users');
		$nb=$this->db->count_all_results();
		return $nb;

	}
}











