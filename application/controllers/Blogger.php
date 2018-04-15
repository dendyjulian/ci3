<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogger extends CI_Controller {

	public function __construct()
	{
		//Membuat kelas parent agar bisa digunakan di semua fungsi
		parent::__construct();
		//Load model dan helper
		$this->load->model('Artikel');
		$this->load->helper('url_helper');
	}

	public function index()
	{
		//Memanggil fungsi menampilkan semua tabel artikel
		$data['artikel']=$this->Artikel->get_article();
		$this->load->view('blogger/header');
		$this->load->view('blogger/tampil_blog', $data);
		$this->load->view('blogger/footer');
	}

	public function view(){
		$id = $this->uri->segment(3); //mengambil variabel dari url
		$data['show_article'] = $this->Artikel->get_article_by_id($id);//menyimpan hasil dari filtering data
		// Jika data tidak ditemukan akan di arahkan ke page 404
		if(empty($data['show_article'])){
			show_404();
		}
		//Menyimpan kolom tabel ke array
		$data['title'] = $data['show_article']['title'];
		$data['artikel'] = $data['show_article']['artikel'];
		//Meload View
		$this->load->view('blogger/header');
		$this->load->view('blogger/view', $data);
		$this->load->view('blogger/footer');
	}

	public function create(){
		//Meload helper form dan form valudasi
		$this->load->helper('form');
		$this->load->library('form_validation');
		//validasi inputan yang masuk
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('konten', 'Konten', 'required');
		//Jika validasi belum berjalam
		if ($this->form_validation->run() == FALSE) {
			//Meload View tambah artikel
			$this->load->view('blogger/header');
			$this->load->view('blogger/create');
			$this->load->view('blogger/footer');
		} else {
				$config['upload_path']          = 'assets/img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('gambar'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

			//Menambah data
			$object = array(
     		'judul' => $this->input->post('judul'),
     		'konten' => $this->input->post('konten'),
     		'author' => $this->input->post('author'),
     		'gambar' => $this->upload->data('file_name')
     		);
			//query tambah data
			$this->Artikel->set_article($object);
			//kembali ke home
			redirect('blogger');
		}
		}
	}


	function edit($id){
	$where = array('id' => $id);
	$data['blog'] = $this->Artikel->edit_data($where,'blog')->result();
	$this->load->view('blogger/edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$judul = $this->input->post('judul');
	$tgl = $this->input->post('tgl');
	$author = $this->input->post('author');
	$konten = $this->input->post('konten');
	$gambar = $this->input->post('gambar');

	$data = array(
		'judul' => $judul,
		'tgl' => $tgl,
		'author' => $author,
		'konten' => $konten,
		'gambar' => $gambar,
	);

	$where = array(
		'id' => $id
	);

	$this->Artikel->update_data($where,$data,'blog');
	redirect('Blogger/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->Artikel->hapus_data($where,'blog');
		redirect('blogger/index');
	}


	// public function edit(){
	// 	$this->load->helper('form');
	// 	$this->load->library('form_validation');
	// 	//validasi inputan yang masuk
	// 	$this->form_validation->set_rules('title', 'title', 'required');
	// 	$this->form_validation->set_rules('artikel', 'artikel', 'required');
	// 	//Mengambil data dari model untuk di edit 

	// 	//Mendapatkan key id dati Route
	// 	$id = $this->uri->segment(3);
	// 	//Mengambil data dari model dan di filter dan ditambahkan ke dalam array
	// 	$data['show_article'] = $this->Artikel->get_article_by_id($id);
	// 	$data['id'] = $data['show_article']['id'];
	// 	$data['title'] = $data['show_article']['title'];
	// 	$data['artikel'] = $data['show_article']['artikel'];
	// 	//Jika validasi belum berjalam
	// 	if ($this->form_validation->run() == FALSE) {
	// 		//Meload View tambah artikel
	// 		$this->load->view('blogger/header');
	// 		$this->load->view('blogger/edit',$data);
	// 		$this->load->view('blogger/footer');
	// 	} else {
	// 		//query Edit data
	// 		$this->Artikel->set_article($id);
	// 		//kembali ke home
	// 		redirect('blogger');
	// 	}	
	// }
	// public function delete(){
	// 	$id = $this->uri->segment(3);
	// 	$this->Artikel->delete_article($id);
	// 	redirect('blogger','refresh');
	// }
}

/* End of file database_controller.php */
/* Location: ./application/controllers/database_controller.php */
