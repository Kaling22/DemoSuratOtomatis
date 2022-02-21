<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil surat</title>
</head>
<body>
<?php 
include('koneksi.php');
$query = mysqli_query($koneksi, "SELECT * FROM tb_surat_pengunduran_diri ORDER BY id DESC LIMIT 1");
while ($row = $query->fetch_assoc()){ ?>
<link href = "surat.css" rel="stylesheet">
<section class="body-letter">
    <section class="header">
        <h1>SURAT PENGUNDURAN DIRI</h1>
        <div class="date-letter">
            <h3> <?php echo $row['Tempat'] ?>,<?php echo $row['Tanggal_ditulis']  ?></h3>
        </div>
    </section>
    <section class="to">
        <h3>Kepada Yth.</h3>
        <h3><?php echo $row['Penerima'] ?></h3>
        <h3>Di tempat</h3>
    </section>
    <section class="text-letter">
        <h3>Dengan Hormat,</h3>
        <p>Melalui surat ini saya  <?php echo $row['Nama_pengaju'] ?>  bermaksud untuk mengundurkan diri sebagai <?php echo $row['Jabatan'] ?>
        di <?php echo $row['Perusahaan'] ?><br> Indonesia terhitung sejak <?php echo $row['Tanggal_pengunduran'] ?>.</p>
        <p>Saya sangat berterimakasih atas kesempatan yang telah diberikan kepada saya untuk bekerja di <?php echo $row['Perusahaan'] ?>, saya juga meminta maaf kepada seluruh karyawan dan pimpinan apabila terdapat kesalahan yang telah saya lakukan selama bekerja.</p>
        <p>Demikian Surat Pengunduran Diri ini saya tulis dengan sebenar-benarnya dan penuh kesadaran. saya 
                berharap <?php echo $row['Perusahaan'] ?> dapat terus berjaya dan memperoleh yang terbaik</p>
    </section>
    <section class="footer">
        <h3>Hormat saya</h3>
        <h3><?php echo $row['Nama_pengaju'] ?></h3>
    </section>
</section>

<?php }; ?>
</body>
</html>