<?php
include('koneksi.php');

$nama=$_POST['nama'];
$harga=$_POST['harga'];
$satuan=$_POST['satuan'];
$kategori=$_POST['kategori'];
$url=$_POST['url'];
$stok=$_POST['stok'];

$result = $conn->exec("INSERT INTO `input` (`kode`, `nama`, `harga`, `satuan`, `kategori`, `url`, `stok`) VALUES 
(NULL, '$nama', '$harga', '$satuan', '$kategori', '$url', '$stok');");

echo $result;

if ($result==TRUE) {
    echo "Game Saved";
    include "tampil.php";
}else {
    echo "Task Failed Success";
}
?>
