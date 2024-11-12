<?php
// Memeriksa apakah form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $nomor = htmlspecialchars($_POST['nomor']);
    $jumlah = htmlspecialchars($_POST['jumlah']);

    // Menampilkan pesan konfirmasi
    echo "<div style='text-align:center; font-family: Arial, sans-serif; margin-top: 50px;'>";
    echo "<h2>Detail Pemesanan</h2>";
    echo "<p>Nama: " . $nama . "</p>";
    echo "<p>Nomor Telepon: " . $nomor . "</p>";
    echo "<p>Jumlah Orang: " . $jumlah . "</p>";
    echo "<a href='index.html' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 4px;'>Kembali ke Form</a>";
    echo "</div>";
} else {
    // Jika file ini diakses langsung, alihkan ke halaman form
    header("Location: pemesanan.html");
    exit();
}
?>
