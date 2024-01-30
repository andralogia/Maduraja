<?php
include "koneksi.php";
$id= $_GET ['id'];
$data= mysqli_query($koneksi, "DELETE FROM informasi where id='$id'");

if ($data){
    header('location:info2-data.php');
}else{
    echo "Maaf Proses Mengubah Data Tidak Berhasil";
}
?>