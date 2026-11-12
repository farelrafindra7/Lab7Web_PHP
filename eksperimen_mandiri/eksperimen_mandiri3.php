<?php
function formatRupiah($harga) {
    return "Rp" . number_format($harga, 0, ',', '.');
}

$namaBarang = "Keyboard";
$hargaBarang = 150000;

echo "<h2>Eksperimen 3: Format Rupiah</h2>";
echo "Nama Barang: " . htmlspecialchars($namaBarang) . "<br>";
echo "Harga Barang: " . formatRupiah($hargaBarang);
?>