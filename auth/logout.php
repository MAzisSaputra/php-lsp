<?php
session_start();
session_destroy();
$_SESSION = [];
session_unset();
echo "<script>alert('Anda Keluar, terima kasih...'); location='../pages/masuk.php';</script>";
?>