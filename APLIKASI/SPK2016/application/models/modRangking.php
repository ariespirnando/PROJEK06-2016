<?php

class modRangking extends CI_Model
{
	
	function detail(){
		$sql ="SELECT i.namaKosan, k.namaKriteria, r.nilaiRangking FROM rangking AS r, alternativ AS a, kriteria AS k, infomasi AS i
		WHERE r.idAlternativ = a.idAlternativ AND a.idKosan = i.idKosan AND r.idKriteria = k.idKriteria";
		return $this->db->query($sql);
	}
	function inputmatrik($alter,$krtie,$matrik){
		$sql = "INSERT INTO rangking VALUES($alter,$krtie,$matrik,0,0)";
		$this->db->query($sql);
	}
	function cekmatrik($alter,$kriteria){
		$sql = "SELECT * FROM rangking WHERE idAlternativ =$alter and idKriteria = $kriteria";
		$chek = $this->db->query($sql);
		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
	function rownilaimatrik($id){
		$sql ="SELECT * FROM rangking WHERE idAlternativ =$id";
		return $this->db->query($sql);
	}
	function resetrangking(){
		$sql ="DELETE FROM rangking";
		$this->db->query($sql);
	}
	
}
 
?>