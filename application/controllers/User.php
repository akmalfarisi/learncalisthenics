<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function dashboard()
	{
		if(!$this->session->userdata('logged_in')) {
			redirect('main/user');
		} else {
			$data['title'] = "User Dashboard";
			$this->load->view('templates/header', $data);
			$this->load->view('user/index');
			$this->load->view('templates/footer');
		}
	}

	public function register(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'nama' => $this->input->post('nama'),
			'umur' => $this->input->post('umur'),
			'email' => $this->input->post('email'),
			'role' => 'user'
		);

		if($this->input->post('username') == null && $this->input->post('password') == null) {
			redirect('main/register');
		} else {
			$this->user_model->register($data);
			redirect('main/user');
		}
	}

	public function login() {
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);
		$userdata = $this->user_model->login($data);
		$session_data = array(
			'id' => $userdata[0]->id,
			'nama' => $userdata[0]->nama,
			'role' => $userdata[0]->role,
			'logged_in' => 'true'
		);		
		$this->session->set_userdata($session_data);
		if($userdata[0]->role == "user") {
			redirect('/user/dashboard');
		} else if($userdata[0]->role == "admin") {
			redirect('/admin/dashboard');
		} else {
			redirect('/main/user');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('/');
	}
}
