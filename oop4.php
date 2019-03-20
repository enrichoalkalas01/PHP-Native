<?php

/*
	Object Type
*/

class Produk {

	public 	$judul, 
			$penulis,
			$penerbit,
			$harga;

	// Construct akan secara otomatis dijalankan
	// Construct akan menerima parameter" dari property class
	public function __construct($judul, $penulis, $penerbit, $harga) {
		$this->judul = "$judul";
		$this->penulis = "$penulis";
		$this->penerbit = "$penerbit";
		$this->harga = "$harga";
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}


class CetakInfoProduk {
	public function Cetak( Produk $produk ) {
		// $str = $produk->judul . " | " . $produk->getLabel(). " ( Rp. " . $produk->harga . " ) ";
		$str = "{$produk->judul} | {$produk->getLabel()} ( Rp. {$produk->harga} )";
		return $str;
	}
}

$produk1 = new Produk("Naruto","Masashi Kisimoto", "Shonen Jump", 35000);
$produk2 = new Produk("Uncharted","Neil Druckman", "Sony Computer", 78000);

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->Cetak($produk1);