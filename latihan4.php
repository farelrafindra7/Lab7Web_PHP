<?php
// Function untuk menghitung diskon
function hitungDiskon($harga, $persen) {
    $potongan = $harga * ($persen / 100);
    return $harga - $potongan;
}

// Function untuk menghitung luas persegi panjang
function hitungLuas($panjang, $lebar) {
    return $panjang * $lebar;
}

// Menghitung harga setelah diskon
$hargaAkhir = hitungDiskon(150000, 10);

// Menghitung luas persegi panjang
$luas = hitungLuas(10, 5);

// Menampilkan hasil
echo "<h3>Program Function PHP</h3>";

echo "Harga awal: Rp" . number_format(150000, 0, ",", ".") . "<br>";
echo "Diskon: 10%<br>";
echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".") . "<br><br>";

echo "Panjang persegi panjang: 10 cm<br>";
echo "Lebar persegi panjang: 5 cm<br>";
echo "Luas persegi panjang: " . $luas . " cm²";
?>