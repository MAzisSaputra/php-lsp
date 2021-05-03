<?php
require('../app/app.php');
session_start();

if(!isset($_SESSION["user"])){
    header("Location: masuk.php");
}

if(empty($_SESSION["keranjang"]) || !isset($_SESSION["keranjang"])){
    echo "<script>alert('Keranjang masih kosong bro!'); location='index.php';</script>";
}





?>
<?php require('../partials/header.php');?>

    <div class="container">
        <form method="post">
            <div style="margin-top: 10px;">
                <label for="">Tanggal Transaksi</label>
                <input type="date" name="tgl_transaksi" id="tgl_transaksi">
            </div>
            <div style="margin-top: 10px;">
                <label for="user">Nama Pembeli</label>
                <input type="text" value="<?=$_SESSION["username"];?>" name="nama_pembeli" readonly /> 
            </div>
            <div style="margin-top: 10px;">
            <label for="id_barang">Nama Barang</label>
               <select name="id_barang" id="id_barang">
           <?php foreach($_SESSION["keranjang"] as $barangId => $hasil):
                $barang = queryData("SELECT * FROM barang WHERE id_barang = '$barangId'")[0];
            ?>
               <option hidden>Barang Anda</option>
               <option value="<?= $barangId;?>"><?= $barang["nama_barang"];?></option>
           <?php endforeach;?>
               </select>
            </div>
            <div style="margin-top: 10px;">
            <label for="jmlh_barang">Total Harga</label>
               <select name="jmlh_barang" id="jmlh_barang">
           <?php 
                 $totalBeli = 0;
               foreach($_SESSION["keranjang"] as $barangId => $hasil):
                $barang = queryData("SELECT * FROM barang WHERE id_barang = '$barangId'")[0];
                $totalHarga = $barang["harga_satuan"] * $hasil;
                $totalBeli += $totalHarga;
                ?>
                
               <option hidden>Barang Anda</option>
               <option value="<?= $barangId;?>"><?= $totalBeli; ?></option>
           <?php endforeach;?>
               </select>
            </div>
          
            <div style="margin-top: 10px;">
                <button type="submit" name="checkout">Selesaikan Pemabayaran</button>
            </div>
        </form>
    </div>

<?php require('../partials/footer.php');?>