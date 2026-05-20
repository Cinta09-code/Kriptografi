<?php

$jamAwal = 8;
$durasi = 50;
$m = 24;
$jamAkhir = ($jamAwal + $durasi) % $m;

echo "Jam Awal : ". $jamAwal. "<br>";
echo "Durasi : ". $durasi. "<br>";
echo "Format : ". $m. "jam <br>";
echo "Jam Akhir : ". $jamAkhir. "<br>";
?>