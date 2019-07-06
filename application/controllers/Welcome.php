<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		
		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('auth/login'));
        }
		
	} 
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
