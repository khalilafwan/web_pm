<?php
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PMElectric | Konsesi</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">
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
                <?php include ("top-bar.php") ?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Konsesi Project</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Konsesi</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataKonsesi" width="0%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Konsesi</th>
                                            <th>JO</th>
                                            <th>WO</th>
                                            <th>Nama Project</th>
                                            <th>Nama Panel</th>
                                            <th>Unit</th>
                                            <th>Jenis</th>
                                            <th>NO RPB</th>
                                            <th>NO PO</th>
                                            <th>Kode Material</th>
                                            <th>Konsesi</th>
                                            <th>Jumlah</th>
                                            <th>NO LKPJ</th>
                                            <th>Status</th>
                                            <th>TGL Matrial Dtg</th>
                                            <th>TGL Pasang</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $data = mysqli_query($conn, "select * from konsesi");
                                        while ($row = mysqli_fetch_array($data)) {
                                            echo "
                                            <tr>
                                            <td>" . $row['id_konsesi'] . "</td>
                                            <td>" . $row['jo'] . "</td>
                                            <td>" . $row['wo'] . "</td>
                                            <td>" . $row['nama_project'] . "</td>
                                            <td>" . $row['nama_panel'] . "</td>
                                            <td>" . $row['unit'] . "</td>
                                            <td>" . $row['jenis'] . "</td>
                                            <td>" . $row['no_rpb'] . "</td>
                                            <td>" . $row['no_po'] . "</td>
                                            <td>" . $row['kode_material'] . "</td>
                                            <td>" . $row['konsesi'] . "</td>
                                            <td>" . $row['jumlah'] . "</td>
                                            <td>" . $row['no_lkpj'] . "</td>
                                            <td>" . $row['status'] . "</td>
                                            <td>" . $row['tgl_matrial_dtg'] . "</td>
                                            <td>" . $row['tgl_pasang'] . "</td>
                                            <td>" . $row['keterangan'] . "</td>
                                            <td><button type='button' class='btn btn-danger btn-circle' data-toggle='modal' data-target='#deleteModal' data-id='{$row['id_konsesi']}'><i class='fas fa-trash'></i></button>
                                            </td> 
                                            </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

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

    <!-- Delete Modal -->
    <div id="deleteModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Confirm Deletion</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this record?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

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
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="js/delete-konsesi.js"></script>

</body>

</html>