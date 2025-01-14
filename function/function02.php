<?php
function sapa($nama){
    echo "$nama,inpo...".PHP_EOL;
}
echo "Masukkan Nama :";
$nama = trim(fgets(STDIN));
sapa ($nama);
?>