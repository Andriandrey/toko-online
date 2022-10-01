<?php
session_start();
//koneksi ke batabase
include 'koneksi.php';


//jika tdk ada session pelanggan(login)
if (!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
	echo "<script>alert('silahkan login !');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}


//mendapatkan id_pembeli dari url
$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem'");
$detpem = $ambil->fetch_assoc();



?>


<!DOCTYPE html>
<html>
<head>
	<title>pembayaran</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>


<?php include 'menu.php'; ?>

<div class="container">
	<h2>Konfirmasi pembayaran</h2>
	<p>kirim  bukti pembayaran anda disini</p>
	<div class="alert alert-info">total tagihan anda <strong>Rp. <?php echo number_format($detpem["total_pembelian"]) ?></strong></div>

<form method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label>Nama Penyetor</label>
			<input type="text" name="nama" class="form-control">	
	</div>

	<div class="form-group">
		<label>Bank</label>
			<input type="text" name="bank" class="form-control">
	</div>

			<div class="form-group">
		<label>Jumlah</label>
			<input type="number" name="jumlah" min="1" class="form-control">		
	</div>

	<div class="form-group">
		<label>Foto Bukti</label>
			<input type="file" name="bukti" min="1" class="form-control">
			<p class="text-danger">foto bukti harus format JPG. maksimal 2MB</p>
	</div>

	<button class="btn btn-primary" name="kirim">Kirim</button>

</form>
</div>

<?php  

//jk ada tombol kirim
if (isset($_POST["kirim"]))
{
	//upload dulu foto bukti pembayaran
	$namabukti = $_FILES["bukti"]["name"];
	$lokasibukti = $_FILES["bukti"]["tmp_name"];
	$namafiks = date("YmdHis").$namabukti;
	move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

	$nama = $_POST["nama"];
	$bank = $_POST["bank"];
	$jumlah = $_POST["jumlah"];
	$tanggal = date("Y-m-d");

	$koneksi->query("INSERT INTO pembayaran(id_pembelian,nama,bank,jumlah,tanggal,bukti)
		values ('$idpem','$nama','$bank','$jumlah','$tanggal','$namafiks') ");

	// update data pembelian dri pending menjadi sudah kirim pembayaran
	$koneksi->query("UPDATE pembelian SET status_pembelian = 'sudah kirim pembayaran' WHERE id_pembelian='$idpem'");


	echo "<script>alert('terimakasih anda sudah mengirim bukti pembayaran');</script>";
	echo "<script>location='riwayat.php';</script>";
}

?>

</body>
</html>