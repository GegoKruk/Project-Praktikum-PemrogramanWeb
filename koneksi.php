<?php 

$host = "localhost";
$username = "root";
$password = "";
$db = "auth_db";

$connection = mysqli_connect($host, $username, $password, $db);

if (!$connection) {
    die("Koneksi ke database gagal");
}

function status($terisi, $kuota) {
    if ($terisi >= $kuota) {
        return 'penuh';
    } else if ($terisi >= $kuota * 0.8) {
        return 'hampir penuh';
    } else {
        return 'tersedia';
    }
}