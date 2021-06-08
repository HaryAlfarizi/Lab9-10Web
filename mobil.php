<?php 
/**
* Program sederhana pendefinisan classs dan pemangilan class
**/

class mobil
{
	private $warna;
	private $merk;
	private $harga;
		
	public function __construct()
	{
		$this ->warna ="Biru";
		$this ->merk ="BMW";
		$this ->harga ="10000000";
	}
	public function gantiwarna ($warnabaru)
	{
		$this ->warna = $warnabaru;
	}
	public function tampilwarna()
	{
		echo "Warna mobil : " . $this->warna;
	}
}

// membuat objek mobil 
$a = new Mobil();
$b = new Mobil();

// memanggil objek
echo "<b>Mobil pertama</b><br>";
$a->tampilwarna();
echo "<br>Mobil pertama ganti warna<br>";
$a->gantiwarna("Merah");
$a->tampilwarna();

// memanggil objek 
echo "<br><br>Mobil kedua</br></br>";
$b->gantiwarna("Hijau");
$b->tampilwarna();
?>