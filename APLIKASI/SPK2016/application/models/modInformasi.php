<?php


class modInformasi extends CI_Model
{
	
	function info(){
		return $this->db->get('Infomasi');
	}
	function infoPaging($halaman, $batas){
		$sql = "SELECT * FROM Infomasi LIMIT $halaman,$batas";
		return $this->db->query($sql);
	}
}

?>