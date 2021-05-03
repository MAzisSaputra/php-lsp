<?php
require('../app/app.php');
session_start();

$id = $_GET["id"];

$findOneBarang = queryData("SELECT * FROM barang WHERE id_barang = '$id'")[0];


if(!isset($_SESSION["user"])){
    header("Location: masuk.php");
}

if(isset($_POST["beli"])){
    $total = $_POST["total"];
    $_SESSION["keranjang"][$id] = $total;
    echo "<script>alert('Barang berhasil dimasukan ke keranjang'); location='keranjang.php';</script>";
}

?>

<?php require('../partials/header.php');?>


<div class="container">
    <h2 style="text-align:center;">Detail Barang</h2>
    <div class="card-detail">
        <div style="display: flex; justify-content: space-between;">
            <h3><?= $findOneBarang["nama_barang"];?></h4>
        </div>
        <h3 style="margin-top: 5px;"><?= $findOneBarang["jenis_barang"];?></h4>
        <h3 style="margin-top: 5px;">Rp <?= number_format($findOneBarang["harga_satuan"]); ?></h4>
        <h3>Stok: <?= $findOneBarang["stok_barang"];?></h4>
    </div>
        <div class="card-detail-footer">
           <form  method="post">
            <label for="total" style="color: #000;">Mau beli berapa?</label>
            <input type="number" name="total" id="total" min="1" placeholder="1" value="1">
            <button type="submit"  name="beli">Beli Sekarang</button>
           </form>
        </div>
    
</div>


<?php require('../partials/footer.php');?>