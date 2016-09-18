<?php

class kriteria extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model(array('modInformasi','modAlternativ','modKriteria'));
    }
	function index(){
		$data['Kriteria'] = $this->modKriteria->kriteria();
        $this->template->load('Template','Website/w_kriteria',$data);
	}
	function tambahkriteria(){
		$kriteria = $this->modKriteria->info();
		foreach ($kriteria->result() as $k) {
			$param1 = $k->bb;
		}
		if(isset($_POST['simpan'])){
			$kriteria = $this->input->post('Keterangan');
			$jenis    = $this->input->post('jenis');
			$nilai    = $this->input->post('nilai');
			if($kriteria == "" || $jenis == "0" || $nilai == ""){
				echo "<script>alert('Terdapat data yang kosong')
					location.href='tambahkriteria'</script>";
			}else{
				$param2 = $param1 + $nilai;
				if($param2 > 1){
					echo "<script>alert('Jumlah Bobot melebihi 1')
					location.href='tambahkriteria'</script>";
				}else{
					$this->modKriteria->insertkriteria($kriteria,$jenis,$nilai);
					echo "<script>alert('Data berhasil ditambahkan')
					location.href='tambahkriteria'</script>";
				}
			}
		}else{
			$this->template->load('Template','Website/w_inputkriteria');
		}
	}
	function resetkriteria(){
		$this->modKriteria->resetkriteria();
		echo "<script>alert('Data berhasil reset')
					location.href='./'</script>";
	}
	function hapus(){
		$id = $this->uri->segment(3);
		$this->modKriteria->hapus($id);
		echo "<script>alert('Data berhasil dihapus')
					location.href='../'</script>";
	}
	function edit(){
		$kriteria = $this->modKriteria->info();
		foreach ($kriteria->result() as $k) {
			$param1 = $k->bb;
		}
		if(isset($_POST['edit'])){
			$idkri	  = $this->input->post('idk');
			$kriteria = $this->input->post('Keterangan');
			$jenis    = $this->input->post('jenis');
			$nilai    = $this->input->post('nilai');
			if($kriteria == "" || $jenis == "0" || $nilai == ""){
				echo "<script>alert('Terdapat Data Gagal diubah)
					location.href='./'</script>";
			}else{
				$param2 = $param1 + $nilai;
				if($param2 > 1){
					echo "<script>alert('Jumlah Bobot melebihi 1')
					location.href='tambahkriteria'</script>";
				}else{
				$this->modKriteria->edit($kriteria,$jenis,$nilai,$idkri);
				echo "<script>alert('Data berhasil diubah')
					location.href='./'</script>";
				}
			}

		}else{
			$id = $this->uri->segment(3);
			$data['kriteria'] = $this->modKriteria->tampiledit($id)->row_array();
			$this->template->load('Template','Website/w_editkriteria',$data);
		}
	}
}

?>