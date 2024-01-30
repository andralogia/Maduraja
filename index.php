<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sarana Informasi - Kompleks Maduraja</title>
    <meta name="description" content="Sarana Informasi - Kompleks Maduraja">
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="menu-title" style="margin-top: -8px;">Menu</li>
                    <!-- Daftar menu lainnya -->
                    <li class="menu-item active">
                        <a href="index.php" style="text-decoration: none !important;">
                            <i class="menu-icon fa fa-home"></i>Beranda
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="dokumentasi.php" style="color: #ffffff; text-decoration: none !important; border-bottom: none !important;">
                            <i class="menu-icon fa fa-picture-o"></i>Dokumentasi
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="login.php" style="color: #ffffff; text-decoration: none !important; border-bottom: none !important;">
                            <i class="menu-icon fa fa-sign-in"></i>Login
                        </a>
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
                    <a class="navbar-brand"  style="line-height: inherit;" href="./"><img src="images/logo.png" alt="Logo"></a>
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
                            <a class="nav-link" href="login.php"><i class="fa fa-sign-in"></i>Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <script>
        // Fungsi untuk menambah jumlah view
        function incrementViewCount() {
            var viewCount = localStorage.getItem('viewCount');

            if (viewCount) {
            viewCount = parseInt(viewCount) + 1;
            } else {
            viewCount = 1;
            }

            localStorage.setItem('viewCount', viewCount);
        }

        // Memanggil fungsi incrementViewCount saat halaman dilihat
        incrementViewCount();
        </script>


        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1 class="color-white">Beranda</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="dokumentasi.php"style="color: #ffffff; text-decoration: none !important; border-bottom: none !important;" >Dokumentasi</a></li>
                                    <li class="active">Beranda</li>
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
                    <div class="col-12">
                        <div class="digital-clock d-flex align-items-center alert alert-primary" role="alert">
                            <div class="time-colon"></div>
                            <div id="hours" class="time-part bigger-text">00</div>
                            <div class="time-colon bigger-text">:</div>
                            <div id="minutes" class="time-part bigger-text">00</div>
                            <div class="time-colon bigger-text">:</div>
                            <div id="seconds" class="time-part bigger-text">00</div>
                            <div class="time-colon bigger-text">,</div>
                            <div id="date" class="time-part"></div>
                        </div>    
                    </div>

                    <style>
                        .bigger-text {
                            font-size: 48px;
                        }
                    </style>

                    <script>
                        function updateClock() {
                            var now = new Date();
                            var hours = now.getHours();
                            var minutes = now.getMinutes();
                            var seconds = now.getSeconds();

                            hours = hours.toString().padStart(2, '0');
                            minutes = minutes.toString().padStart(2, '0');
                            seconds = seconds.toString().padStart(2, '0');

                            document.getElementById('hours').textContent = hours;
                            document.getElementById('minutes').textContent = minutes;
                            document.getElementById('seconds').textContent = seconds;

                            // Mendapatkan tanggal dalam format dd-mm-yyyy (namaBulan)
                            var options = { day: '2-digit', month: 'long', year: 'numeric', weekday: 'long' };
                            var date = now.toLocaleDateString('id-ID', options);
                            document.getElementById('date').textContent = date;
                        }

                        setInterval(updateClock, 1000);
                    </script>

                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">PENGUMUMAN</strong>
                                <form method="GET" action="">
                            </div>
                            <div class="card-body">
                                <?php
                                include "koneksi.php";
                                $data = mysqli_query($koneksi, "SELECT * FROM informasi ORDER BY id DESC"); // Mengurutkan data berdasarkan ID secara menurun (dari terbaru ke terlama)
                                if (mysqli_num_rows($data) > 0) {
                                    while ($hasil = mysqli_fetch_array($data)) {
                                        $pengumuman = $hasil['pengumuman'];

                                        echo "<div class='mx-3'></ul><ul><h6><li>" . $pengumuman . "</li></h6></ul></div>";
                                    }
                                } else {
                                    echo "<div class='mx-3'><ul><h6><li>Tidak ada kegiatan.</li></h6></ul></div>";
                                }
                                ?>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Aplikasi</strong>
                                <form method="GET" action="">
                            </div>
                            <div class="card-body">
                            
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Regu Ronda RT 004</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Tugas</th>
                                                <th>Rumah</th>
                                                <th>Regu</th>
                                                <th>RT</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Membuat koneksi ke database
                                            include "koneksi.php";

                                            // Menentukan regu saat ini
                                            $reguUrutan = array(
                                                "Regu 01", "Regu 02", "Regu 03", "Regu 04", "Regu 05", "Regu 06", "Regu 07", "Regu 08", "Regu 09",
                                                "Regu 10", "Regu 11", "Regu 12", "Regu 013", "Regu 14", "Regu 15"
                                            );

                                            date_default_timezone_set('Asia/Tokyo');
                                            $waktuSaatIni = strtotime(date('Y-m-d H:i:s'));
                                            $waktuBerikutnya = strtotime(date('Y-m-d 07:00:00', strtotime('+1 day')));

                                            $selisihWaktu = $waktuBerikutnya - $waktuSaatIni;

                                            $jamTersisa = floor($selisihWaktu / 3600) % 24;
                                            $menitTersisa = floor(($selisihWaktu % 3600) / 60);
                                            $detikTersisa = $selisihWaktu % 60;

                                            $urutanIndex = $jamTersisa / 24 % 15;
                                            $reguSaatIni = $reguUrutan[$urutanIndex];

                                            echo "<h6><li>Nama Regu : " . $reguSaatIni . "</li></h6>";
                                            echo "<h6><li>Sisa Waktu : <span id='sisaWaktu'>" . $jamTersisa . " jam " . $menitTersisa . " menit " . $detikTersisa . " detik</span></li></h6>";
                                            ?>

                                            <script>
                                                setInterval(updateWaktu, 1000);

                                                function updateWaktu() {
                                                    var sisaWaktuElement = document.getElementById('sisaWaktu');
                                                    var sisaWaktu = sisaWaktuElement.innerHTML;
                                                    var waktuArray = sisaWaktu.split(' ');

                                                    var jam = parseInt(waktuArray[0]);
                                                    var menit = parseInt(waktuArray[2]);
                                                    var detik = parseInt(waktuArray[4]);

                                                    detik--;

                                                    if (detik < 0) {
                                                        detik = 59;
                                                        menit--;
                                                    }

                                                    if (menit < 0) {
                                                        menit = 59;
                                                        jam--;
                                                    }

                                                    sisaWaktuElement.innerHTML = jam + " jam " + menit + " menit " + detik + " detik";
                                                }
                                            </script>

                                            <?php
                                            // Menampilkan data dari database berdasarkan Regu saat ini
                                            $sql = "SELECT * FROM rt004 WHERE Regu = '$reguSaatIni'";
                                            $result = $koneksi->query($sql);

                                            if ($result->num_rows > 0) {
                                                $no = 1;
                                                while ($row = $result->fetch_assoc()) {
                                                    echo "<tr>";
                                                    echo "<td class='text-bold-500'>" . $no . "</td>";
                                                    echo "<td class='text-bold-500'>" . $row['Nama'] . "</td>";
                                                    echo "<td class='text-bold-500'>" . $row['Tugas'] . "</td>";
                                                    echo "<td class='text-bold-500'>" . $row['Rumah'] . "</td>";
                                                    echo "<td class='text-bold-500'>" . $row['Regu'] . "</td>";
                                                    echo "<td class='text-bold-500'>" . $row['RT'] . "</td>";
                                                    echo "</tr>";
                                                    $no++;
                                                }
                                            } else {
                                                echo "<tr><td colspan='6'>Tidak ada data yang ditemukan.</td></tr>";
                                            }

                                            // Menutup koneksi
                                            $koneksi->close();
                                            ?>
                                        </tbody> 
                                </table>
                            </div>
                        </div>   
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Regu Ronda RT 005</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tugas</th>
                                            <th>Rumah</th>
                                            <th>Regu</th>
                                            <th>RT</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        // Membuat koneksi ke database
                                        include "koneksi.php";

                                        // Menentukan regu saat ini
                                        $reguUrutan = array(
                                            "Regu 01", "Regu 02", "Regu 03", "Regu 04", "Regu 05", "Regu 06", "Regu 07", "Regu 08", "Regu 09",
                                            "Regu 10", "Regu 11", "Regu 12", "Regu 013", "Regu 14", "Regu 15"
                                        );

                                        date_default_timezone_set('Asia/Tokyo');
                                        $waktuSaatIni = strtotime(date('Y-m-d H:i:s'));
                                        $waktuBerikutnya = strtotime(date('Y-m-d 07:00:00', strtotime('+1 day')));

                                        $selisihWaktu = $waktuBerikutnya - $waktuSaatIni;

                                        $jamTersisa = floor($selisihWaktu / 3600) % 24;
                                        $menitTersisa = floor(($selisihWaktu % 3600) / 60);
                                        $detikTersisa = $selisihWaktu % 60;

                                        $urutanIndex = $jamTersisa / 24 % 15;
                                        $reguSaatIni = $reguUrutan[$urutanIndex];

                                        echo "<h6> <li>Nama Regu : " . $reguSaatIni . "</li></h6>";
                                        echo "<h6> <li>Sisa Waktu : <span id='sisaWaktuRT005'>" . $jamTersisa . " jam " . $menitTersisa . " menit " . $detikTersisa . " detik</span></li></h6>";
                                        ?>

                                        <script>
                                            setInterval(updateWaktu, 1000);

                                            function updateWaktu() {
                                                var sisaWaktuElement = document.getElementById('sisaWaktuRT005');
                                                var sisaWaktu = sisaWaktuElement.innerHTML;
                                                var waktuArray = sisaWaktu.split(' ');

                                                var jam = parseInt(waktuArray[0]);
                                                var menit = parseInt(waktuArray[2]);
                                                var detik = parseInt(waktuArray[4]);

                                                detik--;

                                                if (detik < 0) {
                                                    detik = 59;
                                                    menit--;
                                                }

                                                if (menit < 0) {
                                                    menit = 59;
                                                    jam--;
                                                }

                                                sisaWaktuElement.innerHTML = jam + " jam " + menit + " menit " + detik + " detik";
                                            }
                                        </script>

                                        <?php
                                        // Menampilkan data dari database berdasarkan Regu saat ini
                                        $sql = "SELECT * FROM rt005 WHERE Regu = '$reguSaatIni'";
                                        $result = $koneksi->query($sql);

                                        if ($result->num_rows > 0) {
                                            $no = 1;
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td class='text-bold-500'>" . $no . "</td>";
                                                echo "<td class='text-bold-500'>" . $row['Nama'] . "</td>";
                                                echo "<td class='text-bold-500'>" . $row['Tugas'] . "</td>";
                                                echo "<td class='text-bold-500'>" . $row['Rumah'] . "</td>";
                                                echo "<td class='text-bold-500'>" . $row['Regu'] . "</td>";
                                                echo "<td class='text-bold-500'>" . $row['RT'] . "</td>";
                                                echo "</tr>";
                                                $no++;
                                            }
                                        } else {
                                            echo "<tr><td colspan='6'>Tidak ada data yang ditemukan.</td></tr>";
                                        }

                                        // Menutup koneksi
                                        $koneksi->close();
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Daftar Regu RT 004</strong>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <form method="GET" action="" class="d-flex align-items-center">
                                        <div class="dataTable-search">
                                            <input class="dataTable-input form-control" type="text" name="Cari" placeholder="Cari...">
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                            <?php
                            // Sertakan berkas koneksi.php
                                include "koneksi.php";
                                $result1 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 01'");
                                $result2 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 02'");
                                $result3 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 03'");
                                $result4 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 04'");
                                $result5 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 05'");
                                $result6 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 06'");
                                $result7 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 07'");
                                $result8 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 08'");
                                $result9 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 09'");
                                $result10 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 10'");
                                $result11 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 11'");
                                $result12 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 12'");
                                $result13 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 13'");
                                $result14 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 14'");
                                $result15 = mysqli_query($koneksi, "SELECT * FROM rt004 WHERE Regu = 'Regu 15'");
                            ?>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Regu 01
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                    echo $row1['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Regu 02
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                    echo $row2['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Regu 03
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row2 = mysqli_fetch_assoc($result3)) {
                                                    echo $row2['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Regu 04
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row4 = mysqli_fetch_assoc($result4)) {
                                                    echo $row4['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Regu 05
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row5 = mysqli_fetch_assoc($result5)) {
                                                    echo $row5['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Regu 06
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row6 = mysqli_fetch_assoc($result6)) {
                                                    echo $row6['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Regu 07
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row7 = mysqli_fetch_assoc($result7)) {
                                                    echo $row7['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEight">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                Regu 08
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row8 = mysqli_fetch_assoc($result8)) {
                                                    echo $row8['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNine">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                Regu 09
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row9 = mysqli_fetch_assoc($result9)) {
                                                    echo $row9['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                Regu 10
                                            </button>
                                        </h2>
                                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row10 = mysqli_fetch_assoc($result10)) {
                                                    echo $row10['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEleven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                Regu 11
                                            </button>
                                        </h2>
                                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row11 = mysqli_fetch_assoc($result11)) {
                                                    echo $row11['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwelve">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                Regu 12
                                            </button>
                                        </h2>
                                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row12 = mysqli_fetch_assoc($result12)) {
                                                    echo $row12['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThirteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                Regu 13
                                            </button>
                                        </h2>
                                        <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row13 = mysqli_fetch_assoc($result13)) {
                                                    echo $row13['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFourteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                Regu 14
                                            </button>
                                        </h2>
                                        <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row14 = mysqli_fetch_assoc($result14)) {
                                                    echo $row14['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFourteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFisteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                Regu 15
                                            </button>
                                        </h2>
                                        <div id="collapseFisteen" class="accordion-collapse collapse" aria-labelledby="headingFisteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row15 = mysqli_fetch_assoc($result15)) {
                                                    echo $row15['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Daftar Regu RT 005</strong>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <form method="GET" action="" class="d-flex align-items-center">
                                        <div class="dataTable-search">
                                            <input class="dataTable-input form-control" type="text" name="Cari" placeholder="Cari...">
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                            <?php
                            // Sertakan berkas koneksi.php
                                include "koneksi.php";
                                $result1 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 01'");
                                $result2 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 02'");
                                $result3 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 03'");
                                $result4 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 04'");
                                $result5 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 05'");
                                $result6 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 06'");
                                $result7 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 07'");
                                $result8 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 08'");
                                $result9 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 09'");
                                $result10 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 10'");
                                $result11 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 11'");
                                $result12 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 12'");
                                $result13 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 13'");
                                $result14 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 14'");
                                $result15 = mysqli_query($koneksi, "SELECT * FROM rt005 WHERE Regu = 'Regu 15'");
                            ?>
                            <div class="card-body">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Regu 01
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row1 = mysqli_fetch_assoc($result1)) {
                                                    echo $row1['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Regu 02
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                    echo $row2['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Regu 03
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row2 = mysqli_fetch_assoc($result3)) {
                                                    echo $row2['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Regu 04
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row4 = mysqli_fetch_assoc($result4)) {
                                                    echo $row4['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Regu 05
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row5 = mysqli_fetch_assoc($result5)) {
                                                    echo $row5['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Regu 06
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row6 = mysqli_fetch_assoc($result6)) {
                                                    echo $row6['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Regu 07
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row7 = mysqli_fetch_assoc($result7)) {
                                                    echo $row7['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEight">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                Regu 08
                                            </button>
                                        </h2>
                                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row8 = mysqli_fetch_assoc($result8)) {
                                                    echo $row8['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingNine">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                Regu 09
                                            </button>
                                        </h2>
                                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row9 = mysqli_fetch_assoc($result9)) {
                                                    echo $row9['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                                Regu 10
                                            </button>
                                        </h2>
                                        <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row10 = mysqli_fetch_assoc($result10)) {
                                                    echo $row10['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingEleven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                                                Regu 11
                                            </button>
                                        </h2>
                                        <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row11 = mysqli_fetch_assoc($result11)) {
                                                    echo $row11['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwelve">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                                Regu 12
                                            </button>
                                        </h2>
                                        <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row12 = mysqli_fetch_assoc($result12)) {
                                                    echo $row12['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThirteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                                Regu 13
                                            </button>
                                        </h2>
                                        <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row13 = mysqli_fetch_assoc($result13)) {
                                                    echo $row13['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFourteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                                Regu 14
                                            </button>
                                        </h2>
                                        <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row14 = mysqli_fetch_assoc($result14)) {
                                                    echo $row14['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFourteen">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFisteen" aria-expanded="false" aria-controls="collapseFifteen">
                                                Regu 15
                                            </button>
                                        </h2>
                                        <div id="collapseFisteen" class="accordion-collapse collapse" aria-labelledby="headingFisteen" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                            <?php
                                                while ($row15 = mysqli_fetch_assoc($result15)) {
                                                    echo $row15['Nama'] . "<br>";
                                                }
                                            ?>
                                            </div>
                                        </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
