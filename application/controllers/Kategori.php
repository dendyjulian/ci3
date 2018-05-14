<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->helper(array('url','form'));
        $this->load->model('kategoridata');
        $this->load->library('form_validation');
    }

    public function index()
	{
		$data['kategori'] = $this->kategoridata->get_data_kategory();
		$this->load->view('blogger/header');
		$this->load->view('kategori/view_kategori',$data);
		$this->load->view('blogger/footer');
	}
	public function create(){
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['kategori'] = $this->kategoridata->get_data_kategory();
			//$this->load->view('blogger/header');
			$this->load->view('kategori/create_kategori',$data);
			//$this->load->view('blogger/footer');		
		} else {
			$data['input'] = array(
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi')
			);
			$this->kategoridata->set_kategori(0, $data['input']);
			redirect('Kategori');
		}
	}
	public function edit(){
		$id = $this->uri->segment(3);
		$data['kategori'] = $this->kategoridata->get_data_kategory_by_id($id);
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('blogger/header');
			$this->load->view('kategori/edit_kategori', $data);
			$this->load->view('blogger/footer');
		} else {
			$data['input'] = array(
				'nama' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi')
			);
			$this->kategoridata->set_kategori($id, $data['input']);
			redirect('Kategori');
		}
	}
	public function delete(){
		$id = $this->uri->segment(3);
		$this->kategoridata->delete_kategori($id);
		redirect('Kategori');
	}

}