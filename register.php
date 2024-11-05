<?php
include 'config.php'; 
session_start();
if (isset($_SESSION['role'])) {
    header("Location:loginUser.php?aksi=belum");
    exit();
}

if (isset($_POST['kirim'])) {
    // Menangani input data dari form
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $nama_user = mysqli_real_escape_string($koneksi, $_POST['nama_user']);
    $role = mysqli_real_escape_string($koneksi, $_POST['role']);
    
    // Menghasilkan ID pengguna baru
    $sql = mysqli_query($koneksi, "SELECT id_user FROM user ORDER BY id_user DESC LIMIT 1");
    $row = mysqli_fetch_array($sql);
    $id = $row ? $row['id_user'] : 'USR0000'; // ID terakhir, atau default jika kosong
    $id_number = (int)substr($id, 5) + 1; // Mengambil angka dari id_user
    $id_user = 'USR' . sprintf("%05d", $id_number); // Menambah 'USR' dan padding

   
    // Menyimpan ke database
    $query = "INSERT INTO user (id_user, email, password, nama_user, role) VALUES ('$id_user', '$email', '$password', '$nama_user','$role')";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location:loginUser.php?aksi=suksestambah");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>


<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register WorkSmart </title>
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
                                    <h4 class="text-center mb-4">Optimalkan Potensi, Wujudkan Efisiensi <p> Daftar WorkSmart Hari Ini!</h4>
                                    <form action="register.php" method="POST">
                                        <div class="form-group">
                                            <label><strong>Email</strong></label>
                                            <input type="text" class="form-control" id=" " name="email"  required>
                                        </div>
                                        <div class="form-group">
                                        <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" id=" " name="password" required>
                                        </div>
                                        <div class="form-group">
                                         <label><strong>Nama Lengkap</strong></label>
                                            <input type="text" class="form-control" id=" " name="nama_user"  required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Mendaftar Sebagai</strong></label><br>
                                            <label><input type="radio" name="role" value="mitra" onclick="disableOtherOption(this)" required> Mitra</label>
                                            <label><input type="radio" name="role" value="peserta" onclick="disableOtherOption(this)" required> Peserta</label>
                                        </div>
                                       
                                        <div class="text-center mt-4">
                                            <button type="submit" class="btn btn-primary btn-block" name="kirim">Lanjutkan</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Apakah Kamu Sudah Mempunyai Akun? <a class="text-primary" href="loginUser.php">Masuk</a></p>
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
    <!--endRemoveIf(production)-->
</body>

</html>