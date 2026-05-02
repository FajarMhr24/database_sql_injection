<?php
$conn = mysqli_connect("localhost", "root", "", "sewa_kendaraan");

if (!$conn) {
    die("Koneksi gagal bro: " . mysqli_connect_error());
}
?>
