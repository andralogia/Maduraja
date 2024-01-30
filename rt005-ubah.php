<?php
    include "koneksi.php";
    // var_dump($_POST);die;

    if (isset($_POST['Simpan'])){
        $id= $_POST['id'];
        $Nama= $_POST['Nama'];
        $Tugas= $_POST['Tugas'];
        $Rumah= $_POST['Rumah'];
        $Regu= $_POST['Regu'];
        $RT= $_POST['RT'];
        
        $sql = "UPDATE rt005 SET Nama='$Nama',Tugas='$Tugas', Rumah='$Rumah', Regu='$Regu', RT='$RT' WHERE id='$id'";

        //Cek Apakah Proses Simpan Berhasil
        if (mysqli_query ($koneksi,$sql)){
        //Jika Behasil, Redirect ke contoh.php
            header('location:rt005-data.php');
        }else {
            //Jika Tidak Berhasil
            echo "Oupss...Maaf Proses Penyimpanan Gagal";
        } 
    }
?>