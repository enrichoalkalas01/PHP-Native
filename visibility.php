<?php

/* 
	Visibility / Access Modofier
	+ Konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah object
	+ Ada 3 keyword visibility : public, protected, dan private

	Public = Dapat Diguanakan dimana saja, bahkan diluar kelas
	Protected = Hanya dapat digunakan didalam sebuah class beserta turunannya
	Private = Hanya dapat digunakan didalam sebuah class tertentu saja

	Kenapa kita perlu ??
	1. Hanya memperlihatkan aspek dari class yang dibutuhkan oleh client
	2. Menentukan kebutuhan yang jelas untuk object
	3. Memberikan kendali pada kode kita untuk menghindari BUG
*/

// Case

class Produk {

	public 		$judul, 
				$penulis,
				$penerbit;
	private		$diskon = 0;

	// protected 	$harga;
	// Property ini hanya bisa di akses di class ini saja beserta turunanya saja

	private 	$harga;
	// Property ini hanya bisa di akses di class ini saja tidak dengan yang lain

	public function __construct($judul, $penulis, $penerbit, $harga) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	} 

	public function setDiskon($diskon) {
		$this->diskon = $diskon; 
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100);
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}

// CHild CLass
class Komik extends Produk {
	public 	$jumlahHalaman;

	public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jumlahHalaman = $jumlahHalaman;
	}

	public function getInfoKomik() {
		$str = "Komik : ". parent::getInfoProduk() ." - {$this->jumlahHalaman} Halaman.";

		return $str;				
	}
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain) {
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $waktuMain;
	}

	// Ini Hanya Untuk Visibility Protected 
	// public function getHarga() {
	// 	return $this->harga;
	// }

	public function getInfoGame() {
		$str = "Game : ". parent::getInfoProduk() ." - {$this->waktuMain} Jam.";

		return $str;
	}
}

class CetakInfoProduk {
	public function Cetak( Produk $produk ) {
		// $str = $produk->judul . " | " . $produk->getLabel(). " ( Rp. " . $produk->harga . " ) ";
		$str = "{$produk->judul} | {$produk->getLabel()} ( Rp. {$produk->harga} )";
		return $str;
	}
}

$produk1 = new Komik("Naruto","Masashi Kisimoto", "Shonen Jump", 35000, 100);
$produk2 = new Game("Uncharted","Neil Druckman", "Sony Computer", 78000, 50);

echo $produk1->getInfoKomik(); 
echo "<br>";
echo $produk2->getInfoGame();
echo "<hr>";

// echo $produk2->harga = 5000; //Tidak Akan bisa dirubah dari luar class
$produk2->setDiskon(50);
echo $produk2->getHarga();