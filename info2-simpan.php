<?php
include "koneksi.php";

if (isset($_POST['Simpan'])) {
    $Pengumuman = $_POST['pengumuman'];
    $sql = "INSERT INTO informasi (pengumuman) VALUES ('$Pengumuman')";

    // Cek Apakah Proses Simpan Berhasil
    if (mysqli_query($koneksi, $sql)) {
        // Jika Berhasil, Redirect ke contoh.php
        header('location:info2-data.php');
    } else {
        // Jika Tidak Berhasil
        echo "Oupss...Maaf Proses Penyimpanan Gagal";
    }
}
?>
