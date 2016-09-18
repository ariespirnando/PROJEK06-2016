<?php

class rangking extends CI_Controller{
	
	function __construct() {
        parent::__construct();
        $this->load->model(array('modInformasi','modAlternativ','modKriteria','modRangking','modNilai','modAkhir'));
    }
	function index(){
		$cek = $this->modAkhir->cekisinormalbobot();
		if($cek>0){

		$alternativ = $this->modAlternativ->alternativ();
		foreach ($alternativ->result() as $al) {
			$param1 = $al->idAlternativ;
			$karakter = $this->modAkhir->datarangking($param1);
			foreach ($karakter->result() as $kr) {
				$param2 = $kr->idKriteria; 
				$param3 = $kr->tipeKriteria; 
				$param4 = $kr->bobot;
				$param5 = $kr->nilaiRangking;
				$max   = $this->modAkhir->readMax($param2);
				$min   = $this->modAkhir->readMin($param2);
				foreach ($max->result() as $mk) {
					$param6 = $mk->MaxNr;
				}
				foreach ($min->result() as $mi) {
					$param7 = $mi->MinNr;
				}
				if($param3 == "Benefit"){
					$Normalisasi  = $param5 / $param6;
					$bobot        = $Normalisasi * $param4;
				}else{
					$Normalisasi  = $param7 / $param5;
					$bobot        = $Normalisasi * $param4;
				}
				$this->modAkhir->updaterangking($param1,$param2,$Normalisasi,$bobot);
			}
			$cek = $this->modAkhir->cekupdate($param1);
			if($cek==0){
				echo "<script>alert('Eror !!!')
					location.href='informasi'</script>";
			   }
			else{
					$total = $this->modAkhir->sumnilaialternativ($param1);
					foreach ($total->result() as $tt) {
						$param8 = $tt->TotalNilai;
					}
					$this->modAkhir->updatealternativ($param1,$param8);
			   }
		}
		$data['Alternativ'] = $this->modAlternativ->alternativ();
		$this->template->load('Template','Website/w_ranking',$data);
	}else
	{
		$data['Alternativ'] = $this->modAlternativ->alternativ();
		$this->template->load('Template','Website/w_ranking',$data);
	}
	}
	function detail(){
		$data['nilai'] = $this->modRangking->detail();
		$data['Alternativ'] = $this->modAlternativ->alternativ();
		$data['KriteriaJumlah'] = $this->modKriteria->kriteria();
		$this->template->load('Template','Website/w_detailrangking',$data);
	}
	
}

?>