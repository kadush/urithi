<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sale extends CI_Controller {

	public function index()
	{
		/*
		$this->load->model('home_model');
		$data['staff'] = $this->home_model->get_staff();
		$data['projects'] = $this->home_model->get_projects();
		*/
		$this->load->view('deal_v');
	}
	public function deal()
	{
		$this->load->view('sale_v');
	}
	

}