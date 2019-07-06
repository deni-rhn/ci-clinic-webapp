<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct() {
		parent::__construct();

		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('auth/login'));
        }

        $this->load->model('daftar_pasien');
				$this->load->helper('string');
				$this->load->model('auth_model');
				$this->load->model('dokter_model');

    }

    public function index(){
        redirect(base_url('pendaftaran/pasien'));
    }

	public function pasien()
	{

        $data['antrian'] = $this->daftar_pasien->get_nomor_antrian();
				$data['rm'] = random_string('numeric', 6);
				$data['dokter'] = $this->dokter_model->getDokterAll();
				// var_dump($data);

        $this->load->view('layout/admin/header');
        $this->load->view('page/form-pendaftaran',$data);
        $this->load->view('layout/admin/footer');
    }

    public function daftar(){
        $this->daftar_pasien->daftarkan();
    }

    public function register()
    {
        $this->load->view('layout/admin/header');
        $this->load->view('page/form-register-user');
        $this->load->view('layout/admin/footer');
    }

    public function welcome_home()
    {
        $this->load->view('layout/admin/header');
        $this->load->view('page/welcome');
        $this->load->view('layout/admin/footer');
    }

		public function daftar_user()
		{
			$data['user'] = $this->auth_model->getUserAll();
			// var_dump($data);

			$this->load->view('layout/admin/header');
			$this->load->view('page/data-user', $data);
			$this->load->view('layout/admin/footer');
		}

		public function laporan_data()
		{
			$this->load->view('layout/admin/header');
			$this->load->view('page/filter-laporan');
			$this->load->view('layout/admin/footer');
		}

		public function laporan_pasien()
		{
			$tgl1 = $this->input->post('tanggal1');
			$tgl2 = $this->input->post('tanggal2');

			$data['filter'] = $this->daftar_pasien->laopranPasien($tgl1, $tgl2);
			// var_dump($data);

			$this->load->view('layout/admin/header');
			$this->load->view('page/laporan-pasien', $data);
			$this->load->view('layout/admin/footer');
		}

		public function laporan_medis()
		{
			$tgl1 = $this->input->post('tgl1');
			$tgl2 = $this->input->post('tgl2');

			$data['medis'] = $this->daftar_pasien->laporanMedisRange($tgl1, $tgl2);
			// var_dump($data);

			$this->load->view('layout/admin/header');
			$this->load->view('page/data-medis', $data);
			$this->load->view('layout/admin/footer');
		}

}
