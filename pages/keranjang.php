<?php
session_start();
require("../app/app.php");

if(!isset($_SESSION["user"])){
    header("Location: masuk.php");
}

if(empty($_SESSION["keranjang"]) || !isset($_SESSION["keranjang"])){
    echo "<script>alert('Keranjang masih kosong bro!'); location='index.php';</script>";
}

?>
<?php require('../partials/header.php'); ?>
<div class="container">
    <h2>Keranjang</h2>
    <?php 
    $totalBeli = 0;
    foreach($_SESSION["keranjang"] as $barangId => $hasil):
        $data = queryData("SELECT * FROM barang WHERE id_barang  = '$barangId'")[0];
        $totalHarga = $data["harga_satuan"] * $hasil;
        
        ?>
    <div class="card-keranjang">
        <div style="display: flex; justify-content: space-between;">
        <h3>Nama Barang: <?= $data["nama_barang"];?></h3>
        <a href="hapus-barang-keranjang.php?id=<?=$data["id_barang"];?>" style="text-decoration: none; color: white;">X</a>
        </div>
        <h3>Jenis Barang: <?= $data["jenis_barang"];?></h3>
        <h3>Harga: Rp <?= number_format($data["harga_satuan"]); ?> X <?= $hasil?></h3>
        <p>Total barang yang dibeli: <?= $hasil;?></p>
    </div>

    <?php $totalBeli += $totalHarga;?>
    <?php endforeach;?>
    <p>Total Yang harus anda bayar: Rp <?= number_format($totalBeli); ?></p>
    <a href="checkout.php">Checkout</a>
</div>
<?php require('../partials/footer.php'); ?>