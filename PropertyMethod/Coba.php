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
	return "hello world";
}

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


echo "<br>";
echo "Buku : $buku2->nama, $buku2->pengarang";
echo "<br>";
//manggil method
echo $buku2->halo();
 ?>