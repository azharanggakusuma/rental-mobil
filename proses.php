<?php
require_once("data.php");

function hitungDiskon($jumlah){
    $value = 0;

    if ($jumlah <= 3){
        $value = $jumlah - 50000;
    }else{
        $value = 3 - 50000;
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