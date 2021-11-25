<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}
	public function index()
	{	
		$this->load->model('Master_model');
		$isi['judul_satu'] = 'Home';
		$isi['konten'] = 'home/view';
		$isi['total_data'] = $this->Master_model->total_rows();
		$this->load->view('tampil', $isi);
	}
}
