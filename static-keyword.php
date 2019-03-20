<?php

/*
	Static Keyword
	+ Kita bisa mengakses property dan method dalam konteks class
	+ kita bisa mengakses property dan method dalam sebuha class tanpa melakukan instansiasi dari class tersebut

	Class merupakan template dari object 
	untuk apa static keyword ?
	- Member (Property & method) yang terkait dengan class, bukan dengan object
	- Nilai static akan selalu tetap meskipun object di instansiasi berulang kali
	- Membuat kode menjadi procedural
	- Biasanya digunakan untuk membuat fungsi bantuan / helper
	- Atau digunakan di class - class utility pada framework

*/

class ContohStatic {
	public static $angka = 1;

	public static function halo() {
		return "Halo " . self::$angka++ . "x";
	}
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();