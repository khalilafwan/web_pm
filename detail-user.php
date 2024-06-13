<?php
require_once 'header.php'; // Sertakan file header.php yang berisi session start dan koneksi database

// Pastikan sesi pengguna sudah dimulai, jika belum redirect ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Ambil username dari sesi yang aktif
$username = $_SESSION['username'];

// Lakukan query untuk mengambil data username dan role dari tabel user
$query = "SELECT username, nama, role FROM user WHERE username = '$username'";
$result = mysqli_query($conn, $query);

// Periksa apakah query berhasil dieksekusi
if ($result) {
    // Ambil hasil query sebagai array asosiatif
    $data = mysqli_fetch_assoc($result);
} else {
    echo "Error fetching data: " . mysqli_error($conn);
    exit();
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

    <title>PMElectric | Profile</title>

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
        <?php include("sidebar.php") ?>
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Profile</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="container-xl px-4 mt-4">
                            <div class="row">

                                <div class="col">
                                    <!-- Account details card-->
                                    <div class="card mb-4">
                                        <div class="card-header">Account Details</div>
                                        <div class="card-body">
                                            <?php
                                            
                                            ?>
                                            <form>
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputUsername">Username</label>
                                                    <input class="form-control" id="inputUsername" type="text"
                                                        value="<?php echo $data['username']; ?>" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputNama">Nama</label>
                                                    <input class="form-control" id="inputNama" type="text"
                                                        value="<?php echo $data['nama']; ?>" readonly>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="small mb-1" for="inputRole">Role</label>
                                                    <input class="form-control" id="inputRole" type="text"
                                                        value="<?php echo $data['role']; ?>" readonly>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Content Row -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include("footer.php") ?>
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

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>