<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dokumentasi - Kompleks Maduraja</title>
    <meta name="description" content="Dokumentasi - Kompleks Maduraja">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="images/logo2.png">
    <link rel="shortcut icon" href="images/favicon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title">Menu</li><!-- /.menu-title -->
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-home"></i>Beranda </a>
                    </li>
                    <li class="active">
                        <a href="dokumentasi.php"> <i class="menu-icon fa fa-picture-o"></i>Dokumentasi </a>
                    </li>
                    <li>
                        <a href="login.php"> <i class="menu-icon fa fa-sign-in"></i>Login </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="index.php"><img src="images/logo2.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/logo2.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i>Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1 class="color-white">Dokumentasi</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="index.php">Beranda</a></li>
                                    <li class="active">Dokumentasi</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Foto</strong>
                                <form method="GET" action="">
                            </div>
                            <div class="card-body">
                                <div class="gallery">
                                    <div class="row">
                                    <?php
                                    include "koneksi.php";

                                    // Mengambil data foto dari tabel dan mengurutkannya dari yang terbaru ke terlama
                                    $sql = "SELECT * FROM tb_foto ORDER BY tanggal DESC"; // Mengurutkan berdasarkan kolom tanggal secara menurun (dari terbaru ke terlama) atau ganti dengan kolom ID jika ada kolom ID yang menunjukkan urutan foto
                                    $result = mysqli_query($koneksi, $sql);

                                    // Menampilkan foto-foto yang ada
                                    if (mysqli_num_rows($result) > 0) {
                                        echo "<div class='row'>";
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $keterangan = $row['keterangan'];
                                            $tanggal = $row['tanggal'];
                                            $foto = $row['foto'];

                                            echo "<div class='col-3 mb-4'>"; // Menambahkan class 'mb-4' untuk memberikan jarak antara foto-foto
                                            echo "<div class='photo mx-3'>"; // Menambahkan class 'mx-3' untuk memusatkan foto dalam kolom
                                            echo "<div class='mb-2'>";
                                            echo "<a href='$foto' data-fancybox='gallery'><img src='$foto' alt='$keterangan' width='100%'></a>";
                                            echo "</div>";
                                            echo "<h6>$keterangan</h6>";
                                            echo "<p>$tanggal</p>";
                                            echo "</div>";
                                            echo "</div>";
                                        }
                                        echo "</div>";
                                    } else {
                                        echo "<div class='row justify-content-center'>";
                                        echo "<div class='col-12 text-center'>";
                                        echo "<p>Tidak ada foto yang tersedia.</p>";
                                        echo "</div>";
                                        echo "</div>";
                                    }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
    <div class="clearfix"></div>

<footer class="site-footer">
    <div class="footer-inner bg-white">
        <div class="row">
            <div class="col-sm-6">
                Copyright &copy; 2023 Maduraja
            </div>
        </div>
    </div>
</footer>

</div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="assets/js/main.js"></script>


</body>
</html>
