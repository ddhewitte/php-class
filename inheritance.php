<?php
	
class kendaraan{
	
	public $motor = 'roda dua';
	public $mobil = 'roda empat';
	
	function rodaDua()
	{
		return 'jenis kendaraan :'. $this->motor;
	}
	
	function rodaEmpat()
	{
		return 'jenis kendaraan :'. $this->mobil;
	}
		
}


class avanza extends kendaraan{
	
	function cetakAvanza()
	{
		return 'Avanza adalah '. $this->rodaEmpat();
	}
}

$object1 = new avanza();


echo '<h2>inheritance (pewarisan)</h2>';
echo $object1->rodaDua().'<br>';
echo $object1->rodaEmpat().'<br>';
echo $object1->cetakAvanza().'<br>';
echo '<p>/* inheritance itu adalah pewarisan dari class induk ke class turunan, properti dn method bisa diakses semua, dlam contoh script class avanza sbg class turunan bisa mengakses seluruh isi class kendaraan sbg class induknya*/</p>';
echo '<hr>';

?>