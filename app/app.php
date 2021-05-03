<?php
$db = mysqli_connect("localhost","root","root","app-lsp");


function queryData($query){
    global $db;

    $rows =  mysqli_query($db,$query);
    $data = [];
    while($row = mysqli_fetch_assoc($rows)){
        $data[] = $row;
    }
    return $data;
}

function createUser($data){

    global $db;

    $username = $data["username"];
    $password = $data["password"];
    $nama_user = $data["nama_user"];
    $createdAt = date("Y-m-d h:m:s");
    $updatedAt = date("Y-m-d h:m:s");

    $queryAlreadyUser = "SELECT * FROM users WHERE username = '$username' AND nama_user = '$nama_user'";
    $user = mysqli_query($db,$queryAlreadyUser);

    if(mysqli_fetch_assoc($user)){
        setcookie("error_register","Maaf akun tersebut sudah ada!", time() + 1);
        header("Location: daftar.php");
        return false;
    }

    $hasshedPassword = password_hash($password,PASSWORD_DEFAULT);
    $queryCreateUser = "INSERT INTO users VALUES(id,'$username','$hasshedPassword','$nama_user','customer','$createdAt','$updatedAt')";
    mysqli_query($db,$queryCreateUser);
    return mysqli_affected_rows($db);
}

function buatBarang($data){
    global $db;

    $nama_barang = $data["nama_barang"];
    $jenis_barang = $data["jenis_barang"];
    $harga_satuan = $data["harga_satuan"];
    $stok_barang = $data["stok_barang"];
    $rilis_barang = date("Y-m-d h:m:s");

    $queryBarang = "SELECT * FROM barang WHERE nama_barang = '$nama_barang'";
   $barang =  mysqli_query($db,$queryBarang);
    if(mysqli_fetch_assoc($barang)){
        echo "<script>alert('Barang Sudah ada! ganti yang lain'); location='create-product.php';</script>";
        return false;
    }

    $queryBuatBarang = "INSERT INTO barang VALUES(id_barang,'$nama_barang','$jenis_barang','$harga_satuan','$stok_barang','$rilis_barang')";
    mysqli_query($db,$queryBuatBarang);
    return mysqli_affected_rows($db);
}

function hapusBarang($id){
    global $db;

    $queryDeleteBArang = "DELETE FROM barang WHERE id_barang = '$id'";
    mysqli_query($db, $queryDeleteBArang);
    return mysqli_affected_rows($db);
}
?>