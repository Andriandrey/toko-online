<!-- navbar -->
<html>

<head>
	<title> web</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<header>
		<nav class="logo">
			<img src="assets/foto/logo1.jpeg" alt="" class="logo-img">
			<h1 class="logo-title">LOGO</h1>
		</nav>

		<nav>
			<ul class="nav navbar-nav">
				<li><a href="homes.php">Home</a></li>
				<li><a href="index.php">Produk</a></li>
				<li><a href="keranjang.php">Keranjang</a></li>
				<!-- JIKA SUDAH LOGIN(ADA SESSION PELANGGAN -->
				<?php if (isset($_SESSION["pelanggan"])) : ?>
					<li><a href="riwayat.php">Riwayat Belanja</a>
					<li></li>
					<li><a href="logout.php">Logout</a>
					<li></li>
					<!-- selin itu(jk belom login belom ada session pelanggan) -->
				<?php else : ?>
					<li><a href="login.php">Login</a></li>
					<li><a href="daftar.php">Daftar</a></li>
				<?php endif ?>
				<li><a href="checkout.php">Checkout</a></li>
			</ul>
		</nav>
		<button class="btn-cta" onclick="redirInstagram()">Follow Kami</button>


		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
			<input type="text" class="form-control" name="keyword">
			<button class="btn btn-primary">Cari</button>
		</form>
		</div>
	</header>

	<footer>
		<nav>
			<ul class="nav navbar-nav">
				<p>Powered By</p>
				<p>@ Andrian Website 2022</p>
			</ul>
		</nav>
	</footer>

</body>

</html>