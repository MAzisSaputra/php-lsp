<?php 
require('../../app/app.php'); 
session_start(); 

if(isset($_POST["buatBarang"])){
    if(buatBarang($_POST) > 0){
        echo "<script>alert('Barang berhasil ditambahkan!'); location='index.php';</script>";
    }else{
        echo mysqli_error($db);
    }
}

?>

<?php require('partials/header.php'); ?>

<!-- Content Admin -->

<section>
    <form  method="post">
        <div>
            <label for="">Nama Barang</label>
            <input type="text" class="form-barang" name="nama_barang" id="nama_barang">
        </div>
        <div>
            <label for="">Jenis Barang</label>
            <input type="text" class="form-barang" name="jenis_barang" id="jenis_barang">
        </div>
        <div>
            <label for="">Harga Satuan</label>
            <input type="text" class="form-barang" name="harga_satuan" id="harga_satuan">
        </div>
        <div>
            <label for="">Stok Barang</label>
            <input type="text" class="form-barang" name="stok_barang" id="stok_barang">
        </div>
        <div>
            <button type="submit" name="buatBarang">Buat Barang</button>
        </div>
    </form>
</section>
    
<!-- End Content Admin -->

<?php require('../../partials/footer.php'); ?>


