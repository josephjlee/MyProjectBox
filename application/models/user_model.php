<?php

class User_model extends CI_Model {

	//Function for registering users
	//
	// Password encryted with bcrty
	public function create_users() {
		$time_pass = ['cost' => 12];
		$encryted_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $time_pass);
		$data = array(
			'user_name' => $this->input->post('username'),
			'user_password' => $encryted_password,
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'email' => $this->input->post('email'),
		);
		$data_insert = $this->db->insert('users', $data);
		return $data_insert;
	}

	public function login_users($username, $password) {
		$this->db->where('user_name', $username);
		$result = $this->db->get('users');
		$pass_db = $result->row(2)->user_password;
		if (password_verify($password, $pass_db)) {
			return $result->row(0)->id;
		} else {
			return false;
		}

	}

}

?>