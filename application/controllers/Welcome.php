<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function home()
	{
		$this->load->model('personaldata');
		$data = $this->personaldata->getData();
		$this->load->view('home',$data,FALSE);
	}
	public function about()
	{
		$this->load->model('personaldata');
		$data = $this->personaldata->getData();
		$this->load->view('about',$data,FALSE);
	}
	public function blog()
	{
		$this->load->view('blog');
	}
	public function songs()
	{
		$this->load->model('personaldata');
		$data = $this->personaldata->getData();
		$this->load->view('songs',$data,FALSE);
	}
	public function FormBlog()
	{
		$this->load->view('formblog');
	}
}
