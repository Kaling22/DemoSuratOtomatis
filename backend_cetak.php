<?php
include('koneksi.php');
$query = mysqli_query($koneksi, "SELECT * FROM tb_surat_pengunduran_diri ORDER BY id DESC LIMIT 1");
