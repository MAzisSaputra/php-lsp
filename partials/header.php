<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Css Style -->
    <link rel="stylesheet" href="../public/assets/css/style.css">

    <style>
    .container{
    padding: 12px;
    }
    .column{
        display: flex;
    }
    .card{
        padding: 8px;
        margin: 5px;
        background: gray;
        color: #fff;
        border-radius: 3px;
        width: 20%;
        box-shadow: 5px 5px 5px  gray;
    }

    .column-card{
            display:flex;
            flex: nowrap;
        }
        .card{
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
        }
        .card-keranjang{
            background: black;
            color: #fff;
            margin: 5px;
            padding: 12px;
            width: 40%;
        }
    </style>

    <title>Web Simulasi LSP</title>
</head>
<body>

<header class="app">
    <nav class="navbar"> 
        <div>
            <a href="../pages/index.php">LSP APP</a>
        </div>
        <div class="navbar-right">
           <?php if(isset($_SESSION["user"])) : ?>
            <a href="../pages/keranjang.php" class="text-link-navbar">Keranjang</a>
            <a href="../pages/masuk.php" class="text-link-navbar">Hai, <?= $_SESSION["username"]?></a>
            <a href="../auth/logout.php" class="text-link-navbar" style="font-weight: bold;">Logout</a>
            <?php else:?>
            <a href="../pages/keranjang.php" class="text-link-navbar">Keranjang</a>
            <a href="../pages/masuk.php" class="text-link-navbar">Masuk</a>
           <?php endif;?>
        </div>
    </nav>
</header>