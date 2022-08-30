<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman Data Pemesanan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container table-responsive">
	<h1 class="text-center mt-4">Data Pemesanan Rental Mobil</h1>
	<br>
	<table class="table table-bordered table-hover">
		<tr class="text-center">
			<td>No</td>
			<td>Nama Lengkap</td>
			<td>Nama Mobil</td>
			<td>Durasi Rental</td>
			<td>Opsi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$select = mysqli_query($kon, "SELECT * FROM mobil");
		while($hasil = mysqli_fetch_array($select)){
		?>
		<tr>
			<td class="text-center"><?php echo $no++ ?></td>
			<td><?php echo $hasil['nama_lengkap'] ?></td>
			<td><?php echo $hasil['nama_mobil'] ?></td>
			<td class="text-center"><?php echo $hasil['duransi_rental'] ?></td>
			<td class="text-center">
				<a href="edit.php?nama_lengkap=<?php echo $hasil['nama_lengkap'] ?>" class="btn btn-success">Edit</a>
				<a href="hapus.php?nama_lengkap=<?php echo $hasil['nama_lengkap']  ?>" class="btn btn-danger" onclick="return confirm ('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
			</td>
		</tr>
	<?php } ?>
	</table>
	<br>

	<footer>
		<h4 >Hai!
			<br>Kamu ingin menambahkan data rental mobil lainnya?
			<br><a href="pemesanan.php" class="btn btn-success mt-3">Tambahkan di sini</a></h4>
			<br>
			<h4>Jika Anda ingin kembali ke halaman beranda,
				<br>
				<a href="index.php" class="btn btn-danger mt-3">Klik ini</a></h4>
	</footer>
	</div>
</body>
</html>