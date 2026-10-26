<?php
$host ="localhost";
$user ="root";//Username deffault XAMPP
$pass ="";
$db ="db_perpus_hanifjulian";
$koneksi =mysqli_connect($host,$pass,$db);
if (!$koneksi)  {
    die ("koneksi database gagal:". mysqli_connect_error());
}
?>
