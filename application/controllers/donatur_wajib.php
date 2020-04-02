<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donatur_Wajib extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['donatur'] = $this->all_model->getListDonaturWajib()->result();
		$this->load->view('donatur-wajib/index', $data);
	}

	public function add()
	{
		$this->load->view('donatur-wajib/add');
	}

	public function processAdd()
	{
		$user = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'joinDate' => $this->input->post('joinDate'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'username' => $this->input->post('username'),
			'role' => 2
		);
		
		$result_user = $this->all_model->insertData('user', $user);
		if($result_user == true){
			$getId = $this->all_model->getDataByLimit('user', 'idUser', 'desc', 1)->row();
			$donatur = array(
				'jenisKeanggotaan' => 2,
				'gender' => $this->input->post('gender'),
				'birthDate' => $this->input->post('birthDate'),
				'id_user' => $getId->idUser,
				'angkatan' => $this->input->post('angkatan')
			);
			$result_donatur = $this->all_model->insertData('donatur', $donatur);
			if($result_donatur == true){
				return redirect(base_url() . 'donatur_wajib/index');
			}
		}
		return redirect(base_url() . 'donatur_wajib/add');
	}

	public function edit($id)
	{
		$data['donatur'] = $this->all_model->getDonaturWajibById((int) $id)->row();
		$this->load->view('donatur-wajib/edit', $data);
	}

	public function processEdit()
	{
		$donatur = $this->all_model->getDonaturWajibById((int) $this->input->post('idDonatur'))->row();
		$user = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'phone' => $this->input->post('phone'),
			'joinDate' => $this->input->post('joinDate'),
			'email' => $this->input->post('email'),
			'password' => empty($this->input->post('password')) ? $donatur->password : md5($this->input->post('password')),
			'username' => $this->input->post('username'),
			'role' => 2
		);
		$con_user = array(
			'idUSer' => $this->input->post('idUser')
		);
		$res_user = $this->all_model->updateData('user', $con_user, $user);
		if($res_user == true){
			$con_donatur = array(
				"idDonatur" => $this->input->post('idDonatur')
			);
			$donatur = array(
				'gender' => $this->input->post('gender'),
				'birthDate' => $this->input->post('birthDate'),
				'angkatan' => $this->input->post('angkatan')
			);
			$res_donatur = $this->all_model->updateData('donatur', $con_donatur, $donatur);
			if($res_donatur == true){
				return redirect(base_url() . 'donatur_wajib/index');
			}
		}
		return redirect(base_url() . 'donatur_wajib/edit/' . $this->input->post('idDonatur'));
	}

	public function delete($idDonatur, $idUser){
		$con_donatur = array("idDonatur" => $idDonatur);
		$deleteDonatur = $this->all_model->deleteData('donatur', $con_donatur);
		if($deleteDonatur == true){
			$con_user = array("idUser" => $idUser);
			$deleteUser = $this->all_model->deleteData('user', $con_user);
			if($deleteUser == true){
				return redirect(base_url() . 'donatur_wajib/index');
			}
		}
		return redirect(base_url() . 'donatur_wajib/index');
	}

	public function view($id)
	{
		$data['donatur'] = $this->all_model->getDonaturWajibById((int) $id)->row();
		$this->load->view('donatur-wajib/view', $data);
	}
}