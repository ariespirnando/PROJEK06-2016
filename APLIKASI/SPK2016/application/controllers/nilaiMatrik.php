<?php

class nilaiMatrik extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model(array('modInformasi','modAlternativ','modKriteria','modRangking','modNilai'));
    }
	function index(){
		$this->template->load('Template','Website/w_matrik');
	}
	function tambah(){
		if(isset($_POST['simpan'])){
			$alternativ = $this->input->post('Alternativ');
			$kriteria = $this->input->post('kriteria');
			$nilai = $this->input->post('nilai');
			$x = count($nilai);
			for($i = 0 ;$i < $x ; $i++){
				$cek = $this->modRangking->cekmatrik($alternativ,$kriteria[$i]);
				if($cek > 0){
					echo "<script>alert('Data Sudah pernah ditambahkan')
					location.href='tambah'</script>";
				}else{
					$this->modRangking->inputmatrik($alternativ,$kriteria[$i],$nilai[$i]);
					echo "<script>alert('Data berhasil ditambahkan')
					location.href='tambah'</script>";
				}
			}
			echo "<script>alert('Data Gagal ditambahkan')
			location.href='tambah'</script>";
		}else{
			$data['nilai'] = $this->modNilai->Nilai();
			$data['alternativ'] = $this->modAlternativ->alternativ();
			$data['Kriteria'] = $this->modKriteria->kriteria();
			$this->template->load('Template','Website/w_matrik',$data);
		
		}
	}
	function detail(){
		$data['nilai'] = $this->modRangking->detail();
		$data['Alternativ'] = $this->modAlternativ->alternativ();
		$data['KriteriaJumlah'] = $this->modKriteria->kriteria();
		$this->template->load('Template','Website/w_detailnilai',$data);
	}
	function resetrengking(){
		$this->modRangking->resetrangking();
		$n = $this->modAlternativ->alternativ();
			foreach ($n->result() as $a ) {
				$param = $a->idAlternativ;
				$this->modAlternativ->updatereset($param);
			}
		echo "<script>alert('Data berhasil reset')
					location.href='./tambah'</script>";
	}
}

?>