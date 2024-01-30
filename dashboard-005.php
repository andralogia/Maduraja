<?php
include "koneksi.php";

$sql_informasi = "SELECT COUNT(*) AS count_informasi FROM informasi";
$result_informasi = $koneksi->query($sql_informasi);
$row_informasi = $result_informasi->fetch_assoc();
$count_informasi = $row_informasi['count_informasi'];

$sql_tb_foto = "SELECT COUNT(*) AS count_tb_foto FROM tb_foto";
$result_tb_foto = $koneksi->query($sql_tb_foto);
$row_tb_foto = $result_tb_foto->fetch_assoc();
$count_tb_foto = $row_tb_foto['count_tb_foto'];

$sql_rt005 = "SELECT COUNT(*) AS count_rt005 FROM rt005";
$result_rt005 = $koneksi->query($sql_rt005);
$row_rt005 = $result_rt005->fetch_assoc();
$count_rt005 = $row_rt005['count_rt005'];

$koneksi->close();
?> 
<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Maduraja - Admin Dashboard</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
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
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
</head>

<?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <div style="display: flex; align-items: center; margin: 20px; width: 100%;">
                        <div style="border: 1px solid #ccc; border-radius: 5px; padding: 10px; background-color: #fff; width: 100%;">
                            <div style="display: flex; align-items: center;">
                                <div style="width: 50px; height: 50px; background-color: #ddd; border-radius: 50%; margin-right: 10px;">
                                    <img src="images/rt005.png" alt="Avatar" style="width: 100%; height: 100%; border-radius: 50%;">
                                </div>
                                <div>
                                    <h5 style="font-weight: bold; color: #333; margin: 0;">USERNAME</h5>
                                    <h6 style="color: #777; margin: 0;"><?php echo $_SESSION['username']; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li class="menu-title">Menu</li><!-- /.menu-title -->
                    <li class="active">
                        <a href="index.html"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="info2-data.php"> <i class="menu-icon fa fa-bullhorn"></i>Pengumuman </a>
                    </li>
                    <li>
                        <a href="rt005-data.php"> <i class="menu-icon fa fa-sitemap"></i>Regu Ronda </a>
                    </li>
                    <li>
                        <a href="foto2-data.php"> <i class="menu-icon fa fa-picture-o"></i>Foto </a>
                    </li>
                    <li>
                        <a href="logout.php"> <i class="menu-icon fa fa fa-sign-out"></i>Logout </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
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
                            <a class="nav-link" href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                        </div>
                        
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1 class="color-white">Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li class="active">Dasboard</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-3">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r" id="viewCount">
                                            <span id="count"></span>
                                        <p class="text-light mt-1 m-0">Total Lihat</p>
                                    </div><!-- /.card-left -->

                                    <div class="card-right float-right text-right">
                                        <i class="icon fade-5 icon-lg fa fa-eye"></i>
                                    </div><!-- /.card-right -->

                                    <script>
                                    // Fungsi untuk mendapatkan dan menampilkan jumlah view
                                    function getViewCount() {
                                        var viewCount = localStorage.getItem('viewCount');

                                        if (viewCount) {
                                        document.getElementById('count').innerText = viewCount;
                                        } else {
                                        viewCount = 0;
                                        document.getElementById('count').innerText = viewCount;
                                        localStorage.setItem('viewCount', viewCount);
                                        }
                                    }

                                    // Fungsi untuk mereset jumlah view menjadi 0
                                    function resetViewCount() {
                                        var viewCount = 0;
                                        document.getElementById('count').innerText = viewCount;
                                        localStorage.setItem('viewCount', viewCount);
                                    }

                                    // Memanggil fungsi getViewCount saat halaman dimuat
                                    getViewCount();
                                    </script>

                                </div>

                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-1">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r">
                                            <span class="count"><?php echo $count_informasi; ?></span>
                                        </h3>
                                        <p class="text-light mt-1 m-0">Pengumuman</p>
                                    </div><!-- /.card-left -->

                                    <div class="card-right float-right text-right">
                                        <i class="icon fade-5 icon-lg fa fa-bullhorn"></i>
                                    </div><!-- /.card-right -->

                                </div>

                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-4">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r">
                                            <span class="count"><?php echo $count_tb_foto; ?></span>
                                        </h3>
                                        <p class="text-light mt-1 m-0">Dokumentasi</p>
                                    </div><!-- /.card-left -->

                                    <div class="card-right float-right text-right">
                                        <i class="icon fade-5 icon-lg fa fa-picture-o"></i>
                                    </div><!-- /.card-right -->

                                </div>

                            </div>
                        </div>
                        <!--/.col-->

                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-flat-color-6">
                                <div class="card-body">
                                    <div class="card-left pt-1 float-left">
                                        <h3 class="mb-0 fw-r">
                                            <span class="count"><?php echo $count_rt005; ?></span>
                                        </h3>
                                        <p class="text-light mt-1 m-0">Anggota Ronda</p>
                                    </div><!-- /.card-left -->

                                    <div class="card-right float-right text-right">
                                        <i class="icon fade-5 icon-lg fa fa-sitemap"></i>
                                    </div><!-- /.card-right -->

                                </div>

                            </div>
                        </div>
                        <!--/.col-->
                    
                </div>
            <!-- /#add-category -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2003 Maduraja
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://mulyasas.blogspot.com/?m=1">Mulya</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>