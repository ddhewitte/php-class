<?php


	class kendaraan
	{
		var $jenis;
		var $warna;
	
		function  __construct( $val )
		{
			$this->jenis = 'Kendaraan : '. $val;
			echo $this->jenis;
		}
		
		function cetak()
		{
			echo ' Berwarna '. $this->warna;
		}
	}

	// mengakses constructor dengan parsing
	$mobil_merah = new kendaraan('Roda Empat');
	///menginput proprties
	$mobil_merah->warna  = 'Merah Maroon';
	//cetak method
	echo $mobil_merah->cetak();

	echo '<p>/* dalam script dijelaskan bentuk sederhana class dan objeknya dan cara mengakses class dgn constructor dan memparsing nya lalu berikutnnya mengakses objek
	hasil parsing properties*/</p>';
?>
	 
	 