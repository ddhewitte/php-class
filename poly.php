<?php

//interface
interface  kendaraan{
	public function methodKendaraan();
}


// buat abstract class
abstract class bermesin{
	abstract public function methodBermesin();
}



//class avanza	
class avanza extends bermesin implements kendaraan
{
	
	public function methodKendaraan()
	{
		return 'Avanza adalah kendaraan roda empat ';
	}
	
	public function methodBermesin()
	{
		return 'Avanza bermesin 4 silinder ';
	}
}


//class datsun
class datsun extends bermesin implements kendaraan
{
	
	public function methodKendaraan()
	{
		return 'Datsun adalah kendaraan roda empat juga ';
	}
	
	public function methodBermesin()
	{
		return 'Datsun bermesin 3 silinder ';
	}
}


$obj1 = new avanza();
$obj2 = new datsun();

echo $obj1->methodKendaraan(); 
echo $obj1->methodBermesin(); 

echo '<br>';
echo $obj2->methodKendaraan(); 
echo $obj2->methodBermesin();

echo '<p>/* poly morfisme digunakan untuk mewariskan (inheritance) yang sama pada class turunan tapi memiliki fungsi yg beda2 pd class turunan tsb */</p>';


?>