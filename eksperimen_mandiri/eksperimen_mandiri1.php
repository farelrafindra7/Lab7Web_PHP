<?php
$nama = "Siti";
$tugas = 92;
$uts = 65;
$uas = 87;

$rataRata = ($tugas + $uts + $uas) / 3;

echo "<h2>Eksperimen 1: Menghitung Rata-Rata</h2>";
echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Nilai Tugas: " . $tugas . "<br>";
echo "Nilai UTS: " . $uts . "<br>";
echo "Nilai UAS: " . $uas . "<br>";
echo "Rata-rata: " . number_format($rataRata, 2);
?>