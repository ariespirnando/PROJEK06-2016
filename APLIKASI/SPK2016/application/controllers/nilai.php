<?php

class nilai extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model(array('modNilai','modAlternativ'));
    }
	function index(){
		$data['nilai'] = $this->modNilai->Nilai();
        $this->template->load('Template','Website/w_nilai',$data);
	}
	function tambah(){
		if(isset($_POST['simpan'])){
			$ketnilai = $this->input->post('Keterangan');
			$nilai    = $this->input->post('nilai');
			if($ketnilai=="" || $nilai ==""){
				echo "<script>alert('Terdapat data yang kosong')
					location.href='tambah'</script>";
			}else{
				$this->modNilai->insert($ketnilai,$nilai);
				echo "<script>alert('Data berhasil disimpan')
					location.href='tambah'</script>";
			}
		}else{
			$this->template->load('Template','Website/w_inputnilai');
		}
	}
	function edit(){
		if(isset($_POST['edit'])){
			$idnilai  = $this->input->post('idn');
			$ketnilai = $this->input->post('Keterangan');
			$nilai    = $this->input->post('nilai');
			if($ketnilai=="" || $nilai ==""){
				echo "<script>alert('Data Gagal diubah')
					location.href='./'</script>";
			}else{
				$this->modNilai->edit($idnilai,$ketnilai,$nilai);
				echo "<script>alert('Data berhasil diubah')
					location.href='./'</script>";
			}

		}else{
			$id = $this->uri->segment(3);
			$data['nilai'] = $this->modNilai->tampiledit($id)->row_array();
			$this->template->load('Template','Website/w_editnilai',$data);
		}
	}
	function reset(){
		$this->modNilai->reset();
		echo "<script>alert('Data berhasil reset')
					location.href='./'</script>";
	}
	function hapus(){
		$id = $this->uri->segment(3);
		$this->modNilai->hapus($id);
		echo "<script>alert('Data berhasil dihapus')
					location.href='../'</script>";

	}
}

?>