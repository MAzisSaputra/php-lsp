<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <title>Admin Page</title>

    <style>
        .container{
            padding: 12px;
        }
        .column-card{
            display:flex;
            flex: nowrap;
        }
        .card{
        background: wheat;
        padding: 6px;
        border-radius: 3px;
        flex: 0 20%;
        margin: 5px;
        }
        .card-detail{
            width: 30%; 
            background: gray;
            margin: auto;
            padding: 12px;
            color: #fff;
        }
        .card-detail-footer{
            width: 31.3%;
            margin: auto;
            color: #fff;
            padding: 3px;
            display: flex;
            justify-content: space-between;
            background: #000;
        }
    </style>
</head>
<body>
    
<header class="app">
    <nav class="navbar"> 
        <div>
            <a href="./index.php">LSP APP</a>
        </div>
        <div class="navbar-right">
           <?php if(isset($_SESSION["user"])) : ?>
            <a href="./create-product.php" class="text-link">Buat Alat Elektronik</a>
            <a href="../pages/masuk.php" class="text-link-navbar">Hai, <?= $_SESSION["username"]?></a>
            <a href="../../auth/logout.php" class="text-link-navbar" style="font-weight: bold;">Logout</a>
            <?php else:?>
            <a href="../pages/masuk.php" class="text-link-navbar">Masuk</a>
           <?php endif;?>
        </div>
    </nav>
</header>