<?php
/**
 * 
 */
class Sign_up extends CI_controller
{
	function index(){
		$this->form_validation->set_rules('tel_email','username','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('nom_complet','nom','required');
		$this->form_validation->set_rules('niveau','niveau','required');
		$this->form_validation->set_rules('civilite','required');
		$this->form_validation->set_rules('statut','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('public/sign_up');
		}else{
			$this->load->model('admin/Admin_model');
			$pseudo=htmlspecialchars(trim(addslashes($this->input->get_post('tel_email'))));
			$password=password_hash($this->input->get_post('password'), PASSWORD_DEFAULT);
			$nom_complet=htmlspecialchars(trim(addslashes($this->input->get_post('nom_complet'))));
			$niveau=htmlspecialchars(trim(addslashes($this->input->get_post('niveau'))));
			$civilite=$this->input->get_post('civilite');
			$statut=$this->input->get_post('statut');
			$this->Admin_model->checkPseudo($pseudo);
			$pseudoExistant=$this->Admin_model->checkPseudo($pseudo);
			if ($pseudoExistant==0) {
			//insertion
			$this->Admin_model->insertUser($pseudo,$password,$nom_complet,$niveau,$civilite,$statut);
			$this->session->set_flashdata('MsgSuccess','Bienvenue chez od-school,vous pouvez vous connecter maintenant');
			redirect(base_url('login'));
			}
			else{
				$this->session->set_flashdata('MessageErreur','Votre nom d\'utilisateur est déjà utilisé');
			
				redirect(base_url('sign-up'));
			}

			
			


		}









	}
}