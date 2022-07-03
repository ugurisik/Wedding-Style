<?php
include "../database.php";
session_start();
if (!isset($_SESSION['username'])) {
    header("location:index.php");
}

$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
    if (isset($_POST['hizmetekle'])) {
        $adi_tr = $_POST['adi_tr'];
        $aciklama_tr = $_POST['aciklama_tr'];

        $adi_en = $_POST['adi_en'];
        $aciklama_en = $_POST['aciklama_en'];

        $adi_de = $_POST['adi_de'];
        $aciklama_de = $_POST['aciklama_de'];

        $succes = false;
        $ekletr = $db->prepare("insert into  services (ServicesID,link,accordion_content,Dil) values(?,?,?,?)");
        if ($ekletr->execute(array(1, $adi_tr, $aciklama_tr, 1))) {
            $succes = true;
        }
        $ekleen = $db->prepare("insert into  services (ServicesID,link,accordion_content,Dil) values(?,?,?,?)");
        if ($ekleen->execute(array(1, $adi_en, $aciklama_en, 2))) {
            $succes = true;
        }

        $eklede = $db->prepare("insert into  services (ServicesID,link,accordion_content,Dil) values(?,?,?,?)");
        if ($eklede->execute(array(1, $adi_de, $aciklama_de, 3))) {
            $succes = true;
        }

        if ($succes) {
            echo "<script>alert('Hizmet Başarılı Bir Şekilde Eklendi')</script>";
            echo ("<script>window.location.href = 'brideroom.php?hizmetekle'</script>");
        }
    }
    if (isset($_POST['uyeekle'])) {
        $name = $_POST['Adi'];
        function uploadImage($inputname)
        {
            $target_dir = "../images/";
            $target_file = $target_dir . strtolower(str_replace(" ", "", basename($_FILES[$inputname]["name"])));
            move_uploaded_file($_FILES[$inputname]["tmp_name"], $target_file);
            return "images/" . strtolower(str_replace(" ", "", basename($_FILES[$inputname]["name"])));
        }
        $upload = "";
        if ($_FILES['upload']['name'] != '') {
            $upload = uploadImage("upload");
        }

        $ekle = $db->prepare("insert into  members (EkipID,Adi,ResimYolu) values(?,?,?)");
        if ($ekle->execute(array(1, $name, $upload))) {
            echo "<script>alert('Üye Başarılı Bir Şekilde Eklendi')</script>";
            // echo ("<script>window.location.href = 'brideroom.php?uyeekle'</script>");
        }
    }
    if (isset($_POST['hizmetguncelle'])) {
        $ad = $_POST['ad'];
        $aciklama = $_POST['aciklama'];
        $id = $_POST['id'];
        $update = $db->prepare("UPDATE services set link=?,accordion_content=? where ID=?");
        if ($update->execute(array($ad, $aciklama, $id))) {
            echo "<script>alert('Hizmet Başarılı Bir Şekilde Güncellendi')</script>";
            echo ("<script>window.location.href = 'brideroom.php'</script>");
        }
    }
    if (isset($_POST['uyeduzenle'])) {
        $ad = $_POST['uyeadi'];
        $id = $_POST['id'];

        function getImagePath($id, $dbb)
        {
            $getimage = $dbb->query("SELECT * FROM members where ID=" . $id)->fetch(PDO::FETCH_ASSOC);
            return $getimage['ResimYolu'];
        }

        function uploadImage($inputname)
        {
            $target_dir = "../images/";
            $target_file = $target_dir . strtolower(str_replace(" ", "", basename($_FILES[$inputname]["name"])));
            move_uploaded_file($_FILES[$inputname]["tmp_name"], $target_file);
            return "images/" . strtolower(str_replace(" ", "", basename($_FILES[$inputname]["name"])));
        }
        $upload = "";
        if ($_FILES['uploaduye']['name'] != '') {
            $upload = uploadImage("uploaduye");
        } else {
            $upload = getImagePath($id, $db);
        }

        $update = $db->prepare("UPDATE members set Adi=?,ResimYolu=? where ID=?");
        if ($update->execute(array($ad, $upload, $id))) {
            echo "<script>alert('Üye Başarılı Bir Şekilde Güncellendi')</script>";
            echo ("<script>window.location.href = 'brideroom.php'</script>");
        }
    }
    if (isset($_POST['submit'])) {
        $hero_title_tr = $_POST['hero_title_tr'];
        $hero_subtitle_tr = $_POST['hero_subtitle_tr'];
        $has_mask_title_tr = $_POST['has_mask_title_tr'];
        $has_mask_subtitle_tr = $_POST['has_mask_subtitle_tr'];
        $has_mask_subtitle_2_tr = $_POST['has_mask_subtitle_2_tr'];
        $has_mask_services_tr = $_POST['has_mask_services_tr'];
        $has_mask_members_tr = $_POST['has_mask_members_tr'];
        $next_hero_title_tr = $_POST['next_hero_title_tr'];
        $next_hero_subtitle_tr = $_POST['next_hero_subtitle_tr'];

        $hero_title_en = $_POST['hero_title_en'];
        $hero_subtitle_en = $_POST['hero_subtitle_en'];
        $has_mask_title_en = $_POST['has_mask_title_en'];
        $has_mask_subtitle_en = $_POST['has_mask_subtitle_en'];
        $has_mask_subtitle_2_en = $_POST['has_mask_subtitle_2_en'];
        $has_mask_services_en = $_POST['has_mask_services_en'];
        $has_mask_members_en = $_POST['has_mask_members_en'];
        $next_hero_title_en = $_POST['next_hero_title_en'];
        $next_hero_subtitle_en = $_POST['next_hero_subtitle_en'];

        $hero_title_de = $_POST['hero_title_de'];
        $hero_subtitle_de = $_POST['hero_subtitle_de'];
        $has_mask_title_de = $_POST['has_mask_title_de'];
        $has_mask_subtitle_de = $_POST['has_mask_subtitle_de'];
        $has_mask_subtitle_2_de = $_POST['has_mask_subtitle_2_de'];
        $has_mask_services_de = $_POST['has_mask_services_de'];
        $has_mask_members_de = $_POST['has_mask_members_de'];
        $next_hero_title_de = $_POST['next_hero_title_de'];
        $next_hero_subtitle_de = $_POST['next_hero_subtitle_de'];

        $update = false;

        $updatetr = $db->prepare("UPDATE brideroom set hero_title=?,hero_subtitle=?,has_mask_title=?,has_mask_subtitle=?,has_mask_subtitle_2=?,has_mask_services=?,has_mask_members=?,next_hero_title=?,next_hero_subtitle=? where Dil=?");
        $updatetr = $updatetr->execute(array($hero_title_tr, $hero_subtitle_tr, $has_mask_title_tr, $has_mask_subtitle_tr, $has_mask_subtitle_2_tr, $has_mask_services_tr, $has_mask_members_tr, $next_hero_title_tr, $next_hero_subtitle_tr, 1));

        $updateen = $db->prepare("UPDATE brideroom set hero_title=?,hero_subtitle=?,has_mask_title=?,has_mask_subtitle=?,has_mask_subtitle_2=?,has_mask_services=?,has_mask_members=?,next_hero_title=?,next_hero_subtitle=? where Dil=?");
        $updateen = $updateen->execute(array($hero_title_en, $hero_subtitle_en, $has_mask_title_en, $has_mask_subtitle_en, $has_mask_subtitle_2_en, $has_mask_services_en, $has_mask_members_en, $next_hero_title_en, $next_hero_subtitle_en, 2));

        $updatede = $db->prepare("UPDATE brideroom set hero_title=?,hero_subtitle=?,has_mask_title=?,has_mask_subtitle=?,has_mask_subtitle_2=?,has_mask_services=?,has_mask_members=?,next_hero_title=?,next_hero_subtitle=? where Dil=?");
        $updatede = $updatede->execute(array($hero_title_de, $hero_subtitle_de, $has_mask_title_de, $has_mask_subtitle_de, $has_mask_subtitle_2_de, $has_mask_services_de, $has_mask_members_de, $next_hero_title_de, $next_hero_subtitle_de, 3));

        if ($updatetr) {
            $update = true;
        } else {
            $update = false;
        }
        if ($updateen) {
            $update = true;
        } else {
            $update = false;
        }

        if ($updatede) {
            $update = true;
        } else {
            $update = false;
        }
        if ($update) {
            header("location:brideroom.php?basarili");
        } else {
            header("location:brideroom.php?hatali");
        }
    }
}

