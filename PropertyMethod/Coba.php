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
$buku1 = new Buku();
var_dump($buku1);
 ?>