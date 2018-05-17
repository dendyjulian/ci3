<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	function __construct(){
        parent::__construct();      
        $this->load->helper(array('url','form'));
        $this->load->model('kategoridata');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function index()
	{
		$data['kategori'] = $this->kategoridata->get_data_kategory();

		$this->load->model('kategoridata');

		//dapatkan data dari model blog dengan pagination
		//jumlah artikel per halaman
		$limit_per_page = 2;

		//uri segment untuk deteksi halaman ke berapa dari url
		$start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0 ;

		//dapatkan jumlah data
		$total_records = $this->kategoridata->get_total();

		if ($total_records > 0) {
			//dapatkan data pada halaman yang dituju
			$data['all_categories'] = $this->kategoridata->get_all_categories($limit_per_page,$start_index);

        // Konfigurasi pagination
        $config['base_url'] = base_url() . 'kategori/index';
        $config['total_rows'] = $total_records;
        $config['per_page'] = $limit_per_page;
        
        $this->pagination->initialize($config);
            
        // Buat link pagination
        $data["links"] = $this->pagination->create_links();
        // print_r($data['all_categories']);
        // echo $total_records;
        // echo $data['links'];
        // echo $start_index;
        
		$this->load->view('blogger/header');
		$this->load->view('kategori/view_kategori',$data);
		$this->load->view('blogger/footer');
		}
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