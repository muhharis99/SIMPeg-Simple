<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();

	}
	function index()
	{	
		$isi['judul_satu'] = 'Data Pegawai';
		$isi['konten'] = 'karyawan/view';
		$isi['data'] = $this->db->get('peg');
		$this->load->view('tampil', $isi);
	}

	function hapus(){
		$this->load->model('Master_model');
		
		$key = $this->uri->segment(3);
		$this->db->where('nip', $key);
		$query = $this->db->get('peg');
		if($query->num_rows()>0)
		{
			$this->Master_model->getdelete_peg($key);
			$this->session->set_flashdata(
				'info', 
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Sukses!</strong> Data terhapus.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
		}
		Redirect('Karyawan');
	}

	function tambah() {
		$isi['judul_satu'] = 'Data Pegawai';
		$isi['konten'] = 'karyawan/add';
		$isi['kodeunik2'] = $this->Master_model->buat_kode_peg();
		// $isi['data'] = $this->db->get('peg');
		$this->load->view('tampil', $isi);
	}

	function simpan() 
	{
		$key = $this->input->post('nip');
		$data['nip'] = $this->input->post('nip'); // mengambil data
		$data['nama'] = $this->input->post('nama');
		$data['alm'] = $this->input->post('alm');
		$data['ktp'] = $this->input->post('ktp');
		$data['sex'] = $this->input->post('sex');
		$data['kta'] = $this->input->post('kta');

		$this->load->model('Master_model');
		$query = $this->Master_model->get_peg($key);
		if($query->num_rows()>0)
		{
			$this->Master_model->getupdate_peg($key,$data);
			$this->session->set_flashdata(
				'info', 
				'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>Sukses!</strong> Data berhasil diubah.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
		} 
		else 
		{
			$this->Master_model->getinsert_peg($data);
			$this->session->set_flashdata(
				'info', 
				'<div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>Sukses!</strong> Data berhasil ditambah.
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>');
		}
		Redirect('Karyawan');

	}
	function ubah(){
		$isi['judul_satu'] = 'Ubah Data Pegawai';
		$isi['konten'] = 'karyawan/edit';

		$key = $this->uri->segment(3);
		$this->db->where('nip', $key);
		$query = $this->db->get('peg');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{	
				$isi['nip'] = $row->nip;
				$isi['nama']	= $row->nama;
				$isi['alm']	= $row->alm;
				$isi['ktp'] = $row->ktp;
				$isi['sex']	= $row->sex;
				$isi['kta']	= $row->kta;
			}
		}
		else {	
				$isi['nip'] = '';
				$isi['nama']	= '';
				$isi['alm']	= '';
				$isi['ktp'] = '';
				$isi['sex']	= '';
				$isi['kta']	= '';
		}
		$this->load->view('tampil', $isi);
	}
}
