<?php

/* 
	Inheritance
	- Menciptakan Hierarki antar kelas ( Parent & Child )
	- Child Class, mewarisi semua properti dan method dari parent-nya (yang visible)
	- Child Class, Memperluas (extends) fungsionalitas dari parent-nya

*/

class Produk {

	public 	$judul, 
			$penulis,
			$penerbit,
			$harga,
			$jumlahHalaman,
			$waktuMain,
			$type;

	// Construct akan secara otomatis dijalankan
	// Construct akan menerima parameter" dari property class
	public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman, $waktuMain, $type) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jumlahHalaman = $jumlahHalaman;
		$this->waktuMain = $waktuMain;
		$this->type = $type;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		// Komik  - {$this->jumlahHalaman} Halaman.
		$str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		if ($this->type == "Komik") {
			$str .= " - {$this->jumlahHalaman} Halaman.";
		} else if ($this->type == "Game") {
			$str .= " - {$this->waktuMain} Jam.";
		}

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

$produk1 = new Produk("Naruto","Masashi Kisimoto", "Shonen Jump", 35000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted","Neil Druckman", "Sony Computer", 78000, 0, 50, "Game");

// Komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 Halaman.
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 250000) - 50Jam.
// Perbedaan kebutuhannya ada di kebutuhan detailnya yaitu halaman dan jam

echo $produk2->getInfoLengkap();