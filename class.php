<?php

class server{
    
    public function vps()
    {
        echo "Jenis Saya adalah VPS Server <br>";
    }
    
    public function dedicated()
    {
        echo "Jenis saya adalah dedicated <br>";
    }

}

$pilihan_server = new server();   
$pilihan_server->vps(); //cetak vps
$pilihan_server->dedicated(); //cetak dedicated


?>