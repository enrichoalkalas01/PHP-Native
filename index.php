<?php

// Jualan
// Komik
// Game

class Produk {

	public 	$judul = "judul",
			$penulis = "penulis" ,
			$penerbit = "penerbit",
			$harga = 0 ;

	public function sayHello() {
		return " Hello World ";
	}

}


// $ = keyword or bikin variable
$produk1 = new Produk(); // ini adalah instance
$produk1 -> judul = "One Piece"; // Penimpaan judul menjadi One Piece
var_dump($produk1);

$produk2 = new Produk();
$produk2 -> tambahProperty = "Ketambah"; // Akan secara otomatis menambah variable

echo "Print : " . $produk2 -> penulis . "," . $produk2 -> penerbit ;

echo "<br>";

echo $produk3 -> sayHello();

?>


<!-- 
	 Property
	 + Mempresentasikan data / keadaan dari sebuah object
	 + Variable yang ada di dalam object 
	 + Sama seperti variable di dalam PHP, dengan visibility di depannya

	 Property
	 - Nama
	 - Merk
	 - Warna
	 - Kecepatan Maksimal
	 - Jumlah Penumpang
	 - Dll

	 Method
	 + Mempresentasikan prilaku dari sebuah object
	 + Function yang ada didalam object
	 + Sama seperti function di dalam PHP, ditambah dengan visibility di depannya

	 Method
	 Method Adalah Perilaku Dari 
	 - Tambah Kecepatan
	 - Kurangi Kecepatan
	 - Ganti Transmisi
	 - Belok Kiri
	 - Belok Kanan
	
 -->