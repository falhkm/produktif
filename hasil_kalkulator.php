<?php include("kalkulator.php")?>
<?php
$angka1 = 4;
$angka2 = 3;
$angkadijumlahkan = new kalkulator($angka1,$angka2);
$hasil = $angkadijumlahkan->get_kalkulator();
echo"hasil pejumlahan : ".$hasil;

?>  