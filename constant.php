<?php

/*
	constanta
	constanta nilai nya tidak akan berubah

	cara membuat constanta
	define()
	const
	
	Magic Constant :
	1. __LINE__
	2. __FILE__
	3. __DIR__
	4. __FUNCTION__
	5. __CLASS__
	6. __TRAIT__
	7. __METHOD__
	8. __NAMESPACE__

*/

// define(name, value);

define('NAMA', 'Enricho Alkalas');
echo NAMA;

echo "<br>";
// const name = value
const UMUR = 32;
echo UMUR;

// Define tidak bisa dimasukan ke dalam class, hanya bisa sebagai constanta global
// Sedangkan const ini bisa dimasukan ke dalam class, sehingga dapat digunakan sebagai OOP

class Coba {
	const nama = 'Enricho Alkalas';
}

echo "<br>";
echo Coba::nama;

echo "<hr>";

echo __LINE__; // Line Ke echo
echo "<br>";
echo __FILE__; // Alamat File
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;

