<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapasien extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('auth/login'));
        }

        $this->load->model('daftar_pasien');
        $this->load->model('resep_model');

	}

	public function index()
	{
		$this->load->view('welcome_message');
    }

    public function antrian(){
        $this->load->view('layout/admin/header');
        $this->load->view('page/antrian-pasien');
        $this->load->view('layout/admin/footer');
    }

    public function terdaftar(){
        $this->load->view('layout/admin/header');
        $this->load->view('page/data-pasien');
        $this->load->view('layout/admin/footer');
    }

    public function data_antrian(){
        $this->daftar_pasien->get_data_antrian();
    }

    public function get_user(){
        $this->daftar_pasien->user_select();
    }

    public function save_data_pasien(){
        $this->daftar_pasien->save_data();
    }

    public function pasien_terdaftar(){
        $this->daftar_pasien->pasien_all();
    }

    public function get_one(){
        $this->daftar_pasien->one_user();
    }

    public function delete_data(){
        $this->daftar_pasien->delete_pasien();
    }

    public function update_data(){
        $this->daftar_pasien->update();
    }

    public function get_invoice(){
        $this->resep_model->getResep();
    }

    public function change_status_antrian(){
        $this->daftar_pasien->status_antrian();
    }

		public function laporanMedis()
		{
			$data['medis'] = $this->daftar_pasien->laporanMedis();
			// var_dump($data);

			$this->load->view('layout/admin/header');
			$this->load->view('page/data-medis', $data);
			$this->load->view('layout/admin/footer');
		}
}
