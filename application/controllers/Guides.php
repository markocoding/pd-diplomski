<?php
class Guides extends CI_Controller{
	public function index(){
		$data['title'] = 'Our guides';
		$data['guides'] = $this->guide_model->get_guides();

		$this->load->view('templates/header');
		$this->load->view('guides/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL){
		$data['guide'] = $this->guide_model->get_guides($slug);
		$data['travels'] = $this->calendar_model->get_travels_from_guide($data['guide']['id']);
//		print_r($data['travels']);
		if (empty($data['guide'])){
			show_404();
		}

		$data['title'] = $data['guide']['name'];

		$this->load->view('templates/header');
		$this->load->view('guides/view', $data);
		$this->load->view('templates/footer');

	}
}
