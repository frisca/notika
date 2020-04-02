<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class All_Model extends CI_Model {
	public function getDataByCondition($table, $condition)
	{
		$this->db->where($condition);
		return $this->db->get($table);
	}

	public function getDataByLimit($table, $condition, $order, $limit)
	{
		$this->db->order_by($condition, $order);
		$this->db->limit($limit);
		return $this->db->get($table);
	}

	public function insertData($table, $data){
		$this->db->insert($table, $data);
		return true;
	}

	public function getListDonaturRutin(){
		$query = "select u.*, d.* from user u left join donatur d on u.idUser = d.id_user where u.role = 2 and d.jenisKeanggotaan = 1";
		$result = $this->db->query($query);
		return $result;
	}

	public function getDonaturRutinById($id){
		$query = "select u.*, d.* from user u left join donatur d on u.idUser = d.id_user where u.role = 2 and d.jenisKeanggotaan = 1 and d.idDonatur = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getListDonaturWajib(){
		$query = "select u.*, d.* from user u left join donatur d on u.idUser = d.id_user where u.role = 2 and d.jenisKeanggotaan = 2";
		$result = $this->db->query($query);
		return $result;
	}

	public function updateData($table, $condition, $data){
		$this->db->where($condition);
		$this->db->update($table, $data);
		return true;
	}

	public function deleteData($table, $condition){
		$this->db->delete($table, $condition);
		return true;
	}

	public function getDonaturWajibById($id){
		$query = "select u.*, d.* from user u left join donatur d on u.idUser = d.id_user where u.role = 2 and d.jenisKeanggotaan = 2 and d.idDonatur = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getListDonaturNoRutin(){
		$query = "select u.*, d.* from user u left join donatur d on u.idUser = d.id_user where u.role = 2 and d.jenisKeanggotaan = 3";
		$result = $this->db->query($query);
		return $result;
	}

	public function getDonaturNoRutinById($id){
		$query = "select u.*, d.* from user u left join donatur d on u.idUser = d.id_user where u.role = 2 and d.jenisKeanggotaan = 3 and d.idDonatur = " . $id;
		$result = $this->db->query($query);
		return $result;
	}

	public function getListTransaksiMasuk(){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join  donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user";
		$result = $this->db->query($query);
		return $result;
	}

	public function getListDonatur(){
		$query = "select u.*, d.* from user u left join donatur d on u.idUser = d.id_user where u.role = 2";
		$result = $this->db->query($query);
		return $result;
	}

	public function getTransaksiMasukById($id){
		$query = "SELECT tm.*, d.*, u.* FROM transaksi_masuk tm left join  donatur d on d.idDonatur = tm.idDonatur left join user u on u.idUser = d.id_user and tm.idTransaksiMasuk = " . $id;
		$result = $this->db->query($query);
		return $result;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */