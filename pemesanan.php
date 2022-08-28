<?php 
    require_once("data.php");
    require_once("proses.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pemesanan</title>
    <link rel="stylesheet" href="styles/style-pemesanan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container table-responsive">
		<header class="text-center mt-4">
			<h1>Form Pemesanan Rental Mobil</h1><br>
		</header>

        <form action="proses.php" method="post">
            <div class="mb-3">
                <label class="mb-2" for="idNama">Nama Lengkap</label>
                <input type="text" class="form-control" value="" name="fname" id="idNama" placeholder="Ketikan Nama Lengkap">
            </div>

            <div class="mb-3">
                <label class="mb-2" for="idMobil">Mobil</label>
                <select class="form-select" name="fmobil" id="idMobil">
                        <option class="select-hide">Silahkan Pilih Mobil</option>
                    <?php 
                        for($i=0; $i < count($daftarMobil); $i++){

                    ?>
                        <option value="<?php echo $i; ?>"><?php echo $daftarMobil[$i]['mobil']; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>

            <div class="mb-3">
            <label class="mb-2" for="idDiskon">Duransi Rental(Hari)</label>
            <input type="text" class="form-control" value="" name="fdiskon" id="idDiskon" placeholder="Ketikan Duransi Rental">
            </div>

            <div class="text-center d-grid gap-2 d-md-flex justify-content-md-center">
                <button onclick="onClick()" class="btn btn-success" type="submit">Pesan</button>
            </div>
        </form><br><br>

        <?php
            if(isset($_GET['totalBayar'])){

        ?>

        <?php
            echo "<h3>Nama Pelanggan: &nbsp;" . $_GET['namaLengkap'] . "</h3><br>";
        ?>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Detail Transaksi</th>
                    <th>Nominal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Harga Rental Mobil</td>
                    <td><?php echo number_format($_GET['hargaRentalMobil'],0,',','.'); ?></td>
                </tr>
                <tr>
                    <td>Diskon</td>
                    <td><?php echo number_format($_GET['diskon'],0,',','.'); ?></td>
                </tr>
                <tr>
                    <td>Total Bayar</td>
                    <td><?php echo number_format($_GET['totalBayar'],0,',','.'); ?></td>
                </tr>
            </tbody>
        </table><br>

        <?php
            }
        ?>
    </div>

    <script src="script/main.js"></script>
</body>
</html>