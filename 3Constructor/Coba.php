<?php 

//nama class
class Buku
{
//properti
 public $nama;
 public	$harga;
 public	$pengarang; 
 public	$penerbit;

//constructor : method yg otomatis dijalankan 
//ketika sebuah kelas di buat suatu objek
/*public function __construct(){
	//muncul sesuai banyaknya objek yg dibuat
	echo "hello world";
}*/

//constructor dengan parameter
public function __construct($nama, $harga, $pengarang, $penerbit){
	$this->nama = $nama;
	$this->harga = $harga;
	$this->pengarang = $pengarang;
	$this->penerbit = $penerbit;
}

public function getBuku(){
	//fungsi $this untuk mengambil isi dari properti 
	// dari class yg bersangkutan ketika dibuat instance
	return "Buku $this->nama, Harga $this->harga";
}

}
//set value properti objek dari constructor
$buku2 = new Buku("CSS",20000,"Senong","Media");
$buku3 = new Buku("PHP",10000,"Doni","Media");

echo "Buku : $buku2->nama, $buku2->pengarang";
echo "<br>";
//manggil method
echo $buku2->getBuku();
echo "<br>";
//simbol titik untuk menggabungkan 
echo "Ini adalah " . $buku3->getBuku();

 ?>