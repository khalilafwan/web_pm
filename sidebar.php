<?php
// Pastikan pengguna sudah login
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit();
}
require_once 'koneksi.php';
require_once 'query.php';
require_once 'crud-monitoring.php';
?>

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
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
                <?php if ($_SESSION['role'] == 'admin') { ?>
                <a class="collapse-item" href="import-project.php">Import Project</a>
                <a class="collapse-item" href="form-project.php">Input Project</a>
                <a class="collapse-item" href="form-design.php">Input Design</a>
                <a class="collapse-item" href="form-nesting.php">Input Nesting</a>
                <a class="collapse-item" href="form-program.php">Input Program</a>
                <a class="collapse-item" href="form-checker.php">Input Checker</a>
                <?php } ?>
                <?php if ($_SESSION['role'] == 'design') { ?>
                <a class="collapse-item" href="form-design.php">Input Design</a>
                <?php } ?>
                <?php if ($_SESSION['role'] == 'nesting') { ?>
                <a class="collapse-item" href="form-nesting.php">Input Nesting</a>
                <?php } ?>
                <?php if ($_SESSION['role'] == 'program') { ?>
                <a class="collapse-item" href="form-program.php">Input Program</a>
                <?php } ?>
                <?php if ($_SESSION['role'] == 'checker') { ?>
                <a class="collapse-item" href="form-checker.php">Input Checker</a>
                <?php } ?>
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
                <?php if ($_SESSION['role'] == 'admin') { ?>
                <h6 class="collapse-header">Fungsi:</h6>
                <a class="collapse-item" href="form-konsesi.php">Input Data</a>
                <?php } ?>
            </div>
        </div>
    </li>

    <!-- Nav Item - User Management Collapse Menu -->
    <?php if ($_SESSION['role'] == 'admin') { ?>
    <li class="nav-item">
        <?php if ($_SESSION['role'] == 'admin') { ?>
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUserManagement"
            aria-expanded="true" aria-controls="collapseUserManagement">
            <i class="fas fa-fw fa-user"></i>
            <span>Manajemen Pengguna</span>
        </a>
        <div id="collapseUserManagement" class="collapse" aria-labelledby="headingUserManagement"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="tables-pengguna.php">Daftar Pengguna</a>
                <h6 class="collapse-header">Fungsi:</h6>
                <a class="collapse-item" href="register.php">Tambah Pengguna</a>
            </div>
        </div>
        <?php } ?>
    </li>
    <?php } ?>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>