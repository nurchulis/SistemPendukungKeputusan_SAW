<?php
class M_data extends CI_Model{

  function tampil_about(){
    $hasil= $this->db->get('makul');
    return $hasil->result();
  }

  function get_nilai(){
    $hasil= $this->db->get('nilai');
    return $hasil->result();
  }
  function tampil_nilai(){
  	$user=$this->session->userdata('nim');
  	$this->db->where('nim',$user);
    return $this->db->get('Data_input_nilai')->result();	
  }

  public function save_nilai($data){
    return $this->db->insert_batch('Data_input_nilai', $data);
  }
  

  public function save_nilai_number($data){
    return $this->db->insert_batch('data_nilai_to_number', $data);
  }
  function tampil_nilai_number(){
  	$user=$this->session->userdata('nim');
  	$this->db->where('nim',$user);
    return $this->db->get('data_nilai_to_number')->result();	
  }
  function tampil_nilai_sistem_cerdas(){
  	$user=$this->session->userdata('nim');
  	$this->db->where('nim',$user);
    return $this->db->get('data_nilai_to_number')->result();		
  }
   function cek_login($table,$where){    
    return $this->db->get_where($table,$where);
  }
}

?>