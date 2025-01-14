<?php
$nama = "Dono";//variabel global

function sapa(){
    $orang = "Sehat";//variabel local
    echo $orang;
}

sapa();
echo $nama;
?>