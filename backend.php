<?php
include 'koneksi.php';
if (isset($_POST['cetak'])) {
	$nama		        = $_POST['nama'];
	$tempat 		    = $_POST['tempat_ditulis'];
	$tanggal_tulis 	    = $_POST['tanggal_penulisan'];
	$penerima	        = $_POST['penerima'];
	$perusahaan	        = $_POST['perusahaan'];
	$jabatan 	        = $_POST['jabatan'];
    $tanggal_pengunduran= $_POST['tanggal_pengunduran'];

	$sql = "INSERT INTO tb_surat_pengunduran_diri(Nama_pengaju,Penerima,Tempat,Perusahaan,Tanggal_pengunduran,Tanggal_ditulis,Jabatan) VALUES('" . $nama . "','" . $penerima . "','" . $tempat . "','" . $perusahaan . "','" . $tanggal_pengunduran . "','" . $tanggal_tulis . "','" . $jabatan . "')";
    if (mysqli_query($koneksi, $sql)) {
		echo "
			<script>
				alert('Data Berhasil Ditambahkan');
				window.location = 'sukses.html';
			</script>
    	";
	} else {
		echo "
			<script>
				alert('Terjadi Kesalahan');
				window.location = 'index.html';
			</script>
    	";
	}
} 