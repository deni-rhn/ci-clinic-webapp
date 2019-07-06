<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		
		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('auth/login'));
        }
		
		$this->load->model('kasir_model');

	} 
	
	public function index()
	{
		$this->load->view('layout/admin/header');
        $this->load->view('page/kasir');
        $this->load->view('layout/admin/footer');
	}

	public function invoice($id="")
	{

		if($id != ""){
			$data['invoice'] = $this->kasir_model->get_invoice($id);
			$this->load->view('layout/admin/header');
			$this->load->view('page/administrasi',$data);
			$this->load->view('layout/admin/footer');
		}else{
			redirect(base_url("kasir"));
		}
	}


	public function kasirdata(){
		$this->kasir_model->getpasienkasir();
	}


}
