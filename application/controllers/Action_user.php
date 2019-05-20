<?php 

class Action_user extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
		$this->load->helper('url');

	}


	function insert_nilai(){
		$id_makul = $_POST['id_makul'];
		$nilai = $_POST['nilai'];
		$nim = $_POST['nim'];
		$data = array();
		$index = 0; // Set index array awal dengan 0
    	foreach($id_makul as $data_id){ // Kita buat perulangan berdasarkan nis sampai data terakhir
 
      	array_push($data, array(
        'id_makul'=>$data_id,
        'nilai'=>$nilai[$index],
        'nim'=>$nim[$index],
      	));
      	$index++;
    	}
    	$this->M_data->save_nilai($data);
			redirect(base_url('/'));
	}
	function insert_to_nilai_to_number(){
		$id_makul = $_POST['id_makul'];
		$nilai = $_POST['nilai'];
		$nim = $_POST['nim'];
		$data = array();
		$index = 0; // Set index array awal dengan 0
    	foreach($id_makul as $data_id){ // Kita buat perulangan berdasarkan nis sampai data terakhir
 
      	array_push($data, array(
        'id_makul'=>$data_id,
        'nilai'=>$nilai[$index],
        'nim'=>$nim[$index],
      	));
      	$index++;
    	}
    	$this->M_data->save_nilai_number($data);

			redirect(base_url('/'));	
	}
	function reset_nilai_to_number(){

  		$user=$this->session->userdata('nim');
		$this->db->where('nim', $user);
		$this->db->delete('data_nilai_to_number');
		
			redirect(base_url('/'));	
	}


}

?>