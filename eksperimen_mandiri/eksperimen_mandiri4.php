<?php
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST["nim"];

    if (ctype_digit($nim) && strlen($nim) == 10) {
        $pesan = "NIM valid: " . htmlspecialchars($nim);
    } else {
        $pesan = "NIM tidak valid. NIM harus terdiri dari 10 angka.";
    }
}
?>

<h2>Eksperimen 4: Validasi NIM</h2>

<form method="POST">
    <label>Masukkan NIM:</label>
    <input type="text" name="nim" maxlength="10" required>
    <button type="submit">Periksa NIM</button>
</form>

<p><?php echo $pesan; ?></p>