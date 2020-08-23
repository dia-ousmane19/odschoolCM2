<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $data=[];

	public function index()
	{
		$this->load->model('public/Home_model');
		$data['domaine']=$this->Home_model->getDomaine();
		
		$this->load->view('home',$data);
	}
}
