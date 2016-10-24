<?php
class Main extends CI_Controller{
	public function index(){
		//echo 'Hello';

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


			$data['title'] = 'Griffith Fitness Club';
			$data['content'] = 'main';
			$this->load->model('feeds');
			$data['feedback'] = $this->feeds->show_feedback();
			$this->load->view('includes/template', $data);	
		} else {
			$this->is_logged_in();
		}

		
	}

	public function is_logged_in(){
		//$logged_in = $this->session->userdata('is_logged_in');
			$data['page_title'] = $this->db->select('header')->from('page_information');
		
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

			$data['title'] = 'Griffith Fitness Club';
			$data['content'] = 'main';
			
			$this->load->model('feeds');
			$data['feedback'] = $this->feeds->show_feedback();

			$data['username'] = $this->session->userdata('username');
			
			$this->load->view('includes/template', $data);
		
	}





}