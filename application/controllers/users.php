<?php

class Users extends CI_Controller {

	public function show($users_id) {

		$data['result'] = $this->user_model->get_users($users_id, 'rico');

		$this->load->view('user_view', $data);

	}

	public function insert() {

		$username = 'peter';
		$password = 'secret';

		$this->user_model->create_users([

			'username' => $username,
			'password' => $password

		]);

	}

	public function update() {

		$id = 3;
		$username = 'william';
		$password = 'not so secret';

		$this->user_model->update_users([

			'username' => $username,
			'password' => $password

		], $id);

	}

	public function delete() {

		$id = 9;

		$this->user_model->delete_users($id);

	}

	public function login() {

		echo $this->input->post('username');
		echo $this->input->post('password');

	}

}
