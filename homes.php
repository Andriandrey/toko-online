<html>

<head>
    <title> web</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <nav class="logo">
            <img src="assets/foto/xx.png" alt="" class="logo-img">
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

    </header>

    <div class="container">
        <div class="intro">
            <p class="title">Cattonology</p>
            <p class="description"> Star your style in here !</p>
            <img src="assets/foto/pp.png" alt="foto andri 1" class="img-foto" />
        </div>
    </div>

    <div class="parallax">
        <div class="tentang">
            <!--            <p class="title">Saya adalah pengembang web mobile app</p>
            <p class="description"> Coding aja dulu</p>
            <p class="description"> Pusing belakangan</p>
            <p class="description"> kalau error tinggal ngopi</p>
            <p class="description"> Nanti juga nemu inspirasi</p> -->


            <div class="mt-10">
                <button class="btn-cta" onclick="redirWhatsapp()">Hubungi Kami</button>
            </div>
        </div>
        <div class="container" id="project">
            <div class="card" id="project">
                <div class="card-item">
                    <img src="assets/foto/w.png" alt="img 1" class="img">
                    <p class="card-title">Celana</p>
                    <p>.......</p>
                </div>
                <div class="card-item">
                    <img src="assets/foto/ww.png" alt="img 2" class="img">
                    <p class="card-title">Hoodie</p>
                    <p>.......</p>
                </div>
                <div class="card-item">
                    <img src="assets/foto/www.png" alt="img 3" class="img">
                    <p class="card-title">Kaos</p>
                    <p>.......</p>
                </div>
            </div>
        </div>

        <footer>
            <p>Powered By</p>
            <p>@ Andrian Website 2022</p>
        </footer>


        <script>
            function redirInstagram() {
                window.location.href = "https:/Insatagram.com/andryaiueo__"
            }

            function redirWhatsapp() {
                window.location.href = "https:/wa.me/082240949877"
            }
        </script>

</body>

</html>