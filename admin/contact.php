<?php
include "../database.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}

$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {

    if (isset($_POST['iletisimguncelle'])) {
        $has_mask = $_POST['has_mask'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];
        $sendmessage = $_POST['sendmessage'];
        $has_animation = $_POST['has_animation'];
        $mail = $_POST['mail'];
        $adres = $_POST['adres'];
        $adreslink = $_POST['adreslink'];
        $phonenumber = $_POST['phonenumber'];
        $successmessage = $_POST['successmessage'];
        $failmessage = $_POST['failmessage'];

        $has_mask_en = $_POST['has_mask_en'];
        $name_en = $_POST['name_en'];
        $phone_en = $_POST['phone_en'];
        $email_en = $_POST['email_en'];
        $comments_en = $_POST['comments_en'];
        $sendmessage_en = $_POST['sendmessage_en'];
        $has_animation_en = $_POST['has_animation_en'];
        $mail_en = $_POST['mail_en'];
        $adres_en = $_POST['adres_en'];
        $adreslink_en = $_POST['adreslink_en'];
        $phonenumber_en = $_POST['phonenumber_en'];
        $successmessage_en = $_POST['successmessage_en'];
        $failmessage_en = $_POST['failmessage_en'];


        $has_mask_de = $_POST['has_mask_de'];
        $name_de = $_POST['name_de'];
        $phone_de = $_POST['phone_de'];
        $email_de = $_POST['email_de'];
        $comments_de = $_POST['comments_de'];
        $sendmessage_de = $_POST['sendmessage_de'];
        $has_animation_de = $_POST['has_animation_de'];
        $mail_de = $_POST['mail_de'];
        $adres_de = $_POST['adres_de'];
        $adreslink_de = $_POST['adreslink_de'];
        $phonenumber_de = $_POST['phonenumber_de'];
        $successmessage_de = $_POST['successmessage_de'];
        $failmessage_de = $_POST['failmessage_de'];

        $status = false;
        $update = $db->prepare("UPDATE contact set has_mask=?,name=?,phone=?,email=?,comments=?,sendmessage=?,has_animation=?,mail=?,adres=?,adreslink=?,phonenumber=?,successmessage=?,failmessage=? where Dil=?");
        if ($update->execute(array($has_mask, $name, $phone, $email, $comments, $sendmessage, $has_animation, $mail, $adres, $adreslink, $phonenumber, $successmessage, $failmessage, 1))) {
            $status = true;
        }
        $updatede = $db->prepare("UPDATE contact set has_mask=?,name=?,phone=?,email=?,comments=?,sendmessage=?,has_animation=?,mail=?,adres=?,adreslink=?,phonenumber=?,successmessage=?,failmessage=? where Dil=?");
        if ($updatede->execute(array($has_mask_de, $name_de, $phone_de, $email_de, $comments_de, $sendmessage_de, $has_animation_de, $mail_de, $adres_de, $adreslink_de, $phonenumber_de, $successmessage_de, $failmessage_de, 3))) {
            $status = true;
        }
        $updateen = $db->prepare("UPDATE contact set has_mask=?,name=?,phone=?,email=?,comments=?,sendmessage=?,has_animation=?,mail=?,adres=?,adreslink=?,phonenumber=?,successmessage=?,failmessage=? where Dil=?");
        if ($updateen->execute(array($has_mask_en, $name_en, $phone_en, $email_en, $comments_en, $sendmessage_en, $has_animation_en, $mail_en, $adres_en, $adreslink_en, $phonenumber_en, $successmessage_en, $failmessage_en, 2))) {
            if ($status) {
                header("location:contact.php?basarili");
            } else {
                header("location:contact.php?hatali");
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
    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
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
                    if (isset($_GET['basarili'])) {
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
                                        <p>Başarılı bir şekilde güncellendi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    } elseif (isset($_GET['hatali'])) {
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
                                            <p>Güncelleme esnasında bir hata oluştu.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>

                </div>
                <div class="row col-xl-12">
                    <div class="col-xl-12 col-xxl-6 col-lg-6 col-sm-6">

                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">İletişim Sayfası</h5>
                            </div>
                            <div class="card-body">
                                <div class="row form-group">
                                    <?php $languages = $db->prepare("SELECT * FROM dil");
                                    $languages->execute();
                                    while ($rows = $languages->fetch(PDO::FETCH_ASSOC)) {
                                    ?>
                                        <div class="col">
                                            <div class="row mb-4 mt-4 justify-content-center">
                                                <label><strong><?php echo $rows['Dil']; ?></strong></label>
                                            </div>

                                        </div>
                                    <?php }
                                    ?>
                                </div>
                                <form action="" method="POST">
                                    <div class="row form-group">
                                        <?php
                                        $mailtr = $db->query("SELECT * FROM contact where Dil=1");
                                        $mailtrcount = $mailtr->rowCount();
                                        if ($mailtrcount) {
                                            $mailtr = $mailtr->fetch(PDO::FETCH_ASSOC);
                                        }
                                        $mailen = $db->query("SELECT * FROM contact where Dil=2");
                                        $mailencount = $mailen->rowCount();
                                        if ($mailencount) {
                                            $mailen = $mailen->fetch(PDO::FETCH_ASSOC);
                                        }

                                        $mailde = $db->query("SELECT * FROM contact where Dil=3");
                                        $maildecount = $mailde->rowCount();
                                        if ($maildecount) {
                                            $mailde = $mailde->fetch(PDO::FETCH_ASSOC);
                                        }

                                        ?>
                                        <div class="col">
                                            <div class="row mx-4 justify-content-center">
                                                <label for="left">Başlık</label>
                                                <input class="form-control" id="left" type="text" name="has_mask" value="<?php echo $mailtr['has_mask']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İsim</label>
                                                <input class="form-control" id="left" type="text" name="name" value="<?php echo $mailtr['name']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Telefon Numarası</label>
                                                <input class="form-control" id="left" type="text" name="phone" value="<?php echo $mailtr['phone']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mail Adresi</label>
                                                <input class="form-control" id="left" type="text" name="email" value="<?php echo $mailtr['email']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mesaj</label>
                                                <input class="form-control" id="left" type="text" name="comments" value="<?php echo $mailtr['comments']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Gönder Butonu</label>
                                                <input class="form-control" id="left" type="text" name="sendmessage" value="<?php echo $mailtr['sendmessage']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Alt Başlık</label>
                                                <input class="form-control" id="left" type="text" name="has_animation" value="<?php echo $mailtr['has_animation']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mail Adresiniz</label>
                                                <input class="form-control" id="left" type="text" name="mail" value="<?php echo $mailtr['mail']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Adresiniz</label>
                                                <input class="form-control" id="left" type="text" name="adres" value="<?php echo $mailtr['adres']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Adres Linkiniz</label>
                                                <input class="form-control" id="left" type="text" name="adreslink" value="<?php echo $mailtr['adreslink']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Telefon Numaranız</label>
                                                <input class="form-control" id="left" type="text" name="phonenumber" value="<?php echo $mailtr['phonenumber']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2" style="display:none">
                                                <label for="left">Whatsapp</label>
                                                <input class="form-control" id="left" type="text" name="Whatsapp" value="<?php echo $mailtr['Whatsapp']; ?>" >
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İşlem Başarılı Mesajı</label>
                                                <input class="form-control" id="left" type="text" name="successmessage" value="<?php echo $mailtr['successmessage']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İşlem Başarısız Mesajı</label>
                                                <input class="form-control" id="left" type="text" name="failmessage" value="<?php echo $mailtr['failmessage']; ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row mx-4 justify-content-center">
                                                <label for="left">Başlık</label>
                                                <input class="form-control" id="left" type="text" name="has_mask_en" value="<?php echo $mailen['has_mask']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İsim</label>
                                                <input class="form-control" id="left" type="text" name="name_en" value="<?php echo $mailen['name']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Telefon Numarası</label>
                                                <input class="form-control" id="left" type="text" name="phone_en" value="<?php echo $mailen['phone']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mail Adresi</label>
                                                <input class="form-control" id="left" type="text" name="email_en" value="<?php echo $mailen['email']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mesaj</label>
                                                <input class="form-control" id="left" type="text" name="comments_en" value="<?php echo $mailen['comments']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Gönder Butonu</label>
                                                <input class="form-control" id="left" type="text" name="sendmessage_en" value="<?php echo $mailen['sendmessage']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Alt Başlık</label>
                                                <input class="form-control" id="left" type="text" name="has_animation_en" value="<?php echo $mailen['has_animation']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mail Adresiniz</label>
                                                <input class="form-control" id="left" type="text" name="mail_en" value="<?php echo $mailen['mail']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Adresiniz</label>
                                                <input class="form-control" id="left" type="text" name="adres_en" value="<?php echo $mailen['adres']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Adres Linkiniz</label>
                                                <input class="form-control" id="left" type="text" name="adreslink_en" value="<?php echo $mailen['adreslink']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Telefon Numaranız</label>
                                                <input class="form-control" id="left" type="text" name="phonenumber_en" value="<?php echo $mailen['phonenumber']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2" style="display:none">
                                                <label for="left">Whatsapp</label>
                                                <input class="form-control" id="left" type="text" name="Whatsapp_en" value="<?php echo $mailen['Whatsapp']; ?>" disabled>
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İşlem Başarılı Mesajı</label>
                                                <input class="form-control" id="left" type="text" name="successmessage_en" value="<?php echo $mailen['successmessage']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İşlem Başarısız Mesajı</label>
                                                <input class="form-control" id="left" type="text" name="failmessage_en" value="<?php echo $mailen['failmessage']; ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row mx-4 justify-content-center">
                                                <label for="left">Başlık</label>
                                                <input class="form-control" id="left" type="text" name="has_mask_de" value="<?php echo $mailde['has_mask']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İsim</label>
                                                <input class="form-control" id="left" type="text" name="name_de" value="<?php echo $mailde['name']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Telefon Numarası</label>
                                                <input class="form-control" id="left" type="text" name="phone_de" value="<?php echo $mailde['phone']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mail Adresi</label>
                                                <input class="form-control" id="left" type="text" name="email_de" value="<?php echo $mailde['email']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mesaj</label>
                                                <input class="form-control" id="left" type="text" name="comments_de" value="<?php echo $mailde['comments']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Gönder Butonu</label>
                                                <input class="form-control" id="left" type="text" name="sendmessage_de" value="<?php echo $mailde['sendmessage']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Alt Başlık</label>
                                                <input class="form-control" id="left" type="text" name="has_animation_de" value="<?php echo $mailde['has_animation']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Mail Adresiniz</label>
                                                <input class="form-control" id="left" type="text" name="mail_de" value="<?php echo $mailde['mail']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Adresiniz</label>
                                                <input class="form-control" id="left" type="text" name="adres_de" value="<?php echo $mailde['adres']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Adres Linkiniz</label>
                                                <input class="form-control" id="left" type="text" name="adreslink_de" value="<?php echo $mailde['adreslink']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">Telefon Numaranız</label>
                                                <input class="form-control" id="left" type="text" name="phonenumber_de" value="<?php echo $mailde['phonenumber']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2" style="display:none">
                                                <label for="left">Whatsapp</label>
                                                <input class="form-control" id="left" type="text" name="Whatsapp_de" value="<?php echo $mailde['Whatsapp']; ?>" disabled>
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İşlem Başarılı Mesajı</label>
                                                <input class="form-control" id="left" type="text" name="successmessage_de" value="<?php echo $mailde['successmessage']; ?>">
                                            </div>
                                            <div class="row mx-4 justify-content-center mt-2">
                                                <label for="left">İşlem Başarısız Mesajı</label>
                                                <input class="form-control" id="left" type="text" name="failmessage_de" value="<?php echo $mailde['failmessage']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group justify-content-center text-center">
                                        <div class="col">
                                            <button type="submit" name="iletisimguncelle" class="btn btn-primary" value="GÜNCELLE">GÜNCELLE</button>
                                        </div>
                                    </div>
                                </form>
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
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js">
    </script>
    <script src="./js/quixnav-init.js">
    </script>
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

    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>
    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>