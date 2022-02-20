<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_surat_pengunduran_diri ORDER BY id DESC LIMIT 1");
$html = '<h2><center>SURAT PENGUNDURAN DIRI<center></h2><br>';
while ($row = mysqli_fetch_array($query)) {
    $html .= "
                <h3> <span style='text-align: right;'> " . $row['Tempat']. ", ".$row['Tanggal_ditulis']."</span> </h3><br>
                <h3>Kepada Yth.</h3> <br>
                <h3> " . $row['Penerima'] ." </h3> <br>
                <h3>Di tempat</h3> <br><br>
                <h3>Dengan Hormat</h3> <br>
            ";
}
$html .= "</html>";
$dompdf->loadHtml($html);

// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('cetak_surat.pdf');
