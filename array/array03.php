<?php
//array 2 dimensi (setiap menambah 1 array kedalam array lain berarti menambah 1 dimensi)
$siswa = [
    "nama" => "Ahmad Gedhang",
    "kelas" => 11,
    "alamat" => [
        "desa" => "dolopo, ",
        "kec" => "dolopo, ",
        "kab" => "madiun"
    ]
];
echo $siswa["nama"]."\n";
echo $siswa["kelas"]."\n";
echo $siswa["alamat"]["desa"];
echo $siswa["alamat"]["kec"];
echo $siswa["alamat"]["kab"];
?>