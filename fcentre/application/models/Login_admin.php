<?php

class Login_admin extends CI_Model{
	public function check_username(){
		$array = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);

		$this->db->select('username', 'password')->from('admin_login')->where($array);
		$query = $this->db->get();

		if($query->num_rows() == 1){
			return $query;
		}
	}
}