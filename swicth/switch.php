<?php
echo "password sek...!!! :";
$kode = trim(fgets(STDIN));

switch($kode){
    case 1:
        echo "Selamat datang admin";
        break;
    case 2:
        echo "Selamat datang user";
        break;
    case 3:
        echo "Selamat datang tamu";
        break;
    default:
        echo "Anda siapa...???";
        break;
}
?>