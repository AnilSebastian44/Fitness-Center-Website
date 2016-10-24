<?php

class Admin_login extends CI_Controller{
	public function index(){
		$logged_in = $this->session->userdata('is_logged_in');

		if(!isset($logged_in) || $logged_in != true){
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

			$data['title'] = 'Admin Login';
			$data['content'] = 'admin_login';
			$data['username'] = $this->session->userdata('username');

			$this->load->view('includes/template', $data);
		} else {
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

			$data['title'] = 'Administrator';
			$data['content'] = 'admin';
			$data['session_information'] = array(
					'username' => 'admin',
					'is_logged_in' => true
				);

			$this->session->set_userdata($data['session_information']);

			$data['username'] = $this->session->userdata('username');
			
			$this->load->view('includes/template', $data);
		}






		
	}

	public function validate(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[32]|md5');

		if($this->form_validation->run() === false){
			echo $this->index();
		} else {
			$this->load->model('login_admin');

			$query = $this->login_admin->check_username();

			if($query){
				//echo 'Administrator has logged in.';

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

				$data['title'] = 'Administrator';
				$data['content'] = 'admin';
				$data['session_information'] = array(
						'username' => 'admin',
						'is_logged_in' => true
					);

				//$is_logged_in = $data['session_information']['is_logged_in'];

				//echo $is_logged_in;

				$this->session->set_userdata($data['session_information']);

				$data['username'] = $this->session->userdata('username');

				//$this->load->view('includes/template', $data);

				//redirect('main/is_logged_in');

				$this->load->view('includes/template', $data);
			} else {
				$this->index();
			}
		}
	}
}