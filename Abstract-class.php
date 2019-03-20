<?php

/*
	Konsep Class Abstract
	+ Sebuah kelas yang tidak dapat di instansiasi
	+ Kelas Abstrak
	+ Mendefinisikan interface untuk kelas lain yang menjadi turunannya
	+ Berperan sebagai kerangka dasar untuk kelas turunannya
	+ Memiliki minimal 1 method abstrak
	+ Digunakan dalam pewarisan / inheritance untuk memaksakan implementasi method abstrak yang sama untuk semua kelas turunannya
	+ Semua kelas turunannya
*/

// Case
// class Buah {
// 	private $warna;

// 	public function makan() {
// 		// Kunyah
// 		// Nyam Nyam Nyam
// 	}

// 	public function setWarna($warna) {
// 		$this->warna = $warna;
// 	}
// }

// class Apel extends Buah {
// 	public function makan() {
// 		// Kunyah
// 		// Sampai Bagian Tengah
// 	}
// }

// class Jeruk extends Buah {
// 	public function makan() {
// 		// Kupas
// 		// Kunyah
// 	}
// }

// $apel = new Apel();
// $apel->makan();

abstract class Buah {
	private $warna;

	abstract public function makan();

	public function setWarna($warna) {
		$this->warna = $warna;
	}
}

