<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('logged_in'))
        { 
            redirect('main/user');
        }
    }

	public function dashboard(){
		if($this->session->userdata('role') == "user"){
			redirect('user/dashboard');
		} else {
			$data['title'] = "Admin Dashboard";
			$data['query'] = $this->user_model->getUser();
			$this->load->view('templates/header', $data);
			$this->load->view('admin/index');
			$this->load->view('templates/footer');
		}
		
	}

	public function delete($id) {
		if($this->session->userdata('role') == "user") {
			redirect('user/dashboard');
		} else {
			if($this->session->userdata('id') == $id) {
				redirect('admin/dashboard');
			} else {
				$this->user_model->deleteUser($id);
				redirect('admin/dashboard');
			}
			
		}
	}

	public function edit($id) {
		if($this->session->userdata('role') == "user") {
			redirect('user/dashboard');
		} else {
			$data['title'] = "Edit User";
			$data['query'] = $this->user_model->getUserById($id);
			$data['mode'] = 'edit';
			$this->load->view('templates/header', $data);
			$this->load->view('register');
			$this->load->view('templates/footer');
		}
	}

	public function update(){
		if($this->session->userdata('role') == "user") {
			redirect('user/dashboard');
		} else {
			$data = array(
				'id' =>  $this->input->post('id'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'umur' => $this->input->post('umur'),
				'email' => $this->input->post('email'),
			);

			if($this->input->post('username') == null && $this->input->post('password') == null) {
				redirect($this->uri->uri_string());
			} else {
				$this->user_model->updateUser($data);
				redirect('admin/dashboard');
			}
		}
	}
}
