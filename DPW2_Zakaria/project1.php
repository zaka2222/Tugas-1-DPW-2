<?php

include "animal.php";

class kerbau {
	var $amat;
	function Tidak_bisa_terbang() {
		// $amat-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $amat-> Moooak;

	}
}

$amat = new kerbau;
$amat->jumlah_kaki = 4;
echo "amat adalah kerbau <br>";
echo "Punya Kaki Sebanyak : ". $amat-> jumlah_kaki. "<br>";
echo "Tidak bisa terbang". "<br>";
echo "Suaranya : Moooak ". $amat->bersuara(). "<br>"; 

echo "<hr>";

class kambing {
	var $jojo;
	function Tidak_bisa_terbang() {
		// $jojo-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $jojo-> mbeekk;
	}
}


$jojo = new kambing;
$jojo->jumlah_kaki = 4;
echo "jojo adalah kambing <br>";
echo "Punya Kaki Sebanyak : ". $jojo-> jumlah_kaki. "<br>";
echo "Tidak Bisa Terbang". "<br>";
echo "Suaranya :mbeekk
 ". $jojo->bersuara(). "<br>";

echo "<hr>";

class Kucing {
	var $apin;
	function Tidak_bisa_terbang() {
		// $apin-> Tidak Bisa Terbang;
	}
	function bersuara(){
		// $apin-> Meoong;
	}

}

$apin = new Kucing;
$apin->jumlah_kaki = 4;
echo "apin adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ". $apin-> jumlah_kaki. "<br>";
echo "Tidak bisa terbang" . "<br>";
echo "Suaranya : Meoong". $apin->bersuara(). "<br>";

echo "<hr>";

class babi{
	var $ragil;
	function Tidak_bisa_terbang() {
		// $ragil->Tidak  Bisa Terbang;
	}
	function bersuara(){
		// $ragil;-> rokrokrok;
	}
}

$ragil = new babi;
$ragil->jumlah_kaki = 6;
echo "ragil adalah babi <br>";
echo "Punya Kaki Sebanyak : ". $ragil-> jumlah_kaki. "<br>";
echo " Tidak Bisa terbang". "<br>";
echo "Suaranya :rokrokrok". $ragil->bersuara(). "<br>";

echo "<hr>";
