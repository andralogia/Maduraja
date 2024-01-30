<?php
    include "koneksi.php";

    if (isset($_POST['Simpan'])){
        $Nama= $_POST['Nama'];
        $Tugas= $_POST['Tugas'];
            if($Tugas == "Anggota"){
                echo "Anggota";
            }else {
                echo "Ketua";
            }
        $Rumah= $_POST['Rumah'];
            if($Rumah == "Sewa"){
                echo "Sewa";
            }else {
                echo "Pribadi";
            }
        $Regu= $_POST['Regu'];
        $RT= $_POST['RT'];
            if($RT == "004"){
                echo "OO4";
            }
        
        $sql = "INSERT INTO rt004(Nama,Tugas,Rumah,Regu,RT)VALUES('$Nama','$Tugas','$Rumah','$Regu','$RT')";

        //Cek Apakah Proses Simpan Berhasil
        if (mysqli_query ($koneksi,$sql)){
        //Jika Behasil, Redirect ke contoh.php
            header('location:rt004-data.php');
        }else {
            //Jika Tidak Berhasil
            echo "Oupss...Maaf Proses Penyimpanan Gagal";
        } 
    }
?>
