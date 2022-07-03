<?php include "../database.php";
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header("Refresh: 1; url=index.php");
}
if (isset($_SESSION['username'])) {
    header("location:home.php");
}



if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $control  = $db->query("SELECT * FROM users where Username='$username' and Password='$password'")->rowCount();
    if ($control) {
        $_SESSION['username'] = $username;
        header("location:home.php");
    } else {
        echo "<script>alert('Hesap bilgileri yanlış')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="tr" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Brideroom | Admin Sayfası </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">


</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Hesap Girişi</h4>
                                    <form action="" method="POST">
                                        <div class="form-group">
                                            <label><strong>Kullanıcı Adı :</strong></label>
                                            <input type="text" class="form-control" name="username" required>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Şifre :</strong></label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>