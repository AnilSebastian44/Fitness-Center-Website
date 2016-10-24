<?php

class Signup_members extends CI_Model{
	public function signup_validate(){
		$array = array(
				'firstname' => $this->input->post('firstname'),
				'lastname' => $this->input->post('lastname'),
				'mobile_no' => $this->input->post('mobile'),
				'email' => $this->input->post('email'),
				'username' => $this->input->post('signupusername'),
				'password' => $this->input->post('signuppassword'),
				'gender' => $this->input->post('gender'),
				'dob' => $this->input->post('dob'),
				'address' => $this->input->post('address'),
				'membershipplan' => $this->input->post('membershipplan')
			);
		
		
		$query = $this->db->insert('signupmembers', $array);
		
	
		if($this->db->affected_rows() == 1){
			return true;
		}
	

	}

	public function login_validate(){
		$array = array(
				'username' => $this->input->post('loginusername'),
				'password' => $this->input->post('loginpassword')
			);

		$this->db->select('username, password')->from('signupmembers')->where($array);
		$query = $this->db->get();
		

		if($query->num_rows() == 1){
			return $query;
		}
	}
}