<?php
include 'koneksi.php';
$data_edit = mysqli_query($kon, "SELECT * FROM mobil WHERE nama_lengkap = '".$_GET['nama_lengkap']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Edit Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container"><br>
	<h1 class="text-center">Edit Data Pemesanan Rental Mobil</h1>
	<form method="post" class="form">

		<label for="nama_lengkap" class="mb-3">Nama Lengkap</label>
		<input class="form-control" id="nama_lengkap" class="nama_lengkap" type="nama_lengkap" name="nama_lengkap" value="<?php echo$result['nama_lengkap'] ?>" autocomplete="on" required/>
		<div class="form-border"></div><br>

		<label for="nama_mobil" class="mb-3">Nama Mobil</label>
                 <select class="form-select form-control" name="nama_mobil" id="nama_mobil">
                        <option class="select-hide">Silahkan Pilih Mobil</option>
                        <option>Avanza</option>
                        <option>Pajero Sport</option>
                        <option>Almaz</option>
                        <option>Civic</option>
                        <option>Model X</option>
                        <option>Jazz</option>
                        <option>Ranger</option>
                </select><br>
		<div class="form-border"></div>

		<label for="duransi_rental" class="mb-3">Durasi Rental</label>
		<input class="form-control" id="duransi_rental" class="duransi_rental" type="duransi_rental" name="duransi_rental" value="<?php echo $result['duransi_rental'] ?>"autocomplete="on"required/>
		<div class="form-border"></div><br>

		<input class="btn btn-success" id="submit-btn" type="submit" name="edit" value="Edit Data">

		<br><a href="datapemesanan.php" title="Klik ini jika kamu ingin kembali ke halaman data peminjam mobil."><br>
			<legend id="data">Data Pemesanan Rental Mobil</legend>
		</a>
	</form>
</div>
</div>
</div>

	<?php
	include 'koneksi.php';
	if(isset($_POST["edit"])){
		$update = mysqli_query($kon, "UPDATE mobil SET  nama_mobil = '".$_POST['nama_mobil']."',
		duransi_rental = '".$_POST['duransi_rental']."'
		WHERE nama_lengkap = '".$_GET['nama_lengkap']."'");
		if($update){
		echo "
		<script>
		alert('Data Berhasil Diedit. Terima kasih!');
		document.location.href = 'datapemesanan.php'
		</script>
	      ";
		}
	}
?>

</div>
</body>
</html>