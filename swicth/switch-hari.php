<?php
$hari = date ("w");
switch($hari){
    case 0: echo "ahad"; break;
    case 1: echo "senin"; break;
    case 2: echo "selasa"; break;
    case 3: echo "rabu"; break;
    case 4: echo "kamis"; break;
    case 5: echo "jum'at"; break;
    case 6: echo "sabtu"; break;
}
?>