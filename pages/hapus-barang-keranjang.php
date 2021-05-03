<?php
session_start();

$id = $_GET["id"];

unset($_SESSION["keranjang"][$id]);

echo "<script>alert('Barang telah dihapus dari keranjang!'); location='keranjang.php';</script>;"

?>