<?php 

class Perpustakaan{
    public $namaBuku,$penerbit,$penulis, $thnTerbit,$halaman;   
    protected $waktu;
    private $denda=1000;
  
    public function __construct($namaBuku="nama",$penerbit="penerbit",$penulis="penulis",$thnTerbit="tahun",$halaman="halaman"){
        $this-> namaBuku = $namaBuku;
        $this -> penerbit = $penerbit;
        $this -> penulis = $penulis;
        $this -> thnTerbit = $thnTerbit;
        $this -> halaman = $halaman;

    }
    public function infoBuku(){
        $str ="Nama Buku : {$this->namaBuku} | Penerbit : {$this->penerbit} | Penulis : {$this->penulis} | Tahun Terbit : {$this->thnTerbit} | Jumlah Halaman :{$this->halaman} halaman";

        return $str;
    }
         

    public function infoDenda(){

        $info = "Jika telat mengembalikan buku maka akan didenda {$this->denda} setiap harinya. <br>";
        return $info;

    }
}

class Peminjaman extends Perpustakaan{
    public function __construct($waktu_input){
        $this->waktu = $waktu_input;
    }

    public function pengembalian(){
        $waktupinjam = explode("-", $this->waktu);
        $pinjam = "Dipinjam pada Tanggal :{$waktupinjam[2]} | Bulan : {$waktupinjam[1]} | Tahun : {$waktupinjam[0]}";
        $tanggal_pinjam = $this->waktu;
        $tanggal_kembali = date("Y-m-d", strtotime($tanggal_pinjam. '+ 7 Days' ));
        $waktu_kembali = explode("-", $tanggal_kembali);
        $kembali = "Dikembalikan pada Tanggal :{$waktu_kembali[2]} | Bulan : {$waktu_kembali[1]} | Tahun : {$waktu_kembali[0]} <br>";

        echo $pinjam ."<hr>". $kembali ."<hr>";
    }
}
?>

<h2>Form Peminjaman Buku</h2> <hr>
<form action="" method="post">
    <label for="">Nama Buku : </label><br>
    <input type="text" name='nama'><br><br>
    <label for="">Penerbit : </label><br>
    <input type="text" name='penerbit'><br><br>
    <label for="">Penulis : </label><br>
    <input type="text" name='penulis'><br><br>
    <label for="">Tahun : </label><br>
    <input type="number" name='tahun'><br><br>
    <label for="">Halaman : </label><br>
    <input type="number" name='halaman'><br><br>
    <label for="">Tanggal Pinjam : </label><br>
    <input type="date" name='waktu'> <br><br>
    <input type="submit" name='submit_buku' value='Kirim'>
</form>

<?php
if(isset($_POST['submit_buku'])){
    $buku = new Perpustakaan($_POST['nama'],$_POST['penerbit'],$_POST['penulis'],$_POST['tahun'],$_POST['halaman']);
    $pinjam1 = new Peminjaman($_POST['waktu']);
    echo "<hr>";
    echo $buku->infoBuku();
    echo "<hr>";
    echo $pinjam1->pengembalian();
    echo "<br>";
    echo $buku->infoDenda();
}
?>