<?php
include "koneksi.php";
$id= $_GET ['id'];
$data= mysqli_query($koneksi, "DELETE FROM pengguna where id='$id'");

if ($data){
    header('location:register-data.php');
}else{
    echo "Maaf Proses Mengubah Data Tidak Berhasil";
}
?>
