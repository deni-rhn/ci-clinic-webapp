<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('auth/login'));
        }
		$this->load->model('dokter_model');

	}

	public function index()
    {
        redirect(base_url('/dokter/listed'));
    }

	public function listed()
	{
        $this->load->view('layout/admin/header');
        $this->load->view('page/dokter');
        $this->load->view('layout/admin/footer');
	}

	public function submitDokter()
    {
        $this->dokter_model->addDokter();
    }

    public function getDokter()
    {
//        $data =
            $this->dokter_model->getDokterListed();
    }

    public function dokterId()
    {
        $this->dokter_model->getDokterById();
    }

    public function delete()
    {
        $this->dokter_model->delete();
    }

    public function edit()
    {
        $this->dokter_model->edit();
    }

}
