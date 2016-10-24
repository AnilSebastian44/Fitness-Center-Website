<?php

class Feeds extends CI_Model{
	public function feedback_validate(){
		$array = array(
				'name' => $this->input->post('fullname'),
				'contact_no' => $this->input->post('contact'),
				'email' => $this->input->post('email'),
				'message' => $this->input->post('msg')
			);


		$query = $this->db->insert('feedback', $array);
		
		if($this->db->affected_rows() == 1){
			return true;
		}
	}
public function show_feedback(){
		$this->db->select('name, message')->from('feedback');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}
}
