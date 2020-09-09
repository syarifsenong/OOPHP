<?php 
//nama class
class Buku
{
 public $nama = "PHP", 
		$harga = 10000, 
		$pengarang = "Pak Dika", 
		$penerbit = "Unpas";
}
//object instance dari class
// $buku1 = new Buku();
// $buku1->nama = "JAVA";
// var_dump($buku1);

$buku2 = new Buku();
//set value properti langsung
$buku2->nama = "CSS";
$buku2->harga = 20000;
$buku2->pengarang = "Senong";
$buku2->penerbit = "Media";
var_dump($buku2);

echo "Buku : $buku2->nama, $buku2->pengarang";
 ?>