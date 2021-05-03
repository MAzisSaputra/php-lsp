<?php 
session_start();
require('../../app/app.php');
$id = $_GET["id"];


if(hapusBarang($id) > 0){
    echo "<script>alert('Barang telah dihapus!'); location='index.php';</script>";
}
?>