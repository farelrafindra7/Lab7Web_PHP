<?php
// Membuat array daftar mahasiswa
$mahasiswa = [
    "Alya",
    "Bima",
    "Citra",
    "Doni",
    "Rizky",
    "Budi",
    "Ahmad"
];

// Menampilkan daftar mahasiswa
echo "<h3>Daftar Mahasiswa</h3>";
echo "<ol>";

foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}

echo "</ol>";
?>