<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('M_data');
			$this->load->helper('url');
			
    	           if($this->session->userdata('status') != "login_admin"){
			redirect(base_url("Login"));
		} 
		}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$data['tampil_makul']=$this->M_data->tampil_about();
		$data['tampil_nilai']=$this->M_data->tampil_nilai();
		$data['tampil_nilai_sistem_cerdas']=$this->M_data->tampil_nilai_sistem_cerdas();
		$data['tampil_nilai_number']=$this->M_data->tampil_nilai_number();
		$this->load->view('Home',$data);

	}
}
