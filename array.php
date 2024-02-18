<?php
$angka1 = [[1,1,1], [2,2,2], [3,3,3]];
$angka2 = [[3,3,3], [2,2,2], [1,1,1]];

for($i = 0; $i < count($angka1); $i++):
    for($j = 0; $j < count($angka1[$i]); $j++):
        echo $angka1[$i][$j] + $angka2[$i][$j];
        echo ",";
        endfor;
        echo"<br>";
endfor;
?>