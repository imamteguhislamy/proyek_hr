<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/home');
		$this->load->view('user/footer');
	}

	public function daftar_jabatan()
	{
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/daftar_jabatan');
		$this->load->view('user/footer');
	}

	public function detail_jabatan()
	{
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/detail_jabatan');
		$this->load->view('user/footer');
	}

	public function edit_identitas()
	{
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/edit_identitas');
		$this->load->view('user/footer');
	}

	public function edit_jobdesk()
	{
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/edit_jobdesk');
		$this->load->view('user/footer');
	}
}
