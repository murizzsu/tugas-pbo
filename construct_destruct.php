<!DOCTYPE html>
<html>
<body>

<?php
class Konversi_Suhu{ //celcius ke farenheit
	private $nilai_celcius;
    private $nilai_fahrenheit;
    public function __construct($nilai_celcius){
    $this->nilai_celcius = $nilai_celcius;
    
    }
    public function hasil(){
    $this->nilai_fahrenheit = 9/5 * $this->nilai_celcius + 32; 
    $str = "Konversi dari {$this->nilai_celcius} celcius ke fahrenheit adalah {$this->nilai_fahrenheit} Fahrenheit <hr>";
    return $str;
    }
    
    public function __destruct(){
    
    echo "<br> Hasil = {$this->nilai_fahrenheit}";
    }
}

$celcius_f = new Konversi_Suhu(30);
echo $celcius_f->hasil();




?>

</body>
</html>