$sayfakontrol = "";
if ($method == "GET") {
    if (isset($_GET['hizmetsil'])) {
        $hizmetid = $_GET['hizmetsil'];
        $sil = $db->prepare("DELETE from services where ID=?");
        $sil->execute(array($hizmetid));
        echo "<script>alert('Hizmet Başarılı Bir Şekilde Silindi')</script>";
        echo ("<script>window.location.href = 'brideroom.php'</script>");
    } elseif (isset($_GET['uyesil'])) {
        $uyeid = $_GET['uyesil'];
        $sil = $db->prepare("DELETE from members where ID=?");
        $sil->execute(array($uyeid));
        echo "<script>alert('Üye Başarılı Bir Şekilde Silindi')</script>";
        echo ("<script>window.location.href = 'brideroom.php'</script>");
    } elseif (isset($_GET['hizmetekle'])) {
        $sayfakontrol = "hizmetekle";
    } elseif (isset($_GET['uyeekle'])) {
        $sayfakontrol = "uyeekle";
    } elseif (isset($_GET['hizmetduzenle'])) {
        $sayfakontrol = "hizmetduzenle";
    } elseif (isset($_GET['uyeduzenle'])) {
        $sayfakontrol = "uyeduzenle";
    } else {
        $sayfakontrol = "";
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

    <script>
        function changePicture() {
            $('#upload').click();
        }

        function changePictureuye() {
            $('#uploaduye').click();
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURLuye(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imageuye')
                        .attr('src', e.target.result);

                };
                reader.readAsDataURL(input.files[0]);
            }
        }
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
                        <?php
                        if ($sayfakontrol == "") { ?>
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Brideroom Ayarları</h5>
                                </div>
                                <div class="card-body">

                                    <div class="col-xs-12">
                                        <form action="" method="POST" enctype="">

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
                                            <?php
                                            $bridetr = $db->query("SELECT * FROM brideroom where dil=1");
                                            $bridetrcount = $bridetr->rowCount();
                                            if ($bridetrcount) {
                                                $bridetr = $bridetr->fetch(PDO::FETCH_ASSOC);
                                            }
                                            $brideen = $db->query("SELECT * FROM brideroom where dil=2");
                                            $brideencount = $brideen->rowCount();
                                            if ($brideencount) {
                                                $brideen = $brideen->fetch(PDO::FETCH_ASSOC);
                                            }
                                            $bridede = $db->query("SELECT * FROM brideroom where dil=3");
                                            $bridedecount = $bridede->rowCount();
                                            if ($bridedecount) {
                                                $bridede = $bridede->fetch(PDO::FETCH_ASSOC);
                                            }
                                            ?>
                                            <div class="row form-group">
                                                <div class="col">
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="hero_title_tr" value="<?php echo $bridetr['hero_title']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Alt Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="hero_subtitle_tr" value="<?php echo $bridetr['hero_subtitle']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 1</label>
                                                        <textarea rows="3" class="form-control" id="left" type="text" name="has_mask_title_tr"><?php echo $bridetr['has_mask_title']; ?></textarea>
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 2</label>
                                                        <textarea rows="6" class="form-control" id="left" type="text" name="has_mask_subtitle_tr"><?php echo $bridetr['has_mask_subtitle']; ?></textarea>
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 3</label>
                                                        <textarea rows="4" class="form-control" id="left" type="text" name="has_mask_subtitle_2_tr"><?php echo $bridetr['has_mask_subtitle_2']; ?></textarea>
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Hizmetlerimiz Alanı</label>
                                                        <input class="form-control" id="left" type="text" name="has_mask_services_tr" value="<?php echo $bridetr['has_mask_services']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Ekip Üyelerimiz Alanı</label>
                                                        <input class="form-control" id="left" type="text" name="has_mask_members_tr" value="<?php echo $bridetr['has_mask_members']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Footer Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="next_hero_title_tr" value="<?php echo $bridetr['next_hero_title']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Footer Alt Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="next_hero_subtitle_tr" value="<?php echo $bridetr['next_hero_subtitle']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="hero_title_en" value="<?php echo $brideen['hero_title']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Alt Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="hero_subtitle_en" value="<?php echo $brideen['hero_subtitle']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 1</label>
                                                        <textarea rows="3" class="form-control" id="left" type="text" name="has_mask_title_en"><?php echo $brideen['has_mask_title']; ?></textarea>
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 2</label>
                                                        <textarea rows="6" class="form-control" id="left" type="text" name="has_mask_subtitle_en"><?php echo $brideen['has_mask_subtitle']; ?></textarea>
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 3</label>
                                                        <textarea rows="4" class="form-control" id="left" type="text" name="has_mask_subtitle_2_en"><?php echo $brideen['has_mask_subtitle_2']; ?></textarea>
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Hizmetlerimiz Alanı</label>
                                                        <input class="form-control" id="left" type="text" name="has_mask_services_en" value="<?php echo $brideen['has_mask_services']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Ekip Üyelerimiz Alanı</label>
                                                        <input class="form-control" id="left" type="text" name="has_mask_members_en" value="<?php echo $brideen['has_mask_members']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Footer Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="next_hero_title_en" value="<?php echo $brideen['next_hero_title']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Footer Alt Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="next_hero_subtitle_en" value="<?php echo $brideen['next_hero_subtitle']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="hero_title_de" value="<?php echo $bridede['hero_title']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Alt Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="hero_subtitle_de" value="<?php echo $bridede['hero_subtitle']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 1</label>
                                                        <textarea rows="3" class="form-control" id="left" type="text" name="has_mask_title_de"><?php echo $bridede['has_mask_title']; ?></textarea>

                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 2</label>
                                                        <textarea rows="6" class="form-control" id="left" type="text" name="has_mask_subtitle_de"><?php echo $bridede['has_mask_subtitle']; ?></textarea>
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">İçerik 3</label>
                                                        <textarea rows="4" class="form-control" id="left" type="text" name="has_mask_subtitle_2_de"><?php echo $bridede['has_mask_subtitle_2']; ?></textarea>
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Hizmetlerimiz Alanı</label>
                                                        <input class="form-control" id="left" type="text" name="has_mask_services_de" value="<?php echo $bridede['has_mask_services']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Ekip Üyelerimiz Alanı</label>
                                                        <input class="form-control" id="left" type="text" name="has_mask_members_de" value="<?php echo $bridede['has_mask_members']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Footer Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="next_hero_title_de" value="<?php echo $bridede['next_hero_title']; ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Footer Alt Başlık</label>
                                                        <input class="form-control" id="left" type="text" name="next_hero_subtitle_de" value="<?php echo $bridede['next_hero_subtitle']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row form-group justify-content-center text-center">
                                                <div class="col">
                                                    <button type="submit" name="submit" class="btn btn-primary" value="GÜNCELLE">GÜNCELLE</button>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Hizmetlerimiz</h4>
                                                    <a href="brideroom.php?hizmetekle">
                                                        <button type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                                                            </span>Hizmet Ekle</button>
                                                    </a>
                                                </div>

                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-responsive-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 15%;">Adı</th>
                                                                    <th style="width: 45%;">İçeriği</th>
                                                                    <th style="width: 10%;">Dil</th>
                                                                    <th style="width: 10%;">İşlem</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $gettr = $db->prepare("SELECT * FROM services where ServicesID=1");
                                                                $gettr->execute();
                                                                while ($rows = $gettr->fetch(PDO::FETCH_ASSOC)) {
                                                                    $dil = $db->query("SELECT * from dil where ID=" . $rows['Dil'])->fetch(PDO::FETCH_ASSOC);
                                                                ?>
                                                                    <tr>
                                                                        <th><?php echo $rows['link']; ?></th>
                                                                        <th><?php echo $rows['accordion_content']; ?></th>
                                                                        <th><?php echo $dil['Dil']; ?></th>
                                                                        <td><span><a href="brideroom.php?hizmetduzenle=<?php echo $rows['ID']; ?>" class="mr-4" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted"></i> </a><a href="brideroom.php?hizmetsil=<?php echo $rows['ID']; ?>" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span></td>
                                                                    </tr>
                                                                <?php } ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">Ekip Üyelerimiz</h4>
                                                    <a href="brideroom.php?uyeekle">
                                                        <button type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                                                            </span>Üye Ekle</button>
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-responsive-sm">
                                                            <thead>
                                                                <tr>
                                                                    <th width="33%" style="text-align: center;">Adı</th>
                                                                    <th width="33%" style="text-align: center;">Resmi</th>
                                                                    <th width="33%" style="text-align: center;">İşlem</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $get = $db->prepare("SELECT * FROM members where EkipID=1");
                                                                $get->execute();
                                                                while ($rows = $get->fetch(PDO::FETCH_ASSOC)) {
                                                                ?>
                                                                    <tr>
                                                                        <th style="text-align: center;"><?php echo $rows['Adi']; ?></th>
                                                                        <th style="text-align: center;"><img src="<?php echo "../" . $rows['ResimYolu']; ?>" width="20%" alt=""></th>
                                                                        <td style="text-align: center;"><span><a href="brideroom.php?uyesil=<?php echo $rows['ID'] ?>" data-toggle="tooltip" data-placement="top" title="Sil"><i class="fa fa-close color-danger"></i></a></span></td>
                                                                    </tr>
                                                                <?php } ?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php }
                        if ($sayfakontrol == "hizmetekle") { ?>
                            <form action="" method="post">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Hizmet Ekle</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-xs-12">
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
                                                <div class="col">
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Adı</label>
                                                        <input class="form-control" id="left" type="text" name="adi_tr">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Açıklaması</label>
                                                        <input class="form-control" id="left" type="text" name="aciklama_tr">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Adı</label>
                                                        <input class="form-control" id="left" type="text" name="adi_en">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Açıklaması</label>
                                                        <input class="form-control" id="left" type="text" name="aciklama_en">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Adı</label>
                                                        <input class="form-control" id="left" type="text" name="adi_de">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Açıklaması</label>
                                                        <input class="form-control" id="left" type="text" name="aciklama_de">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-md-12 justify-content-center text-center mt-5 ml-1">
                                                <div class="col">
                                                    <button class="btn btn-primary" type="submit" name="hizmetekle">EKLE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php }
                        if ($sayfakontrol == "uyeekle") { ?>
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="card col-md-6">
                                    <div class="card-header">
                                        <h5 class="card-title">Üye Ekle</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-xs-12">
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Üye Ad Soyad</label>
                                                        <input class="form-control" id="left" type="text" name="Adi" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-md-12 mt-2">
                                                <label>Görsel</label>
                                            </div>
                                            <div class="row col-md-12">
                                                <div class="col">
                                                    <img id="image" width="100%" src="" style="cursor: pointer;">
                                                </div>
                                            </div>
                                            <div class="row col-md-12 mt-2">
                                                <div class="col">
                                                    <img src="https://www.asptr.net/img/ss.png" onclick="changePicture()" style="cursor: pointer; height:64px;">
                                                    <small><strong>Görsel Yüklemek İçin Resme Tıklayınız..</strong></small>
                                                    <input accept="image/*" type="file" id="upload" name="upload" onchange="readURL(this);" style="display: none;" />
                                                </div>
                                            </div>
                                            <div class="row col-md-12 justify-content-center text-center mt-3">
                                                <div class="col">
                                                    <button class="btn btn-primary" type="submit" name="uyeekle">EKLE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php }
                        if ($sayfakontrol == "hizmetduzenle") { ?>
                            <form action="" method="post">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Hizmeti Düzenle</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="col-xs-12">
                                            <?php
                                            $tr = $db->query("SELECT * from services where ID=" . $_GET['hizmetduzenle'])->fetch(PDO::FETCH_ASSOC);
                                            ?>
                                            <div class="row form-group">
                                                <div class="col">
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Adı</label>
                                                        <input type="text" name="id" value="<?php echo $tr['ID'] ?>" style="visibility: hidden;">
                                                        <input class="form-control" id="left" type="text" name="ad" value="<?php echo $tr['link'] ?>">
                                                    </div>
                                                    <div class="row mx-4 justify-content-center">
                                                        <label for="left">Açıklaması</label>
                                                        <input class="form-control" id="left" type="text" name="aciklama" value="<?php echo $tr['accordion_content'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row col-md-12 justify-content-center text-center mt-5 ml-1">
                                                <div class="col">
                                                    <button class="btn btn-primary" type="submit" name="hizmetguncelle">Güncelle</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
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


    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>