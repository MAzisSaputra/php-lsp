<?php 
require('../app/app.php'); 
session_start(); 

$barang = queryData("SELECT * FROM barang  ORDER BY id_barang ASC");

?>
<?php require('../partials/header.php') ?>
<div class="container">
    <div class="column">
    <?php foreach($barang as $data):?>
    <div class="card">
        <a href="detail-elektronik.php?id=<?= $data["id_barang"];?>" style="text-decoration: none; color: #fff;">
        <p>Nama Barang: <?= $data["nama_barang"];?></p>
        <p style="margin-top: 10px;">Jenis Barang: <?= $data["jenis_barang"];?></p>
        <p style="margin-top: 10px;">Rp <?= number_format($data["harga_satuan"]); ?></p>
        <p style="margin-top: 10px;">Stok: <?= $data["stok_barang"]; ?></p>
        </a>
    </div>
<?php endforeach;?>
    </div>
</div>

<?php require('../partials/footer.php') ?>