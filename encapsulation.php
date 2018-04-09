<?php

/* contoh public */

class kendaraan{
	public $mobil;
	
	function cetak()
	{
		return 'mobil '.$this->mobil.' adalah jenis kendaraan roda empat';
	}
		
}

$object1 = new kendaraan();
$object1->mobil = 'Avanza';

echo '<h2>public </h2>';
echo $object1->cetak();
echo '<p>/* dalam script dijelaskan bahwa method public bisa diakses di luar class*/</p>';
echo '<hr>';
 

/* contoh protected*/

class kendaraanku{
	protected $mobil = 'avanza';
	
	function cetak()
	{
		return 'mobil '.$this->mobil.' adalah jenis kendaraan roda empat';
	}
		
}

$object2 = new kendaraanku();

echo '<h2>protected</h2>';
echo $object2->cetak();
echo '<p>/* dalam script dijelaskan bahwa metode protected hanya bisa diakses olehh class tsb sendiri tidak bs diinput seperti di method public*/</p>';
echo '<p>/* dan metode ini tetap bisa diakses meski dari class turunan / inheritance*/</p>';
echo '<hr>';


/* contoh private*/

class kendaraankue{
	private $mobil = 'avanza';
	
	function cetak()
	{
		return 'mobil '.$this->mobil.' adalah jenis kendaraan roda empat';
	}
		
}

$object3 = new kendaraankue();

echo '<h2>private</h2>';
echo $object3->cetak();
echo '<p>/* dalam script dijelaskan bahwa metode ini hanya bisa diakses olehh class tsb sendiri */</p>';
echo '<p>/* dan yang berbeda dgn protected metode ini tidak bisa diakses meski dari class turunan / inheritance , hrs class itu sendiri*/</p>';
echo '<hr>';
exit;
 

?>