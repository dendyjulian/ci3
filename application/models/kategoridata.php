<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Kategoridata extends CI_Model{

	public function get_data_kategory(){
		$query = $this->db->get('kategori');
		return $query;
	}

	public function get_data_kategory_by_id($id)
	{
		$query = $this->db->where('idcateg', $id)->get('kategori');
		return $query->row_array();
	}

	public function dropdown()
	{
		$data = $this->db->select('idcateg, nama')->from('kategori')->get();
		$data_select[''] = "Pilih kategori";
		foreach ($data->result() as $row) {
			$data_select[$row->idcateg] = $row->nama;
		}
		return $data_select;
	}

	public function set_kategori($id = 0, $data){
		if($id == 0){
			return $this->db->insert('kategori', $data);
		}else{
			$this->db->where('idcateg', $id);
			return $this->db->update('kategori', $data);
		}
	}

	public function get_all_categories($limit = FALSE, $offset = FALSE){  
       if ( $limit ) {
           $this->db->limit($limit, $offset);
       }
       // Urutkan berdasar abjad
       $this->db->order_by('nama');

       $query = $this->db->get('kategori');
       return $query->result();
   	}

	public function delete_kategori($id){
		$this->db->where('idcateg', $id);
		return $this->db->delete('kategori');
	}

	public function get_total(){
		return $this->db->count_all("kategori");
	}

}

?>