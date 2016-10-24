<?php

class Class_booking extends CI_Model{
	public function validate_booking(){
		$array = array(
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone_no' => $this->input->post('phone_no'),
				'time' => $this->input->post('time'),
				'day' => $this->input->post('day'),
				'class' => $this->input->post('class')
			);


		// class_booking.member = signupmembers.id;		$this->db->affected_rows() == 1
		// class_booking.class = class_schedule.id;

		
		//$this->db->select('CONCAT(firstname, lastname) as name, ')->from('signupmembers')->where('username', 'manikshakya');
		//$query = $this->db->get();

		$this->db->select('id')->from('signupmembers')->where('username', $this->input->post('name'));
		$signupmembers_id = $this->db->get();
		
		
		$array = array(
				'time' => $this->input->post('time'),
				'class_day.day' => $this->input->post('day'),
				'classes.classname' => $this->input->post('class')
			);


		$this->db->select('class_schedule.id')->from('class_schedule')->join('class_day', 'class_day.id = class_schedule.day')->join('classes', 'classes.id = class_schedule.class')->where($array);

		$class_schedule_id = $this->db->get();
		

		//$check_running_class = $this->db->select('class')->from()->where();


	/*	$array = array(
				'member' => $signupmembers_id,
				'class' => $class_schedule_id
			);		*/
		//$this->db->insert('class_booking', $array);

		$member_id = $signupmembers_id->result();
		$class_id = $class_schedule_id->result();

		if($class_schedule_id->num_rows() == 1 && $signupmembers_id->num_rows() == 1){
			$array = array(
					'member' => array(),
					'class' => array(),
					'booking' => 'booked'
				);

			foreach ($signupmembers_id->result() as $key) {
				# code...
				$array['member'] = $key->id;
			}
			foreach ($class_schedule_id->result() as $key) {
				# code...
				$array['class'] = $key->id;
			}

			$this->db->select('id')->from('class_booking')->where($array);
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return false;
			} else {
				$this->db->insert('class_booking', $array);

				if($this->db->affected_rows() == 1){
					$array = array(
							'member' => array(),
							'class' => array()
						);

					foreach ($signupmembers_id->result() as $key) {
						# code...
						$array['member'] = $key->id;
					}
					foreach ($class_schedule_id->result() as $key) {
						# code...
						$array['class'] = $key->id;
					}
				}
				return true;
			}

			

			//$query = $this->db->query('INSERT INTO class_booking(member, class, booking) VALUES('.$signupmembers_id . ', ' . $class_schedule_id . ' , \'booking\')');

			
			//return $class_schedule_id;
		}
	}

	public function display_table(){
		$array = array(
				'classes.id' => 'class_schedule.class',
				'class_day.id' => 'class_schedule.day'
			);
		//$this->db->select('class_day.id, class_schedule.time, class_day.day, classes.classname')->from('class_schedule')->join('classes', 'classes.id = class_schedule.class')->join('class_day', 'class_day.id = class_schedule.day')->order_by('class_day.id');
		



		// Selecting time for the table
		$this->db->select('DISTINCT class_schedule.time', false)->from('class_schedule');
		$query['time'] = $this->db->get();


		// Selecting classes running on Monday for the table
		$this->db->select('classes.classname')->from('class_schedule')->join('classes', 'classes.id = class_schedule.class')->where('class_schedule.day', '1');
		$query['monday'] = $this->db->get();

		// Selecting classes running on tuesday for the table
		$this->db->select('classes.classname')->from('class_schedule')->join('classes', 'classes.id = class_schedule.class')->where('class_schedule.day', '2');
		$query['tuesday'] = $this->db->get();

		// Selecting classes running on wednesday for the table
		$this->db->select('classes.classname')->from('class_schedule')->join('classes', 'classes.id = class_schedule.class')->where('class_schedule.day', '3');
		$query['wednesday'] = $this->db->get();

		// Selecting classes running on thursday for the table
		$this->db->select('classes.classname')->from('class_schedule')->join('classes', 'classes.id = class_schedule.class')->where('class_schedule.day', '4');
		$query['thursday'] = $this->db->get();

		// Selecting classes running on friday for the table
		$this->db->select('classes.classname')->from('class_schedule')->join('classes', 'classes.id = class_schedule.class')->where('class_schedule.day', '5');
		$query['friday'] = $this->db->get();

		// Selecting classes running on saturday for the table
		$this->db->select('classes.classname')->from('class_schedule')->join('classes', 'classes.id = class_schedule.class')->where('class_schedule.day', '6');
		$query['saturday'] = $this->db->get();

		// Selecting classes running on sunday for the table
		$this->db->select('classes.classname')->from('class_schedule')->join('classes', 'classes.id = class_schedule.class')->where('class_schedule.day', '7');
		$query['sunday'] = $this->db->get();

		if($query['time']->num_rows() > 0 && $query['monday']->num_rows() > 0 && $query['tuesday']->num_rows() > 0 && $query['wednesday']->num_rows() > 0 && $query['thursday']->num_rows() > 0 && $query['friday']->num_rows() > 0 && $query['saturday']->num_rows() > 0 && $query['sunday']->num_rows() > 0){

			return $query;
		}
	}
}



