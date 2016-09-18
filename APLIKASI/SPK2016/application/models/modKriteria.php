<?php

class modKriteria extends CI_Model
{
	function info(){
		$sql ="SELECT SUM(bobot) AS bb FROM kriteria";
		return $this->db->query($sql);
	}
	function kriteria(){
		return $this->db->get('kriteria');
	}
	function resetkriteria(){
		$sql ="DELETE FROM kriteria";
		$this->db->query($sql);
	}
	function insertkriteria($kriteria,$jenis,$nilai){
		$sql ="INSERT INTO kriteria VALUES(null,'$kriteria','$jenis',$nilai)";
		$this->db->query($sql);
	}
	function hapus($id){
		$sql ="DELETE FROM kriteria WHERE idKriteria = $id";
		$this->db->query($sql);
	}
	function edit($nama,$tipe,$bobot,$id){
		$sql ="UPDATE kriteria SET namaKriteria = '$nama', tipeKriteria = '$tipe', bobot ='$bobot' WHERE idKriteria = $id";
		$this->db->query($sql);
	}
	function tampiledit($id){
		$parameter = array('idKriteria'=>$id);
		return $this->db->get_where('kriteria',$parameter);
	}
}

?>
