<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Informasi - Kompleks Maduraja</title>
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

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
                                    <img src="images/rt004.png" alt="Avatar" style="width: 100%; height: 100%; border-radius: 50%;">
                                </div>
                                <div>
                                    <h5 style="font-weight: bold; color: #333; margin: 0;">USERNAME</h5>
                                    <h6 style="color: #777; margin: 0;"><?php echo $_SESSION['username']; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li class="menu-title">Menu</li><!-- /.menu-title -->
                    <li>
                        <a href="dashboard-004.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li class="active">
                        <a href="info-data.php"> <i class="menu-icon fa fa-bullhorn"></i>Pengumuman </a>
                    </li>
                    <li>
                        <a href="rt004-data.php"> <i class="menu-icon fa fa-sitemap"></i>Regu Ronda </a>
                    </li>
                    <li>
                        <a href="foto-data.php"> <i class="menu-icon fa fa-picture-o"></i>Foto </a>
                    </li>
                    <li>
                        <a href="logout.php"> <i class="menu-icon fa fa fa-sign-out"></i>Logout </a>
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
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Tambah Pengumuman</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="dashboard-004.php">Dashboard</a></li>
                                    <li><a href="info-data">Pengumuman</a></li>
                                    <li class="active">Tambah Pengumuman</li>
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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong>Tambah Pengumuman Baru</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="info-simpan.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div class="col-12 col-md-12"><textarea name="pengumuman" id="pengumuman" rows="9" placeholder="Pengumuman..." class="form-control"></textarea></div>
                                    </div>
                                    
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                                        <a href="info-data.php" class="btn btn-danger">Batal</a>
                                    </div>
                                    </form>
                            </div><div class="card-footer"></div>
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
            <div class="col-sm-6 text-right">
                Designed by <a href="https://mulyasas.blogspot.com/?m=1">Mulya</a>
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
