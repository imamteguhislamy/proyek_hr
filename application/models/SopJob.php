<?php
class SopJob extends CI_Model {

	// function getData() {
	// 	$query = $this->db->get('admin');
	// 	return $query->result_array();
	// }

  function authen_admin($username, $password) {
    $this->db->select('*');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $this->db->from('admin');
    $query = $this->db->get();

    if ($query->num_rows() == 1) {
      return true;
    }
    else {
      return false;
    }
  }


	public function GetJob($where=""){
    $data = $this->db->query('SELECT * FROM identitasjabatan '.$where);
    return $data -> result_array();
  }

  public function GetJobSpes($jabatan){
    $this->db->where('jabatan', $jabatan);
    return $this->db->get('identitasjabatan')->result();
    
  }


	public function GetSop($where=""){
    $data = $this->db->query('SELECT * FROM sop '.$where);
    return $data -> result_array();
  }

  public function GetSopSpes($namasop){
    $this->db->where('namasop', $namasop);
    return $this->db->get('sop')->result();
    
  }
    


	public function insertData($tabelName, $data){
    $res = $this->db->insert($tabelName, $data);
    return $res;
  }

	public function updateData($tabelName, $data, $where){
    $res = $this->db->update($tabelName, $data, $where);
    return $res;
	}

	public function deleteData($tabelName, $where){
    $res = $this->db->delete($tabelName, $where);
    return $res;
  }


}

?>
