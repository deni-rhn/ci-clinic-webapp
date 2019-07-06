<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendapatan extends CI_Controller {

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
        $data['pendapatan'] = $this->kasir_model->total_pendapatan();
        $this->load->view('layout/admin/header');
        $this->load->view('page/pendapatan',$data);
        $this->load->view('layout/admin/footer');
    }

    public function data()
    {
        $this->kasir_model->save_data();
    }

}
