<?php

class Images extends CI_Model{
	public function display_image(){
		$this->db->select('imagepath')->from('gallery');

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query;
		}
	}
}