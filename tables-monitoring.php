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

    <title>PMElectric | Monitoring</title>

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
                    <h1 class="h3 mb-2 text-gray-800">Monitoring Project</h1>
                    <p class="mb-4">Memantau Project Berjalan di PT. Pura Mayungan</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Monitoring</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataMonitoring" width="0%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID PROJECT</th>
                                            <th>NO JO</th>
                                            <th>TGL JO</th>
                                            <th>PROYEK</th>
                                            <th>KODE GBJ</th>
                                            <th>NILAI HARGA</th>
                                            <th>NAMA PANEL</th>
                                            <th>TYPE JENIS</th>
                                            <th>TYPE FS/WM</th>
                                            <th>QTY UNIT</th>
                                            <th>QTY CELL</th>
                                            <th>WARNA</th>
                                            <th>NOMOR WO</th>
                                            <th>NO.SERI</th>
                                            <th>HEIGTH</th>
                                            <th>WIDTH</th>
                                            <th>DEEP</th>
                                            <th>MH STD</th>
                                            <th>MH AKTUAL</th>
                                            <th>TGL.SUBMIT FOR APPROVAL</th>
                                            <th>TGL APPROVED</th>
                                            <th>TGL RELEASE SOFT COPY</th>
                                            <th>TGL RELEASE HARD COPY</th>
                                            <th>BREAKDOWN</th>
                                            <th>BUSBAR</th>
                                            <th>TARGET PPC</th>
                                            <th>TARGET ENG</th>
                                            <th>DESIGN PIC</th>
                                            <th>DESIGN START</th>
                                            <th>DESIGN END</th>
                                            <th>NESTING PIC</th>
                                            <th>NESTING START</th>
                                            <th>NESTING END</th>
                                            <th>PROGRAM PIC</th>
                                            <th>PROGRAM START</th>
                                            <th>PROGRAM END</th>
                                            <th>CHECKER PIC</th>
                                            <th>CHECKER START</th>
                                            <th>CHECKER END</th>
                                            <th>TGL BOX SELESAI</th>
                                            <th>DUE DATE</th>
                                            <th>TGL TERBIT WO</th>
                                            <th>PLAN START PRODUKSI</th>
                                            <th>AKTUAL START PRODUKSI</th>
                                            <th>PLAN FG WO</th>
                                            <th>AKTUAL FG WO</th>
                                            <th>PROGRESS</th>
                                            <th>DESC PROGRESS</th>
                                            <th>STATUS</th>
                                            <th>DELIVERY NO</th>
                                            <th>DELIVERY TGL</th>
                                            <th>KETERANGAN</th>
                                            <?php if ($_SESSION['role'] == 'admin') { ?>
                                            <th>Aksi</th><?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $data = mysqli_query($conn, "select * from data_monitoring");
                                        while ($row = mysqli_fetch_array($data)) {
                                            echo "<tr>
                                            <td>" . $row['id'] . "</td>
                                            <td>" . $row['no_jo'] . "</td>
                                            <td>" . $row['tgl_jo'] . "</td>
                                            <td>" . $row['nama_project'] . "</td>
                                            <td>" . $row['kode_gbj'] . "</td>
                                            <td>Rp. " . $row['nilai_harga'] . "</td>
                                            <td>" . $row['nama_panel'] . "</td>
                                            <td>" . $row['tipe_jenis'] . "</td>
                                            <td>" . $row['tipe_fswm'] . "</td>
                                            <td>" . $row['qty_unit'] . "</td>
                                            <td>" . $row['qty_cell'] . "</td>
                                            <td>" . $row['warna'] . "</td>
                                            <td>" . $row['nomor_wo'] . "</td>
                                            <td>" . $row['nomor_seri'] . "</td>
                                            <td>" . $row['size_panel_height'] . "</td>
                                            <td>" . $row['size_panel_width'] . "</td>
                                            <td>" . $row['size_panel_deep'] . "</td>
                                            <td>" . $row['mh_std'] . "</td>
                                            <td>" . $row['mh_aktual'] . "</td>
                                            <td>" . $row['tgl_submit_dwg_for_approval'] . "</td>
                                            <td>" . $row['tgl_approved'] . "</td>
                                            <td>" . $row['tgl_release_dwg_softcopy'] . "</td>
                                            <td>" . $row['tgl_release_dwg_hardcopy'] . "</td>
                                            <td>" . $row['breakdown'] . "</td>
                                            <td>" . $row['busbar'] . "</td>
                                            <td>" . $row['target_ppc'] . "</td>
                                            <td>" . $row['target_eng'] . "</td>
                                            <td>" . $row['design_pic'] . "</td>
                                            <td>" . $row['design_start'] . "</td>
                                            <td>" . $row['design_end'] . "</td>
                                            <td>" . $row['nesting_pic'] . "</td>
                                            <td>" . $row['nesting_start'] . "</td>
                                            <td>" . $row['nesting_end'] . "</td>
                                            <td>" . $row['program_pic'] . "</td>
                                            <td>" . $row['program_start'] . "</td>
                                            <td>" . $row['program_end'] . "</td>
                                            <td>" . $row['checker_pic'] . "</td>
                                            <td>" . $row['checker_start'] . "</td>
                                            <td>" . $row['checker_end'] . "</td>
                                            <td>" . $row['tgl_box_selesai'] . "</td>
                                            <td>" . $row['due_date'] . "</td>
                                            <td>" . $row['tgl_terbit_wo'] . "</td>
                                            <td>" . $row['plan_start_produksi'] . "</td>
                                            <td>" . $row['aktual_start_produksi'] . "</td>
                                            <td>" . $row['plan_fg_wo'] . "</td>
                                            <td>" . $row['aktual_fg_wo'] . "</td>
                                            <td>" . $row['progress'] . "</td>
                                            <td>" . $row['desc_progress'] . "</td>
                                            <td>" . $row['status'] . "</td>
                                            <td>" . $row['delivery_no'] . "</td>
                                            <td>" . $row['delivery_tgl'] . "</td>
                                            <td>" . $row['keterangan'] . "</td>";

                                            // Check if the user has admin access
                                            if ($_SESSION['role'] == 'admin') {
                                                echo"<td><button type='button' class='btn btn-danger btn-circle btn-delete' data-toggle='modal' data-target='#deleteModal' data-id='{$row['id']}'><i class='fas fa-trash'></i>
                                            </td>";
                                            }   
                                            echo "</tr>";
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="DataTables/datatables.min.js"></script>
    <script src="js/delete-monitoring.js"></script>

</body>

</html>