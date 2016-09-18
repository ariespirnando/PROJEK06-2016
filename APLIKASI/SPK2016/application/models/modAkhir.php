<?php

class modAkhir extends CI_Model
{
	function readMax($id){
		$sql ="SELECT MAX(nilaiRangking) AS MaxNr FROM rangking WHERE idKriteria=$id LIMIT 0,1";
		return $this->db->query($sql);
	}
	function readMin($id){
		$sql ="SELECT MIN(nilaiRangking) AS MinNr FROM rangking WHERE idKriteria=$id LIMIT 0,1";
		return $this->db->query($sql);
	}
	function updaterangking($idalter,$idKrit,$normal,$bobot){
		$sql ="UPDATE rangking SET nilaiNormalisasi = $normal, bobotNormalisasi = $bobot 
		WHERE idAlternativ = $idalter AND idKriteria = $idKrit";
		$this->db->query($sql);
	}
	function cekisinormalbobot(){
		$sql ="SELECT nilaiNormalisasi, bobotNormalisasi FROM rangking";
		$chek = $this->db->query($sql);

		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
	function cekupdate($idal){
		$sql ="SELECT nilaiRangking FROM rangking WHERE idAlternativ = $idal";
		$chek = $this->db->query($sql);

		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
	function datarangking($id){
		$sql = "SELECT * FROM rangking AS r, alternativ AS a, kriteria AS k 
		WHERE r.idAlternativ = a.idAlternativ AND r.idKriteria = k.idKriteria 
		AND r.idAlternativ = $id";
		return $this->db->query($sql);
	}

	
	function updatealternativ($id,$nilai){
		$sql ="UPDATE alternativ SET hasilAlternativ =$nilai WHERE idAlternativ=$id";
		$this->db->query($sql);
	}
	function sumnilaialternativ($id){
		$sql ="SELECT SUM(bobotNormalisasi) AS TotalNilai FROM rangking WHERE idAlternativ=$id LIMIT 0,1";
		return $this->db->query($sql);
	}
}




?>