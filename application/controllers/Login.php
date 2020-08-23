<?php
/**
 * 
 */
class Login extends CI_controller
{
	public $data=[];
	function index(){
		$this->form_validation->set_rules('tel_email',"Nom d'utilisateur",'required');
		$this->form_validation->set_rules('password',"votre mot de passe",'required');
		if ($this->form_validation->run()==False) {
			$this->load->view('public/login');
		}else{
             $this->load->model('admin/Login_model');
			//on recupere les valeur de nos champ et on les protege
			$pseudo=htmlspecialchars(addslashes(trim($this->input->get_post('tel_email'))));
			$password=htmlspecialchars(addslashes(trim($this->input->get_post('password'))));
			$pa=$this->Login_model->getPassword($pseudo);
			if (password_verify($password,$pa['password'])) {
				$login=$this->Login_model->getLogin($pseudo,$pa['password']);
				if (!empty($login)) {
					$this->session->set_userdata('user',$login);
					
					redirect(base_url('mon-compte'));
				}else{
					$this->session->set_flashdata('MessageErreur','Vos identifiants ne correspondent pas');
					redirect(base_url('login'));
				}
			}else{
				$this->session->set_flashdata('MessageErreur','Mot de passe incorrect');
				redirect(base_url('login'));
			}
		}
		if (!empty($this->session->userdata('user'))) {
			redirect(base_url('mon-compte'));
		}
	}
	function deconnexion(){
		$this->session->unset_userdata('user',$login);
		redirect(base_url());

	}
}