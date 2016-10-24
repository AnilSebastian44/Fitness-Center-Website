<?php

class Member extends CI_Controller{

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




		$data['title'] = 'Members';
		$data['content'] = 'member';
		$this->load->view('includes/template', $data);
	}

	public function signup_validate(){

		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('lastname', 'Lastname', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[signupmembers.email]', array('is_unique' => 'Email already exist.'));
		$this->form_validation->set_rules('signupusername', 'Username', 'trim|required|min_length[6]|max_length[20]|is_unique[signupmembers.username]', array('is_unique' => 'Username already exist.'));
		$this->form_validation->set_rules('signuppassword', 'Password', 'required|min_length[6]|max_length[20]');

		$this->form_validation->set_rules('gender', 'Gender', 'trim|required');
		$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');

		

		$this->form_validation->set_rules('membershipplan', 'Membership Plan', 'required|alpha_numeric');


		if($this->form_validation->run() === false){
			$this->index();
		} else {
			//echo '1';
			$this->load->model('signup_members');
			$query1 = $this->signup_members->signup_validate();

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

				$data['title'] = 'Signup Successful';
				$data['content'] = 'signup_success';
				$data['name'] = $this->input->post('firstname') . ' ' . $this->input->post('lastname');

				$this->load->view('includes/template', $data);

				
			}

		/*	echo $this->input->post('firstname') . "<br/>"; 
			echo $this->input->post('lastname') . "<br/>";
			echo $this->input->post('mobile') . "<br/>";
			echo $this->input->post('email') . "<br/>";
			echo $this->input->post('signupusername') . "<br/>";
			echo $this->input->post('signuppassword') . "<br/>";
			echo $this->input->post('gender') . "<br/>";
			echo $this->input->post('dob') . "<br/>";
			echo $this->input->post('address') . "<br/>";
			echo $this->input->post('membershipplan') . "<br/>"; */
		}

	}

	public function login_validate(){
		$this->form_validation->set_rules('loginusername', 'Username', 'trim|required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('loginpassword', 'Password', 'required|min_length[6]|max_length[20]');

		if($this->form_validation->run() === false){
			$this->index();
		} else {
			//echo '12';

			$this->load->model('signup_members');

			$query1 = $this->signup_members->login_validate();

			if($query1){
				//echo 'You are logged in.';
				$data['title'] = 'Home';
				$data['content'] = 'main';
				$data['session_information'] = array(
						'username' => $this->input->post('loginusername'),
						'is_logged_in' => true

					);

				//$is_logged_in = $data['session_information']['is_logged_in'];

				//echo $is_logged_in;

				$this->session->set_userdata($data['session_information']);

				//$this->load->view('includes/template', $data);

				redirect('main');

			} else {
				echo 'Username and password didnot match.';
			}


















		}

	}
}