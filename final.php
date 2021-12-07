<?php 
//Menghitung Volume Balok

class Balok{
    private $p,$l,$t;

    public function __construct($panjang,$lebar,$tinggi){
        $this->p = $panjang;
        $this->l = $lebar;
        $this->t = $tinggi;
    }

    final public function rumus(){
        $str = "Rumus Volume Balok Yaitu Panjang x Lebar x Tinggi <br>";
        return $str;
    }

    final public function hitung(){
        $info = "Panjang = {$this->p} cm^3, Lebar = {$this->l} cm^3, Tinggi = {$this->t} cm^3 <br>";
        $hasil1 = "Hasil : ";
        $hasil = $this->p * $this->l * $this->t;
        return $info.$hasil1.$hasil;
    }

}

$volume = new Balok(10,3,5);
echo $volume->rumus();
echo $volume->hitung();
 
?>
