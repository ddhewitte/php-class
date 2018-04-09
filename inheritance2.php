<?php
	
class kendaraan{
	
	public $motor = 'roda dua';
	public $mobil = 'roda empat';
	
	function __construct()
	{
		echo 'Ini adalah class kendaraan';
	}
	
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
	
	function rodaEmpat()
	{
		return 'ini adalah isi dari method name yang sama';
	}

	function getParentConstruct()
	{
		//akses class parent method
		return parent::__construct();
	}
	
	function getParentrodaEmpat()
	{
		//akses class parent method
		return parent::rodaEmpat();
	}
}

$object1 = new avanza();


echo '<h2>inheritance (pewarisan) dengan pemanggilan parent</h2>';

echo $object1->rodaEmpat().'<br>';//pemanggilan normal 
echo $object1->getParentConstruct().'<br>';//cntoh pemanggilan parent construct
echo $object1->getParentrodaEmpat().'<br>';//cntoh pemanggilan parent method

echo '<p>/* jika class turunan memiliki nama method yang sama dengan  class induk, maka method yg akan dipanggil adalah method pada class terakhir yaitu clas turunan
, untuk mmengakses method yang sama pada parent bisa dicoba dengan cara \'parent::\' (cek script) */</p>';
echo '<hr>';

?>