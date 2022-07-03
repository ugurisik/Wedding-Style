<?php
include "../database.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}

$method = $_SERVER['REQUEST_METHOD'];
$status = "";
$statustype = "";
if ($method == "POST") {
    if (isset($_POST['updatepass'])) {
        $oldpass = $_POST['oldpass'];
        $newpass = $_POST['newpass'];
        $renewpass = $_POST['renewpass'];
        if ($newpass != $renewpass) {
            $status = "Yeni şifreleriniz uyuşmuyor.";
            $statustype = "false";
        }
        $getpass = $db->query("SELECT * from users where Username='" . $_SESSION['username'] . "'")->fetch(PDO::FETCH_ASSOC);
        if ($getpass['Password'] != $oldpass) {
            $status = "Lütfen güncel şifrenizi doğru giriniz.";
            $statustype = "false";
        }

        if ($status == "") {
            $update  = $db->prepare("UPDATE users set Password=? where Username=?");
            $update->execute(array($newpass, $_SESSION['username']));
            if ($update) {
                $status = "Şifreniz başarılı bir şekilde güncellendi.";
                $statustype = "true";
            } else {
                $status = "Şifreniz güncellenirken bir hata oluştu.";
                $statustype = "false";
            }
        }
    }
}



?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> Brideroom | Admin Sayfası </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.theme.default.min.css">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">



</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <?php include "navheader.php"; ?>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include "header.php"; ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include "sidebar.php"; ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    <?php
                    if ($statustype == "true") {
                        echo '<div class="col-md-12">
                        <div class="col-xl-12">
                            <div class="alert alert-success left-icon-big alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <div class="media">
                                    <div class="alert-left-icon-big">
                                        <span><i class="mdi mdi-check-circle-outline"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h5 class="mt-1 mb-1">BAŞARILI!</h5>
                                        <p>' . $status . '</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    } elseif ($statustype == "false") {
                        echo '
                        <div class="col-md-12">
                            <div class="col-xl-12">
                                <div class="alert alert-danger left-icon-big alert-dismissible fade show">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                    <div class="media">
                                        <div class="alert-left-icon-big">
                                            <span><i class="mdi mdi-alert"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="mt-1 mb-1">HATALI!</h5>
                                            <p>' . $status . '</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Kullanıcı Şifre Ayarı</h5>
                                </div>

                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col"><input type="text" name="oldpass" class="form-control" placeholder="Eski şifrenizi giriniz..."></div>
                                            <div class="col"><input type="text" name="newpass" class="form-control" placeholder="Yeni şifrenizi giriniz..."></div>
                                            <div class="col"><input type="text" name="renewpass" class="form-control" placeholder="Yeni şifrenizi tekrar giriniz..."></div>
                                            <div class="col justify-content-center text-center"><button type="submit" name="updatepass" class="btn btn-secondary" value="GÜNCELLE">GÜNCELLE</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->

        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morris/morris.min.js"></script>


    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="./vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="./vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="./vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="./vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="./vendor/jquery.counterup/jquery.counterup.min.js"></script>




</body>

</html>