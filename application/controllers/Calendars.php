<?php
class Calendars extends CI_Controller{
	public function index(){
		$data['title'] = 'This is calendar page';

		$data['travels'] = $this->calendar_model->get_travels();

//		var_dump($data['travels']);

		$this->load->view('templates/header');
		$this->load->view('calendar/index', $data);
		$this->load->view('templates/footer');
	}
}



?>
