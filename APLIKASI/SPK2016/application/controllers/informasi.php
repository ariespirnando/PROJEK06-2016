<?php

class informasi extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model(array('modInformasi','modAlternativ'));
    }
	function index(){
		$config['base_url'] = base_url().'/index.php/informasi/index';
		$config['total_rows'] = $this->modInformasi->info()->num_rows();
		$config['per_page'] = 3;

		$this->pagination->initialize($config); 
        		$data['paging']     =  $this->pagination->create_links();
        		$halaman            =  $this->uri->segment(3);
        		$halaman            =  $halaman==''?0:$halaman; 
		$data['info'] = $this->modInformasi->infoPaging($halaman,$config['per_page']);
        $this->template->load('Template','Website/w_Informasi',$data);
	}
	function input(){
		$id=  $this->uri->segment(3);

		$prm = $this->modAlternativ->cekstatusAlternativ($id);
		if($prm > 0){
			echo "<script>alert('Alternativ sudah ditambahkan')
				location.href='../'</script>";
		}else{
			$this->modAlternativ->inputalter($id);
			echo "<script>alert('Alternativ berhasil ditambahkan')
				location.href='../'</script>";

		}
		
	}
}

?>