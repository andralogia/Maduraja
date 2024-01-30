<?php
include "koneksi.php";

if (isset($_POST['Simpan'])) {
    $Keterangan = $_POST['keterangan'];
    $Tanggal = $_POST['tanggal'];

    // Mendapatkan informasi file foto yang diupload
    $Foto = $_FILES['foto']['name'];
    $Foto_tmp = $_FILES['foto']['tmp_name'];
    $Foto_size = $_FILES['foto']['size'];
    $Foto_error = $_FILES['foto']['error'];

    // Cek apakah ada file foto yang diupload
    if ($Foto_error === UPLOAD_ERR_OK) {
        // Tentukan lokasi penyimpanan file foto
        $target_dir = "dokumentasi/foto/"; // Ganti dengan lokasi folder penyimpanan foto Anda
        $target_file = $target_dir . basename($Foto);

        // Pindahkan file foto dari temporary folder ke folder penyimpanan yang ditentukan
        if (move_uploaded_file($Foto_tmp, $target_file)) {
            // Ubah format tanggal dari input HTML
            $tanggalParts = explode('-', $Tanggal);
            $day = $tanggalParts[2];
            $month = $tanggalParts[1];
            $year = $tanggalParts[0];
            $Tanggal = $day . '-' . $month . '-' . $year;

            $sql = "INSERT INTO tb_foto (keterangan, tanggal, foto) VALUES ('$Keterangan', '$Tanggal', '$target_file')";

            // Cek Apakah Proses Simpan Berhasil
            if (mysqli_query($koneksi, $sql)) {
                // Jika Berhasil, Redirect ke contoh.php
                header('location:foto2-data.php');
            } else {
                // Jika Tidak Berhasil
                echo "Oupss...Maaf Proses Penyimpanan Gagal";
            }
        } else {
            echo "Oupss...Maaf, terjadi kesalahan saat mengunggah file foto.";
        }
    } else {
        echo "Oupss...Maaf, terjadi kesalahan saat mengunggah file foto.";
    }
}
?>
