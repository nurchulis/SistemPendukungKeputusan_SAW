<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('M_data');
			$this->load->helper('url');
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
		$this->load->view('Login');

	}
	function proses_login(){
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');
		$where = array(
		'nim' => $nim,
		'password' => $password);
		$cek = $this->M_data->cek_login("user",$where)->num_rows();
		
		if($cek > 0){
			$data_session = array(
				'nim' => $nim,
				'status' => "login_admin"
				);
		$this->session->set_userdata($data_session);
		
			redirect(base_url('/'));
		}else{
		  
			redirect(base_url('Login?login=Login Gagal'));
		}}
	function logout(){
		
		$this->session->sess_destroy();
		redirect(base_url('/Login'));
	}

}
