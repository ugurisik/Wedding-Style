<?php

include "../database.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
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

    <script>
        function ChangePatternImage() {
            var select = document.getElementById("pattern");
            var image = document.getElementById("pattern-image");
            image.src = "../images/" + select.options[select.selectedIndex].textContent.replace(/\s/g, '');
        }



        // Türkçe Başlangıç 
        function changePicturefloral() {
            $('#uploadfloral').click();
        }

        function changePicturebloom() {
            $('#uploadbloom').click();
        }

        function changePicturelemon() {
            $('#uploadlemon').click();
        }

        function readURLfloral(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagefloral')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLbloom(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagebloom')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLlemon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagelemon')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        // Türkçe Bitiş 

        // İngilizce Başlangıç 

        function enchangePicturefloral() {
            $('#enuploadfloral').click();
        }

        function enchangePicturebloom() {
            $('#enuploadbloom').click();
        }

        function enchangePicturelemon() {
            $('#enuploadlemon').click();
        }

        function enreadURLfloral(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#enimagefloral')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function enreadURLbloom(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#enimagebloom')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function enreadURLlemon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#enimagelemon')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        // İngilizce Bitiş 

        // Almanca Başlangıç
        function dechangePicturefloral() {
            $('#deuploadfloral').click();
        }

        function dechangePicturebloom() {
            $('#deuploadbloom').click();
        }

        function dechangePicturelemon() {
            $('#deuploadlemon').click();
        }

        function dereadURLfloral(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#deimagefloral')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function dereadURLbloom(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#deimagebloom')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function dereadURLlemon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#deimagelemon')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        // Almanca Bitiş 
    </script>

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
                <div class="row">
                    <div class="col-xl-12 col-xxl-6 col-lg-6 col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Ana Sayfa Ayarları</h5>
                            </div>
                            <div class="card-body">

                                <div class="col-xs-12">
                                    <form action="homepagesettings.php" method="POST" enctype="multipart/form-data">
                                        <div class="row form-group justify-content-center">
                                            <div class="col-md-6">
                                                <label>Geçiş Efekti</label>
                                                <select onchange="ChangePatternImage()" name="pattern_select" title="Geçiş Efektini Seçiniz" id="pattern" class="form-control form-control-lg selectpicker">
                                                    <?php
                                                    $selectedpattern = $db->query("SELECT * FROM home")->fetch(PDO::FETCH_ASSOC);
                                                    $selectedpatternforimage = $db->query("SELECT * FROM data_pattern_image where ID=" . $selectedpattern['data_pattern_img_id'])->fetch(PDO::FETCH_ASSOC);
                                                    $getpatterns = $db->prepare("SELECT * FROM data_pattern_image");
                                                    $getpatterns->execute();
                                                    while ($rows = $getpatterns->fetch(PDO::FETCH_ASSOC)) {
                                                        if ($selectedpattern['data_pattern_img_id'] == $rows['ID']) {
                                                            echo "<option data-thumbnail='../" . $rows['ResimYolu'] . "' value='" . $rows['ID'] . "' selected>" . str_replace("images/", "", $rows['ResimYolu']) . "</option>";
                                                        } else {
                                                            echo "<option data-thumbnail='../" . $rows['ResimYolu'] . "' value='" . $rows['ID'] . "'>" . str_replace("images/", "", $rows['ResimYolu']) . "</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                                <div class="col-md-12 mt-4">
                                                    <img style="max-height: 400px;" id="pattern-image" class="card-img-top img-fluid" src="<?php echo "../" . $selectedpatternforimage['ResimYolu'] ?>" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
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
                                        <div class="row form-group">
                                            <?php
                                            $hometr = $db->query("SELECT * FROM home where Dil=1");
                                            $hometrcount = $hometr->rowCount();
                                            if ($hometrcount) {
                                                $hometr = $hometr->fetch(PDO::FETCH_ASSOC);
                                            }
                                            $homeen = $db->query("SELECT * FROM home where Dil=2");
                                            $homeencount = $homeen->rowCount();
                                            if ($homeencount) {
                                                $homeen = $homeen->fetch(PDO::FETCH_ASSOC);
                                            }
                                            $homede = $db->query("SELECT * FROM home where Dil=3");
                                            $homedecount = $homede->rowCount();
                                            if ($homedecount) {
                                                $homede = $homede->fetch(PDO::FETCH_ASSOC);
                                            }

                                            ?>
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center">
                                                    <label for="left">Sol Geçiş</label>
                                                    <input class="form-control" id="left" type="text" name="sticky_left_tr" value="<?php echo $hometr['sticky_left']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center">
                                                    <label for="left">Sağ Geçiş</label>
                                                    <input class="form-control" id="left" type="text" name="sticky_right_tr" value="<?php echo $hometr['sticky_right']; ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center">
                                                    <label for="left">Sol Geçiş</label>
                                                    <input class="form-control" id="left" type="text" name="sticky_left_en" value="<?php echo $homeen['sticky_left']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center">
                                                    <label for="left">Sağ Geçiş</label>
                                                    <input class="form-control" id="left" type="text" name="sticky_right_en" value="<?php echo $homeen['sticky_right']; ?>">
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center">
                                                    <label for="left">Sol Geçiş</label>
                                                    <input class="form-control" id="left" type="text" name="sticky_left_de" value="<?php echo $homede['sticky_left']; ?>">
                                                </div>
                                                <div class="row mx-4 justify-content-center">
                                                    <label for="left">Sağ Geçiş</label>
                                                    <input class="form-control" id="left" type="text" name="sticky_right_de" value="<?php echo $homede['sticky_right']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <?php
                                            $floral = $db->query("SELECT * FROM home_slider where ID=1")->fetch(PDO::FETCH_ASSOC);
                                            $bloom = $db->query("SELECT * FROM home_slider where ID=2")->fetch(PDO::FETCH_ASSOC);
                                            $lemon = $db->query("SELECT * FROM home_slider where ID=3")->fetch(PDO::FETCH_ASSOC);
                                            ?>
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center">
                                                    <div class="card-body">
                                                        <ul class="nav nav-pills mb-4">
                                                            <li class=" nav-item">
                                                                <a href="#page-1" class="badge badge-rounded badge-outline-secondary active mr-2" data-toggle="tab" aria-expanded="false">1. Sayfa</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#page-2" class="badge badge-rounded badge-outline-secondary mr-2" data-toggle="tab" aria-expanded="false">2. Sayfa</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#page-3" class="badge badge-rounded badge-outline-secondary mr-2" data-toggle="tab" aria-expanded="true">3. Sayfa</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div id="page-1" class="tab-pane active">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="floral_data_title" value="<?php echo $floral['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="floral_data_subtitle" value="<?php echo $floral['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="floral_data_firstline" value="<?php echo $floral['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="floral_data_secondline" value="<?php echo $floral['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="imagefloral" width="100%" src="<?php echo "../" . $floral['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="changePicturefloral()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="uploadfloral" name="uploadfloral" onchange="readURLfloral(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="page-2" class="tab-pane">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="bloom_data_title" value="<?php echo $bloom['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="bloom_data_subtitle" value="<?php echo $bloom['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="bloom_data_firstline" value="<?php echo $bloom['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="bloom_data_secondline" value="<?php echo $bloom['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="imagebloom" width="100%" src="<?php echo "../" . $bloom['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="changePicturebloom()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="uploadbloom" name="uploadbloom" onchange="readURLbloom(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="page-3" class="tab-pane">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="lemon_data_title" value="<?php echo $lemon['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="lemon_data_subtitle" value="<?php echo $lemon['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="lemon_data_firstline" value="<?php echo $lemon['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="lemon_data_secondline" value="<?php echo $lemon['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="imagelemon" width="100%" src="<?php echo "../" . $lemon['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="changePicturelemon()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="uploadlemon" name="uploadlemon" onchange="readURLlemon(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center">
                                                    <div class="card-body">
                                                        <?php
                                                        $enfloral = $db->query("SELECT * FROM home_slider where ID=4")->fetch(PDO::FETCH_ASSOC);
                                                        $enbloom = $db->query("SELECT * FROM home_slider where ID=5")->fetch(PDO::FETCH_ASSOC);
                                                        $enlemon = $db->query("SELECT * FROM home_slider where ID=6")->fetch(PDO::FETCH_ASSOC);
                                                        ?>
                                                        <ul class="nav nav-pills mb-4">
                                                            <li class=" nav-item">
                                                                <a href="#enpage-1" class="badge badge-rounded badge-outline-secondary active mr-2" data-toggle="tab" aria-expanded="false">1. Sayfa</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#enpage-2" class="badge badge-rounded badge-outline-secondary mr-2" data-toggle="tab" aria-expanded="false">2. Sayfa</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#enpage-3" class="badge badge-rounded badge-outline-secondary mr-2" data-toggle="tab" aria-expanded="true">3. Sayfa</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div id="enpage-1" class="tab-pane active">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enfloral_data_title" value="<?php echo $enfloral['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enfloral_data_subtitle" value="<?php echo $enfloral['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enfloral_data_firstline" value="<?php echo $enfloral['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enfloral_data_secondline" value="<?php echo $enfloral['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="enimagefloral" width="100%" src="<?php echo "../" . $enfloral['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="enchangePicturefloral()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="enuploadfloral" name="enuploadfloral" onchange="enreadURLfloral(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="enpage-2" class="tab-pane">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enbloom_data_title" value="<?php echo $enbloom['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enbloom_data_subtitle" value="<?php echo $enbloom['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enbloom_data_firstline" value="<?php echo $enbloom['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enbloom_data_secondline" value="<?php echo $enbloom['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="enimagebloom" width="100%" src="<?php echo "../" . $enbloom['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="enchangePicturebloom()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="enuploadbloom" name="enuploadbloom" onchange="enreadURLbloom(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="enpage-3" class="tab-pane">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enlemon_data_title" value="<?php echo $enlemon['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enlemon_data_subtitle" value="<?php echo $enlemon['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enlemon_data_firstline" value="<?php echo $enlemon['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="enlemon_data_secondline" value="<?php echo $enlemon['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="enimagelemon" width="100%" src="<?php echo "../" . $enlemon['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="enchangePicturelemon()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="enuploadlemon" name="enuploadlemon" onchange="enreadURLlemon(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row mx-4 justify-content-center">
                                                    <div class="card-body">
                                                        <?php
                                                        $enfloral = $db->query("SELECT * FROM home_slider where ID=7")->fetch(PDO::FETCH_ASSOC);
                                                        $enbloom = $db->query("SELECT * FROM home_slider where ID=8")->fetch(PDO::FETCH_ASSOC);
                                                        $enlemon = $db->query("SELECT * FROM home_slider where ID=9")->fetch(PDO::FETCH_ASSOC);
                                                        ?>
                                                        <ul class="nav nav-pills mb-4">
                                                            <li class=" nav-item">
                                                                <a href="#depage-1" class="badge badge-rounded badge-outline-secondary active mr-2" data-toggle="tab" aria-expanded="false">1. Sayfa</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#depage-2" class="badge badge-rounded badge-outline-secondary mr-2" data-toggle="tab" aria-expanded="false">2. Sayfa</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#depage-3" class="badge badge-rounded badge-outline-secondary mr-2" data-toggle="tab" aria-expanded="true">3. Sayfa</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div id="depage-1" class="tab-pane active">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="defloral_data_title" value="<?php echo $enfloral['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="defloral_data_subtitle" value="<?php echo $enfloral['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="defloral_data_firstline" value="<?php echo $enfloral['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="defloral_data_secondline" value="<?php echo $enfloral['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="deimagefloral" width="100%" src="<?php echo "../" . $enfloral['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="dechangePicturefloral()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="deuploadfloral" name="deuploadfloral" onchange="dereadURLfloral(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="depage-2" class="tab-pane">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="debloom_data_title" value="<?php echo $enbloom['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="debloom_data_subtitle" value="<?php echo $enbloom['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="debloom_data_firstline" value="<?php echo $enbloom['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="debloom_data_secondline" value="<?php echo $enbloom['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="deimagebloom" width="100%" src="<?php echo "../" . $enbloom['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="dechangePicturebloom()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="deuploadbloom" name="enuploadbloom" onchange="dereadURLbloom(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="depage-3" class="tab-pane">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row form-group">
                                                                            <div class="row col-md-12">
                                                                                <label for="left">Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="delemon_data_title" value="<?php echo $enlemon['data_title']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="delemon_data_subtitle" value="<?php echo $enlemon['data_subtitle']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="delemon_data_firstline" value="<?php echo $enlemon['data_firstline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label for="left">Başlık & Alt Başlık | Hover-Alt Başlık</label>
                                                                                <input class="form-control" id="left" type="text" name="delemon_data_secondline" value="<?php echo $enlemon['data_secondline']; ?>">
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <label>Görsel</label>
                                                                            </div>
                                                                            <div class="row col-md-12">
                                                                                <div class="col">
                                                                                    <img id="deimagelemon" width="100%" src="<?php echo "../" . $enlemon['slide_img'] ?>" style="cursor: pointer;">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row col-md-12 mt-2">
                                                                                <div class="col">
                                                                                    <img src="https://www.asptr.net/img/ss.png" onclick="dechangePicturelemon()" style="cursor: pointer; height:64px;">
                                                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                                                    <input accept="image/*" type="file" id="deuploadlemon" name="deuploadlemon" onchange="dereadURLlemon(this);" style="display: none;" />
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group justify-content-center text-center">
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">GÜNCELLE</button>
                                            </div>

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


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>