<?php 
include'config.php';
if (isset($_POST['kirim'])) {
  $email = $_POST['email'];
  $pass = $_POST['password'];

  $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$pass'");
  $row = mysqli_num_rows($query);

if ($row > 0) {
  $data = mysqli_fetch_array($query);
  session_start();
  $_SESSION['id_user']=$data['id_user'];
  $_SESSION['nama_user']=$data['nama_user'];
  $_SESSION['role']=$data['role'];
  
  if($_SESSION['role'] == 'admin'){
    header("Location:home.php");
  }else if($_SESSION['role'] == 'mitra'){
    header("Location:dashboardmitra.php");
  }else if($_SESSION['role'] == 'peserta'){
    header("Location:dashboardpeserta.php");
  }else{
    header("Location:loginUser.php?aksi=eror");
  }
}
}
// $pesan="";
// if (isset($_GET['aksi'])) {
//   $aksi = $_GET['aksi'];
//  if ($aksi=='eror') {
//     $pesan = "username dan password yang anda masukkan salah!!";
//   }elseif($aksi =='belum'){
//     $pesan = "anda belum login!";
//   }
// }
?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Login WorkSmart</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/logoWMK.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Masuk dan Lanjutkan <p>Perjalanan Cerdas Anda di WorkSmart</h4>
                                    <form action="loginUser.php" method="post">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="text" class="form-control" name="email" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Ingatkan Saya</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Lupa Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" name="kirim">Masuk</button>
                                        </div>
                                    </form>
                                    <div class="row">
                           <div class="new-account mt-3">
                                        <p>Kamu Belum Punya Akun? <a class="text-primary" href="register.php">Daftar</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>