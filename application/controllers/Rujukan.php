<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rujukan extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		
		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('auth/login'));
        }
		$this->load->model('rujukan_model', 'rujukan');
		
	}

	public function index()
    {
        redirect(base_url('/rujukan/pasien'));
    }
	
	public function pasien()
	{
        $this->load->view('layout/admin/header');
        $this->load->view('page/rujukan');
        $this->load->view('layout/admin/footer');
	}

	public function submitRujukan()
    {
        $this->rujukan->insertRujukan();
    }

    public function allRujukan()
    {
        $this->rujukan->getRujukanPasien();
    }

    public function rujukanById()
    {
        $this->rujukan->getRujukanById();
    }
}
