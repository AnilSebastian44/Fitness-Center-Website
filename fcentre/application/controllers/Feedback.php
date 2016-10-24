<?php

class Feedback extends CI_Controller{
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

		$data['title'] = 'Feedback';
		$data['content'] = 'feedback';
		$data['username'] = $this->session->userdata('username');

		$this->load->view('includes/template', $data);
	}

	public function validate_feedback(){
		$this->form_validation->set_rules('fullname', 'Name', 'trim|required|max_length[40]');
		$this->form_validation->set_rules('contact', 'Contact Number', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('msg', 'Message', 'trim|required|max_length[1000]');

		if($this->form_validation->run() === false){
			$this->index();
		} else {
			$this->load->model('feeds');

			$query1 = $this->feeds->feedback_validate();

			if($query1){
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

				$data['title'] = 'Feedback';
				$data['content'] = 'feedback_success';
				$data['username'] = $this->session->userdata('username');

				$this->load->view('includes/template', $data);


			}
		}
	}
}

