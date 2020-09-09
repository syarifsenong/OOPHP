<?php 
//nama class
class Buku
{
//properti
 public $nama = "PHP", 
		$harga = 10000, 
		$pengarang = "Pak Dika", 
		$penerbit = "Unpas";

//method : fungsi yg ada di dalam class
public function halo(){
	return "hello world <br>";
}
public function getBuku(){
	//fungsi $this untuk mengambil isi dari properti 
	// dari class yg bersangkutan ketika dibuat instance
	return "Buku $this->nama, Harga $this->harga";
}

}
//object instance dari class
$buku2 = new Buku();
//set value properti langsung
$buku2->nama = "CSS";
$buku2->harga = 20000;
$buku2->pengarang = "Senong";
$buku2->penerbit = "Media";
var_dump($buku2);

$buku3 = new Buku();
//set value properti langsung
$buku3->nama = "PHP";
$buku3->harga = 30000;
$buku3->pengarang = "Padika";
$buku3->penerbit = "Gema";

echo "<br>";
echo "Buku : $buku2->nama, $buku2->pengarang";
echo "<br>";
//manggil method
echo $buku2->halo();
echo $buku2->getBuku();
echo "<br>";
//simbol titik untuk menggabungkan 
echo "Ini adalah " . $buku3->getBuku();
 ?>