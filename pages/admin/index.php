<?php 
require('../../app/app.php'); 
session_start(); 


$barang = queryData("SELECT * FROM barang");

?>

<?php  require('partials/header.php'); ?>
<!-- Content Admin -->

<div class="container">
   <div class="column-card">
 <?php foreach($barang as $data):?>
    <div class="card">
       <a href="detail-barang.php?id=<?= $data["id_barang"];?>" style="text-decoration: none; color: #000;">
       <h4><?= $data["nama_barang"];?></h4>
        <h5 style="margin-top: 10px;"><?= $data["jenis_barang"];?></h5>
        <p style="margin-top: 10px;">Rp <?=  number_format($data["harga_satuan"]); ?></p>
        <p style="margin-top: 10px;">2<?= $data["stok_barang"];?></p>
       </a>
    </div>
 <?php endforeach;?>
   </div>
</div>

    
<!-- End Content Admin -->

<?php require('../../partials/footer.php'); ?>


