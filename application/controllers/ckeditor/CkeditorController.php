<?php
 
class  CkeditorController extends CI_Controller {
 
	// extends CI_Controller for CI 2.x users 
 
	public $data=array();
 
	public function __construct() {

 
		//parent::Controller();
		 parent::__construct();

		$this->load->helper('ckeditor_helper');
 
 
		//Ckeditor's configuration
		$this->data['ckeditor'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'toolbar' 	=> 	"Full", 	//Using the Full toolbar
				'width' 	=> 	"550px",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
 
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 1' => array (
					'name' 		=> 	'Blue Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 	=> 	'Blue',
						'font-weight' 	=> 	'bold'
					)
				),
 
				//Creating a new style named "style 2"
				'style 2' => array (
					'name' 	=> 	'Red Title',
					'element' 	=> 	'h2',
					'styles' => array(
						'color' 		=> 	'Red',
						'font-weight' 		=> 	'bold',
						'text-decoration'	=> 	'underline'
					)
				)				
			)
		);
 
		$this->data['ckeditor_2'] = array(
 
			//ID of the textarea that will be replaced
			'id' 	=> 	'content_2',
			'path'	=>	'js/ckeditor',
 
			//Optionnal values
			'config' => array(
				'width' 	=> 	"100%",	//Setting a custom width
				'height' 	=> 	'100px',	//Setting a custom height
				'toolbar' 	=> 	array(	//Setting a custom toolbar
					array('Bold', 'Italic'),
					array('Underline', 'Strike', 'FontSize'),
					array('Smiley'),
					'/'
				)
			),
 
			//Replacing styles from the "Styles tool"
			'styles' => array(
 
				//Creating a new style named "style 1"
				'style 3' => array (
					'name' 		=> 	'Green Title',
					'element' 	=> 	'h3',
					'styles' => array(
						'color' 	=> 	'Green',
						'font-weight' 	=> 	'bold'
					)
				)
 
			)
		);		
 
 
	}
 
	public function index() 
	{
		if (empty($this->session->userdata('login'))) {
			redirect(base_url('od-admin'));
		}
	    $this->load->library('CKEditor');
		$this->load->library('CKFinder');
		$this->load->model('admin/Admin_model');
		$data["Allmatieres"]=$this->Admin_model->getMatiere();
		$data["AllAuteurs"]=$this->Admin_model->getAuteur();
		// fil d'adriane
		$this->mybreadcrumb->add('Tableau de bord', base_url('dashboard'));
		$this->mybreadcrumb->add('Ajout des cours', base_url());

         $data['breadcrumbs']=$this->mybreadcrumb->render();
	 
		//Add Ckfinder to Ckeditor
		$this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/');  
	    $this->load->view('ckeditor/ckeditor', $data);
 
	}
	function ajoutCours(){
		$this->form_validation->set_rules('title','titre de la leçon','required');
		$this->form_validation->set_rules('lien','lien de la leçon','required');
		$this->form_validation->set_rules('contenu','le contenu','required');
		$this->form_validation->set_rules('matiere','required');
		$this->form_validation->set_rules('auteur','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('ckeditor/ckeditor');
		}else{
			$this->load->model('admin/Admin_model');
			$titre=htmlspecialchars(trim(addslashes($this->input->get_post('title'))));
			$lien=htmlspecialchars(trim(addslashes($this->input->get_post('lien'))));
			$contenu=$this->input->get_post('contenu');
			$matiere=$this->input->get_post('matiere');
			$auteur=$this->input->get_post('auteur');
			$this->Admin_model->insertChapitre($titre,$contenu,$lien,$matiere);
			$this->Admin_model->insertId($this->Admin_model->getIdDernierChapitre()['id_chapitre'],$auteur);
			$this->session->set_flashdata('MsgSuccess','La leçon a été bien enregistrée');
			redirect(base_url('dashboard/ajout-des-cours'));


		}
	}
}








