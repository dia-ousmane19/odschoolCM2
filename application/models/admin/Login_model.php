<?php 
/**
 * on recupere les info
 */
class Login_model extends CI_model
{
	
	function getLogin($pseudo,$password)
	{
		$this->db->where('pseudo',$pseudo);
		$this->db->where('password',$password);
		$this->db->select('pseudo,password,nom_complet');
		$getLogin=$this->db->get("users")->row_array();
		return $getLogin;

	}
	function getLoginAdmin($pseudo,$password){
		$this->db->where('pseudo',$pseudo);
		$this->db->where('password',$password);
		$this->db->select('pseudo,password,nom_complet,photo');
		$getLogin=$this->db->get("admin_cm2")->row_array();
		return $getLogin;
	}
	function getPassword($pseudo)
	{
		$this->db->select('password');
		$this->db->where('pseudo',$pseudo);
		$password=$this->db->get('users')->row_array();
		return $password;
	}
	function getPasswordAdmin($pseudo){

		$this->db->select('password');
		$this->db->where('pseudo',$pseudo);
		$password=$this->db->get('admin_cm2')->row_array();
		return $password;
	}
}