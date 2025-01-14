<?php
function antrian(){
    static $a=1;
    echo $a.PHP_EOL;
    $a++;
}
antrian();
antrian();
antrian();
antrian();
?>