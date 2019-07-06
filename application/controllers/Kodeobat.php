<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kodeobat extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('auth/login'));
        }

        $this->load->model('kodeo_model');

	}

	public function index()
	{
		$this->load->view('welcome_message');
    }

    public function form()
    {
        $this->load->view('layout/admin/header');
        $this->load->view('page/form-kodepenyakit');
        $this->load->view('layout/admin/footer');
    }

    public function kirimdata(){
        $this->kodeo_model->todb();
    }

    public function daftar(){
        $this->load->view('layout/admin/header');
        $this->load->view('page/data-kodeobat');
        $this->load->view('layout/admin/footer');
    }

    public function get(){
        $this->kodeo_model->allobat();
    }

    public function get_edit(){
        $this->kodeo_model->user_edit();
    }

    public function delete(){
        $this->kodeo_model->delete_obat();
    }

    public function edit(){
        $this->kodeo_model->push_edit();
    }

}
