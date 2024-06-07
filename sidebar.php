<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">


    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon">
                <!-- <link rel="icon" href="./img/PM.ico"> -->
                <!-- <i class="fas fa-laugh-wink"></i> -->
                <img src="./img/pm_favico.png" width="27px"></img>
            </div>
            <div class="sidebar-brand-text mx-3"><img src="./img/logoPM.png"></img></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="index.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>

        <!-- Nav Item - Monitoring Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMonitoring"
                aria-expanded="true" aria-controls="collapseMonitoring">
                <i class="fas fa-fw fa-desktop"></i>
                <span>Monitoring</span>
            </a>
            <div id="collapseMonitoring" class="collapse" aria-labelledby="headingMonitoring"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="tables-monitoring.php">Tables</a>
                    <h6 class="collapse-header">Fungsi:</h6>
                    <a class="collapse-item" href="import-project.php">Import Project</a>
                    <a class="collapse-item" href="form-project.php">Input Project</a>
                    <a class="collapse-item" href="form-design.php">Input Design</a>
                    <a class="collapse-item" href="form-nesting.php">Input Nesting</a>
                    <a class="collapse-item" href="form-program.php">Input Program</a>
                    <a class="collapse-item" href="form-checker.php">Input Checker</a>
                    <!-- <a class="collapse-item" href="tables-monitoring.php">Export</a> -->
                </div>
            </div>
        </li>

        <!-- Nav Item - Konsesi Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseKonsesi"
                aria-expanded="true" aria-controls="collapseKonsesi">
                <i class="fas fa-fw fa-desktop"></i>
                <span>Konsesi</span>
            </a>
            <div id="collapseKonsesi" class="collapse" aria-labelledby="headingKonsesi" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="tables-konsesi.php">Tables</a>
                    <h6 class="collapse-header">Fungsi:</h6>
                    <a class="collapse-item" href="form-konsesi.php">Input Data</a>
                    <!-- <a class="collapse-item" href="tables-konsesi.php">Export</a> -->
                </div>
            </div>
        </li>

        <!-- Nav Item - User Management Collapse Menu -->
        <li class="nav-item">

            <?php if (in_array("admin",$_SESSION['admin_akses'])) { ?>
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUserManagement"
                aria-expanded="true" aria-controls="collapseUserManagement">
                <i class="fas fa-fw fa-user"></i>
                <span>Manajemen Pengguna</span><?php } ?>
            </a>
            <div id="collapseUserManagement" class="collapse" aria-labelledby="headingUserManagement"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="tables-pengguna.php">Daftar Pengguna</a>
                    <h6 class="collapse-header">Fungsi:</h6>
                    <a class="collapse-item" href="register.php">Tambah Pengguna</a>
                    <a class="collapse-item" href="tables-konsesi.php">Edit Pengguna</a>
                    <a class="collapse-item" href="tables-konsesi.php">Daftar Organisasi</a>
                    <a class="collapse-item" href="tables-konsesi.php">Detil Organisasi</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="login.php">Login</a>
                    <a class="collapse-item" href="register.php">Register</a>
                    <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.php">404 Page</a>
                    <a class="collapse-item" href="blank.php">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.php">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <!-- <li class="nav-item">
            <a class="nav-link" href="tables.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li> -->

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>



    </ul>
    <!-- End of Sidebar -->
</body>

</html>