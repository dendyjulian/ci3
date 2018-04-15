<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Model {

    public function __construct()
     {
     	$this->load->database();
     } 
	
     public function get_article(){
     	$query = $this->db->get('blog');
     	return $query;
     }

     public function get_article_by_id($id){
     	$query = $this->db->get_where('blog', array('id' => $id));
     	return $query->row_array();
     }

     public function set_article($data){
     	$this->load->helper('url');
     	//Membedakan untuk query create
     	$this->db->insert('blog', $data);
     }

     function edit_data($where,$table){      
     return $this->db->get_where($table,$where);
     }

     function update_data($where,$data,$table){
          $this->db->where($where);
          $this->db->update($table,$data);
     }

     function hapus_data($where,$table){
          $this->db->where($where);
          $this->db->delete($table);
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>