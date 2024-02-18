<?php
    function findlarge($angka1,$angka2) {
        if ($angka1>$angka2) {
            return $angka1;
        } elseif ($angka2>$angka1) {
            return $angka2;
        }
        
    }
$angka1 = 100;
$angka2 = 180;

$hasil = findlarge($angka1,$angka2);
echo "Nilai yang paling besar adalah = ".$hasil; 

?>