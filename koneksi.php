<?php
$host    = "localhost";
$user    = "root";      
$pass    = "";           
$dbname  = "db_fpb";

$koneksi = mysqli_connect($host, $user, $pass, $dbname);

if (!$koneksi) {
    die("<p style='color:red;font-family:Arial'>
         Koneksi gagal: " . mysqli_connect_error() . "
         </p>");
}

mysqli_set_charset($koneksi, "utf8mb4");