<?php
include "koneksi.php";
$id= $_GET ['id'];
$data= mysqli_query($koneksi, "DELETE FROM rt005 where id='$id'");

if ($data){
    header('location:rt005-data.php');
}else{
    echo "Maaf Proses Mengubah Data Tidak Berhasil";
}
?>