<?php
require_once("data.php");

$sql = "SELECT * FROM mobil";

$server = "localhost";
$user = "root";
$password = "";
$database = "rental_mobil";

$kon = mysqli_connect($server, $user, $password, $database);

if($_POST){
    $name = $_POST['fname'];
    $nlengkap = $_POST['fmobil'];
    $drental = $_POST['fdiskon'];

    $query = "INSERT INTO mobil (nama_lengkap, nama_mobil, duransi_rental) VALUES ('$name', '$nlengkap', '$drental')";

    mysqli_query($kon, $query);
    header("location:pemesanan.php");
}

function hitungDiskon($jumlah){
    $value = 0;

    if ($jumlah <= 2){
        $value = $jumlah - 50000;
    }else{
        $value = 2 * 50000;
    }
    
    return $value;
}

if ($_POST){
    $namaLengkap = $_POST['fname'];
    $mobil = $_POST['fmobil'];
    $dis = $_POST['fdiskon'];

    $hargaRentalMobil = $daftarMobil[$mobil]['Harga'];
    $diskon = hitungDiskon($dis);
    $totalBayar = $hargaRentalMobil + $diskon;

    header("location:pemesanan.php?namaLengkap=$namaLengkap&hargaRentalMobil=$hargaRentalMobil&diskon=$diskon&totalBayar=$totalBayar");
}