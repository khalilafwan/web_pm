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
                    <h1 class="h3 mb-2 text-gray-800">Form Project</h1>
                    <p class="mb-4">Mohon Isi Data Project pada Form di Bawah ini.
                    </p>


                    <div class="row">

                        <!-- Border Left -->
                        <div class="col-lg-6">

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">ID Project</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan ID Project"
                                            name="id">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">NO JO</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Nomor JO"
                                            name="no_jo">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">TGL JO</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" placeholder="Masukan Tgl JO"
                                            name="tgl_jo">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">NAMA PROJECT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Nama Project"
                                            name="nama_project">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">KODE GBJ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Kode GBJ"
                                            name="kode_gbj">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">HARGA</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Harga"
                                            name="nilai_harga">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">NAMA PANEL</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Nama Panel"
                                            name="nama_panel">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">TIPE JENIS</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Tipe Jenis"
                                            name="tipe_jenis">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">TIPE FS/WM</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Tipe FS/WM"
                                            name="tipe_fswm">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">UNIT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Unit"
                                            name="qty_unit">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">CELL</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Cell"
                                            name="qty_cell">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">WARNA</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Warna"
                                            name="warna">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">NO WO</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan No WO"
                                            name="nomor_wo">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">NO SERI</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan No Seri"
                                            name="nomor_seri">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">HEIGHT</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Height"
                                            name="size_panel_height">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">WIDTH</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Width"
                                            name="size_panel_width">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">DEEP</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Deep"
                                            name="size_panel_deep">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">MH STD</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan MH STD"
                                            name="mh_std">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">MH AKTUAL</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan MH AKTUAL"
                                            name="mh_aktual">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">TGL SUBMIT DWG FOR APPROVAL</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="Masukkan Tgl"
                                            name="tgl_submit_dwg_for_approval">
                                    </div>
                                </div>
                            </div>

                        </div>



                        <!-- Border Right -->
                        <div class="col-lg-6">

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">Jumlah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">No. LKPJ</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">Status</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">TGL Matrial Datang</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="date-end ml-5 form-control datepicker col-sm-8"
                                            placeholder="Date End">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">TGL Pasang</label>
                                    <div class="col-sm-8">
                                        <input type="date" class="date-end ml-5 form-control datepicker col-sm-8"
                                            placeholder="Date End">
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-4 py-3">
                                <div class="card-body">
                                    <label class="control-label col-sm-4">Keterangan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary waves-effect waves-light " id="btn-submit">Simpan</button>
                    </div>
                    <input type="hidden" name="action" id="action" value="event_dialog_add_newpartnerdata" />
                    </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
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