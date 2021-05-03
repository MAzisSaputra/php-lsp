<?php
require('../../app/app.php');
session_start();

$id = $_GET["id"];

$findOneBarang = queryData("SELECT * FROM barang WHERE id_barang = '$id'")[0];

?>

<?php require('partials/header.php');?>


<div class="container">
    <h2 style="text-align:center;">Detail Barang</h2>
    <div class="card-detail">
        <div style="display: flex; justify-content: space-between;">
            <h3><?= $findOneBarang["nama_barang"];?></h4>
            <a href="hapus-barang.php?id=<?=$findOneBarang["id_barang"];?>" style="text-decoration: none; color: red; font-weight: bold;">X</a>
        </div>
        <h3 style="margin-top: 5px;"><?= $findOneBarang["jenis_barang"];?></h4>
        <h3 style="margin-top: 5px;">Rp <?= number_format($findOneBarang["harga_satuan"]); ?></h4>
        <h3>Stok: <?= $findOneBarang["stok_barang"];?></h4>
    </div>
        <div class="card-detail-footer">
            <p><?= date("d-m-Y", strtotime($findOneBarang["rilis_barang"])); ?></p>
            <a href="edit-barang.php?id=<?=$findOneBarang["id_barang"];?>" style="text-decoration:none; color: #fff;">Edit</a>
        </div>
    
</div>


<?php require('partials/footer.php');?>