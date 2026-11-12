<?php
$daftarNama = ["Alya", "Bima", "Citra", "Doni", "Eka"];
?>

<h2>Eksperimen 2: Pencarian Nama</h2>

<form method="GET">
    <input type="text" name="cari" placeholder="Masukkan nama">
    <button type="submit">Cari</button>
</form>

<?php
if (isset($_GET['cari'])) {
    $kataKunci = $_GET['cari'];
    $ditemukan = false;

    foreach ($daftarNama as $nama) {
        if (stripos($nama, $kataKunci) !== false) {
            echo "<p>Nama ditemukan: " . htmlspecialchars($nama) . "</p>";
            $ditemukan = true;
        }
    }

    if (!$ditemukan) {
        echo "<p>Nama tidak ditemukan.</p>";
    }
}
?>