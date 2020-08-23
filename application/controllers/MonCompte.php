<?php 
/**
 * 
 */
class MonCompte extends CI_controller
{
	
	function index()
	{
		if (empty($this->session->userdata('user'))) {
			redirect(base_url('login'));
		}
		$this->load->view("public/monCompte");
	}
}