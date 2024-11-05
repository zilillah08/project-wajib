<?php
include'config.php'; 
session_start();
if (!isset($_SESSION['role'])) {
  header("Location:login.php?aksi=belum");
  exit();
}
$level = $_SESSION['role'];

if ($level !== 'admin') {
    // Jika pengguna bukan admin, arahkan ke halaman login
    header("Location: login.php?aksi=unauthorized");
    exit(); // Menghentikan eksekusi skrip
}

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>WorkSmart</title>
    <!-- Favicon icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logoWMK.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="home.php" class="brand-logo">
                <img class="logo-abbr" src="./images/logoWMK.png" alt="">
                
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>    
                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./login.php" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <a href="logout.php" class="nav-link"><span class="ml-2">Logout </span></a>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->
        
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                <?php 
                    if ($level=="admin") {
                     ?>
                    <li class="nav-label first">main menu</li>
                    <li><a class="" href="home.php" aria-expanded="false"><i
                                class="icon icon-home"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a class="" href="Workshop.php" aria-expanded="false"><i
                                class="fa fa-users"></i><span class="nav-text">Workshop</span></a>
                    </li>
                    <li><a class="" href="mitra.php" aria-expanded="false"><i
                                class="fa fa-handshake"></i><span class="nav-text">Mitra</span></a>
                    </li>
                    <li><a class="" href="peserta.php" aria-expanded="false"><i 
                                class="fa fa-user"></i><span class="nav-text">Peserta</span></a>
                    </li>
                    <li class="nav-label first">Transaksi</li>
                    <li><a class="" href="pembayaran.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">Pengelolaan Pembayaran</span></a>
                    </li>
                    <li class="nav-label first">Laporan</li>
                    <li><a class="" href="laporan.php" aria-expanded="false"><i
                                class="fa-solid fa-book"></i><span class="nav-text">Laporan Dan Statistik</span></a>
                    </li>
                    <li class="nav-label first">benefit</li>
                    <li><a class="" href="sertifikat.php" aria-expanded="false"><i
                                class="fa fa-certificate"></i><span class="nav-text">Sertifikat</span></a>
                    </li>
                    <?php 
                }
                ?>

                    <?php 
                    if ($level=="mitra") {
                     ?>
                      <li class="nav-label first">main menu</li>
                    <li><a class="" href="home.php" aria-expanded="false"><i
                                class="icon icon-home"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a class="" href="pembayaranPeserta.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">profil</span></a>
                    </li>
                    <li><a class="" href="pembayaranPeserta.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">Kelola Workshop</span></a>
                    </li>
                    <li><a class="" href="pembayaranPeserta.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">Daftar Peserta</span></a>
                    </li>
                    <li><a class="" href="pembayaranPeserta.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">Sertifikat</span></a>
                    </li>
                    <?php 
                }
                ?>
                <?php 
                    if ($level=="peserta") {
                     ?>
                    <li class="nav-label first">main menu</li>
                    <li><a class="" href="home.php" aria-expanded="false"><i
                                class="icon icon-home"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a class="" href="pembayaranPeserta.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">profil</span></a>
                    </li>
                    <li><a class="" href="pembayaranPeserta.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">Workshop Saya</span></a>
                    </li>
                    <li><a class="" href="pembayaranPeserta.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">Sertifikat</span></a>
                    </li>
                    <li class="nav-label first">main menu</li>
                    <li><a class="" href="pembayaranPeserta.php" aria-expanded="false"><i
                                class="fa fa-credit-card"></i><span class="nav-text">Pembayaran</span></a>
                    </li>
                    <?php 
                }
                ?>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, Selamat Datang Di WorkSmart  <?php echo $_SESSION['nama_user']; ?> </h4>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-responsive-sm">
                                        <thead>
                                        <form class="form-inline ml-3" action="pembayaran.php" method="POST"></form>
                                            <tr>
                                                <th>No</th>
                                                <th>Id Pembayaran</th>
                                                <th>Nama Peserta</th>
                                                <th>Nama Workshop</th>
                                                <th>Tanggal Pembayaran</th>
                                                <th>Status Pembayaran</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include 'config.php';
                                        $no=1;
                                        $query = mysqli_query($koneksi, "SELECT * FROM pembayaran");
                                        while ($data = mysqli_fetch_array($query)) {           
                                        ?>                             
                                           <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $data['id_pembayaran'] ?></td>
                                            <td><?php echo $data['nama_peserta'] ?></td>
                                            <td><?php echo $data['nama_workshop'] ?></td>
                                            <td><?php echo $data['tanggalWaktu_pembayaran'] ?></td>                                      
                                            <td><span class="badge badge-primary"><?php echo $data['status_pembayaran']?></td>                                          
                                            <td><a class ="btn btn-primary btn-block" href="editpembayaran.php?id_pembayaran=<?php echo $data['id_pembayaran'] ?>"><i class="fa-regular fa-pen-to-square"></i></a></td>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>