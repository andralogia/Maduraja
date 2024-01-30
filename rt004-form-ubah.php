<?php
include "koneksi.php";
$id= $_GET ['id'];
$data= mysqli_query($koneksi, "SELECT * FROM rt004 where id='$id'");
while ($hasil = mysqli_fetch_array($data)){
$Tugas = $hasil['Tugas'];
$Rumah = $hasil['Rumah'];
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Regu Ronda - Kompleks Maduraja</title>
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
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <li>
                        <a href="info-data.php"> <i class="menu-icon fa fa-bullhorn"></i>Pengumuman </a>
                    </li>
                    <li class="active">
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
                                <h1>Ubah Data</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="dashboard-004.php"></a>Dashboard</li>
                                    <li><a href="rt004-data.php">Regu Ronda</a></li>
                                    <li class="active">Ubah Data</li>
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
                                <strong>Ubah Data Regu</strong>
                            </div>
                            <div class="card-body card-block">
                                <form action="rt004-ubah.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    <div class="row form-group">
                                        <div><input type="hidden" id="id" name="id" class="form-control" value="<?php echo $hasil['id'];?>"></div>
                                        <div class="col col-md-3"><label for="Nama" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Nama" name="Nama" placeholder="Nama" class="form-control" 
                                             value="<?php echo $hasil['Nama'];?>"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Tugas</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="Tugas" class="form-check-label ">
                                                        <input type="radio" id="Tugas" name="Tugas" value="Anggota" class="form-check-input" 
                                                        <?php if($Tugas == 'Anggota'){echo "checked";} ?>>Anggota
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="Tugas" class="form-check-label ">
                                                        <input type="radio" id="Tugas" name="Tugas" value="Ketua" class="form-check-input" 
                                                        <?php if($Tugas == 'Ketua'){echo "checked";} ?>>Ketua
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label class=" form-control-label">Rumah</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="radio">
                                                    <label for="Rumah" class="form-check-label ">
                                                        <input type="radio" id="Rumah" name="Rumah" value="Sewa" class="form-check-input" 
                                                        <?php if($Rumah == 'Sewa'){echo "checked";} ?>>Sewa
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label for="Rumah" class="form-check-label ">
                                                        <input type="radio" id="Rumah" name="Rumah" value="Pribadi" class="form-check-input" 
                                                        <?php if($Rumah == 'Pribadi'){echo "checked";} ?>>Pribadi
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="Regu" class=" form-control-label">Regu</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="Regu" id="Regu" class="form-control">
                                                <option value="">Pilih Regu</option>
                                                <option value="Regu 01">Regu 01</option>
                                                <option value="Regu 02">Regu 02</option>
                                                <option value="Regu 03">Regu 03</option>
                                                <option value="Regu 04">Regu 04</option>
                                                <option value="Regu 05">Regu 05</option>
                                                <option value="Regu 06">Regu 06</option>
                                                <option value="Regu 07">Regu 07</option>
                                                <option value="Regu 08">Regu 08</option>
                                                <option value="Regu 09">Regu 09</option>
                                                <option value="Regu 10">Regu 10</option>
                                                <option value="Regu 11">Regu 11</option>
                                                <option value="Regu 12">Regu 12</option>
                                                <option value="Regu 13">Regu 13</option>
                                                <option value="Regu 14">Regu 14</option>
                                                <option value="Regu 15">Regu 15</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="RT" class=" form-control-label">RT</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="RT" name="RT" placeholder="Disabled" readonly value="004" class="form-control"></div>
                                    </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary" name="Simpan">Simpan</button>
                                        <a href="rt004-data.php" class="btn btn-danger">Batal</a>
                                    </div>
                                </form>
                                <?php } ?>
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
