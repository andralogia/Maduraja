<?php
include "koneksi.php";
$id= $_GET ['id'];
$data= mysqli_query($koneksi, "DELETE FROM rt004 where id='$id'");

if ($data){
    header('location:rt004-data.php');
}else{
    echo "Maaf Proses Mengubah Data Tidak Berhasil";
}
?>
