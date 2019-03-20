<?php 

// Property & Method

/*
	Property
	- Mempresentasikan Data / keadaan dari sebuah object
	- Variable yang ada di dalam object (member variable)
	- Sama dengan variable di PHP, ditambah dengan visibility di depannya
	- Keyword Visibility ada 3
		* public, private, protected

	Method
	- Memperesentasikan prilaku dari sebuah object
	- Function yang ada didalam object
	- Sama seperti di dalam PHP, ditambah dengan visibility di depannya

	Illustrasi

	Property
	- Nama, Merek, Warna, KecepatanMax, Min, Dll

	Method ( Apa yang bisa dilakukan ini )
	- jalan, tambahKecepatan, belokKiri, belokKanan, Dll

*/

class Produk {
	// Cara mengisi property ada 3
	// 1. Isi dengan default
	// 2. Timpa isi nya
	// 
	public 	$judul = "judul", 
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0; 

	// Method
	// public function sayHello() {
	// 	return "Hello World";	
	// }

	public function getLabel() {
		
		// $this adalah untuk mengambil property yang ada didalam class yang bersangkutan
		return "$this->penulis, $this->penerbit"; // Or return $this->penulis;
	}
}

// $produk1 = new Produk();
// $produk1 -> judul = "Naruto"; // Timpa isi dari judul dari default menjadi Naruto
// var_dump($produk1);

// echo "<br>";

// $produk2 = new Produk();
// $produk2 -> judul = "enchanted";
// $produk2 -> tambahProperty = "tester"; // Otomatis akan ditambahkan property baru
// var_dump($produk2);

$produk3 = new Produk();
$produk3 -> judul = "Naruto";
$produk3 -> penulis = "Masashi Kisimoto";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 35000;

// var_dump($produk3);

// echo "<br><br>";
echo "Komik : " . $produk3 -> judul . ", " . $produk3 -> penerbit;

echo "<br><br>";

echo $produk3 -> getLabel();
