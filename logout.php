<?php
session_start();
session_destroy(); // Menghapus semua session yang aktif

header("Location: login.php");
exit;
?>
