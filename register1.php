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
    <title>PMElectric | Register</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="./img/pm_favico.png">
</head>

<body id="page-top">
    <div id="wrapper">
        <?php include("sidebar.php") ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include("top-bar.php") ?>
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800">Form Register</h1>
                    <p class="mb-4">Mohon Isi Data pada Form di Bawah ini untuk Membuat Akun.</p>
                    <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password for security
    $nama = $_POST['nama'];
    $akses_id = $_POST['akses_id'];

    $conn->begin_transaction();

    try {
        $sql_admin = "INSERT INTO admin (username, password) VALUES (?, ?)";
        $stmt_admin = $conn->prepare($sql_admin);
        $stmt_admin->bind_param("ss", $username, $password);
        $stmt_admin->execute();

        $login_id = $stmt_admin->insert_id;

        $sql_admin_akses = "INSERT INTO admin_akses (login_id, akses_id) VALUES (?, ?)";
        $stmt_admin_akses = $conn->prepare($sql_admin_akses);
        $stmt_admin_akses->bind_param("ii", $login_id, $akses_id);
        $stmt_admin_akses->execute();

        $conn->commit();

        echo "Registrasi berhasil!";
    } catch (Exception $e) {
        $conn->rollback();
        echo "Registrasi gagal: " . $e->getMessage();
    } finally {
        $stmt_admin->close();
        $stmt_admin_akses->close();
        $conn->close();
    }
}
?>


                    <form method="POST" action="">
                        <div class="row">
                            <input type="hidden" name="page" value="design">
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
                                        <label class="control-label col-sm-4" for="akses_id">Roles</label>
                                        <div class="col-sm-8">
                                            <select name="akses_id" id="akses_id" class="form-control" required>
                                                <?php
                                                $query = "SELECT akses_id, nama FROM master_akses";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "<option value='".$row['akses_id']."'>".$row['nama']."</option>";
                                                }
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
            </div>
            <?php include("footer.php"); ?>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document