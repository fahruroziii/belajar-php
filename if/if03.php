<?php
//memasukkan inputan
echo "Masukkan nama : ";
$nama = trim(fgets(STDIN));
echo "Masukkan nilai : ";
$nilai = trim(fgets(STDIN));

if($nilai>=90) {
    echo "Selamat $nama, anda LULUS 😎";
}else{
    echo "maaf $nama, coba lagi 😪";
}
?>