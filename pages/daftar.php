<?php require('../app/app.php') ?>
<?php 
    if(isset($_POST["createUser"])){
        if(createUser($_POST) > 0){
            echo "<script>alert('Berhasil membuat akun!'); location='masuk.php';</script>";
        }else{
            echo "<script>alert('Akun Gagal Dibuat!'); location='daftar.php';</script>";
        }
    }
?>
<?php require('../partials/header.php') ?>

<section>
    <?php isset($_COOKIE["error_register"]) ? $error_register = $_COOKIE["error_register"] : $error_register = null; ?>
    <?php if($error_register):?>
    <p style="color: red;"><?= $error_register;?></p>
    <?php endif;?>
    <form  method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="input-control" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="input-control" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="nama_user">Nama Lengkap</label>
            <input type="text" class="input-control" name="nama_user" id="nama_user">
        </div>
        <div class="form-group">
            <button type="submit" name="createUser">Daftar</button>
        </div>
    </form>
</section>

<?php require('../partials/footer.php') ?>