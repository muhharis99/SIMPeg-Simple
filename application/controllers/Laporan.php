<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
  function __construct(){
    parent::__construct();
    //
    $this->load->database();
    $this->load->helper(array('form', 'url'));
  }

  function index(){
    $this->load->model('master_model');
    $isi['judul_satu'] = 'Laporan Data Karyawan';
    $isi['konten'] = "laporan/view";
    $isi['data'] = $this->Master_model->get_jan();
    $this->load->view('tampil', $isi);
  }

  
  function cetak_id($nip) {
       $data['data'] = $this->db->get_where('peg', ['nip'=>$nip])->row();
       $this->load->view('laporan/cetak_per_id', $data);
         }

   function cetak_all() {
       $data = array(
        'data'  => $this->db->query("
                  SELECT
                peg.nip, 
                peg.nama, 
                peg.alm, 
                peg.ktp, 
                peg.sex, 
                peg.kta
              FROM
                peg"),
              );
      $this->load->view('laporan/cetak_all',$data);
      $html = $this->output->get_output();
      $this->load->library('dompdf_gen');
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $sekarang=date("d:F:Y:h:m:s");
      $this->dompdf->stream("ID Card, Tanggal ".$sekarang.".pdf",array('Attachment'=>0));
   }

}
