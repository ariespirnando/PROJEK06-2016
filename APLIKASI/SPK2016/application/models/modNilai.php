<?php

class modNilai extends CI_Model
{
	
	function Nilai(){
		return $this->db->get('nilai');
	}
	function reset(){
		$sql = "DELETE FROM nilai";
		$this->db->query($sql);
	}
	function insert($keterangan,$nilai){
		$sql ="INSERT INTO nilai VALUES (null,'$keterangan',$nilai);";
		$this->db->query($sql);
	}
	function hapus($id){
		$sql ="DELETE FROM nilai Where idNilai = $id";
		$this->db->query($sql);
	}
	function edit($id,$ket,$jum){
		$sql ="UPDATE nilai SET ketNilai = '$ket', jumlah = $jum WHERE idNilai = $id";
		$this->db->query($sql);
	} 
	function tampiledit($id){
		$parameter = array('idNilai'=>$id);
		return $this->db->get_where('nilai',$parameter);
	}
}

?>
