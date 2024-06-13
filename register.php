<?php
require_once 'header.php';
require_once 'koneksi.php';

// Ambil data role dari database
$query = "SELECT DISTINCT role FROM user"; // Ubah query sesuai struktur tabel Anda
$result = mysqli_query($conn, $query);

// Inisialisasi variabel error
$err = '';

// Proses form jika method POST terdeteksi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $role = $_POST['role'];

    // Validasi input
    if (empty($username) || empty($password) || empty($nama) || empty($role)) {
        $err = "Semua bidang harus diisi!";
    } else {
        // Check if username already exists
        $check_query = "SELECT username FROM user WHERE username = ?";
        $check_stmt = mysqli_prepare($conn, $check_query);
        mysqli_stmt_bind_param($check_stmt, "s", $username);
        mysqli_stmt_execute($check_stmt);
        mysqli_stmt_store_result($check_stmt);

        if (mysqli_stmt_num_rows($check_stmt) > 0) {
            $err = "Username sudah digunakan. Silakan pilih username lain.";
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert data ke dalam tabel user
            $insert_query = "INSERT INTO user (username, password, nama, role) VALUES (?, ?, ?, ?)";
            $insert_stmt = mysqli_prepare($conn, $insert_query);
            mysqli_stmt_bind_param($insert_stmt, "ssss", $username, $hashed_password, $nama, $role);

            if (mysqli_stmt_execute($insert_stmt)) {
                header("location: login.php");
                exit();
            } else {
                $err = "Gagal menyimpan data: " . mysqli_error($conn);
            }

            mysqli_stmt_close($insert_stmt);
        }

        mysqli_stmt_close($check_stmt);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PMElectric | Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="./img/pm_favico.png">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Ini Sidebar -->
        <?php include ("sidebar.php") ?>
        <!-- Batas Akhir Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include("top-bar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Form Register</h1>
                    <p class="mb-4">Mohon Isi Data pada Form di Bawah ini untuk Membuat Akun.</p>
                    <?php if (!empty($err)) : ?>
                    <div class="alert alert-danger"><?php echo $err; ?></div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Username"
                                                name="username" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" placeholder="Masukkan Password"
                                                name="password" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4">Nama</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Masukkan Nama"
                                                name="nama" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4" for="role">Role</label>
                                        <div class="col-sm-8">
                                            <select name="role" id="role" class="form-control" required>
                                                <?php
                                                // Loop through each role and create an option element
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='{$row['role']}'>{$row['role']}</option>";
                                                }

                                                // Free result set
                                                mysqli_free_result($result);
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>

                </div>
                <!-- /.container-fluid -->


            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include ("footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugins -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>