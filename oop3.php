<?php

/*

	Constructor
	Constructor adalah sebuah method yang spesial / khusus yang ada didalam sebuah class
	Constructor adalah method yang otomatis dijalankan ketika sebuah class di instansiasi / dibuat object nya

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

$product1 = new Produk("Naruto","Masashi Kisimoto", "Shonen Jump", 35000);
$product2 = new Produk("Uncharted","Neil Druckman", "Sony Computer", 78000);

echo "Komik : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();