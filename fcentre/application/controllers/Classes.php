	<?php

class Classes extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
	}


	public function index(){

		$config['center'] = 'griffith college, dublin';
		$config['zoom'] = '16';
		$config['map_height'] = '200px';
		$config['map_width'] = '300px';
		$this->googlemaps->initialize($config);

		$marker['position'] = 'griffith college, dublin';
		$this->googlemaps->add_marker($marker);

		$circle['center'] = 'griffith college, dublin';
		$circle['radius'] = 100;
		$this->googlemaps->add_circle($circle);

		$data['map'] = $this->googlemaps->create_map();

		$this->load->model('class_booking');
		$query = $this->class_booking->display_table();

		$data['result'] = null;
		if($query){
			$data['result']['time'] = $query['time']->result();
			$data['result']['monday'] = $query['monday']->result();
			$data['result']['tuesday'] = $query['tuesday']->result();
			$data['result']['wednesday'] = $query['wednesday']->result();
			$data['result']['thursday'] = $query['thursday']->result();
			$data['result']['friday'] = $query['friday']->result();
			$data['result']['saturday'] = $query['saturday']->result();
			$data['result']['sunday'] = $query['sunday']->result();
			
		}

		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true){
			$data['title'] = 'Classes';
			$data['content'] = 'classes';
			$data['username'] = $this->session->userdata('username');

			$this->load->view('includes/template', $data);
		} else {
			$data['title'] = 'Classes';
			$data['content'] = 'classes_after_login';
			$data['username'] = $this->session->userdata('username');

			$this->load->view('includes/template', $data);
		}

		

	}

	public function booking(){
		$this->form_validation->set_rules('name', 'Name', 'trim|required|max_length[40]');
		//$this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[40]|valid_email');
		//$this->form_validation->set_rules('phone_no', 'Contact No.', 'trim|required|max_length[40]');
		$this->form_validation->set_rules('time', 'Time', 'trim|required|max_length[15]');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|max_length[10]');
		$this->form_validation->set_rules('class', 'Class', 'trim|required|max_length[20]');

		if($this->form_validation->run() === false){
			$this->index();			
		} else {
			$this->load->model('class_booking');
			$query = $this->class_booking->validate_booking();

			if($query){


			
				echo 'booking successful.';

			/*	foreach ($query->result() as $key) {
					# code...
					echo $key->name;
			


				}	*/
			} else {
				echo 'No class available.';
			}


		}
	}
}