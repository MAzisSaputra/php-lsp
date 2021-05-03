<?php
require('../../app/app.php');
session_start();

$id = $_GET["id"];

$findOneBarang = queryData("SELECT * FROM barang WHERE id_barang = '$id'")[0];

?>

<?php require('partials/header.php');?>


<section>
    <form method="post">
        <div>
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-barang" name="nama_barang" id="nama_barang" value="<?= $findOneBarang["nama_barang"];?>">
        </div>
        <div>
            <label for="jenis_barang">Jenis Barang</label>
            <input type="text" class="form-barang" name="jenis_barang" id="jenis_barang" value="<?= $findOneBarang["jenis_barang"];?>">
        </div>
        <div>
            <label for="harga_satuan">Harga Barang</label>
            <input type="text" class="form-barang" name="harga_satuan" id="harga_satuan" value="<?= $findOneBarang["harga_satuan"];?>">
        </div>
        <div>
            <label for="stok_barang">Stok Barang</label>
            <input type="text" class="form-barang" name="stok_barang" id="stok_barang" value="<?= $findOneBarang["stok_barang"];?>">
        </div>
        <div>
           <button type="submit" name="editBarang">Edit Barang</button>
        </div>
    </form>
</section>


<?php require('partials/footer.php');?>