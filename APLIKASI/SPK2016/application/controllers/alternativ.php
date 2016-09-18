<?php

class alternativ extends CI_Controller{

	function __construct() {
        parent::__construct();
        $this->load->model(array('modInformasi','modAlternativ'));
    }

	function index(){
		$data['Alternativ'] = $this->modAlternativ->alternativ();
		$this->template->load('Template','Website/w_alternativ',$data);
	}
	function reset(){
		$this->modAlternativ->resetalternativ();
		echo "<script>alert('Data berhasil reset')
					location.href='./'</script>";
	}
	function hapus(){
		$id = $this->uri->segment(3);
		$this->modAlternativ->hapus($id);
		echo "<script>alert('Data berhasil dihapus')
					location.href='../'</script>";
	}

}
	
?>