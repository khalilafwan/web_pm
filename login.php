<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:index.php");
    exit();
}
require_once 'koneksi.php'; // Ensure this file correctly sets up $conn
require_once 'query.php';
require_once 'crud-monitoring.php';

$username = "";
$password = "";
$err = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == '' || $password == '') {
        $err .= "<p>Silahkan Masukkan username dan password</p>";
    }

    if (empty($err)) {
        $sql = "SELECT * FROM user WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($result && mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                
                // // Debugging: Output fetched data
                // echo "<p>Username: " . htmlspecialchars($user['username']) . "</p>";
                // echo "<p>Hashed password from DB: " . htmlspecialchars($user['password']) . "</p>";
                // echo "<p>Input password: " . htmlspecialchars($password) . "</p>";

                if (password_verify($password, $user['password'])) {
                    // Password is correct
                    $_SESSION['username'] = $username;
                    $_SESSION['role'] = $user['role'];
                    header("location:index.php");
                    exit();
                } else {
                    // Password is incorrect
                    $err .= "<p>Password Salah</p>";
                }
            } else {
                $err .= "<p>Akun tidak ditemukan</p>";
            }

            mysqli_stmt_close($stmt);
        } else {
            $err .= "<p>Error executing the query: " . mysqli_error($conn) . "</p>";
        }
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
    <title>PMElectric | Login</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="./img/pm_favico.png">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-8 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><img src="./img/logoPM.png" alt=""></h1>
                                    </div>
                                    <form class="user" action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username"
                                                value="<?php echo htmlspecialchars($username); ?>" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                        </div>
                                        <?php
                                        if ($err) {
                                            echo "<h style='color: red; text-align: center;'>$err</h>";
                                        }
                                        ?>
                                        <hr>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" name="login"
                                            value="Login" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>