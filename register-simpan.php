<?php
    include "koneksi.php";

    if (isset($_POST['Simpan'])){
        $Nama= $_POST['nama'];
        $Username= $_POST['username'];
        $Password= $_POST['password'];
        $RT= $_POST['level'];
        
        $sql = "INSERT INTO pengguna(nama,username,password,level)VALUES('$Nama','$Username','$Password','$RT')";

        //Cek Apakah Proses Simpan Berhasil
        if (mysqli_query ($koneksi,$sql)){
        //Jika Behasil, Redirect ke contoh.php
            header('location:register-data.php');
        }else {
            //Jika Tidak Berhasil
            echo "Oupss...Maaf Proses Penyimpanan Gagal";
        } 
    }
?>
