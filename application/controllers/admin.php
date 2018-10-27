<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
  function __construct()
  {
    parent::__construct();
    $this->load->model('SopJob');
  }

	public function index()
	{
		$this->load->view('login');
	}

  public function cek_login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $isLogin = $this->MyModel->authentication($username, $password);

    if ($isLogin == true) {
        $this->session->set_userdata('username', $username);
        redirect('Ctrl_admin/index');
    }
    else{
        redirect('admin');
    }
  }

    public function index2()
  {
    $data = $this-> MyModel -> GetPesanan();
    $this ->load->view('admin_pesanan', array('data' => $data));
  }

  public function menu()
  {
    $data = $this-> MyModel -> GetMenu();
    $this ->load->view('admin_menu', array('data' => $data));
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->sess_destroy();
    redirect('admin');
  }

  
  public function job_add(){
    // $idjab = $_POST['idjab'];
    $jabatan = $_POST['jabatan'];
    $bagian = $_POST['bagian'];
    $unit = $_POST['unit'];
    $kodebagian = $_POST['kodebagian'];
    $fungsiutama = $_POST['fungsiutama'];
    $tanggungjawab = $_POST['tanggungjawab'];
    $spespendidikan = $_POST['spespendidikan'];
    $spesusia = $_POST['spesusia'];
    $speskelamin = $_POST['speskelamin'];
    $spespengalaman = $_POST['spespengalaman'];
    $spespelatihan = $_POST['spespelatihan'];
    $spessertifikasi = $_POST['spessertifikasi'];
    $targetpekerjaan = $_POST['targetpekerjaan'];
    $wewenang = $_POST['wewenang'];

    $addjob = array(
      // 'idjab' => $idjab,
      'jabatan' => $jabatan,
      'bagian' => $bagian,
      'unit' => $unit,
      'kodebagian' => $kodebagian,
      'fungsiutama' => $fungsiutama,
      'tanggungjawab' => $tanggungjawab,
      'spespendidikan' => $spespendidikan,
      'spesusia' => $spesusia,
      'speskelamin' => $speskelamin,
      'spespengalaman' => $spespengalaman,
      'spespelatihan' => $spespelatihan,
      'spessertifikasi' => $spessertifikasi,
      'targetpekerjaan' => $targetpekerjaan,
      'wewenang' => $wewenang
      );
      $res = $this->SopJob->InsertData('identitasjabatan',$addjob);
      if ($res>=1) {
        redirect('user/daftar_jabatan');
      } 
      else {
        echo "<h2>Data gagal untuk ditambahkan</h2>";
      }
    
   
  }

  public function sob_add(){
    // $idjab = $_POST['idjab'];
    $namasop = $_POST['namasop'];
    $tujuansop1 = $_POST['tujuansop1'];
    $tujuansop2 = $_POST['tujuansop2'];
    $tujuansop3 = $_POST['tujuansop3'];
    $tujuansop4 = $_POST['tujuansop4'];
    $tujuansop5 = $_POST['tujuansop5'];
    $uraiansop1 = $_POST['uraiansop1'];
    $uraiansop2 = $_POST['uraiansop2'];
    $uraiansop3 = $_POST['uraiansop3'];
    $uraiansop4 = $_POST['uraiansop4'];
    $uraiansop5 = $_POST['uraiansop5'];

    $addjob = array(
      // 'idjab' => $idjab,
      'namasop' => $namasop,
      'tujuansop1' => $tujuansop1,
      'tujuansop2' => $tujuansop2,
      'tujuansop3' => $tujuansop3,
      'tujuansop4' => $tujuansop4,
      'tujuansop5' => $tujuansop5,
      'uraiansop1' => $uraiansop1,
      'uraiansop2' => $uraiansop2,
      'uraiansop3' => $uraiansop3,
      'uraiansop4' => $uraiansop4,
      'uraiansop5' => $uraiansop5
      );
      $res = $this->SopJob->InsertData('sop',$addjob);
      if ($res>=1) {
        redirect('user/daftar_sop');
      } 
      else {
        echo "<h2>Data gagal untuk ditambahkan</h2>";
      }
    
   
  }


  public function job_edit()
  {
    $jabatan = $_POST['jabatan'];
    $bagian = $_POST['bagian'];
    $unit = $_POST['unit'];
    $kodebagian = $_POST['kodebagian'];
    $fungsiutama = $_POST['fungsiutama'];
    $tanggungjawab = $_POST['tanggungjawab'];
    $spespendidikan = $_POST['spespendidikan'];
    $spesusia = $_POST['spesusia'];
    $speskelamin = $_POST['speskelamin'];
    $spespengalaman = $_POST['spespengalaman'];
    $spespelatihan = $_POST['spespelatihan'];
    $spessertifikasi = $_POST['spessertifikasi'];
    $targetpekerjaan = $_POST['targetpekerjaan'];
    $wewenang = $_POST['wewenang'];

    $editjob = array(
      // 'idjab' => $idjab,
      'jabatan' => $jabatan,
      'bagian' => $bagian,
      'unit' => $unit,
      'kodebagian' => $kodebagian,
      'fungsiutama' => $fungsiutama,
      'tanggungjawab' => $tanggungjawab,
      'spespendidikan' => $spespendidikan,
      'spesusia' => $spesusia,
      'speskelamin' => $speskelamin,
      'spespengalaman' => $spespengalaman,
      'spespelatihan' => $spespelatihan,
      'spessertifikasi' => $spessertifikasi,
      'targetpekerjaan' => $targetpekerjaan,
      'wewenang' => $wewenang
      );
      $where = array('jabatan' => $jabatan);
      $res = $this->SopJob->updateData('identitasjabatan',$editjob, $where);
      if ($res>=1) {
        redirect('user/daftar_jabatan');
      } 
      else {
        echo "<h2>Data gagal untuk diubah</h2>";
      }
  }

  public function sop_edit()
  {
    $namasop = $_POST['namasop'];
    $tujuansop1 = $_POST['tujuansop1'];
    $tujuansop2 = $_POST['tujuansop2'];
    $tujuansop3 = $_POST['tujuansop3'];
    $tujuansop4 = $_POST['tujuansop4'];
    $tujuansop5 = $_POST['tujuansop5'];
    $uraiansop1 = $_POST['uraiansop1'];
    $uraiansop2 = $_POST['uraiansop2'];
    $uraiansop3 = $_POST['uraiansop3'];
    $uraiansop4 = $_POST['uraiansop4'];
    $uraiansop5 = $_POST['uraiansop5'];

    $editsob = array(
      // 'idjab' => $idjab,
      'namasop' => $namasop,
      'tujuansop1' => $tujuansop1,
      'tujuansop2' => $tujuansop2,
      'tujuansop3' => $tujuansop3,
      'tujuansop4' => $tujuansop4,
      'tujuansop5' => $tujuansop5,
      'uraiansop1' => $uraiansop1,
      'uraiansop2' => $uraiansop2,
      'uraiansop3' => $uraiansop3,
      'uraiansop4' => $uraiansop4,
      'uraiansop5' => $uraiansop5
      );
      $where = array('namasop' => $namasop);
      $res = $this->SopJob->updateData('sop',$editsob, $where);
      if ($res>=1) {
        redirect('user/daftar_sop');
      } 
      else {
        echo "<h2>Data gagal untuk diubah</h2>";
      }
  }

   public function job_del($jabatan)
  {
    $where = array('jabatan' => $jabatan);
    $res = $this->SopJob->deleteData('identitasjabatan', $where);
    if ($res>=1) {
      redirect('user/daftar_jabatan');
    } else {
      echo "<h2>Data gagal untuk dihapus</h2>";
    }
  }

   public function sop_del($namasop)
  {
    $where = array('namasop' => $namasop);
    $res = $this->SopJob->deleteData('sop', $where);
    if ($res>=1) {
      redirect('user/daftar_sop');
    } else {
      echo "<h2>Data gagal untuk dihapus</h2>";
    }
  }




}
