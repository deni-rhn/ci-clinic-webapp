<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash_dokter extends CI_Controller {

	public function __construct() { 
		parent::__construct(); 
		
		//jika belum login
		if(!$this->session->has_userdata('id')){
			redirect(base_url('dash_dokter/data_pasien'));
        }
		
		}
		
		public function index()
		{
			redirect(base_url('datapasien/antrian'));
		}
    

}