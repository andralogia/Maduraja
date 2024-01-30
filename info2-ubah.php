<?php
    include "koneksi.php";
    // var_dump($_POST);die;

    if (isset($_POST['Simpan'])){
        $id= $_POST['id'];
        $pengumuman= $_POST['pengumuman'];

        
        $sql = "UPDATE informasi SET pengumuman='$pengumuman' WHERE id='$id'";

        //Cek Apakah Proses Simpan Berhasil
        if (mysqli_query ($koneksi,$sql)){
        //Jika Behasil, Redirect ke contoh.php
            header('location:info2-data.php');
        }else {
            //Jika Tidak Berhasil
            echo "Oupss...Maaf Proses Penyimpanan Gagal";
        } 
    }
?>
