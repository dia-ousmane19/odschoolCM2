<?php 
/**
 * 
 */
class Login_admin extends CI_controller
{
	public $data=[];
	function index(){
		$this->form_validation->set_rules('tel_email',"Nom d'utilisateur",'required');
		$this->form_validation->set_rules('password',"votre mot de passe",'required');
		if ($this->form_validation->run()==False) {
			$this->load->view('admin/login_admin');
		}else{
             $this->load->model('admin/Login_model');
			//on recupere les valeur de nos champ et on les protege
			$pseudo=htmlspecialchars(addslashes(trim($this->input->get_post('tel_email'))));
			$password=htmlspecialchars(addslashes(trim($this->input->get_post('password'))));
			$pa=$this->Login_model->getPasswordAdmin($pseudo);

			if (password_verify($password,$pa['password'])) {
				$login=$this->Login_model->getLoginAdmin($pseudo,$pa['password']);
				if (!empty($login)) {
					$this->session->set_userdata('login',$login);
					redirect(base_url('dashboard'));
				}else{
					$this->session->set_flashdata('MessageErreur','Vos identifiants ne correspondent pas');
					redirect(base_url('od-admin'));
				}
			}else{
				$this->session->set_flashdata('MessageErreur','Mot de passe incorrect');
				redirect(base_url('od-admin'));
			}
		}
		if (!empty($this->session->userdata('login'))) {
			redirect(base_url('dashboard'));
		}
	}
	function deconnexion(){
		$this->session->unset_userdata('login',$login);
		redirect(base_url('od-admin'));

	}	


	
}