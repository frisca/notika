<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function processLogin(){
		$data = array(
			"username" => $this->input->post("username"),
			"password" => md5($this->input->post("password"))
		);
		$row = $this->all_model->getDataByCondition('user', $data)->num_rows();
		if($row > 0){
			$result = $this->all_model->getDataByCondition('user', $data)->row();
			$session_data = array(
				'username' => $result->username,
				'role' => $result->role,
				'id'   => $result->idUser
			);
			$this->session->set_userdata('logged_in', $session_data);
			return redirect(base_url() . 'home/index');
		}
		return redirect(base_url() . 'login/index');
	}
}