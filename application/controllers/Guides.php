<?php
class Guides extends CI_Controller{
	public function index(){
		$data['title'] = 'Our guides';

		$data['guides'] = $this->guide_model->get_guides();

//		print_r($data['guides'] );

		$this->load->view('templates/header');
		$this->load->view('guides/index', $data);
		$this->load->view('templates/footer');

	}
}
