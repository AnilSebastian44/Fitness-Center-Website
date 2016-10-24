<?php

class Gallery extends CI_Controller{
	public function index(){

		$this->load->model('images');
		$query = $this->images->display_image();
		$data['image'] = null;
		if($query){
			$data['image'] = $query->result();
		}


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

		
		$data['title'] = 'Gallery';
		$data['content'] = 'gallery';
		$data['username'] = $this->session->userdata('username');

		$this->load->view('includes/template', $data);
	}
}