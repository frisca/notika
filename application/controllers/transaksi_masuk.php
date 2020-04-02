<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transaksi_Masuk extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('all_model');
	}

	public function index()
	{
		$data['transaksi'] = $this->all_model->getListTransaksiMasuk()->result();
		$this->load->view('transaksi-masuk/index', $data);
	}

	public function add()
	{
		$data['donatur'] = $this->all_model->getListDonatur()->result();
		$this->load->view('transaksi-masuk/add',$data);
	}

	public function processAdd(){
		$new_name                   = time().$_FILES["buktiBayar"]['name'];
        $config['file_name']        = $new_name;
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('buktiBayar')){
			return redirect(base_url() . 'transaksi_masuk/add');
		}else{
			$data = array(
				'buktiBayar' => $new_name,
				'idDonatur' => $this->input->post('idDonatur'),
				'jumlah' => $this->input->post('jumlah'),
				'description' => $this->input->post('description'),
				'createdBy' => $this->input->post('createdBy'),
				'bankTransfer' => $this->input->post('bankTransfer'),
				'transferDate' => $this->input->post('transferDate'),
				'jenisTransaksi' => $this->input->post('jenisTransaksi')
			);
			$result = $this->all_model->insertData('transaksi_masuk', $data);
			if($result == true){
				return redirect(base_url() . 'transaksi_masuk/index');
			}
		}
		return redirect(base_url() . 'transaksi_masuk/add');
	}

	public function edit($id)
	{
		$data['donatur'] = $this->all_model->getListDonatur()->result();
		$data['transaksi'] = $this->all_model->getTransaksiMasukById((int) $id)->row();
		$this->load->view('transaksi-masuk/edit',$data);
	}

	public function processEdit(){
		$transaksi = $this->all_model->getTransaksiMasukById((int) $this->input->post('idTransaksiMasuk'))->row();

		$con_transaksi = array('idTransaksiMasuk' => $this->input->post('idTransaksiMasuk'));

		if(!$_FILES['buktiBayar']['name']){
			$data = array(
				'buktiBayar' => $transaksi->buktiBayar,
				'idDonatur' => $this->input->post('idDonatur'),
				'jumlah' => $this->input->post('jumlah'),
				'description' => $this->input->post('description'),
				'createdBy' => $this->input->post('createdBy'),
				'bankTransfer' => $this->input->post('bankTransfer'),
				'transferDate' => $this->input->post('transferDate'),
				'jenisTransaksi' => $this->input->post('jenisTransaksi')
			);

			$result = $this->all_model->updateData('transaksi_masuk', $con_transaksi, $data);
			if($result == true){
				return redirect(base_url() . 'transaksi_masuk/index');
			}
		}else{
			unlink(FCPATH."gambar/".$transaksi->buktiBayar);

			$new_name                   = time().$_FILES["buktiBayar"]['name'];
	        $config['file_name']        = $new_name;
			$config['upload_path']          = './gambar/';
			$config['allowed_types']        = 'gif|jpg|png';

			$this->load->library('upload', $config);
 
			if ( ! $this->upload->do_upload('buktiBayar')){
				return redirect(base_url() . 'transaksi_masuk/add');
			}else{
				$data = array(
					'buktiBayar' => $new_name,
					'idDonatur' => $this->input->post('idDonatur'),
					'jumlah' => $this->input->post('jumlah'),
					'description' => $this->input->post('description'),
					'createdBy' => $this->input->post('createdBy'),
					'bankTransfer' => $this->input->post('bankTransfer'),
					'transferDate' => $this->input->post('transferDate'),
					'jenisTransaksi' => $this->input->post('jenisTransaksi')
				);

				// var_dump($data);exit();
				$result = $this->all_model->updateData('transaksi_masuk', $con_transaksi, $data);

				if($result == true){
					return redirect(base_url() . 'transaksi_masuk/index');
				}
			}
		}
		return redirect(base_url() . 'transaksi_masuk/edit');
	}

	public function delete($id){
		$transaksi = $this->all_model->getTransaksiMasukById((int) $id)->row();

		unlink(FCPATH."gambar/".$transaksi->buktiBayar);

		$con_transaksi = array('idTransaksiMasuk' => (int) $id);

		$deleteTransaksi = $this->all_model->deleteData('transaksi_masuk', $con_transaksi);

		if($deleteTransaksi == true){
			return redirect(base_url() . 'transaksi_masuk/index');
		}
		return redirect(base_url() . 'transaksi_masuk/index');
	}

	public function view($id)
	{
		$data['donatur'] = $this->all_model->getListDonatur()->result();
		$data['transaksi'] = $this->all_model->getTransaksiMasukById((int) $id)->row();
		$this->load->view('transaksi-masuk/view', $data);
	}
		
}