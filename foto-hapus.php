<?php
include "koneksi.php";

// Cek apakah parameter ID tersedia
if(isset($_GET['id'])){
    $id = $_GET['id'];

    // Query SQL untuk mendapatkan informasi file foto sebelum dihapus
    $sql = "SELECT foto FROM tb_foto WHERE id = '$id'";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
    $foto = $row['foto'];

    // Hapus file foto dari direktori
    if (unlink($foto)) {
        // File foto dihapus, lanjutkan proses hapus data dari tabel
        $sql_delete = "DELETE FROM tb_foto WHERE id = '$id'";
        
        // Jalankan query hapus data dari tabel
        if (mysqli_query($koneksi, $sql_delete)) {
            // Jika berhasil, redirect ke halaman yang diinginkan
            header('location: foto-data.php');
        } else {
            // Jika terjadi kesalahan, tampilkan pesan error
            echo "Oupss... Maaf, terjadi kesalahan saat menghapus data.";
        }
    } else {
        // Jika gagal menghapus file foto, tampilkan pesan error
        echo "Oupss... Maaf, terjadi kesalahan saat menghapus file foto.";
    }
} else {
    // Jika parameter ID tidak tersedia, tampilkan pesan error
    echo "Oupss... Maaf, ID tidak tersedia.";
}
?>
