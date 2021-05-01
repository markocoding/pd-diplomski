<?php
	class Contacts extends CI_Controller{
		public function contact(){

			$data['title'] = 'BRAVO CARE data';
			$data['guides'] = $this->guide_model->get_guides();


			$this->load->view('templates/header');
			$this->load->view('pages/contact', $data);
			$this->load->view('templates/footer');

		}
	}
