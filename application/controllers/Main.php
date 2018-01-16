<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data['title'] = "Index";
		$data['query'] = $this->user_model->getUserLimit(3);
		$data['count'] = count($this->user_model->getUser());
		$this->load->view('templates/header', $data);
		$this->load->view('index');
		$this->load->view('templates/footer');
	}

	public function user()
	{
		$data['title'] = "User Area - Login";
		$this->load->view('templates/header', $data);
		$this->load->view('user');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$data['title'] = "User Area - Register";
		$data['mode'] = 'register';
		$this->load->view('templates/header', $data);
		$this->load->view('register');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$data['title'] = "About";
		$this->load->view('templates/header', $data);
		$this->load->view('about');
		$this->load->view('templates/footer');
	}
}
