<?php 
/**
 * 
 */
class Dashboard extends CI_controller
{
	public $data=[];
	function index(){
		if (empty($this->session->userdata('login'))) {
			redirect(base_url('od-admin'));
		}

		$this->load->view('admin/dashboard');
	}
	function voirLesCours(){
		if (empty($this->session->userdata('login'))) {
			redirect(base_url('od-admin'));
		}
		$this->load->model('admin/Admin_model');
		$data['Allchapitres']=$this->Admin_model->getAllChapitre();
		// echo "<pre>";
		// print_r($data['Allchapitre']);
		// echo "</pre>";
		// die();
		$this->load->view('admin/voirLesCours',$data);
	}
	function users(){
		if (empty($this->session->userdata('login'))) {
			redirect(base_url('od-admin'));
		}
		$this->load->view('admin/utilisateur');
	}
	function prof(){
		if (empty($this->session->userdata('login'))) {
			redirect(base_url('od-admin'));
		}
		$this->load->view('admin/professeurs');
	}
	function AjouterDesProfesseurs(){
		if (empty($this->session->userdata('login'))) {
			redirect(base_url('od-admin'));
		}
		$this->load->view('admin/AjoutProf');
	}
}