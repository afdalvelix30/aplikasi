<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_produk_model extends CI_Model
{

	private $table = 'kategori_produk';

	public function create($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function read()
	{
		return $this->db->get($this->table);
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update($this->table, $data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete($this->table);
	}

	public function delete_kategori($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('kategori_produk');
	}

	public function getKategori($id)
	{
		$this->db->where('id', $id);
		return $this->db->get($this->table);
	}

	public function search($search = "")
	{
		$this->db->like('kategori', $search);
		return $this->db->get($this->table)->result();
	}
}

/* End of file Kategori_produk_model.php */
/* Location: ./application/models/Kategori_produk_model.php */