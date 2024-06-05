<?php
include 'header.php';
require_once 'fungsi.php';
//cek apakah tombol sudah ditekan
if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan
    if (inputdata($_POST) > 0) {
        echo "
				<script>  
					alert('Data Berhasil Ditambahkan');
					document.location.href ='tables-monitoring.php';
				</script>
				";
    } else {
        echo "
				<script>  
					alert('Data Gagal Ditambahkan');
					document.location.href ='tables-monitoring.php';
				</script>
				";
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

    <title>SB Admin 2 - Forms</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                <?php include ("top-bar.php") ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Form Nesting</h1>
                    <p class="mb-4">Mohon Isi Data Nesting pada Form di Bawah ini.
                    </p>
                    <form method="POST" action="">

                        <div class="row">

                            <!-- Border Left -->
                            <div class="col-lg-6">

                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4" for="id">ID Project</label>
                                        <div class="col-sm-8">
                                            <select name="id" id="statdrop"
                                                class="date-end ml-5 form-control datepicker col-sm-8">
                                                <?php
                                                $projectIds = getProjectIds(); // You need to implement this function
                                                foreach ($projectIds as $projectId) {
                                                    echo "<option value=\"$projectId\">$projectId</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class=" card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4">ID PIC</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="Masukkan PIC"
                                                name="nesting_pic">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Border Right -->
                            <div class="col-lg-6">

                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4">START</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="date-end ml-5 form-control datepicker col-sm-8"
                                                placeholder="Masukan Waktu Start" name="nesting_start">
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-4 py-3">
                                    <div class="card-body">
                                        <label class="control-label col-sm-4">END</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="date-end ml-5 form-control datepicker col-sm-8"
                                                placeholder="Masukan Waktu End" name="nesting_end">
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary waves-effect waves-light "
                                id="btn-submit">Simpan</button>
                        </div>
                        <input type="hidden" name="action" id="action" value="event_dialog_add_newpartnerdata" />
                    </form>

                </div>
                <!-- /.container-fluid -->

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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>