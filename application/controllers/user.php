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
		$this->load->view('user/daftar_jabatan');
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

	public function edit_tujuansop()
	{
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/edit_tujuansop');
		$this->load->view('user/footer');
	}

	public function edit_uraiansop()
	{
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/edit_uraiansop');
		$this->load->view('user/footer');
	}

	public function edit_namasop()
	{
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/edit_namasop');
		$this->load->view('user/footer');
	}

	public function edit_fungsijabatan()
	{
		$this->load->view('user/sidebar');
		$this->load->view('user/header');
		$this->load->view('user/edit_fungsijabatan');
		$this->load->view('user/footer');
	}

	// public function add_menu()
 //  {
 //    $data = $this-> MyModel -> GetMenu();
	// 	$this ->load->view('admin_addmenu', array('data' => $data));
 //  }

 //  public function form_add(){
 //    $id_menu = $_POST['id_menu'];
 //    $nama_menu = $_POST['nama_menu'];
 //    $deskripsi = $_POST['deskripsi'];
 //    $harga = $_POST['harga'];
    
 //    $config = array(
 //                'upload_path' => './gambar/',
 //                'allowed_types' => 'gif|jpg|png|pdf',
 //                'max_size' => 15000,
 //                'max_width' => 2000,
 //                'max_height'=> 2000
 //            );

 //    $fileUpload = array();
 //    $this->upload->initialize($config);

 //    if ($this->upload->do_upload('gambar'))
 //    {
 //      $fileUpload = $this->upload->data();
 //      $gambar = $fileUpload['file_name'];
 //      $menu_kumpul = array(
 //      'id_menu' => $id_menu,
 //      'nama_menu' => $nama_menu,
 //      'gambar' => $gambar,
 //      'deskripsi' => $deskripsi,
 //      'harga' => $harga,
 //      'timestamp' => time()
 //      );
 //      $res = $this->MyModel->InsertData('menu',$menu_kumpul);
 //      if ($res>=1) {
 //        redirect('Ctrl_admin/menu');
 //      } 
 //      else {
 //        echo "<h2>Data gagal untuk ditambahkan</h2>";
 //      }
 //    }
 //    else
 //    {
 //      $error = array('error' => $this->upload->display_errors());
 //      $this->load->view('admin_addmenu', $error);
 //    }
	// }


}
