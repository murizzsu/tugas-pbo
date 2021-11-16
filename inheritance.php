<?php

class satuanPanjang{
	protected $cm;

	public function __construct($cm){
    	$this->cm = $cm;
	}
}

class Centi_meter extends satuanPanjang{
	public function getInfo(){
    $str = "Konversi dari {$this->cm} cm ke m adalah ";
    $hasil = $this->cm / 100 ." meter";
    
    return $str.$hasil;
    }
}

$konversi = new Centi_meter(10);

echo $konversi->getInfo();
