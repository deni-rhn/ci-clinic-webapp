<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		$this->load->model('auth_model');
		
	} 
	

	public function index(){
		redirect(base_url('auth/login'));
	}

	public function login()
	{
		// jika sudah login
		if($this->session->has_userdata('role') == 1){
			redirect(base_url('/pendaftaran'));
		} elseif ($this->session->has_userdata('role') == 2) {
            redirect(base_url('/'));
        }
		
		if(!empty($_REQUEST)){
			$this->auth_model->login();
		}

		$this->load->view('layout/auth/header');
		$this->load->view('page/login');
		$this->load->view('layout/auth/footer');
	}

	public function daftar(){
		// jika sudah login
		// if($this->session->has_userdata('id')){
		// 	redirect(base_url('/'));
		// }
		
		// if(!empty($_REQUEST)){
		// 	$this->auth_model->daftar();
		// 	redirect(base_url('/pendaftaran/register'));
		// }

		$this->auth_model->daftar();

		// $this->load->view('layout/auth/header');
		// $this->load->view('page/daftar');
		// $this->load->view('layout/auth/footer');
	}


	public function logout(){
		$this->auth_model->logout();
	}

}
