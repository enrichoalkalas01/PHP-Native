<?php

/*
	Overriding
*/

class Produk {

	public 	$judul, 
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul, $penulis, $penerbit, $harga) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	} 

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}

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