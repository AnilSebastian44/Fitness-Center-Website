<?php

class Membership extends CI_Controller{
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
		

		$data['title'] = 'Membership Plan';
		$data['content'] = 'membership';
		$this->load->view('includes/template', $data);
	}
}