<?php

/*
	Studi Kasus

	$this adalah instance yang bersangkutan
*/

class Produk {

	public 	$judul, 
			$penulis,
			$penerbit,
			$harga,
			$jumlahHalaman,
			$waktuMain;
			// $type;

	public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman, $waktuMain) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jumlahHalaman = $jumlahHalaman;
		$this->waktuMain = $waktuMain;
		// $this->type = $type;
	} 

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	// public function getInfoProduk() {
	// 	// Komik  - {$this->jumlahHalaman} Halaman.
	// 	$str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

	// 	return $str;
	// }
}

class Komik extends Produk {
	public function getInfoKomik() {
		$str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jumlahHalaman} Halaman.";

		return $str;				
	}
}

class Game extends Produk {
	public function getInfoGame() {
		$str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";

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

$produk1 = new Komik("Naruto","Masashi Kisimoto", "Shonen Jump", 35000, 100, 0, "Komik");
$produk2 = new Game("Uncharted","Neil Druckman", "Sony Computer", 78000, 0, 50, "Game");

// Komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) - 50Jam.
// Perbedaan kebutuhannya ada di kebutuhan detailnya yaitu halaman dan jam

echo $produk1->getInfoKomik(); 
echo "<br>";
echo $produk2->getInfoGame();