<?php
include 'koneksi.php';
if (isset($_GET['nama_lengkap'])) {
	$hapus = mysqli_query($kon, "DELETE FROM mobil WHERE nama_lengkap = '".$_GET['nama_lengkap']."' ");

		echo "
		<script>
		alert('Data Berhasil Dihapus');
		document.location.href = 'datapemesanan.php'
		</script>
		";
	}
	?>