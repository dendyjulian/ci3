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
     	return $query->row_array();//tidak memanggil foreach / tunggal hanya 1 data
     }

     public function set_article($data){
     	$this->load->helper('url');
     	//Membedakan untuk query create
     	$this->db->insert('blog', $data);
     }
}
/* End of file database_test.php */
/* Location: ./application/models/database_test.php */
?>