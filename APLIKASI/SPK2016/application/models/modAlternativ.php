<?php


class modAlternativ extends Ci_Model
{
	function alternativ(){
		$sql = "SELECT i.namaKosan, a.idAlternativ, a.hasilAlternativ FROM infomasi AS i, alternativ AS a WHERE a.idKosan = i.idKosan";
		return $this->db->query($sql);
	}
	function inputalter($id){
		$sql = "INSERT INTO alternativ (`idKosan`, `hasilAlternativ`) VALUES ($id,0)";
		$this->db->query($sql);
	}
	function cekstatusAlternativ($id){
		$sql ="SELECT * FROM alternativ WHERE idKosan= $id";
		$chek = $this->db->query($sql);
		if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
	}
	function updatereset($id){
		$sql = "UPDATE alternativ SET hasilAlternativ = 0 WHERE idAlternativ = $id";
		$this->db->query($sql);
	}
	function resetalternativ(){
		$sql ="DELETE FROM alternativ";
		$this->db->query($sql);
	}
	function hapus($id){
		$sql ="DELETE FROM alternativ Where idAlternativ = '$id'";
		$this->db->query($sql);
	}
}

?>