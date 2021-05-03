<?php 
require('../app/app.php');
session_start();




if(isset($_POST["masuk"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $queryUser = "SELECT * FROM users WHERE username = '$username'";
    $user = mysqli_query($db,$queryUser);
    
    if(mysqli_num_rows($user) === 1){
        $data = mysqli_fetch_assoc($user);
        if(password_verify($password,$data["password"])){
           if($data["role"] === "customer"){
            $_SESSION["user"] = true;
            $_SESSION["username"] = $data["username"];
            header("Location: index.php");
           }else if($data["role"] === "admin"){
            $_SESSION["user"] = true;
            $_SESSION["username"] = $data["username"];
            $_SESSION["role"] = $data["role"];
            header("Location: ./admin/index.php");
           }
        }else{
            echo "<script>alert('akun tidak ditemukan!'); location='masuk.php';</script>";
        }
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
            <button type="submit" name="masuk">Login</button>
            <a href="daftar.php">Daftar disini!</a>
        </div>
    </form>
</section>

<?php require('../partials/footer.php') ?>