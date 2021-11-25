<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model {
	function buat_kode_peg()  {
		  $this->db->select('RIGHT(peg.nip,4) as kode', FALSE);
		  $this->db->order_by('nip','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('peg');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "KD-PEG-NO-".$kodemax;    // hasilnya ODJ-9921-0001 dst.
		  return $kodejadi;  
	}
	function get_peg($key){
		$this->db->where('nip',$key);
		$hasil = $this->db->get('peg');
		return $hasil;
	}

	function getupdate_peg($key,$data){
		$this->db->where('nip', $key);
		$this->db->update('peg', $data);
	}

	function getinsert_peg($data){
		$this->db->insert('peg', $data);
	}

	function getdelete_peg($key){
		$this->db->where('nip', $key);
		$this->db->delete('peg');
	}

  	function total_rows() {
    	return $this->db->get('peg')->num_rows();
  	}
  	function get_jan(){
		$data = "SELECT
						peg.nip, 
						peg.nama, 
						peg.alm, 
						peg.ktp, 
						peg.sex, 
						peg.kta
					FROM
						peg";
		return $this->db->query($data);

	}


}