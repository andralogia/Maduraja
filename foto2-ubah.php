<?php
include "koneksi.php";

if (isset($_POST['Simpan'])) {
    $id = $_POST['id'];
    $Keterangan = $_POST['keterangan'];
    $Tanggal = $_POST['tanggal'];

    // Query untuk mengupdate data foto
    $sql = "UPDATE tb_foto SET keterangan = '$Keterangan', tanggal = '$Tanggal' WHERE id = '$id'";

    // Eksekusi query
    if (mysqli_query($koneksi, $sql)) {
        // Jika Berhasil, Redirect ke foto-data.php
        header('location: foto2-data.php');
        exit(); // tambahkan exit() untuk menghentikan eksekusi script setelah redirect
    } else {
        // Jika Tidak Berhasil
        echo "Oupss...Maaf, Proses Pengubahan Gagal.";
    }
}
?>
